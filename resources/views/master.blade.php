<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <meta name="author" content="Aksam Assurance">
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/favicon.png') }}">
    <link rel=apple-touch-icon type="icon" href="{{ asset('image/logo.png') }}">
     <!-- Titre dynamique -->
    <title>@yield('title', 'Accueil - Assurances décennale')</title>
    <!-- Description dynamique -->
     <meta name="description" content="@yield('meta_description', 'Devis pour une assurances décennale en ligne et en quelque clics.')">
   <!-- Canonical URL dynamique -->
    @yield('canonical')
    
    <!-- Open Graph Meta Tags dynamiques -->
    @yield('og_meta')
    <meta name="keywords" content="@yield('meta_keywords', 'Assurance décennale plomier ,Assurance Décennale chauffagiste,prix asurance décennale plomier , prix assurance décinnale chauffagiste')">

    
    <script src="https://cdn.tailwindcss.com"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <link
        rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#1E3A8A",
                        secondary: "#38BDF8",
                        accent: "#F59E0B",
                        jaune: "#FBEF27",
                        success: "#10B981",
                        warning: "#FB923C",
                        danger: "#EF4444",
                        dark: "#0F172A",
                        light: "#F8FAFC",
                        surface: "#FFFFFF",
                        surfaceHover: "#F1F5F9"
                    },
                    fontFamily: {
                        sans: ["Plus Jakarta Sans", "sans-serif"]
                    }
                }
            }
        };
    </script>

  


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-xxxxxxx');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Analytics (Conditional Loading) -->
    <script type="text/plain" data-cookieconsent="statistics" async src="https://www.googletagmanager.com/gtag/js?id=G-xxxx"></script>
    <script type="text/plain" data-cookieconsent="statistics">
        window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-xxxx');
        </script>
    <!--End Google Analytics (gtag.js) -->
		<!-- Script de gestion du consentement -->
		<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    // 1. Consent par défaut (idéalement à mettre AVANT le script GTM)
    gtag('consent', 'default', {
        ad_storage: 'denied',
        analytics_storage: 'denied',
        ad_user_data: 'denied',
        ad_personalization: 'denied'
    });

    // 2. Fonction appelée quand l'utilisateur accepte les cookies
    function aksamAcceptCookies() {
        // On pose TON cookie d’acceptation
        var expiryDate = new Date();
        expiryDate.setMonth(expiryDate.getMonth() + 1);
        document.cookie = 'aksamPerformance=1; path=/; expires=' + expiryDate.toUTCString();

        // On met à jour le consentement pour Google
        gtag('consent', 'update', {
            ad_storage: 'granted',
            analytics_storage: 'granted',
            ad_user_data: 'granted',
            ad_personalization: 'granted'
        });

        // On envoie l’event attendu par GTM
        dataLayer.push({
            event: 'cookie_consent_update'
        });
    }

    // 3. Au chargement, si le cookie est déjà présent, on redonne le consentement
    document.addEventListener('DOMContentLoaded', function () {
        if (document.cookie.indexOf('aksamPerformance=1') >= 0) {
            gtag('consent', 'update', {
                ad_storage: 'granted',
                analytics_storage: 'granted',
                ad_user_data: 'granted',
                ad_personalization: 'granted'
            });

            dataLayer.push({
                event: 'cookie_consent_update'
            });
        }
    });
</script>


    <!-- Global site tag (gtag.js) - Google Ads -->
    <script type="text/plain" data-cookieconsent="marketing" async src="https://www.googletagmanager.com/gtag/js?id=AW-xxxxxx"></script>
    <script type="text/plain" data-cookieconsent="marketing">
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-xxxxxx');
</script>


</head>


