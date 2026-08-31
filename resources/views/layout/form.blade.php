@extends('master')

@section('title', 'Assurance Décennale en Ligne : Devis Gratuit & Attestation Express')

@section('meta_description')
Souscrivez votre assurance décennale en ligne en quelques clics. Devis instantané, tarifs négociés, attestation provisoire express. Tous métiers du bâtiment couverts.
@endsection

@section('meta_keywords')
assurance décennale en ligne, devis assurance décennale en ligne, souscription assurance décennale en ligne, attestation assurance décennale en ligne, tarif assurance décennale en ligne, contrat assurance décennale en ligne
@endsection

@section('canonical')
<link rel="canonical" href="https://www.lassurance-garantie-decennale.fr">
@endsection

@section('og_meta')
<meta property="og:title" content="Assurance Décennale en Ligne : Devis Gratuit & Attestation Express">
<meta property="og:description" content="Souscrivez votre assurance décennale en ligne en quelques clics. Devis instantané, tarifs négociés, attestation provisoire express. Tous métiers du bâtiment couverts.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.lassurance-garantie-decennale.fr">
@endsection

@section('contentform')


<main id="simulation" class="w-full">

    <!-- Hero Section -->
    <section class="relative w-full min-h-screen py-4 bg-white">
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-14">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start w-full">

                <!-- Left side: Image -->
                <div class="order-2 lg:order-1 lg:col-span-2 relative flex justify-center items-center rounded-xl overflow-hidden h-96 sm:h-[450px] md:h-[500px] lg:h-[550px] xl:h-[800px]" style="box-shadow: none !important; filter: none !important;">
                    <img
                        src="{{ asset('image/assurance-decinale.jpg') }}"
                        alt="Couple souriant et satisfait tenant un relevé de pension"
                        class="w-full h-full object-cover" />
                    <div class="absolute inset-0 flex flex-col justify-end items-center text-white text-center p-4 sm:p-6 lg:p-8 bg-gradient-to-t from-black/10 to-transparent">
                        <div class="inline-block p-2 rounded-lg bg-black/5"></div>
                    </div>
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
                        <form id="simulationForm" class="space-y-3 flex-1 flex flex-col" onsubmit="return handleFormSubmit(event)" action="/" method="POST">
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

    <!-- Assurance décennale Section -->
    <section id="assurance-info" class="py-2 lg:py-2 bg-surface">
        <div class="container mx-auto px-2 lg:px-4">
            <div class="max-w-6xl mx-auto">
                <div class="fade-in">

                    <!-- ============================================================ -->
                    <!-- TITRE PRINCIPAL — [OPTIMISATION] H2 aligné sur le mot-clé   -->
                    <!-- ============================================================ -->
                    <div class="text-center mb-8 lg:mb-16">
                        <h1 class="text-2xl lg:text-5xl font-bold text-jaune mb-4 lg:mb-6 leading-tight">Assurance décennale en ligne</h1>
                        <p class="text-sm lg:text-xl mb-6 lg:mb-8 text-dark/90 max-w-3xl mx-auto leading-relaxed">
                           L'assurance de garantie décennale est une obligation légale pour exercer votre métier en toute   
