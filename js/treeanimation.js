window.addEventListener('load', function (){
    /*Intersection Observer API*/
    const images = document.querySelectorAll('.enlaceCuadro');
    
    function triggerAnimation(entries){
        entries.forEach(function(entry){

            const image = entry.target.querySelector('img');

            image.classList.toggle('unset', entry.isIntersecting);
            /*.isIntersecting true, nos dice que la imagen es visible en el viewport*/
            /*image.classList.add('unset', entry.isIntersecting);*/
        });
    }
    /*configuracion visibilidad en el viewport*/
    const options ={
        root: null,
        rootMargin: "0px",
        threshold: 1/*imagen totalmente visible en el viewport*/
    }

    const observer = new IntersectionObserver(triggerAnimation, options);

    images.forEach(function (image){
        observer.observe(image);
    })
})