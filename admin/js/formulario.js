const formulario = document.getElementById('formulario_update');
const inputs = document.querySelectorAll('#formulario_update input');
const expresiones ={
	//EXPRESIONES REGULARES DE CADA CAMPO
	//usuario: /^[a-zA-Z0-9\_\-]{4,16}$/,//Letras, numeros, guion y guion bajo
	nombre: /^[a-zA-ZÀ-ÿ\-_\s]{1,40}$/,//Letras y espacios, pueden llevar acentos
	apellidoPaterno: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	apellidoMaterno: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	curp: /^[a-zA-Z0-9]{1,18}$/,
	boleta: /^[E\P\0-9]{1,10}$/,
	calle:/^[a-zA-Z0-9]{1,30}$/,
	numero: /^\d{1,5}$/,
	colonia: /^[a-zA-ZÀ-ÿ\-_\s]{1,50}$/,
	alcaldia: /^[a-zA-ZÀ-ÿ\-_\s]{1,40}$/,
	CP: /^\d{5}$/,
	//contrasena: /^.{1,12}$/,//4 a 12 digitos
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-A0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{10}$/, //7 a 14 numeros
	nEscuela: /^[a-zA-Z]{1,30}$/,
	promedio: /^[0-9\.]{1,5}$/
}

const campos ={
	nombre: false,
	apellidoPaterno: false,
	apellidoMaterno: false,
	curp: false,
	boleta: false,
	calle: false,
	numero: false,
	colonia: false,
	alcaldia: false,
	CP: false,
	email: false,
	telefono: false,
	Nescuela: false,
	promedio: false
}

const validarCampo = (expresion, input, campo) =>{
	if (expresion.test(input.value)){
		document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupoIncorrecto');
		document.getElementById(`grupo_${campo}`).classList.add('formulario_grupoCorrecto');
		document.querySelector(`#grupo_${campo} i`).classList.add('fa-check-cricle');
		document.querySelector(`#grupo_${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo_${campo} .formulario_inputError`).classList.remove('formulario_inputErrorActivo');
	}else{
		document.getElementById(`grupo_${campo}`).classList.add('formulario_grupoIncorrecto');
		document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupoCorrecto');
		document.querySelector(`#grupo_${campo} i`).classList.add('fa-check-cricle');
		document.querySelector(`#grupo_${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo_${campo} .formulario_inputError`).classList.add('formulario_inputErrorActivo');
		campos[campo] = false;
	}
}

const validaFormulario = (e) =>{
	switch(e.target.name){
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;

		case "apellidoPaterno":
			validarCampo(expresiones.apellidoPaterno, e.target, 'apellidoPaterno');
		break;

		case "apellidoMaterno":
			validarCampo(expresiones.apellidoPaterno, e.target, 'apellidoMaterno');
		break;

		case "curp":
			validarCampo(expresiones.curp, e.target, 'curp');
		break;

		case "boleta":
			validarCampo(expresiones.boleta, e.target, 'boleta');
		break;

		case "calle":
			validarCampo(expresiones.calle, e.target, 'calle');
		break;

		case "numero":
			validarCampo(expresiones.numero, e.target, 'numero');
		break;

		case "colonia":
			validarCampo(expresiones.colonia, e.target, 'colonia');
		break;

		case "alcaldia":
			validarCampo(expresiones.alcaldia, e.target, 'alcaldia');
		break;

		case "CP":
			validarCampo(expresiones.CP, e.target, 'CP');
		break;

		case "email":
			validarCampo(expresiones.email, e.target, 'email');
		break;

		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;

		case "Nescuela":
			validarCampo(expresiones.Nescuela, e.target, 'Nescuela');
		break;

		case "promedio":
			validarCampo(expresiones.promedio, e.target, 'promedio');
		break;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validaFormulario);
	input.addEventListener('blur', validaFormulario);
});
