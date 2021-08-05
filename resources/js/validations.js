//expresiones regulares para realizar validaciones
const expressions = {
    user: /^[a-zA-Z0-9\_\-&.@]{4,16}$/, // Letras, numeros, guion y guion_bajo
    name: /^([a-zA-Z])*$/, //Letras
    dni: /^([0-9])*$/, //Numeros del 0 al 9
    address: /^[a-zA-Z0-9\s]{1,30}$/, // Letras numeros y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,13}$/ // 7 a 13 numeros.
}

//validar datos cliente
formulario.addEventListener("submit", (e) => {
    let inputs = document.getElementById('formLoadClientData').querySelectorAll('input');

    //validacion 
    if (inputs[0].value !== "" && expressions.name.test(inputs[0].value) != true || inputs[0].value === "") {
        e.preventDefault();
        document.getElementById('inputSurname').classList.add('is-danger');
    } else {
        document.getElementById('').classList.remove('is-danger');
    }
});