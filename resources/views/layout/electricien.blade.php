@extends('master')

@section('title', 'Assurance Décennale Électricien | Devis Immédiat & Attestation 24h')

@section('meta_description', 'Électricien ? Assurance décennale obligatoire dès 65€/mois. Devis immédiat, sans engagement, attestation délivrée en 24h.')

@section('meta_keywords', 'assurance décennale électricien, décennale électricien en ligne, devis assurance décennale électricien, garantie décennale électricien tarif, assurance décennale électricien prix')

@section('canonical')
<link rel="canonical" href="https://www.lassurance-garantie-decennale.fr/assurance-decennale-electricien">
@endsection

@section('og_meta')
<meta property="og:title" content="Assurance Décennale Électricien | Sécurisez Vos Chantiers">
<meta property="og:description" content="Comparez les meilleures assurances décennales pour électricien. Devis gratuit, sans engagement, attestation rapide.">
<meta property="og:keywords" content="assurance décennale électricien, décennale électricien en ligne, devis assurance décennale électricien, garantie décennale électricien tarif, assurance décennale électricien prix">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.lassurance-garantie-decennale.fr/assurance-decennale-electricien">
@endsection


@section('content-electricien')


<!-- Hero Form Section -->
<section class="relative w-full min-h-screen py-2 bg-white">
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-14">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start w-full">

      <!-- Left side -->
       <div class="order-2 lg:order-1 lg:col-span-2 relative rounded-xl h-auto lg:h-[550px] xl:h-[800px]">
        <section class="w-full h-full bg-gradient-to-br from-light via-surfaceHover to-light hero-pattern relative overflow-hidden flex items-center">
          <div class="absolute inset-0 scanlines-bg opacity-30"></div>

          <div class="container mx-auto px-4 relative z-10 w-full">
            <div class="text-center">
              <div class="w-12 h-12 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-2xl mx-auto mb-4 flex items-center justify-center">
               <i class="fas fa-bolt text-3xl text-dark"></i>
              </div>
              <h1 class="text-4xl lg:text-5xl font-bold text-gradient mb-4">Assurance Décennale Électricien</h1>
              <p class="text-xl text-gray-600 mb-6 max-w-3xl mx-auto">
                Votre devis personnalisé à partir de 65€/mois. Obtenez votre attestation en ligne et respectez vos obligations légales.
              </p>
              <div class="w-20 h-1 bg-gradient-to-r from-yellow-400 to-yellow-500 mx-auto rounded-full"></div>
            </div>

            <div class="prose max-w-none">
              <p class="text-lg text-gray-700 leading-relaxed mb-8">
                En tant qu'électricien professionnel, votre responsabilité est immense. Une installation défectueuse ou non conforme à la norme NF C 15-100 peut entraîner des conséquences graves comme un incendie ou des dommages irréversibles aux équipements. <strong>L'assurance décennale électricien</strong> est l'unique protection qui sécurise votre entreprise contre les malfaçons pouvant apparaître jusqu'à 10 ans après la fin de vos travaux.
              </p>
              <div class="p-6 mb-6">
                <p class="text-base text-dark">
                  <strong>Que vous exerciez en auto-entrepreneur ou en société</strong>, nous avons le contrat adapté à vos besoins pour vous permettre de travailler en toute sérénité.
                </p>
              </div>

              <!-- Bandeau Avantages -->
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                <div class="flex flex-col items-center text-center p-4 rounded-xl hover:bg-gray-50 transition-colors">
                  <div class="w-16 h-16 lg:w-20 lg:h-20 bg-yellow-300 rounded-full flex items-center justify-center mb-4 shadow-lg">
                    <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2Z" />
                    </svg>
                  </div>
                  <p class="text-gray-600 text-sm leading-relaxed">
                    La garantie du <span class="font-bold text-gray-800">MEILLEURS PRIX</span> avec
                    le <span class="font-bold text-gray-800">PLUS LARGE PANEL DU MARCHÉ</span>
                  </p>
                </div>
                <div class="flex flex-col items-center text-center p-4 rounded-xl hover:bg-gray-50 transition-colors">
                  <div class="w-16 h-16 lg:w-20 lg:h-20 bg-yellow-300 rounded-full flex items-center justify-center mb-4 shadow-lg">
                    <span class="text-2xl lg:text-3xl font-bold text-white">0€</span>
                  </div>
                  <p class="text-gray-600 text-sm leading-relaxed">
                    Un service <span class="font-bold text-gray-800">100% GRATUIT</span>
                    et <span class="font-bold text-gray-800">SANS ENGAGEMENT</span>
                  </p>
                </div>
                <div class="flex flex-col items-center text-center p-4 rounded-xl hover:bg-gray-50 transition-colors">
                  <div class="w-16 h-16 lg:w-20 lg:h-20 bg-yellow-300 rounded-full flex items-center justify-center mb-4 shadow-lg">
                    <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z" />
                    </svg>
                  </div>
                  <p class="text-gray-600 text-sm leading-relaxed">
                    Protection de <span class="font-bold text-gray-800">VOS DONNÉES</span>
                    et de <span class="font-bold text-gray-800">VOTRE VIE PRIVÉE</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- Right side - Form -->
      <div class="bg-white/95 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden border border-white/20 order-1 lg:order-2 lg:col-span-1 flex flex-col h-full">
        <div class="bg-amber-400 px-6 py-4 flex-shrink-0">
          <h3 class="text-xm font-semibold text-dark flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            Complétez ce formulaire pour obtenir votre devis
          </h3>
        </div>
        <div class="p-6 flex-1 flex flex-col overflow-y-auto">
          <form id="simulationForm" class="space-y-3 flex-1 flex flex-col" action="/" method="POST">
            @csrf
            <div class="flex-1 space-y-3">
              <div>
                <input type="text" name="nom" id="nom"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  placeholder="Nom..." />
              </div>
              <div>
                <input type="text" name="prenom" id="prenom"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  placeholder="Prénom..." />
              </div>
              <div>
                <input type="text" name="raison_sociale" id="raison_sociale"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  placeholder="Raison sociale..." />
              </div>
              <div>
                <select id="myselect00" name="demarrage"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  title="Démarrage d'activité">
                  <option value="" selected>Démarrage d'activité</option>
                  <option value="OUI">OUI</option>
                  <option value="NON">NON</option>
                </select>
              </div>
              <div>
                <select id="myselect0" name="assure"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  title="Activité assurée actuellement">
                  <option value="" selected>Activité assurée actuellement</option>
                  <option value="OUI">OUI</option>
                  <option value="NON">NON</option>
                </select>
              </div>
              <div>
                <select id="myselect1" name="ancienne"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  title="Assurance résilié">
                  <option value="" selected>Assurance résilié</option>
                  <option value="OUI">OUI</option>
                  <option value="NON">NON</option>
                </select>
              </div>
              <div id="motif-container">
                <select id="myselect2" name="motif"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  title="Motif résiliation">
                  <option value="" selected>Motif résiliation</option>
                  <option value="Echéance">Echéance</option>
                  <option value="Sinistre">Sinistre</option>
                  <option value="Non paiement">Non paiement</option>
                  <option value="Amiable">Amiable</option>
                </select>
              </div>
              <div>
                <input type="text" id="code" name="code" maxlength="5"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  placeholder="Code Postal..." />
              </div>
              <div>
                <input type="email" id="email" name="email"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  placeholder="Email..." />
              </div>
              <div>
                <input type="text" id="tele" name="tele" maxlength="10"
                  class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                  placeholder="Téléphone..." />
              </div>
              <p class="text-[10px] text-gray-600 bg-white/80 p-2 rounded-md border border-gray-200">
                En cliquant sur 'Comparer', vous acceptez de transmettre vos informations à AKSAM ASSURANCES, qui accepte de les utiliser conformément à sa politique de confidentialité dans le but de vous fournir des propositions de devis d'assurances adapté à votre recherche
              </p>
            </div>
            <button type="submit"
              class="w-full bg-amber-400 text-dark font-semibold py-2 px-4 rounded-md transition-all duration-200 shadow-sm hover:shadow-md transform hover:-translate-y-0.5 flex items-center justify-center text-sm flex-shrink-0">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
              Comparer maintenant
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Content Section -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 space-y-12">

  <!-- Garanties Spécifiques -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <div class="text-center">
      <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
        Des garanties essentielles pour votre métier d'électricien
      </h2>
    </div>
    <p class="text-base text-gray-700 mb-8">
      Notre assurance décennale vous couvre contre les dommages qui compromettent la solidité de l'ouvrage ou le rendent
      impropre à sa destination. Pour un électricien, cela inclut :
    </p>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-yellow-100 rounded-xl p-6 border">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-yellow-300 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-fire text-white text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Risques d'incendie et de surtension</h3>
            <p class="text-sm text-dark-800">
              Protection contre les courts-circuits, surchauffes du tableau électrique, câblages défectueux
              et tout dommage matériel consécutif à une défaillance de votre installation.
            </p>
          </div>
        </div>
      </div>
      <div class="bg-yellow-100 rounded-xl p-6 border">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-yellow-300 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-certificate text-white text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Non-conformité aux normes</h3>
            <p class="text-sm text-dark-800">
              Garantie de vos travaux face aux exigences de la norme NF C 15-100,
              un point essentiel en cas d'expertise après un sinistre.
            </p>
          </div>
        </div>
      </div>
      <div class="bg-yellow-100 rounded-xl p-6 border">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-yellow-300 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-home text-white text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Systèmes de domotique et VMC</h3>
            <p class="text-sm text-dark-800">
              Couverture de vos installations de maison connectée, automatismes (portails, volets),
              systèmes de ventilation et de chauffage électrique.
            </p>
          </div>
        </div>
      </div>
      <div class="bg-yellow-100 rounded-xl p-6 border">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-yellow-300 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-tv text-white text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Dommages aux appareils</h3>
            <p class="text-sm text-dark-800">
              Prise en charge des dommages causés aux appareils électriques et électroniques des occupants
              à la suite d'une surtension provenant de votre installation.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Prix et Tarifs -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <div class="text-center">
      <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
        Quel est le prix d'une assurance décennale pour un électricien ?
      </h2>
    </div>
    <p class="text-base text-gray-700 mb-6">
      Le tarif de votre assurance décennale électricien est calculé sur-mesure selon votre profil.
      Les principaux éléments pris en compte sont :
    </p>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-user-tie text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Statut juridique :</strong> Auto-entrepreneur, EURL, SASU...</span>
      </div>
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-graduation-cap text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Expérience & qualifications :</strong> Diplômes, années d'expérience</span>
      </div>
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-euro-sign text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Chiffre d'affaires :</strong> Réalisé ou prévisionnel</span>
      </div>
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-microchip text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Activités spécifiques :</strong> Courants forts/faibles, alarmes, domotique</span>
      </div>
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-shield-alt text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Garanties complémentaires :</strong> RC Pro, protection juridique</span>
      </div>
    </div>
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
      <div class="flex items-start space-x-3">
        <i class="fas fa-info-circle text-yellow-600 mt-1"></i>
        <div>
          <h4 class="font-bold text-yellow-800 mb-2">Tarifs indicatifs pour électricien :</h4>
          <p class="text-dark text-sm">
            Le tarif annuel moyen pour un électricien débute aux alentours de <strong>780 €</strong>
            pour un auto-entrepreneur et peut s'élever à <strong>2 200 €</strong> ou plus pour une société
            avec des chantiers plus importants.
          </p>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="/" class="inline-block bg-yellow-400 text-dark font-bold py-3 px-8 rounded-xl hover:bg-yellow-500 transition-all transform hover:scale-105 shadow-lg">
        <i class="fas fa-calculator mr-2"></i>
        OBTENIR MON TARIF PERSONNALISÉ
      </a>
    </div>
  </div>

  <!-- Processus en 3 étapes -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <div class="text-center">
      <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
        Obtenez Votre Attestation Décennale en 3 Étapes Simples
      </h2>
    </div>
    <p class="text-base text-gray-700 mb-8 text-center">
      Nous savons que l'obtention de votre attestation est souvent une urgence pour débloquer un chantier.
    </p>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="text-center">
        <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-white text-2xl font-bold">1</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Remplissez notre formulaire</h3>
        <p class="text-sm text-gray-600 mb-4">Décrivez votre activité et votre expérience en ligne</p>
        <div class="text-xs text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full inline-block">3 minutes</div>
      </div>
      <div class="text-center">
        <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-white text-2xl font-bold">2</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Recevez et comparez votre devis</h3>
        <p class="text-sm text-gray-600 mb-4">Nous vous envoyons une proposition claire, sans engagement</p>
        <div class="text-xs text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full inline-block">Sans engagement</div>
      </div>
      <div class="text-center">
        <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-white text-2xl font-bold">3</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Validez et recevez votre attestation</h3>
        <p class="text-sm text-gray-600 mb-4">Après souscription, votre attestation par courriel, prête à être utilisée</p>
        <div class="text-xs text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full inline-block">Immédiat</div>
      </div>
    </div>
  </div>

  <!-- Questions Fréquentes -->
  {{-- ================================================================ --}}
  {{-- FAQ — [OPTIMISATION] 3 nouvelles questions ajoutées depuis le doc --}}
  {{-- ================================================================ --}}
  <div class="bg-white rounded-xl shadow-xl p-8 mb-12 lg:mb-20">
    <div class="text-center mb-8">
      <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-8">
        Questions Fréquentes des Électriciens
      </h2>
      <div class="w-16 lg:w-24 h-1 bg-amber-400 mx-auto rounded-full"></div>
    </div>

    <div id="faq-container" class="space-y-6">

      <!-- FAQ 1 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-gavel text-yellow-500 mr-2"></i>
            La décennale est-elle obligatoire pour de la simple rénovation électrique ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            <strong>Oui.</strong> Dès que vous intervenez sur une installation existante (remplacement d'un tableau,
            tirage de nouvelles lignes...), votre responsabilité décennale est engagée. L'assurance est donc obligatoire.
          </p>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-graduation-cap text-yellow-500 mr-2"></i>
            Quelles qualifications sont nécessaires pour souscrire ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            Les assureurs exigent généralement un <strong>diplôme dans le domaine de l'électricité</strong> (CAP, BEP, etc.)
            <strong>OU</strong> une preuve d'expérience en tant qu'électricien salarié ou indépendant d'au moins <strong>3 ans</strong>.
          </p>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-shield-alt text-yellow-500 mr-2"></i>
            La Responsabilité Civile Professionnelle (RC Pro) est-elle incluse ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            Elle est souvent proposée en option et est <strong>indispensable</strong>. La RC Pro couvre les dommages causés à des tiers
            pendant vos travaux (ex : vous percez une canalisation par erreur). La décennale, elle, couvre les dommages
            <strong>après</strong> la fin du chantier.
          </p>
        </div>
      </div>

      <!-- FAQ 4 — [NOUVEAU] -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-user-graduate text-yellow-500 mr-2"></i>
            Puis-je souscrire une garantie décennale électricien sans diplôme ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            Certains assureurs acceptent une expérience professionnelle significative de <strong>3 à 5 ans minimum</strong> en remplacement du diplôme, à condition de fournir des justificatifs (bulletins de salaire, attestations employeur).
          </p>
        </div>
      </div>

      <!-- FAQ 5 — [NOUVEAU] -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-file-alt text-yellow-500 mr-2"></i>
            Quels documents pour obtenir une protection décennale installation électrique ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            Vous devrez fournir : votre <strong>Kbis ou inscription URSSAF</strong>, un justificatif de qualification (diplôme ou attestation d'expérience), votre dernier bilan comptable ou prévisionnel, une pièce d'identité et un RIB.
          </p>
        </div>
      </div>

      <!-- FAQ 6 — [NOUVEAU] -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-users text-yellow-500 mr-2"></i>
            La couverture décennale travaux électricité protège-t-elle mes sous-traitants ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            <strong>Non.</strong> Chaque professionnel doit disposer de sa propre assurance décennale. Vous devez toujours vérifier que vos sous-traitants sont correctement assurés avant de débuter le chantier.
          </p>
        </div>
      </div>

    </div>

  </div>

  @include('layout.faq-assets')

  <!-- Section NF C 15-100 -->
  <div class="rounded-xl p-8 text-white">
    <div class="text-center">
      <div class="w-16 h-16 bg-yellow-400 rounded-2xl mx-auto mb-6 flex items-center justify-center">
        <i class="fas fa-certificate text-2xl text-dark"></i>
      </div>
      <h2 class="text-2xl md:text-3xl font-bold mb-4 text-dark">Conformité NF C 15-100 garantie</h2>
      <p class="text-lg text-dark mb-6 max-w-3xl mx-auto">
        Notre assurance décennale électricien vous protège spécifiquement contre les risques de non-conformité
        à la norme NF C 15-100, élément crucial en cas d'expertise après sinistre.
      </p>
      <p class="text-base text-dark mb-8">
        Sécurisez vos installations et votre entreprise avec une couverture adaptée aux spécificités de votre métier.
      </p>
      <a href="/" class="inline-block bg-yellow-400 text-dark font-bold py-3 px-8 rounded-xl hover:bg-yellow-500 transition-all transform hover:scale-105 shadow-lg">
        <i class="fas fa-calculator mr-2"></i>
        OBTENIR MON TARIF PERSONNALISÉ
      </a>
    </div>
  </div>

  <!-- Final CTA -->
  <div class="bg-yellow-100 rounded-3xl p-12 text-dark text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-scanlines opacity-10"></div>
    <div class="relative">
      <div class="w-16 h-16 bg-dark/20 rounded-2xl mx-auto mb-6 flex items-center justify-center">
        <i class="fas fa-bolt text-3xl text-dark"></i>
      </div>
      <h2 class="text-4xl font-bold mb-6 text-dark">Sécurisez vos installations électriques</h2>
      <p class="text-xl mb-8 text-dark/90 max-w-3xl mx-auto leading-relaxed">
        En tant qu'électricien, un court-circuit ou une installation défectueuse peut avoir des conséquences graves.
        Ne prenez pas de risques avec votre entreprise.
      </p>
      <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
        <a href="/" class="inline-block bg-dark text-yellow-400 font-bold py-4 px-10 rounded-2xl hover:bg-primary transition-all transform hover:scale-105 shadow-2xl">
          <i class="fas fa-calculator mr-2"></i>
          Obtenir mon devis
        </a>
        <a href="tel:0182834800" class="inline-block bg-white text-dark font-bold py-4 px-10 rounded-2xl hover:bg-gray-100 transition-all transform hover:scale-105 shadow-2xl">
          <i class="fas fa-phone mr-2"></i>
          01 82 83 48 00
        </a>
      </div>
      <p class="text-sm text-dark/80 mt-6">
        Devis personnalisé pour électricien - À partir de 65€/mois
      </p>
    </div>
  </div>

</main>

@endsection
@section('schema')
@verbatim

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "La décennale est-elle obligatoire pour de la simple rénovation électrique ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Oui. Dès que vous intervenez sur une installation existante (remplacement d'un tableau, tirage de nouvelles lignes...), votre responsabilité décennale est engagée. L'assurance est donc obligatoire."
      }
    },
    {
      "@type": "Question",
      "name": "Quelles qualifications sont nécessaires pour souscrire ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Les assureurs exigent généralement un diplôme dans le domaine de l'électricité (CAP, BEP, etc.) OU une preuve d'expérience en tant qu'électricien salarié ou indépendant d'au moins 3 ans."
      }
    },
    {
      "@type": "Question",
      "name": "La Responsabilité Civile Professionnelle (RC Pro) est-elle incluse ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Elle est souvent proposée en option et est indispensable. La RC Pro couvre les dommages causés à des tiers pendant vos travaux. La décennale, elle, couvre les dommages après la fin du chantier."
      }
    },
    {
      "@type": "Question",
      "name": "Puis-je souscrire une garantie décennale électricien sans diplôme ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Certains assureurs acceptent une expérience professionnelle significative de 3 à 5 ans minimum en remplacement du diplôme, à condition de fournir des justificatifs (bulletins de salaire, attestations employeur)."
      }
    },
    {
      "@type": "Question",
      "name": "Quels documents pour obtenir une protection décennale installation électrique ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Vous devrez fournir : Kbis ou inscription URSSAF, justificatif de qualification (diplôme ou attestation d'expérience), dernier bilan comptable ou prévisionnel, pièce d'identité et RIB."
      }
    },
    {
      "@type": "Question",
      "name": "La couverture décennale travaux électricité protège-t-elle mes sous-traitants ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Non, chaque professionnel doit disposer de sa propre assurance décennale. Vous devez toujours vérifier que vos sous-traitants sont correctement assurés avant de débuter le chantier."
      }
    }
  ]
}
</script>
@endverbatim
@endsection