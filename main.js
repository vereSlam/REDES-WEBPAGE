
/* ---------------SECCION ANIMACION----------------------- */

const cuad1 = document.getElementById('cuad1');
const cuad2 = document.getElementById('cuad2');
const cuad3 = document.getElementById('cuad3');
const cuad4 = document.getElementById('cuad4');
const cuad5 = document.getElementById('cuad5');

const cargarCont = (entradas, obser) => {
    /* console.log(salidas)
    console.log(obser) */
    entradas.forEach((entrada) => {
        if(entrada.isIntersecting){
            entrada.target.classList.add('visible');
        } else{
            entrada.target.classList.remove('visible');
        }
    });
}

const obser = new IntersectionObserver(cargarCont, {
    root: null,
    rootMargin: '0px 0px 0px 0px',
    threshold: 0.5
});

obser.observe(cuad1);
obser.observe(cuad2);
obser.observe(cuad3);
obser.observe(cuad4);
obser.observe(cuad5);