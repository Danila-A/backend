
let url = 'recource/ajaxtest.php';


const linka = document.querySelectorAll('.nav__link');
console.log(linka);




linka[0].addEventListener('click', function (e) {
    e.preventDefault();
    let name = { email : "Aphganec@mail.ru" };
    const xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.responseType = 'json';
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify(name));
    xhr.onreadystatechange = function (){
        if(xhr.readyState===4 && xhr.status === 200){
            let data = xhr.response;
            console.log(data);
        }
    }
})
