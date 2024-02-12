const insertCueilleteForm = document.getElementById('insert-cueillete');

insertCueilleteForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(event.target);
    $.ajax({
        url: '../../functions/cueilleur/traitement_cueillete.php',
        type: 'POST',
        data: formData,
        processData: false,  // Don't process the data
        contentType: false,  // Don't set content type
        success: function(response) {

            console.log('Data sent successfully:', response);
        },
        error: function(error) {
            console.error('Error sending data:', error);
        }
    });
});