sérénité. Mais trouver le bon contrat, surtout quand on est pressé, peut vite devenir un parcours du   
combattant. Notre mission : vous fournir une assurance décennale en ligne claire, compétitive et   
une attestation rapide pour que vous puissiez vous concentrer sur ce que vous faites de mieux :   
votre chantier. Grâce à notre plateforme digitale, obtenez un devis assurance décennale en ligne   
instantané, comparez les tarifs et souscrivez directement depuis votre ordinateur ou smartphone.  
                        </p>
                        <div class="w-16 lg:w-24 h-1 bg-amber-400 mx-auto rounded-full"></div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- CARD GRID 1 — Cards 1 & 2                                   -->
                    <!-- [OPTIMISATION] Contenu des cards enrichi avec mots-clés LSI  -->
                    <!-- ============================================================ -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-8 mb-12 lg:mb-20">

                        <!-- Card 1 : Artisans -->
                        <div class="bg-surface rounded-xl lg:rounded-3xl p-4 lg:p-8 shadow-xl border border-gray-100 card-hover flex flex-col h-full">
                            <div class="flex flex-col lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-6 flex-grow">
                                <div class="p-2 lg:p-4 bg-amber-400 rounded-xl lg:rounded-2xl shadow-lg self-start flex-shrink-0">
                                    <i class="fas fa-building text-white text-lg lg:text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-lg lg:text-2xl font-bold text-jaune mb-3 lg:mb-4">Assurance décennale artisan.</h2>
                                    <p class="text-gray-700 text-sm lg:text-base mb-3">Assurance décennale artisans et professionnels du bâtiment :</p>
                                    <ul class="space-y-2 lg:space-y-4">
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">
                                                <a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('prix-assurance-decennale-auto-entrepreneur') }}">Décennale auto-entrepreneur.</a>
                                                <span class="block text-xs text-gray-500 mt-1">Cotisations ajustées à votre chiffre d'affaires réel, formule 100% en ligne.</span>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Décennale pour TPE.
                                                <span class="block text-xs text-gray-500 mt-1">Solutions modulables selon le volume de vos chantiers.</span>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Décennale pour PME.</span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Décennale architecte / bureau d'étude.
                                                <span class="block text-xs text-gray-500 mt-1">Garanties étendues pour la conception et la maîtrise d'œuvre.</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mt-auto pt-4">
                                <a href="#simulationForm" class="inline-block bg-amber-400 text-dark font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:opacity-90 transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                    <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                    Devis assurance décennale en ligne gratuit
                                </a>
                            </div>
                        </div>

                        <!-- Card 2 : Devis en ligne -->
                        <div class="bg-surface rounded-xl lg:rounded-3xl p-4 lg:p-8 shadow-xl border border-gray-100 card-hover flex flex-col h-full">
                            <div class="flex flex-col lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-6 flex-grow">
                                <div class="p-2 lg:p-4 bg-amber-400 rounded-xl lg:rounded-2xl shadow-lg self-start flex-shrink-0">
                                    <i class="fas fa-user text-white text-lg lg:text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-lg lg:text-2xl font-bold text-jaune mb-3 lg:mb-4">Devis assurance décennale en ligne : immédiat et 100% digital</h2>
                                    <p class="text-gray-700 text-sm lg:text-base mb-3">Notre plateforme vous permet d'obtenir votre devis en quelques minutes seulement, sans rendez-vous ni paperasse inutile.</p>
                                    <ul class="space-y-2 lg:space-y-4">
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base"><strong>Devis Immédiat et 100% en Ligne.</strong> Recevez votre tarif personnalisé selon votre activité, votre chiffre d'affaires et votre expérience.</span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base"><strong>Spécialiste Tous Métiers.</strong> Électricité, maçonnerie, plomberie, couverture, menuiserie et tous autres corps d'état.</span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base"><strong>Attestation Provisoire Express.</strong> Dès validation de votre dossier, recevez votre attestation par email sous 24 à 48 heures maximum.</span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base"><strong>Tarifs Négociés.</strong> Grâce à nos partenariats, des tarifs compétitifs pour votre contrat, généralement 15 à 30% moins chers qu'en agence.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mt-auto pt-4">
                                <a href="#simulationForm" class="inline-block bg-amber-400 text-dark font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:bg-accent transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                    <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                    Obtenez votre assurance décennale en ligne immédiatement
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- CARD GRID 2 — Cards 3 & 4                                   -->
                    <!-- [OPTIMISATION] Contenu des cards enrichi                     -->
                    <!-- ============================================================ -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-8 mb-12 lg:mb-20">

                        <!-- Card 3 : Métiers -->
                        <div class="bg-surface rounded-xl lg:rounded-3xl p-4 lg:p-8 shadow-xl border border-gray-100 card-hover flex flex-col h-full">
                            <div class="flex flex-col lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-6 flex-grow">
                                <div class="p-2 lg:p-4 bg-amber-400 rounded-xl lg:rounded-2xl shadow-lg self-start flex-shrink-0">
                                    <i class="fas fa-shield-alt text-white text-lg lg:text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-lg lg:text-2xl font-bold text-jaune mb-3 lg:mb-4">Assurance décennale adaptée à votre métier du bâtiment</h2>
                                    <p class="text-gray-700 text-sm lg:text-base mb-3">Chaque métier présente des risques spécifiques. Nous proposons des formules sur mesure :</p>
                                    <ul class="space-y-2 lg:space-y-4">
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">
                                                <a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('assurance-decennale-electricien') }}">Assurance décennale Électricien</a>
                                                <span class="block text-xs text-gray-500 mt-1">Installation électrique, mise aux normes, domotique.</span>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">
                                                <a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('assurance-decennale-macon') }}">Assurance décennale Maçonnerie et gros œuvre.</a>
                                                <span class="block text-xs text-gray-500 mt-1">Construction, rénovation structurelle, fondations.</span>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Assurance décennale Peinture et rénovation.
                                                <span class="block text-xs text-gray-500 mt-1">Peinture intérieure et extérieure, ravalement, isolation.</span>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Assurance décennale Charpente et couverture.
                                                <span class="block text-xs text-gray-500 mt-1">Charpente traditionnelle ou industrielle, zinguerie, étanchéité.</span>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base"><a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('prix-assurance-decennale-auto-entrepreneur') }}">Assurance décennale corps d'état secondaires.</a>
                                                <span class="block text-xs text-gray-500 mt-1">Plomberie, chauffage, menuiserie, plâtrerie, carrelage et plus.</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mt-auto pt-4">
                                <a href="#simulationForm" class="inline-block bg-amber-400 text-dark font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:opacity-90 transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                    <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                    Souscrivez votre assurance décennale en ligne maintenant
                                </a>
                            </div>
                        </div>

                        <!-- Card 4 : Antécédents -->
                        <div class="bg-surface rounded-xl lg:rounded-3xl p-4 lg:p-8 shadow-xl border border-gray-100 card-hover flex flex-col h-full">
                            <div class="flex flex-col lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-6 flex-grow">
                                <div class="p-2 lg:p-4 bg-amber-400 rounded-xl lg:rounded-2xl shadow-lg self-start flex-shrink-0">
                                    <i class="fas fa-clipboard-check text-white text-lg lg:text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-lg lg:text-2xl font-bold text-jaune mb-3 lg:mb-4">Souscription assurance décennale en ligne quel que soit votre antécédent</h2>
                                    <p class="text-gray-700 text-sm lg:text-base mb-3">Notre réseau de partenaires permet de trouver une solution même dans les cas complexes :</p>
                                    <ul class="space-y-2 lg:space-y-4">
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Assurance décennale nouvelle création.
                                                <span class="block text-xs text-gray-500 mt-1">Première assurance rapide, même sans historique dans le bâtiment.</span>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">
                                                <a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('assurance-decennale-resilie-non-paiement') }}">Assurance décennale résilié non-paiement.</a>
                                                <span class="block text-xs text-gray-500 mt-1">Accès à de nouvelles offres adaptées à votre situation actuelle.</span>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Assurance décennale résilié sinistre.
                                                <span class="block text-xs text-gray-500 mt-1">Compagnies spécialisées acceptant les profils avec passé sinistral.</span>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">
                                                <a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('assurance-decennale-reprise-du-passe') }}">Assurance décennale reprise du passé.</a>
                                                <span class="block text-xs text-gray-500 mt-1">Couverture rétroactive de vos chantiers antérieurs.</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mt-auto pt-4">
                                <a href="#simulationForm" class="inline-block bg-amber-400 text-dark font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:bg-accent transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                    <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                    Attestation assurance décennale en ligne express
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ==========================================================
     FAQ SECTION
     ========================================================== -->

