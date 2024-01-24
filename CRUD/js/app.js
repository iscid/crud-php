// Datos del formulario 
const nombreInput = document.querySelector('#nombre');
const apellidoPaternoInput = document.querySelector('#apellidoPaterno');
const apellidoMaternoInput = document.querySelector('#apellidoMaterno');
const usuarioInput = document.querySelector('#usuario');
const correoInput = document.querySelector('#correo');

const formularioGuardar = document.querySelector('#formularioGuardar');

formularioGuardar.addEventListener('submit', validarCampos);

function validarCampos(e){
    e.preventDefault();
    if(nombreInput === '' || apellidoPaternoInput === '' || apellidoMaternoInput === '' || usuarioInput === '' || correoInput === '') {
        console.log('Todos los campos son obligatorios');
        return;
    }

    // console.log('Validando Datos');
}