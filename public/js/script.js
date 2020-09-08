// Compte initial de page pour l'affichage de Post ________________________________
let nbrPage = 10;
let category = "";

// fonction AJAX des annonces ___________________________________________
const content = document.getElementsByTagName('SECTION');

function loadProducts(){
    let formData = new FormData();
    formData.append('category', category);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'ajax-postList', true);
    // xhr.send("search=" + search + "&pageStart=" + page);
    xhr.send(formData);

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
}

// Chargement initial des annonces ___________________________________________________
addEventListener('load', () => {
    loadProducts();
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
            const confirmMail = document.getElementsByClassName('confirmMail');
            confirmMail[0].classList.add('active');

            const popUpMail = document.getElementById('popUpMail');
            popUpMail.addEventListener('click', () => {
                confirmMail[0].classList.remove('active');
                modalAdd.classList.remove('active');
                form.reset();

            });
        }
    };
});

// Boutton Read more _______________________________________________________
const buttonLoad = document.getElementById('loadMore');

buttonLoad.addEventListener('click', () => {
    let xhr = new XMLHttpRequest();

    let data = new FormData();

    let searchBar = document.getElementById('search').value;

    data.append('search', searchBar);
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
const inputCategorie = document.querySelector('#listCategorie').nextElementSibling.children;

Array.from(inputCategorie).forEach(function (element) {
    element.addEventListener('click', () => {
        document.getElementById('search').value = "";
        category = element.value;
        loadProducts();
        
        nbrPage = 10;
    });
});

// Barre de recherche ___________________________________________________________
let inputSearch = document.getElementById('search');

inputSearch.addEventListener('input', () => {
    let xhr = new XMLHttpRequest();
    
    let searchBar = document.getElementById('search').value;
    let data = new FormData();
    data.append('search', searchBar);

    xhr.open('POST', 'ajax-postList', true);
    xhr.send(data);

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            content[0].innerHTML = xhr.responseText;
        }
    }
});

// Captcha
function onSubmit(token) {
	var onloadCallback = function() {
		alert("grecaptcha is ready!");
	  };
}