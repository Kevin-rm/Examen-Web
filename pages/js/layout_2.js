// Obtenez seulement la partie de la requête de l'URL actuelle
const queryParams = window.location.search;

// Créez un nouvel objet URLSearchParams avec l'URL
const urlParams = new URLSearchParams(queryParams);

// Utilisez les méthodes de l'objet URLSearchParams pour obtenir les paramètres
const page = urlParams.get('page');

const liMenuItems = document.querySelectorAll('.menu-sub .menu-item');
function updateActiveButtons(page, liMenuItems) {
    liMenuItems[0].classList.remove('active');
    liMenuItems[1].classList.remove('active');

    switch (page) {
        case 'insertion-cueillette':
            liMenuItems[0].classList.add('active');
            break;
        case 'insertion-depenses':
            liMenuItems[1].classList.add('active');
            break;
    }
}

updateActiveButtons(page, liMenuItems);
