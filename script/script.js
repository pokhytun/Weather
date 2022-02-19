document.addEventListener("DOMContentLoaded", () => {

    let wind = document.querySelector('.wind');
        
    function windDirection(deg){
        wind.style.transform = `rotate(${deg}deg)`;
    }  

    windDirection(wind.dataset['wind']);

    
});

