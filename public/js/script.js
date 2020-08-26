// addEventListener('load', function(e){
//     e.preventDefault();
//     console.log('coucou');
//     let xhr = new XMLHttpRequest();
//     xhr.open('POST', '../../application/class/test.php');
//     xhr.send();

//     xhr.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             console.log('lol');
//         }
//     };
// });

// AJAX chargement initial des annonces ___________________________________________
const content = document.getElementsByTagName('SECTION');

addEventListener('load', function loadProducts(){
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'ajax-postList', true);
    // xhr.send("search=" + search + "&pageStart=" + page);
    xhr.send();

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log('lol');
            content[0].innerHTML = xhr.responseText;
        }
    };
});

// Affichage du modal d'ajout d'annonce ______________________________________________
const addPost = document.getElementById('addPost');

addPost.addEventListener('click', () => {
    const modalAdd = document.getElementById('modalAdd');
    modalAdd.classList.add('active');

    // Cache le modal lors d'un click en dehors de la fenêtre
    modalAdd.addEventListener('click', () => {
        // modalAdd.classList.remove('active');
    });
});

// Upload image modal d'ajout ____________________________________________________
const inputFile = document.getElementById('file');

console.log(inputFile);
let pictureFile = inputFile.value;
console.log(pictureFile);

let imgPicture = document.getElementById('imgPicture');
imgPicture.setAttribute('src', pictureFile);

console.log(imgPicture);