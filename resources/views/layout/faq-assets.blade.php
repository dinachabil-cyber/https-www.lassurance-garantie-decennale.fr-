<!-- ==========================================================
     FAQ CSS + JAVASCRIPT (shared partial — included inline)
     ========================================================== -->

<style>

    /* Question clickable */
    .faq-question {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        cursor: pointer;
        user-select: none;
    }


    /* Texte de la question */
    .faq-question > span:first-child {
        flex: 1;
    }


    /* Flèche */
    .faq-arrow {
        flex-shrink: 0;
        color: #eab308;
        transition: transform 0.3s ease;
    }


    /* Hover question */
    .faq-question:hover {
        color: #111827;
    }


    /* Réponse */
    .faq-answer {
        display: none;
        padding-top: 10px;
    }


    /* Réponse ouverte */
    .faq-item.active .faq-answer {
        display: block;
    }


    /* Rotation flèche */
    .faq-item.active .faq-arrow {
        transform: rotate(180deg);
    }


    /* Pagination */
    #faq-pagination button {
        cursor: pointer;
    }


    #faq-pagination button:disabled {
        cursor: not-allowed;
    }


    /* Mobile */
    @media (max-width: 640px) {

        .faq-question {
            gap: 10px;
        }

        .faq-question > span:first-child {
            font-size: 1rem;
            line-height: 1.5;
        }

        .faq-arrow {
            font-size: 0.85rem;
        }

    }

</style>


<script>

document.addEventListener('DOMContentLoaded', function () {

    var faqContainer = document.getElementById('faq-container');
    var pagination = document.getElementById('faq-pagination');

    if (!faqContainer) {
        return;
    }

    var faqItems = Array.from(faqContainer.querySelectorAll('.faq-item'));
    var itemsPerPage = 5;
    var totalPages = Math.ceil(faqItems.length / itemsPerPage);
    var currentPage = 1;

    /* ACCORDION */
    faqItems.forEach(function (faq) {
        var question = faq.querySelector('.faq-question');
        if (!question) {
            return;
        }
        question.addEventListener('click', function () {
            var isOpen = faq.classList.contains('active');
            faqItems.forEach(function (item) {
                item.classList.remove('active');
            });
            if (!isOpen) {
                faq.classList.add('active');
            }
        });
    });

    /* AFFICHER UNE PAGE */
    function showPage(page) {
        currentPage = page;
        faqItems.forEach(function (faq) {
            faq.classList.remove('active');
            faq.style.display = 'none';
        });
        var start = (page - 1) * itemsPerPage;
        var end = start + itemsPerPage;
        faqItems.slice(start, end).forEach(function (faq) {
            faq.style.display = '';
        });
        renderPagination();
    }

    /* PAGINATION */
    function renderPagination() {
        if (!pagination) {
            return;
        }
        pagination.innerHTML = '';

        var previous = document.createElement('button');
        previous.type = 'button';
        previous.innerHTML = '<i class="fas fa-chevron-left"></i>';
        previous.setAttribute('aria-label', 'Page précédente');
        previous.className = [
            'w-10 h-10 rounded-lg border flex items-center',
            'justify-center transition-all duration-200',
            currentPage === 1
                ? 'border-gray-200 text-gray-300 cursor-not-allowed'
                : 'border-gray-300 text-gray-700 hover:bg-yellow-400 hover:text-white hover:border-yellow-400 cursor-pointer'
        ].join(' ');
        previous.disabled = currentPage === 1;
        previous.addEventListener('click', function () {
            if (currentPage > 1) {
                showPage(currentPage - 1);
            }
        });
        pagination.appendChild(previous);

        for (let page = 1; page <= totalPages; page++) {
            var button = document.createElement('button');
            button.type = 'button';
            button.textContent = page;
            button.setAttribute('aria-label', 'Page ' + page);
            button.className = [
                'w-10 h-10 rounded-lg font-semibold',
                'transition-all duration-200',
                page === currentPage
                    ? 'bg-yellow-400 text-white shadow-md cursor-default'
                    : 'bg-white border border-gray-300 text-gray-700 hover:bg-yellow-400 hover:text-white hover:border-yellow-400 cursor-pointer'
            ].join(' ');
            button.addEventListener('click', function () {
                if (page !== currentPage) {
                    showPage(page);
                }
            });
            pagination.appendChild(button);
        }

        var next = document.createElement('button');
        next.type = 'button';
        next.innerHTML = '<i class="fas fa-chevron-right"></i>';
        next.setAttribute('aria-label', 'Page suivante');
        next.className = [
            'w-10 h-10 rounded-lg border flex items-center',
            'justify-center transition-all duration-200',
            currentPage === totalPages
                ? 'border-gray-200 text-gray-300 cursor-not-allowed'
                : 'border-gray-300 text-gray-700 hover:bg-yellow-400 hover:text-white hover:border-yellow-400 cursor-pointer'
        ].join(' ');
        next.disabled = currentPage === totalPages;
        next.addEventListener('click', function () {
            if (currentPage < totalPages) {
                showPage(currentPage + 1);
            }
        });
        pagination.appendChild(next);
    }

    /* INITIALISATION */
    if (faqItems.length > 0) {
        showPage(1);
    }

});

</script>
