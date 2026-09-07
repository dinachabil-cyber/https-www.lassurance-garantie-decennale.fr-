/* ===== SCRIPTS.JS ===== */

// Variables globales
const gaProperty = 'GTM-PTHF4V94';
const disableStr = 'ga-disable-' + gaProperty;

// ===== GESTION DES COOKIES =====

function getCookie(cname) {
    const name = cname + "=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const ca = decodedCookie.split(';');

    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function acceptCookies() {
    const expiryDate = new Date();
    expiryDate.setMonth(expiryDate.getMonth() + 1);
    document.cookie = 'aksamPerformance=1; path=/; expires=' + expiryDate.toGMTString();

    const banner = document.querySelector('.fixed.bottom-6');
    if (banner) {
        banner.remove();
    }

    if (typeof gtag !== 'undefined') {
        gtag('consent', 'update', {
            'ad_storage': 'granted',
            'analytics_storage': 'granted',
            'ad_user_data': 'granted',
            'ad_personalization': 'granted',
        });
    }
}

function refuseCookies() {
    const banner = document.querySelector('.fixed.bottom-6');
    if (banner) {
        banner.remove();
    }
}

function createCookieBanner() {
    if (document.cookie.indexOf('aksamPerformance') >= 0) {
        return;
    }

    const banner = document.createElement('div');
    banner.innerHTML = `
        <div class="fixed bottom-6 left-6 right-6 bg-surface p-4 lg:p-6 rounded-2xl shadow-2xl z-50 max-w-md mx-auto border border-primary/20 cookie-banner">
            <div class="flex items-start space-x-3 lg:space-x-4">
                <div class="p-2 bg-yellow-100 rounded-xl flex-shrink-0">
                    <i class="fas fa-cookie-bite text-yellow-500 text-lg lg:text-xl"></i>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-dark mb-2 text-sm lg:text-base">Cookies et confidentialité</h4>
                    <p class="text-xs lg:text-sm text-gray-600 mb-4">
                        www.lassurance-garantie-decennale.fr utilise des cookies pour vous offrir le meilleur service.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                        <button onclick="acceptCookies()" 
                                class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-dark px-3 lg:px-4 py-2 rounded-xl text-xs lg:text-sm font-medium transition-all hover:scale-105 shadow-md">
                            <i class="fas fa-check mr-1"></i>J'accepte
                        </button>
                        <button onclick="refuseCookies()" 
                                class="bg-gray-200 text-gray-700 px-3 lg:px-4 py-2 rounded-xl text-xs lg:text-sm transition-all hover:bg-gray-300">
                            Refuser
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
    document.body.appendChild(banner);
}

// ===== GESTION DES FORMULAIRES =====

function handleFormSubmit(event) {
    const button = event.target.querySelector('button[type="submit"]');
    if (button) {
        button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Traitement en cours...';
        button.disabled = true;
    }
}

function showDiv(select) {
    const hiddenDiv = document.getElementById('hidden_div');
    if (hiddenDiv) {
        if (select.value === 'oui') {
            hiddenDiv.style.display = "block";
        } else {
            hiddenDiv.style.display = "none";
        }
    }
}

function toggleMotifField(select) {
    const motifContainer = document.getElementById('motif-container');
    if (motifContainer) {
        if (select.value === 'OUI') {
            motifContainer.style.display = 'block';
        } else {
            motifContainer.style.display = 'none';
        }
    }
}

// ===== GESTION DU SCROLL SMOOTH =====

function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// ===== GESTION DE GOOGLE ANALYTICS =====

function initGoogleAnalytics() {
    if (typeof gtag !== 'undefined') {
        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'analytics_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'wait_for_update': 500
        });

        if (document.cookie.indexOf('displayCookieConsent=y') >= 0) {
            gtag('consent', 'update', {
                'ad_storage': 'granted',
                'analytics_storage': 'granted',
                'ad_user_data': 'granted',
                'ad_personalization': 'granted',
            });
        }
    }

    if (document.cookie.indexOf('displayCookieConsent=y') < 0) {
        window[disableStr] = true;
    }
}

// ===== ANIMATIONS GSAP CORRIGÉES =====

function initGSAPAnimations() {
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Attendre que tous les éléments soient chargés
        window.addEventListener('load', function () {
            // S'assurer que les cartes sont visibles avant l'animation
            const cards = document.querySelectorAll(".card-hover");

            // Réinitialiser les cartes pour s'assurer qu'elles sont visibles
            cards.forEach(card => {
                gsap.set(card, {
                    opacity: 1,
                    y: 0,
                    visibility: 'visible',
                    display: 'block'
                });
            });

            // Animation des cards au scroll avec vérification
            if (cards.length > 0) {
                gsap.fromTo(".card-hover",
                    {
                        y: 30,
                        opacity: 0
                    },
                    {
                        duration: 0.8,
                        y: 0,
                        opacity: 1,
                        stagger: 0.15,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: ".card-hover",
                            start: "top 85%",
                            toggleActions: "play none none reverse",
                            onStart: () => {
                                // S'assurer que les cartes sont visibles
                                cards.forEach(card => {
                                    card.style.visibility = 'visible';
                                    card.style.display = 'block';
                                });
                            }
                        }
                    }
                );
            }

            // Animation du hero avec vérification
            const heroContent = document.querySelector(".hero-content");
            if (heroContent) {
                gsap.fromTo(".hero-content",
                    {
                        y: 50,
                        opacity: 0
                    },
                    {
                        duration: 1,
                        y: 0,
                        opacity: 1,
                        ease: "power3.out"
                    }
                );
            }
        });
    }
}

// ===== VÉRIFICATION DE VISIBILITÉ DES CARTES =====

function debugCards() {
    const cards = document.querySelectorAll('.card-hover');
    let hasHidden = false;

    cards.forEach(card => {
        const styles = getComputedStyle(card);
        if (styles.display === 'none' || styles.visibility === 'hidden') {
            hasHidden = true;
        }
    });

    return hasHidden;
}

// ===== FONCTION POUR FORCER L'AFFICHAGE DES CARTES =====

function forceShowCards() {
    const cards = document.querySelectorAll('.card-hover');
    cards.forEach(card => {
        card.style.visibility = 'visible';
        card.style.display = 'block';
        card.style.opacity = '1';
        card.style.transform = 'none';
    });
}

// ===== GESTIONNAIRES D'ÉVÉNEMENTS =====

function initEventListeners() {
    const simulationForm = document.getElementById('simulationForm');
    if (simulationForm) {
        simulationForm.addEventListener('submit', handleFormSubmit);
    }

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', handleFormSubmit);
    }

    const ancienneSelect = document.querySelector('select[name="ancienne"]');
    if (ancienneSelect) {
        ancienneSelect.addEventListener('change', function () {
            showDiv(this);
        });
    }

    const resilieSelect = document.querySelector('select[title="Assurance résilié"]');
    if (resilieSelect) {
        resilieSelect.addEventListener('change', function () {
            toggleMotifField(this);
        });
    }
}

// ===== INITIALISATION PRINCIPALE =====

function initApp() {

    // Initialiser Google Analytics
    initGoogleAnalytics();

    // Créer la bannière de cookies
    createCookieBanner();

    // Initialiser le scroll smooth
    initSmoothScroll();

    // Initialiser les gestionnaires d'événements
    initEventListeners();

    // Initialiser les animations GSAP
    setTimeout(initGSAPAnimations, 100);

    // Vérification après la fin des animations (2s) pour les cas où GSAP échoue
    setTimeout(() => {
        if (debugCards()) {
            forceShowCards();
        }
    }, 2000);
}

// ===== EVENT LISTENERS GLOBAUX =====

document.addEventListener('DOMContentLoaded', initApp);

window.addEventListener('error', function (e) {
    console.error('Erreur JavaScript:', e.error);
});

window.addEventListener('unhandledrejection', function (e) {
    console.error('Promise rejetée:', e.reason);
});

// Export des fonctions pour usage global
window.acceptCookies = acceptCookies;
window.refuseCookies = refuseCookies;
window.handleFormSubmit = handleFormSubmit;
window.showDiv = showDiv;
window.toggleMotifField = toggleMotifField;
window.debugCards = debugCards;
window.forceShowCards = forceShowCards;
 
    
    