<div class="bg-white rounded-xl shadow-xl p-8 mb-12 lg:mb-20">

    <!-- ======================================================
         TITLE
         ====================================================== -->

    <div class="text-center mb-8">

        <h2 class="text-2xl lg:text-3xl font-bold text-gradient mb-4">
            Questions fréquentes sur l'assurance décennale en ligne
        </h2>

        <div class="w-16 lg:w-24 h-1 bg-amber-400 mx-auto rounded-full"></div>

    </div>


    <!-- ======================================================
         FAQ CONTAINER
         ====================================================== -->

    <div id="faq-container" class="space-y-6">


        <!-- ==================================================
             FAQ 1
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-question-circle text-yellow-500 mr-2"></i>
                    Qu'est-ce que l'assurance décennale en ligne exactement ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    L'assurance décennale en ligne est un contrat de responsabilité civile décennale que vous pouvez souscrire entièrement par internet, sans vous déplacer. Elle offre les mêmes garanties qu'une assurance traditionnelle mais avec un processus simplifié et une souscription 100% digitale, avec une attestation provisoire délivrée sous 24 à 48 heures.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 2
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-file-alt text-yellow-500 mr-2"></i>
                    Comment obtenir un devis assurance décennale en ligne ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    Il suffit de remplir notre formulaire en ligne avec les informations sur votre entreprise, votre activité, votre chiffre d'affaires prévisionnel et votre expérience. Vous recevez instantanément plusieurs propositions de tarif que vous pouvez comparer avant de souscrire. Le processus est 100% en ligne et ne nécessite aucun rendez-vous.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 3
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-gavel text-yellow-500 mr-2"></i>
                    L'attestation assurance décennale en ligne est-elle valable légalement ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    <strong>Absolument.</strong> Une attestation assurance décennale en ligne a exactement la même valeur légale qu'une attestation papier. Elle est reconnue par tous les maîtres d'ouvrage et peut être présentée lors de vos démarches administratives ou pour répondre à des appels d'offres, à condition que l'assureur soit agréé par l'ACPR.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 4
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-clock text-yellow-500 mr-2"></i>
                    Combien de temps faut-il pour recevoir mon attestation après souscription ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    Après validation de votre dossier et paiement de votre première cotisation, vous recevez généralement votre attestation provisoire par email sous <strong>24 à 48 heures maximum</strong>. Dans certains cas urgents, une délivrance express le jour même peut être organisée. Votre attestation est téléchargeable au format PDF depuis votre espace personnel sécurisé.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 5
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-euro-sign text-yellow-500 mr-2"></i>
                    Quel est le coût d'une assurance décennale en ligne ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    Le tarif varie selon votre métier, votre chiffre d'affaires, votre expérience et votre historique de sinistres. En moyenne, les cotisations démarrent à partir de <strong>75€ par mois</strong> pour un auto-entrepreneur débutant. L'assurance décennale en ligne est généralement 15 à 30% moins chère qu'une formule traditionnelle grâce à la réduction des coûts de structure.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 6
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-user-slash text-yellow-500 mr-2"></i>
                    Puis-je souscrire si j'ai été résilié par mon ancien assureur ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    <strong>Oui.</strong> Notre réseau de partenaires comprend des compagnies spécialisées dans les profils résiliés. Que votre résiliation soit due à un non-paiement ou à des sinistres, nous trouvons une solution de contrat assurance décennale en ligne adaptée à votre situation actuelle.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 7
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-tools text-yellow-500 mr-2"></i>
                    Quels métiers peuvent souscrire une assurance décennale en ligne ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    Tous les métiers du bâtiment sont éligibles : électricien, plombier, maçon, couvreur, menuisier, peintre, plaquiste, carreleur, charpentier, architecte, bureau d'études, entreprise générale du bâtiment, etc. Chaque corps d'état bénéficie d'un devis personnalisé selon ses risques spécifiques.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 8
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-tag text-yellow-500 mr-2"></i>
                    Quelle est la différence de prix entre assurance décennale en ligne et traditionnelle ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    L'assurance décennale en ligne est généralement <strong>15 à 30% moins chère</strong> que les formules traditionnelles. Pour un plombier débutant, comptez entre 800€ et 1 500€/an en ligne contre 1 200€ à 2 200€ via un réseau traditionnel. Pour un maçon, les tarifs en ligne oscillent entre 1 500€ et 3 000€ annuels contre 2 000€ à 4 500€ en agence.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 9
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-exchange-alt text-yellow-500 mr-2"></i>
                    Puis-je résilier mon assurance décennale en ligne avant l'échéance annuelle ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    Depuis la <strong>loi Hamon de 2014</strong>, vous pouvez résilier à tout moment après la première année de contrat, sans frais ni pénalités, via votre espace client ou par lettre recommandée. L'assureur dispose d'un délai de 30 jours pour rendre effective la résiliation. Assurez-vous toutefois d'avoir souscrit un nouveau contrat pour éviter toute interruption de garantie.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 10
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-user-check text-yellow-500 mr-2"></i>
                    Les auto-entrepreneurs peuvent-ils souscrire une assurance décennale en ligne ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    <strong>Oui.</strong> Les auto-entrepreneurs exerçant une activité de construction sont soumis à la même obligation d'assurance décennale que les autres professionnels du bâtiment. Des formules spécifiques avec des cotisations calculées sur le chiffre d'affaires réellement déclaré sont disponibles, démarrant généralement autour de <strong>600€ à 800€/an</strong> pour des activités à faible risque.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 11
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-wrench text-yellow-500 mr-2"></i>
                    C'est quoi exactement l'assurance décennale pour un plombier ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    L'assurance décennale plombier est une garantie obligatoire qui couvre les dommages
                    compromettant la solidité d'un ouvrage ou le rendant impropre à sa destination pendant
                    dix ans après la réception des travaux. Elle peut notamment concerner certaines
                    installations de plomberie incorporées à la construction.
                </p>

                <p class="text-base text-gray-700 mt-4">
                    Concrètement, un plombier qui installe un réseau d'alimentation en eau encastré dans
                    une dalle engage sa responsabilité décennale lorsque les conditions légales sont réunies.
                    Si une fuite invisible provoque des dommages importants ou rend le logement impropre
                    à son usage, la garantie peut intervenir pour indemniser le maître d'ouvrage.
                    L'article 1792 du Code civil pose le principe de responsabilité décennale des constructeurs.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 12
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-shield-alt text-yellow-500 mr-2"></i>
                    Est-ce que l'assurance décennale plombier est vraiment obligatoire avant d'ouvrir un chantier ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    <strong>Oui.</strong> L'assurance décennale est obligatoire pour les plombiers lorsqu'ils
                    réalisent des travaux entrant dans le champ de la responsabilité décennale. L'attestation
                    d'assurance doit pouvoir être présentée au maître d'ouvrage avant le démarrage des travaux.
                </p>

                <p class="text-base text-gray-700 mt-4">
                    Cette obligation concerne les professionnels du bâtiment quel que soit leur statut
                    juridique, y compris les micro-entrepreneurs lorsque leur activité est soumise à cette
                    obligation. L'article L. 241-1 du Code des assurances encadre cette obligation d'assurance.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 13
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-euro-sign text-yellow-500 mr-2"></i>
                    Quel est le tarif d'une assurance décennale pour un plombier en France ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    Le tarif d'une assurance décennale plombier varie généralement selon le chiffre d'affaires,
                    l'expérience professionnelle, la nature des travaux réalisés, la zone d'activité et
                    l'historique de sinistres. Pour certains profils, les cotisations peuvent se situer autour
                    de quelques centaines à plusieurs milliers d'euros par an.
                </p>

                <p class="text-base text-gray-700 mt-4">
                    Un plombier débutant avec un chiffre d'affaires limité peut bénéficier d'un tarif plus
                    accessible, tandis que les activités comportant des travaux plus techniques ou présentant
                    des risques importants peuvent entraîner une cotisation plus élevée. Comparer plusieurs
                    offres permet de vérifier à la fois le prix, les garanties, les franchises et les exclusions.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 14
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-user-slash text-yellow-500 mr-2"></i>
                    Un plombier résilié pour non-paiement peut-il retrouver une assurance décennale ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    <strong>Oui.</strong> Un plombier dont le contrat a été résilié pour non-paiement peut
                    rechercher une nouvelle assurance décennale. Cependant, une résiliation peut rendre
                    l'accès au marché classique plus difficile et entraîner des conditions tarifaires ou
                    contractuelles particulières.
                </p>

                <p class="text-base text-gray-700 mt-4">
                    Certains assureurs et courtiers spécialisés étudient les profils ayant connu une
                    résiliation. Pour maximiser ses chances, il est important de présenter un dossier complet,
                    de régulariser sa situation lorsque cela est possible et de fournir l'historique des
                    assurances et des sinistres. Nos experts peuvent vous accompagner dans la recherche
                    d'une solution adaptée à votre situation.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 15
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-bolt text-yellow-500 mr-2"></i>
                    Comment souscrire une assurance décennale plombier rapidement avant un chantier urgent ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    Pour souscrire rapidement une assurance décennale plombier, il est conseillé de préparer
                    dès le départ les documents nécessaires : justificatif d'immatriculation de l'entreprise,
                    descriptif précis des activités, chiffre d'affaires, expérience professionnelle et
                    historique des sinistres.
                </p>

                <p class="text-base text-gray-700 mt-4">
                    Certains assureurs peuvent étudier un dossier rapidement et délivrer une attestation
                    après validation du dossier et du contrat. La rapidité dépend principalement de la
                    complétude des informations transmises. Une attestation provisoire ne couvre que la
                    période et les activités prévues par le contrat concerné.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 16
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-exchange-alt text-yellow-500 mr-2"></i>
                    Quelle différence entre l'assurance décennale plombier et la responsabilité civile professionnelle ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    L'assurance décennale et la responsabilité civile professionnelle sont deux garanties
                    différentes mais complémentaires. La garantie décennale couvre, dans les conditions
                    prévues par la loi, certains dommages affectant un ouvrage après sa réception pendant
                    une période de dix ans.
                </p>

                <p class="text-base text-gray-700 mt-4">
                    La RC professionnelle intervient notamment pour les dommages causés aux tiers ou aux
                    biens pendant l'activité professionnelle. Par exemple, si un plombier endommage
                    accidentellement un équipement ou une canalisation pendant un chantier, la RC
                    professionnelle peut être concernée. En revanche, un désordre relevant de la
                    responsabilité décennale après réception peut relever de l'assurance décennale.
                </p>

            </div>

        </div>


        <!-- ==================================================
             FAQ 17
             ================================================== -->

        <div class="faq-item border border-gray-200 rounded-xl p-6">

            <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">

                <span>
                    <i class="fas fa-ban text-yellow-500 mr-2"></i>
                    Quelles exclusions fréquentes peut-on trouver dans un contrat d'assurance décennale plombier ?
                </span>

                <span class="faq-arrow">
                    <i class="fas fa-chevron-down"></i>
                </span>

            </h3>

            <div class="faq-answer">

                <p class="text-base text-gray-700">
                    Les exclusions dépendent du contrat et des conditions générales et particulières.
                    Elles peuvent notamment concerner certaines activités ou certains travaux qui n'ont
                    pas été déclarés à l'assureur, ainsi que des situations expressément exclues par
                    les conditions contractuelles.
                </p>

                <p class="text-base text-gray-700 mt-4">
                    Il est donc essentiel de déclarer précisément l'ensemble des activités exercées par
                    l'entreprise et de vérifier les garanties avant la souscription. Les franchises,
                    plafonds, exclusions et conditions de prise en charge doivent être examinés avec
                    attention afin de s'assurer que le contrat correspond réellement aux travaux réalisés
                    par le plombier.
                </p>

            </div>

        </div>

    </div>
 </div>


