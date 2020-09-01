// Compte initial de page pour l'affichage de Post ________________________________
let nbrPage = 10;
let search = "";

// AJAX chargement initial des annonces ___________________________________________
const content = document.getElementsByTagName('SECTION');

addEventListener('load', function loadProducts(){
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'ajax-postList', true);
    // xhr.send("search=" + search + "&pageStart=" + page);
    xhr.send();

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            content[0].innerHTML = xhr.responseText;

            // Modal détail annonce selon le click
            const posts = document.getElementsByClassName('product');
            Array.from(posts).forEach(function (element) {
                element.addEventListener('click', () => {
                    const inputId = element.querySelector('.idAjaxModal').value;

                    let formData = new FormData();
                    formData.append('id', inputId);

                    let xhr2 = new XMLHttpRequest();
                    xhr2.open('POST', 'ajax-post-show', true);
                    // xhr.send("search=" + search + "&pageStart=" + page);
                    xhr2.send(formData);   
                    
                    xhr2.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let modal = document.getElementById('modalDetail');
                            modal.innerHTML = xhr2.responseText;
                            modal.classList.add('active');
        
                            modal.addEventListener('click', () => {
                                modalDetail.classList.remove('active');
                            });

                            modal.children[1].addEventListener('click', () => {
                                event.stopPropagation();
                            });
                        }
                    }
                    
                });
            });
        }
    }
});

// Affichage du modal d'ajout d'annonce ______________________________________________
const addPost = document.getElementById('addPost');
const modalAdd = document.getElementById('modalAdd');

addPost.addEventListener('click', () => {
    modalAdd.classList.add('active');

    // Cache le modal lors d'un click sur la croix
    const crossClose = document.getElementById('closeIcon');
    crossClose.addEventListener('click', () => {
        modalAdd.classList.remove('active');
    });
});

// Display image modal d'ajout ____________________________________________________
function handleFiles(file) {
    let picture = file[0];
    let img = document.getElementById('imgPicture');

    img.file = picture;

    let reader = new FileReader();
    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    reader.readAsDataURL(picture);
}

// Ajax formulaire d'ajout ____________________________________________________
const form = document.getElementById('modalAdd').children[1];
form.addEventListener('submit', (e) => {
    e.preventDefault();

    let data = new FormData(form);
    let xhr = new XMLHttpRequest();

    xhr.open('POST', 'ajax-post-add', true);
    xhr.send(data);

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            modalAdd.classList.remove('active');
            form.reset();
        }
    };
});

// Boutton Read more _______________________________________________________
const buttonLoad = document.getElementById('loadMore');

buttonLoad.addEventListener('click', () => {
    let xhr = new XMLHttpRequest();

    let data = new FormData();
    data.append('search', search);
    data.append('pageStart', nbrPage);

    xhr.open('POST', 'ajax-postList', true);
    xhr.send(data);

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const lastContent = content[0].innerHTML;

            content[0].innerHTML = lastContent + xhr.responseText;

            nbrPage += 10;

            console.log(nbrPage);
            // Modal détail annonce selon le click
            const posts = document.getElementsByClassName('product');
            Array.from(posts).forEach(function (element) {
                element.addEventListener('click', () => {
                    const inputId = element.querySelector('.idAjaxModal').value;

                    let formData = new FormData();
                    formData.append('id', inputId);

                    let xhr2 = new XMLHttpRequest();
                    xhr2.open('POST', 'ajax-post-show', true);
                    xhr2.send(formData);   
                    
                    xhr2.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let modal = document.getElementById('modalDetail');
                            modal.innerHTML = xhr2.responseText;
                            modal.classList.add('active');
        
                            modal.addEventListener('click', () => {
                                modalDetail.classList.remove('active');
                            });

                            modal.children[1].addEventListener('click', () => {
                                event.stopPropagation();
                            });
                        }
                    }
                    
                });
            });
        }
    }
});

// Affichage par catégorie ____________________________________________________
const inputCategorie = document.querySelector('#listCategorie').nextElementSibling.children[2];
console.log(inputCategorie);

// for(let categorie in inputCategorie[0]){
//     categorie.addEventListener('click', () => {
//         console.log(categorie);
//     });
// }