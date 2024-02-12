function afficheErreur(message) {
  // Créez un élément de div pour contenir le code HTML de l'erreur
  var erreurDiv = document.createElement("div");
  erreurDiv.innerHTML = `
            <div class="static-toast">
                <div class="bs-toast toast fade show bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <i class="bx bx-bell me-2"></i>
                        <div class="me-auto fw-semibold">Erreur</div>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        ${message}
                    </div>
                </div>
            </div>
        `;

  // Ajoutez l'élément de div contenant l'erreur au début du corps du document
  document.body.appendChild(erreurDiv);
}

// Fonction générique pour valider n'importe quel formulaire
function validerFormulaire(formId) {
  var formulaire = document.getElementById(formId);
  var isValid = true;

  // Parcourez tous les champs du formulaire
  for (var i = 0; i < formulaire.elements.length; i++) {
    var champ = formulaire.elements[i];

    // Vérifiez si le champ est requis et s'il est vide
    if (champ.value.trim() === "") {
      afficheErreur("Veuillez remplir tous les champs obligatoires.");
      isValid = false;
      break;
    }

    // Vérifiez si le champ a une validation numérique
    if (champ.type === "number" && isNaN(champ.value)) {
      afficheErreur("Veuillez saisir une valeur numérique valide.");
      isValid = false;
      break;
    }
  }

  return isValid;
}
