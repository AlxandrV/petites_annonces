// Display image modal d'ajout ____________________________________________________
function handleFiles(file) {
    let picture = file[0];
    let img = document.getElementById('imgPicture');

    img.file = picture;

    let reader = new FileReader();
    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    reader.readAsDataURL(picture);
}

// Ajax formulaire de confirmation de poste de l'annonce
const formValidate = document.getElementById('formValidate').children[0];
console.log(formValidate);

formValidate.addEventListener('submit', (e) => {
    e.preventDefault();
    
    let data = new FormData(formValidate);
    let xhr = new XMLHttpRequest();
    
    console.log(data);
    xhr.open('POST', 'ajax-post-update', true);
    xhr.send(data);
    
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const popUp = document.querySelector('.popUp');
            popUp.classList.add('active');
            const reponse = document.querySelector('.popUp > DIV > P');
            console.log(xhr.responseText);
            if(xhr.responseText == '"OK"'){
                reponse.innerHTML = 'Annonce confirmé<br/><a href="/">Retour à l\'accueil</a>'
            } else{
                reponse.innerHTML = 'Une erreur s\'est produite, merci de réessayer plus tard<br/><a href="/">Retour à l\'accueil</a>'
            }
        }
    };
});