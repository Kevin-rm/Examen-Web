const form = document.querySelector('form');
const listh3 = document.querySelectorAll('.card-title.text-nowrap.mb-1');

function initListH3(listh3) {
    listh3.forEach(function (h3) {
        h3.innerHTML = '/';
    });
}

form.addEventListener('submit', (event) => {
    event.preventDefault();

    initListH3(listh3);

    const formData = new FormData(event.target);

    $.ajax({
        url: '../../functions/cueilleur/traitement_list.php',
        type: 'POST',
        data: formData,
        processData: false,  // Don't process the data
        contentType: false,  // Don't set content type
        success: function(response) {
            if (response['message'] !== '') alert(response['message']);
            else {
                listh3[1].innerHTML = response['data']['poids_total_cueillette'].value;
            }
        },
        error: function(error) {
            console.error('Error sending data:', error);
        }
    });
});