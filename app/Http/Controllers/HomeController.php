<?php
//lassurance-garantie-decennale.fr
namespace App\Http\Controllers;

use App\Models\Automobile;
use App\Models\Fiche;
use App\Models\Professionel;
use App\Http\Requests\StoreFicheRequest;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function store(StoreFicheRequest $request)
    {
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

    public function entrepreneur(StoreFicheRequest $request)
    {
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

    public function macon(StoreFicheRequest $request)
    {
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

    public function electricien(StoreFicheRequest $request)
    {
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

    public function resilie(StoreFicheRequest $request)
    {
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

    public function reprise(StoreFicheRequest $request)
    {
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
