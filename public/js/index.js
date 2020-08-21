let btnMenu = document.querySelector('.btn-menu');
let menu = document.querySelector('.list-container');
let containerMenu = document.querySelector('.menu');
let activador = true;

// Anim Menu Nav
btnMenu.addEventListener('click', ()=>{

	document.querySelector('.btn-menu i').classList.toggle('fa-times');

	if(activador){

		menu.style.left = "0";
		menu.style.transition = "0.5s";

		activador = false;
	}else{
		activador =true;

		menu.style.left = "-100%";
		menu.style.transition = "0.5s";

		activador = true;

	}
});

// Intercal Class activador

let enlaces = document.querySelectorAll('.lists li a');

enlaces.forEach((element) =>{


 element.addEventListener('click',(event)=>{

 	enlaces.forEach( (link) => {
 		link.classList.remove('activo');

 	});

 	event.target.classList.add('activo');

 });


});


// Effects Scroll

let prevScrollPos = window.pageYOffset;
let stairwayToHeaven = document.querySelector('.stairway-to-heaven');
window.onscroll = () => {

	let currenScrollPos = window.pageYOffset;

	//Mostrar y Ocultar Menu
	if (prevScrollPos > currenScrollPos) {

		containerMenu.style.top = "0";
		containerMenu.style.transition = "0.5s";

	}else{

		containerMenu.style.top = "-60px";
		containerMenu.style.transition = "0.5s";
	}

	prevScrollPos = currenScrollPos;

	// Mostrar y Ocultar Scroll Styles

	let arriba = window.pageYOffset;

	if (arriba <= 600) {
		containerMenu.style.borderBottom = "none";

		stairwayToHeaven.style.right = "-100%";

	}else {
		containerMenu.style.borderBottom = "5px solid #6f0000";

		stairwayToHeaven.style.right = "0";
		stairwayToHeaven.style.transition = "0.5s"
	}
}

stairwayToHeaven.addEventListener('click', () => {

	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
});

let irAbajo = document.querySelector('#abajo');

irAbajo.addEventListener('click', () => {

	document.body.scrollTop = 600;
	document.documentElement.scrollTop = 600;
});
