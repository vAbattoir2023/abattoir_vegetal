
document.addEventListener('DOMContentLoaded', (e) => {

    // initialise les sections du profil
    document.querySelectorAll('.profil-section').forEach((section => {
        section.style.display = 'none';
    }));
   
    // section actuellement visible
    let idCurrentSection = 'jesuis';
    showSection(idCurrentSection);

    // récupère le bouton du formulaire
    const btn = document.querySelector('#user-fom button[type=submit]');
    if (btn) {
       
        // ajouter un evenement click sur le bouton
        btn.innerHTML = 'Suivant';
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            
            // va cherche dans le dom la section actuelle
            let currentSection = document.getElementById(idCurrentSection);

            // récupération de l'id de la section suivante
            let idNextSection = currentSection.dataset['next'];

            // désactiver le lien de la section actuelle
            if (document.getElementById('link-profil-' + idCurrentSection)) {
                document.getElementById('link-profil-' + idCurrentSection).classList.remove('active');
            }
            // activer le lien de la section suivante
            if (document.getElementById('link-profil-' + idNextSection)) {
                document.getElementById('link-profil-' + idNextSection).classList.add('active');
            }
            
            // si prochaine section trouvée
            if(idNextSection) {

                // cacher la section actuelle
                hideSection(idCurrentSection);

                // montrer la nouvelle
                showSection(idNextSection);
                idCurrentSection = idNextSection;
            } else {

                // sinon, envoyer le formulaire
                e.target.form.submit();
            }
        });
    }

    /**
     * Affiche une section
     * 
     * @param {*} idSection 
     */
    function showSection (idSection){
        const section = document.getElementById(idSection);

        if(section) {
            section.style.display = 'block';
        }
    }

    /**
     * Cache une section
     * 
     * @param {*} idSection 
     */
    function hideSection (idSection){
        const section = document.getElementById(idSection);

        if(section) {
            section.style.display = 'none';
        }
    }    
});