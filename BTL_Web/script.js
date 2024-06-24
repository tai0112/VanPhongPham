

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').   onclick = () =>{
    loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
    loginForm.classList.remove('active');
}

document.querySelectorAll('.price').forEach(e => {
    var formated;
    formated = Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(e.innerHTML);
    // formated = new Intl.NumberFormat('vi-VN', config).format(e.outerText);
    e.innerText = formated;
});


var currentURL = window.location.href;
var route = document.querySelectorAll('.route');
console.log(route);
route.forEach(e => {
    if(e.href == currentURL) {
        e.classList.toggle('active');
    }
});