
function toggleMenu() {
    const navbar = document.querySelector ('.navbar'); // Cibler la navbar en créant une variable navbar
    const burger  = document.querySelector ('.burger');//Cibler le burger  
    burger.addEventListener('click',() => { //Evènement au clic avec option fléchée 
        navbar.classList.toggle('show-nav'); // On active ou on retire la classe navbar
    })
}

toggleMenu ();// On active notre fonction 




let round= document.getElementById("round");
let light= document.getElementsByClassName('navbar');
let dark= document.getElementsByClassName('main-content');
/*let modedark=document.getElementsByClassName('mode-dark');
let modelight= document.getElementsByClassName('mode-light');*/

function mode(mode1){
    for (valeur of mode1) {
        let lightMode=valeur.getAttribute("class");
        if (lightMode.indexOf("light") != -1  ) {
            valeur.classList.replace('light-mode', 'dark-mode');
            
          
       
        } else {
            valeur.classList.replace('dark-mode', 'light-mode');
           
        }
    }
}


    round.addEventListener('click', function() {mode(light); mode(dark)})
     