<body class="bg-white">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-xxxxxxx" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header Navigation - Simplified for legal page -->
    <header class="header-mobile bg-yellow-300 bg-yellow-300 bg-amber-400 text-dark py-2 lg:py-4 sticky top-0 z-50 shadow-2xl ">
        <div class="container mx-auto px-2 lg:px-4">
            <div
                class="flex flex-col lg:flex-row items-center justify-between space-y-2 lg:space-y-0">
                <!-- Desktop only text -->
                <div class="hidden lg:flex items-center space-x-4 slide-in-left">
                    <div class="w-12 h-12 bg-dark/20 rounded-xl flex items-center justify-center shadow-lg">
                     <i class="fas fa-award text-2xl text-dark"></i>
                    </div>
                    <div class="flex items-center">
                        <p
                            class="text-lg sm:text-base font-semibold text-dark hidden sm:block">
                            <span class="typing-text"></span><span class="typing-cursor">|</span>
                        </p>
                    </div>

                </div>

                <!-- Contact Info -->
                <div class="flex items-center space-x-3 lg:space-x-4 slide-in-right">
                    <div class="p-2 lg:p-4 bg-dark/20 rounded-xl lg:rounded-2xl shadow-lg">
                        <i class="fas fa-phone text-lg lg:text-2xl text-dark"></i>
                    </div>
                    <div>
                        <span class="text-xs lg:text-sm text-dark/80 block">Conseil personnalisé</span>
                        <a href="tel:0182834800" class="text-lg lg:text-2xl font-bold text-dark hover:text-gradient transition-colors duration-300">01
                            82 83 48 00</a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!--/ Header end -->

    @yield('contentform')
    @yield('contentresponse')
    @yield('content-resilie')
    @yield('content-poltique')
    @yield('content-mention')
    @yield('content-reprise')
    @yield('content-plombier')
    @yield('content-maçon')
    @yield('content-electricien')
    @yield('content-entrepreneur')


    <!-- Footer -->
    <footer class="bg-yellow-300 bg-yellow-300 bg-amber-400  text-dark mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Aksam Assurance</h3>
                    <p class="text-dark-400">
                        Votre partenaire de confiance pour une assurance garantie décennale au juste prix.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liens utiles</h3>
                    <ul class="space-y-2">
                        <li>
                            <a
                                href="{{ url('/mention-legale') }}"
                                class="text-dark-400 hover:text-dark transition-colors">
                                Mentions légales
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ url('/politique-legale') }}"
                                class="text-dark-400 hover:text-dark transition-colors">
                                Politique de confidentialité
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ url('/assurance-decennale-electricien') }}"
                                class="text-dark-400 hover:text-dark transition-colors">
                                Assurance décennale Électricien
                            </a>
                        </li>
                         <li>
                            <a
                                href="{{ url('/assurance-decennale-macon') }}"
                                class="text-dark-400 hover:text-dark transition-colors">
                                Assurance décennale Maçonnerie et gros œuvre.
                            </a>
                        </li>
                         <li>
                            <a
                                href="{{ url('/assurance-decennale-resilie-non-paiement') }}"
                                class="text-dark-400 hover:text-dark transition-colors">
                                Assurance décennale résilié non-paiement.
                            </a>
                        </li> 
                        <li>
                            <a
                                href="{{ url('/prix-assurance-decennale-auto-entrepreneur') }}"
                                class="text-dark-400 hover:text-dark transition-colors">
                               Assurance décennale auto-entrepreneur.
                            </a>
                            
                        </li>  
                         <li>
                            <a
                                href="{{ url('/assurance-decennale-plombier') }}"
                                class="text-dark-400 hover:text-dark transition-colors">
                               Assurance décennale plombier et chauffagiste
                            </a>
                            
                        </li>
                        <li>
                            <a
                                href="{{ url('/assurance-decennale-reprise-du-passe') }}"
                                class="text-dark-400 hover:text-dark transition-colors">
                               Reprise du Passé Assurance Décennale

                            </a>
                            
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
                    <ul class="space-y-2 text-dark-400">
                        <li>10 rue de Penthièvre</li>
                        <li>75008 Paris</li>
                        <li>01.82.83.48.00</li>
                        <li>contact@aksam-assurances.fr</li>
                    </ul>
                </div>
            </div>
            <div
                class="border-t border-gray-800 mt-8 pt-8 text-center text-dark-400">
                <p>© 2026 Aksam Assurance. Tous droits réservés.</p>
            </div>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>

    <script src="https://www.google-analytics.com/analytics.js"></script>

    <!-- text annumationheader -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const text =
                "Quel que soit votre activité et vos antécédents d’assurances, obtenez un devis assurance décennale en ligne";
            const typingText = document.querySelector(".typing-text");
            const cursor = document.querySelector(".typing-cursor");

            // Remove the cursor initially
            cursor.style.display = "none";

            let i = 0;
            let isErasing = false;
            const typingSpeed = 20;
            const erasingSpeed = 10;
            const delayAfterTyping = 800;
            const delayAfterErasing = 500;

            function typeWriter() {
                if (!isErasing && i < text.length) {
                    typingText.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, typingSpeed);
                } else if (!isErasing && i === text.length) {
                    cursor.style.display = "inline-block";
                    setTimeout(() => {
                        isErasing = true;
                        cursor.style.display = "none";
                        setTimeout(typeWriter, delayAfterTyping);
                    }, delayAfterTyping);
                } else if (isErasing && i > 0) {
                    typingText.textContent = text.substring(0, i - 1);
                    i--;
                    setTimeout(typeWriter, erasingSpeed);
                } else if (isErasing && i === 0) {
                    isErasing = false;
                    cursor.style.display = "none";
                    setTimeout(typeWriter, delayAfterErasing);
                }
            }

            // Start typing animation
            typeWriter();

            // Rest of your existing GSAP animations...
            gsap.registerPlugin(ScrollTrigger);

            // Header Animation
            gsap.from("header", {
                duration: 1,
                y: -50,
                opacity: 0,
                ease: "power3.out",
            });

            // Hero Section Animation
            gsap.from(".hero-section", {
                duration: 1,
                y: 100,
                opacity: 0,
                ease: "power3.out",
            });

            // Simulation Section Animation
            gsap.from("#simulation", {
                scrollTrigger: {
                    trigger: "#simulation",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power2.out",
            });

            // About Section Animation
            gsap.from("#about", {
                scrollTrigger: {
                    trigger: "#about",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power2.out",
            });

            // PER Section Animation
            gsap.from("#per", {
                scrollTrigger: {
                    trigger: "#per",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power2.out",
            });

            // Avantages Section Animation
            gsap.from("#avantages", {
                scrollTrigger: {
                    trigger: "#avantages",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power2.out",
            });

            // Footer Animation
            gsap.from("footer", {
                scrollTrigger: {
                    trigger: "footer",
                    start: "top 90%",
                    toggleActions: "play none none reverse",
                },
                duration: 1,
                y: 30,
                opacity: 0,
                ease: "power2.out",
            });

            // Stagger animations for list items
            gsap.utils.toArray("ul li").forEach((list) => {
                gsap.from(list, {
                    scrollTrigger: {
                        trigger: list,
                        start: "top 90%",
                        toggleActions: "play none none reverse",
                    },
                    duration: 0.5,
                    y: 20,
                    opacity: 0,
                    ease: "power2.out",
                });
            });

            // Form elements animation
            gsap.from("form input, form select", {
                scrollTrigger: {
                    trigger: "form",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                duration: 0.5,
                x: 100,
                opacity: 0,
                stagger: 0.1,
                ease: "power2.out",
            });

            // Form container animation
            gsap.from(".lg\\:col-span-1.order-first.lg\\:order-last", {
                scrollTrigger: {
                    trigger: "#simulation",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                duration: 0.8,
                x: 200,
                opacity: 0,
                ease: "power2.out",
            });

            // Fresh up button animation
            gsap.from(".fresh-up-button", {
                scrollTrigger: {
                    trigger: "#avantages",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                duration: 0.8,
                y: 50,
                opacity: 0,
                scale: 0.8,
                ease: "back.out(1.7)",
            });
        });


         // ===== CODE SUPPLÉMENTAIRE POUR LE FORMULAIRE DYNAMIQUE ===== //

         const myselect2 = document.getElementById('myselect2');

    function toggleFields() {
        const isDemarrageNo = demarrageSelect.value === 'NON';
        const isAssureNo = assureSelect.value === 'NON';
        const isAncienneNo = ancienneSelect.value === 'NON';

        assureSelect.parentElement.style.display = isDemarrageNo ? 'none' : 'block';
        ancienneSelect.parentElement.style.display = isDemarrageNo ? 'none' : 'block';
        if (myselect2) {
            myselect2.parentElement.style.display = isAncienneNo ? 'none' : 'block';
        }
        motifContainer.style.display = isDemarrageNo || isAssureNo || isAncienneNo ? 'none' : 'block';
    }
                  document.addEventListener('DOMContentLoaded', function() {
                    const demarrageSelect = document.getElementById('myselect00');
                    const assureSelect = document.getElementById('myselect0');
                    const ancienneSelect = document.getElementById('myselect1');
                    const motifContainer = document.getElementById('motif-container');

                    function toggleFields() {
                      const isDemarrageNo = demarrageSelect.value === 'OUI';
                      const isAssureNo = assureSelect.value === 'NON';
                      const isAncienneNo = ancienneSelect.value === 'NON';

                      assureSelect.parentElement.style.display = isDemarrageNo ? 'none' : 'block';
                      ancienneSelect.parentElement.style.display = isDemarrageNo ? 'none' : 'block';
                      motifContainer.style.display = isDemarrageNo || isAssureNo || isAncienneNo ? 'none' : 'block';
                    }

                    demarrageSelect.addEventListener('change', toggleFields);
                    assureSelect.addEventListener('change', toggleFields);
                    ancienneSelect.addEventListener('change', toggleFields);
                  });
    </script>
  @verbatim
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Aksam Assurance",
            "image": "https://www.lassurance-garantie-decennale.fr/assets/img/favicon.png",
            "telephone": "01 82 83 48 00",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "10 rue de Penthièvre",
                "addressCountry": "FR",
                "addressLocality": "PARIS",
                "postalCode": "75008"
            },
            "url": "https://www.lassurance-garantie-decennale.fr",
            "priceRange": "€€",
            "openingHours": "Mo-Fr 09:00-18:00",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+33 1 82 83 48 00",
                "contactType": "Customer Service",
                "availableLanguage": ["French", "English"]
            }
        }
    </script>
      @endverbatim
        @yield('schema')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>



</html>