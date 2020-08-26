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

let content = document.getElementsByTagName('SECTION');
console.log(content);

addEventListener('load', function loadProducts(){
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'ajax-postList', true);
    // xhr.send("search=" + search + "&pageStart=" + page);
    xhr.send();

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log('lol');
            console.log(xhr.responseText);
        }
    };
}
)