@include("layout.faq-assets")


                    <!-- ============================================================ -->
                    <!-- CTA FINAL — [OPTIMISATION] Paragraphes enrichis              -->
                    <!-- ============================================================ -->
                    <div class="bg-amber-400 rounded-xl lg:rounded-3xl p-6 lg:p-12 text-dark text-center relative overflow-hidden">
                        <div class="relative">
                            <div class="w-10 h-10 lg:w-16 lg:h-16 bg-dark/20 rounded-xl lg:rounded-2xl mx-auto mb-4 lg:mb-6 flex items-center justify-center">
                                <i class="fas fa-calculator text-lg lg:text-3xl text-dark"></i>
                            </div>
                            <h2 class="text-xl lg:text-4xl font-bold mb-4 lg:mb-6 text-dark">Ne laissez pas l'assurance décennale freiner vos chantiers.</h2>
                            <p class="text-sm lg:text-xl mb-4 lg:mb-6 text-dark/90 max-w-3xl mx-auto leading-relaxed">
                                L'assurance de garantie décennale est une obligation légale pour exercer votre métier en toute sérénité. Mais trouver le bon contrat, surtout quand on est pressé, peut vite devenir un parcours du combattant. Notre mission : vous fournir une assurance décennale en ligne claire, compétitive et une attestation rapide pour que vous puissiez vous concentrer sur ce que vous faites de mieux : votre chantier.
                            </p>
                            {{-- [NOUVEAU] Paragraphe enrichi --}}
                            <p class="text-sm lg:text-lg mb-6 lg:mb-8 text-dark/90 max-w-3xl mx-auto leading-relaxed">
                                Grâce à notre plateforme digitale intuitive, vous pouvez comparer plusieurs offres simultanément, analyser les garanties proposées et choisir le contrat qui correspond exactement à vos besoins. Tout se fait depuis votre espace personnel sécurisé, accessible 24h/24 et 7j/7. Notre expertise du secteur nous permet d'identifier rapidement les garanties essentielles pour votre activité et de vous proposer un <strong>tarif assurance décennale en ligne vraiment adapté</strong>, sans options superflues.
                            </p>
                            <a href="#simulationForm" class="inline-block bg-dark text-yellow-400 font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:bg-primary transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                Devis assurance décennale en ligne personnalisé — À partir de 75€/mois
                            </a>
                            <p class="text-xs text-dark/70 mt-4">Obtenez votre attestation immédiatement • Couverture adaptée à votre métier • Tarifs jusqu'à 30% moins chers</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

 

