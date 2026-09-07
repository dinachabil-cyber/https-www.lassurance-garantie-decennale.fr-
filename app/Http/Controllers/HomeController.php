<?php
//lassurance-garantie-decennale.fr
namespace App\Http\Controllers;

use App\Models\Automobile;
use App\Models\Fiche;
use App\Models\Professionel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    private function validateForm(Request $request)
    {
        $spamKeywords = [
            'payment', 'transfer', 'balance', 'sign in', 'earn money', 'bitcoin',
            'crypto', 'cripton', 'crypton', 'wallet', 'account verified', 'dollar',
            'usdt', 'usdc', 'binance', 'forex', 'trading', 'investissement',
            'gain quotidien', 'profit', 'return', 'passive income',
        ];

        $suspiciousDomains = ['graph.org', 't.me', 'bit.ly', 'tinyurl.com', 'tinyurl'];

        $validator = Validator::make($request->all(), [
            'nom'              => ['required', 'string', 'max:255'],
            'prenom'           => ['required', 'string', 'max:255'],
            'raison_sociale'   => ['nullable', 'string', 'max:255'],
            'demarrage'        => ['nullable', 'in:OUI,NON'],
            'assure'           => ['nullable', 'in:OUI,NON'],
            'ancienne'         => ['nullable', 'in:OUI,NON'],
            'motif'            => ['nullable', 'string', 'max:255'],
            'code'             => ['nullable', 'string', 'max:5', 'regex:/^[0-9]+$/'],
            'email'            => ['required', 'email', 'max:255'],
            'tele'             => ['required', 'string', 'max:10', 'min:10', 'regex:/^[0-9]+$/'],
        ], [
            'nom.required'     => 'Le nom est obligatoire.',
            'prenom.required'  => 'Le prénom est obligatoire.',
            'email.required'   => 'L\'email est obligatoire.',
            'email.email'      => 'L\'email n\'est pas valide.',
            'tele.required'    => 'Le téléphone est obligatoire.',
            'tele.max'         => 'Le téléphone doit contenir 10 chiffres.',
            'tele.min'         => 'Le téléphone doit contenir 10 chiffres.',
            'tele.regex'       => 'Le téléphone ne doit contenir que des chiffres.',
            'code.max'         => 'Le code postal ne doit pas dépasser 5 caractères.',
            'code.regex'       => 'Le code postal ne doit contenir que des chiffres.',
        ]);

        $validator->after(function ($validator) use ($request, $spamKeywords, $suspiciousDomains) {
            $spamFields = ['nom', 'prenom', 'raison_sociale', 'motif', 'email'];
            foreach ($spamFields as $field) {
                $value = $request->input($field);
                if (!$value) continue;
                $lower = mb_strtolower($value);

                foreach ($spamKeywords as $keyword) {
                    if (str_contains($lower, mb_strtolower($keyword))) {
                        $validator->errors()->add($field, 'Ce champ contient des mots interdits.');
                        break;
                    }
                }

                if (preg_match('#https?://#i', $value) || preg_match('#www\.#i', $value)) {
                    $validator->errors()->add($field, 'Les liens ne sont pas autorisés.');
                }

                foreach ($suspiciousDomains as $domain) {
                    if (str_contains($lower, mb_strtolower($domain))) {
                        $validator->errors()->add($field, 'Ce domaine est interdit.');
                        break;
                    }
                }

                if (preg_match('/[\x{1F000}-\x{1FAFF}\x{2600}-\x{27BF}\x{1F1E6}-\x{1F1FF}\x{1F200}-\x{1F2FF}\x{1F300}-\x{1F5FF}\x{1F600}-\x{1F64F}\x{1F680}-\x{1F6FF}\x{1F900}-\x{1F9FF}\x{2300}-\x{23FF}\x{2B00}-\x{2BFF}]/u', $value)) {
                    $validator->errors()->add($field, 'Les emojis ne sont pas autorisés.');
                }
            }
        });

        $validator->validate();
    }

    public function store(Request $request)
    {
        $this->validateForm($request);

        $auto = new Professionel();
        $auto->nom = $request->input('nom');
        $auto->prenom = $request->input('prenom');
        $auto->raison = $request->input('demarrage');
        $auto->activite = $request->input('activite');
        $auto->ancienne = $request->input('assure');
        $auto->ancien_resil = $request->input('ancienne');
        $auto->motif = $request->input('motif');
        $auto->email = $request->input('email');
        $auto->telephone = $request->input('tele');
        $auto->date_prospect = date("Y-m-d H:i:s");

        if ($auto->ancienne == "NON")
            $auto->motif = "pas de motif";

        $auto->save();

        $request->session()->flash('status', 'formulaire');

        $telephone = $request->input('tele');
        if (substr($telephone, 0, 1) === '0') {
            $telephone = '+33' . substr($telephone, 1);
        }

        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'phone' => $telephone,
            'email' => $request->input('email'),
            'lastAssure' => $request->input('ancienne'),
            'raisonSociale' => $request->input('raison_sociale'),
            'typeProspect' => "2",
            'source' => "3",
            'activites' => "4",
            'url' => "6",
            'product' => '/api/products/11',
        ];

        $jsonData = json_encode($data);
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://aksam.azurewebsites.net/api/prospects',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        return redirect('/reponse');
    }

    public function entrepreneur(Request $request)
    {
        $this->validateForm($request);

        $auto = new Professionel();
        $auto->nom = $request->input('nom');
        $auto->prenom = $request->input('prenom');
        $auto->raison = $request->input('demarrage');
        $auto->activite = $request->input('activite');
        $auto->ancienne = $request->input('assure');
        $auto->ancien_resil = $request->input('ancienne');
        $auto->motif = $request->input('motif');
        $auto->email = $request->input('email');
        $auto->telephone = $request->input('tele');
        $auto->date_prospect = date("Y-m-d H:i:s");

        if ($auto->ancienne == "NON")
            $auto->motif = "pas de motif";

        $auto->save();

        $request->session()->flash('status', 'formulaire');

        $telephone = $request->input('tele');
        if (substr($telephone, 0, 1) === '0') {
            $telephone = '+33' . substr($telephone, 1);
        }

        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'phone' => $telephone,
            'email' => $request->input('email'),
            'lastAssure' => $request->input('ancienne'),
            'raisonSociale' => $request->input('raison_sociale'),
            'typeProspect' => "2",
            'source' => "3",
            'activites' => "4",
            'url' => "29",
            'product' => '/api/products/11',
        ];

        $jsonData = json_encode($data);
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://aksam.azurewebsites.net/api/prospects',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        return redirect('/reponse');
    }

    public function macon(Request $request)
    {
        $this->validateForm($request);

        $auto = new Professionel();
        $auto->nom = $request->input('nom');
        $auto->prenom = $request->input('prenom');
        $auto->raison = $request->input('demarrage');
        $auto->activite = $request->input('activite');
        $auto->ancienne = $request->input('assure');
        $auto->ancien_resil = $request->input('ancienne');
        $auto->motif = $request->input('motif');
        $auto->email = $request->input('email');
        $auto->telephone = $request->input('tele');
        $auto->date_prospect = date("Y-m-d H:i:s");

        if ($auto->ancienne == "NON")
            $auto->motif = "pas de motif";

        $auto->save();

        $request->session()->flash('status', 'formulaire');

        $telephone = $request->input('tele');
        if (substr($telephone, 0, 1) === '0') {
            $telephone = '+33' . substr($telephone, 1);
        }

        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'phone' => $telephone,
            'email' => $request->input('email'),
            'lastAssure' => $request->input('ancienne'),
            'raisonSociale' => $request->input('raison_sociale'),
            'typeProspect' => "2",
            'source' => "3",
            'activites' => "4",
            'url' => "30",
            'product' => '/api/products/11',
        ];

        $jsonData = json_encode($data);
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://aksam.azurewebsites.net/api/prospects',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        return redirect('/reponse');
    }

    public function electricien(Request $request)
    {
        $this->validateForm($request);

        $auto = new Professionel();
        $auto->nom = $request->input('nom');
        $auto->prenom = $request->input('prenom');
        $auto->raison = $request->input('demarrage');
        $auto->activite = $request->input('activite');
        $auto->ancienne = $request->input('assure');
        $auto->ancien_resil = $request->input('ancienne');
        $auto->motif = $request->input('motif');
        $auto->email = $request->input('email');
        $auto->telephone = $request->input('tele');
        $auto->date_prospect = date("Y-m-d H:i:s");

        if ($auto->ancienne == "NON")
            $auto->motif = "pas de motif";

        $auto->save();

        $request->session()->flash('status', 'formulaire');

        $telephone = $request->input('tele');
        if (substr($telephone, 0, 1) === '0') {
            $telephone = '+33' . substr($telephone, 1);
        }

        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'phone' => $telephone,
            'email' => $request->input('email'),
            'lastAssure' => $request->input('ancienne'),
            'raisonSociale' => $request->input('raison_sociale'),
            'typeProspect' => "2",
            'source' => "3",
            'activites' => "4",
            'url' => "31",
            'product' => '/api/products/11',
        ];

        $jsonData = json_encode($data);
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://aksam.azurewebsites.net/api/prospects',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        return redirect('/reponse');
    }

    public function resilie(Request $request)
    {
        $this->validateForm($request);

        $auto = new Professionel();
        $auto->nom = $request->input('nom');
        $auto->prenom = $request->input('prenom');
        $auto->raison = $request->input('demarrage');
        $auto->activite = $request->input('activite');
        $auto->ancienne = $request->input('assure');
        $auto->ancien_resil = $request->input('ancienne');
        $auto->motif = $request->input('motif');
        $auto->email = $request->input('email');
        $auto->telephone = $request->input('tele');
        $auto->date_prospect = date("Y-m-d H:i:s");

        if ($auto->ancienne == "NON")
            $auto->motif = "pas de motif";

        $auto->save();

        $request->session()->flash('status', 'formulaire');

        $telephone = $request->input('tele');
        if (substr($telephone, 0, 1) === '0') {
            $telephone = '+33' . substr($telephone, 1);
        }

        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'phone' => $telephone,
            'email' => $request->input('email'),
            'lastAssure' => $request->input('ancienne'),
            'raisonSociale' => $request->input('raison_sociale'),
            'typeProspect' => "2",
            'source' => "3",
            'activites' => "4",
            'url' => "32",
            'product' => '/api/products/11',
        ];

        $jsonData = json_encode($data);
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://aksam.azurewebsites.net/api/prospects',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        return redirect('/reponse');
    }

    public function reprise(Request $request)
    {
        $this->validateForm($request);

        $auto = new Professionel();
        $auto->nom = $request->input('nom');
        $auto->prenom = $request->input('prenom');
        $auto->raison = $request->input('demarrage');
        $auto->activite = $request->input('activite');
        $auto->ancienne = $request->input('assure');
        $auto->ancien_resil = $request->input('ancienne');
        $auto->motif = $request->input('motif');
        $auto->email = $request->input('email');
        $auto->telephone = $request->input('tele');
        $auto->date_prospect = date("Y-m-d H:i:s");

        if ($auto->ancienne == "NON")
            $auto->motif = "pas de motif";

        $auto->save();

        $request->session()->flash('status', 'formulaire');

        $telephone = $request->input('tele');
        if (substr($telephone, 0, 1) === '0') {
            $telephone = '+33' . substr($telephone, 1);
        }

        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'phone' => $telephone,
            'email' => $request->input('email'),
            'lastAssure' => $request->input('ancienne'),
            'raisonSociale' => $request->input('raison_sociale'),
            'typeProspect' => "2",
            'source' => "3",
            'activites' => "4",
            'url' => "33",
            'product' => '/api/products/11',
        ];

        $jsonData = json_encode($data);
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://aksam.azurewebsites.net/api/prospects',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        return redirect('/reponse');
    }

    public function index()
    {
        return view('layout.form');
    }
}
