# PORTFOLIO IBTISSEM

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

/* Variables */
:root {
  --font-size:1rem;
}
.light-mode {
  --navbar-color: #222;
  --navbar-bg-color: #F0F0F0;  
}
.dark-mode {
  --navbar-color: #FFF;
  --navbar-bg-color: #000;  
}

/* Reset */
* {
  box-sizing:border-box; 
  outline:none;
  margin:0;
  padding:0;
}
ul {
  list-style:none;
}

/* Basic style */
body {
  margin:0;
  font-size:var(--font-size);
  font-family: 'Poppins', sans-serif;
}
.main-content {
  padding:1rem;
}
/* Navbar */
.navbar {  
  display:flex;
  align-items:center; 
  justify-content:space-between;   
  padding:10px;
  font-size:1.1rem;
  background:var(--navbar-bg-color);
  color:var(--navbar-color);
}
.navbar__links { 
  display:flex;  
}
.navbar__link { 
  padding:0 10px;
}
.navbar__link > a { 
  color:var(--navbar-color);
  text-decoration:none;
}
.burger {
  display:none;
}

/*  Small device */
@media screen and (max-width:767.98px) {
  .navbar__links { 
    overflow:hidden;
    display:flex;
    flex-direction:column;
    width:0;
    height:calc(100vh - 65px);  
    position:absolute;
    top:65px;
    right:0;     
    background:var(--navbar-bg-color);     
    transform: translateX(110%);
    transition: all .5s ease-in-out;
  }
  .show-nav .navbar__links { 
    
    width:100vw;    
    transform: translateX(0);
  } 
  .navbar__link {    
    transform: translateX(101%);
    transition: all .5s ease-in-out;
  }
  
  .show-nav .navbar__link  {        
    transform: translateX(0);    
  }   
  .navbar__link > a {
    display:block;
    padding:1rem;
    font-size:1.6rem;
    color:var(--navbar-color);  
    transition: all .4s ease-in-out;
  }
  .navbar__link > a:hover {
    padding-left:2rem;
    letter-spacing:5px;
  }
  
  /* Toggle menu */
  .burger {
    display:block;
    position:relative;
    padding:0;
    width:45px;
    height:45px;
    border:none;
    background:transparent;
    cursor:pointer;
  }
  .bar {
    display:block;    
    width:45px;
    height:4px;  
    border-radius:3px;
    background:var(--navbar-color); 
    transition: all .5s ease-in-out;   
  }
  .bar::before, .bar::after {
    content:"";
    width:45px;
    height:4px;
    position:absolute; 
    left:0;  
    background:var(--navbar-color); 
    border-radius:3px;    
    transition: all .5s ease-in-out;
  }
  .bar::before {
    transform:translateY(-12px)
  }
  .bar::after {
    transform:translateY(12px)
  }
  .show-nav .bar {
    width:0;
    background:transparent;    
  }
  .show-nav .bar::before {
    transform:rotate(45deg);
  }
  .show-nav .bar::after {
    transform:rotate(-45deg);
  }
  
  /* Bonus - Animations */
  .show-nav .first {      
    transition: all 1s ease-out;
  } 
  .show-nav .second {      
    transition: all 1.1s ease-out;
  } 
  .show-nav .third {      
    transition: all 1.2s ease-out;
  } 
  .show-nav .four {      
    transition: all 1.3s ease-out;
  } 
  .show-nav .fifth {      
    transition: all 1.4s ease-out;
  }
}

/*  Medium device - Bonus */
@media screen and (min-width:768px) {
  .navbar__link > a::after {
    display:block;
    content:"";
    width:0;
    height:1px;
    background:var(--navbar-color);
    transition:width .4s;
  }
  .navbar__link:hover > a::after {
    width:100%;
  }
}

