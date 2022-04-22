
function toggleMenu() {
    const navbar = document.querySelector ('.navbar'); // Cibler la navbar en créant une variable navbar
    const burger  = document.querySelector ('.burger');//Cibler le burger  
    burger.addEventListener('click',() => { //Evènement au clic avec option fléchée 
        navbar.classList.toggle('show-nav'); // On active ou on retire la classe navbar
    })
}

toggleMenu ();// On active notre fonction 




let round= document.getElementById("round");
let modecolor= document.getElementsByClassName('mode');


let modeDark=document.getElementById('dark-mode');
let modeLight=document.getElementById('light-mode');

function mode(mode1){
    for (valeur of mode1) {
        let lightMode=valeur.getAttribute("class");
        if (lightMode.indexOf("light") != -1  ) {
            valeur.classList.replace('light', 'dark');

            
                modeDark.style.visibility = "visible";
                modeLight.style.visibility ="hidden"; 
            
   
        } else {
            valeur.classList.replace('dark', 'light');
            
        
            modeDark.style.visibility='hidden'; 
            modeLight.style.visibility = "visible";
        }
    }
}


    round.addEventListener('click', function() {mode(modecolor); mode(modeDark); mode(modeLight)})
     

    let balise= document.getElementById('title');
    //let title = balise.textContent;
    
    console.log(balise.textContent);
    
    function changeTitle() {
       switch (balise.textContent) {
            case 'Développeuse Web':
                balise.innerText='motivée';
            break;
    
            case 'motivée':
                balise.innerText='impliquée et appliquée';
            break;
                
            default : 
                balise.innerText='Développeuse Web';  
    
       }}
      
    
    setInterval(changeTitle, 3000);
    
