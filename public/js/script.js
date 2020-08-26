const buttonCategorie = document.getElementById('listCategorie');
addEventListener('load', function(e){
    e.preventDefault();
    console.log('coucou');
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../application/class/test.php');
    xhr.send();

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log('lol');
        }
    };
});