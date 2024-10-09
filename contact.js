/*
let form = document.querySelector('#loginForm');
console.log(form.email);
form.email.addEventListener('change', function () {
    validEmail(this);

});
const validEmail = function (inputEmail) {
    let emailRegExp = new RegExp('^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$', 'g');

let testEmail = emailRegExp.test(inputEmail.value);
let small = inputEmail.nextElementSibling;

if (testEmail){
    small.innerHTML = 'adresse valide';
    small.classList.remove('text-danger');
    small.classList.add('text-success');
}
else{
    small.innerHTML = 'adresse non valide';
    small.classList.remove('text-success');
    small.classList.add('text-danger');

}
};*/