</main>

@stop
 
@section('schema')
@verbatim

 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Qu'est-ce que l'assurance décennale en ligne exactement ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "L'assurance décennale en ligne est un contrat de responsabilité civile décennale que vous pouvez souscrire entièrement par internet, sans vous déplacer. Elle offre les mêmes garanties qu'une assurance traditionnelle mais avec un processus de devis simplifié et une souscription 100% digitale."
      }
    },
    {
      "@type": "Question",
      "name": "Comment obtenir un devis assurance décennale en ligne ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Il suffit de remplir un formulaire en ligne avec les informations sur votre entreprise, votre activité, votre chiffre d'affaires prévisionnel et votre expérience. Vous recevez instantanément plusieurs propositions de tarif que vous pouvez comparer avant de souscrire."
      }
    },
    {
      "@type": "Question",
      "name": "L'attestation assurance décennale en ligne est-elle valable légalement ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolument. Une attestation assurance décennale en ligne a exactement la même valeur légale qu'une attestation papier. Elle est reconnue par tous les maîtres d'ouvrage et peut être présentée lors de vos démarches administratives ou pour répondre à des appels d'offres."
      }
    },
    {
      "@type": "Question",
      "name": "Combien de temps faut-il pour recevoir mon attestation après souscription ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Après validation de votre dossier et paiement de votre première cotisation, vous recevez généralement votre attestation provisoire par email sous 24 à 48 heures maximum. Dans certains cas urgents, une délivrance express le jour même peut être organisée."
      }
    },
    {
      "@type": "Question",
      "name": "Quel est le coût d'une assurance décennale en ligne ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Le tarif varie selon votre métier, votre chiffre d'affaires, votre expérience et votre historique de sinistres. En moyenne, les cotisations démarrent à partir de 75€ par mois pour un auto-entrepreneur débutant et peuvent atteindre plusieurs milliers d'euros par an pour une entreprise importante."
      }
    },
    {
      "@type": "Question",
      "name": "Puis-je souscrire une assurance décennale en ligne si j'ai été résilié par mon ancien assureur ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Oui, notre réseau de partenaires comprend des compagnies spécialisées dans les profils résiliés. Que votre résiliation soit due à un non-paiement ou à des sinistres, nous trouvons une solution adaptée à votre situation actuelle."
      }
    },
    {
      "@type": "Question",
      "name": "Quels métiers peuvent souscrire une assurance décennale en ligne ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Tous les métiers du bâtiment sont éligibles : électricien, plombier, maçon, couvreur, menuisier, peintre, plaquiste, carreleur, charpentier, architecte, bureau d'études, entreprise générale du bâtiment, etc."
      }
    },
    {
      "@type": "Question",
      "name": "Quelle est la différence de prix entre assurance décennale en ligne et traditionnelle ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "L'assurance décennale en ligne est généralement 15 à 30% moins chère que les formules traditionnelles grâce à la réduction des coûts de structure : pas d'agence physique, processus automatisés, gestion dématérialisée des dossiers."
      }
    },
    {
      "@type": "Question",
      "name": "Mon assurance décennale en ligne est-elle reconnue par tous les maîtres d'ouvrage ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolument. Une assurance décennale en ligne a exactement la même valeur légale qu'un contrat souscrit en agence, à condition qu'elle soit délivrée par un assureur agréé par l'ACPR. Les maîtres d'ouvrage, promoteurs et donneurs d'ordre l'acceptent sans restriction."
      }
    },
    {
      "@type": "Question",
      "name": "Puis-je résilier mon assurance décennale en ligne avant l'échéance annuelle ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Depuis la loi Hamon de 2014, vous pouvez résilier votre assurance décennale en ligne à tout moment après la première année de contrat, sans frais ni pénalités, via votre espace client ou par lettre recommandée avec accusé de réception."
      }
    }
  ]
}
</script>
@endverbatim
@endsection
