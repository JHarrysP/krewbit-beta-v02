<nav class="navbar fixed-top navbar-expand-sm navbar-dark justify-content-end">
<a class="navbar-brand" href="#"></a>
<button type="button" class="navbar-toggler offcanvas-toggle" data-toggle="offcanvas" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="navbar-offcanvas  navbar-offcanvas-touch " id="navbarNavAltMarkup">
  <div class="navbar-nav ">
    <p><a class="nav-item nav-link active" href="#top">#Top<span class="sr-only">(current)</span></a></p>
    <p><a class="nav-link" href="#">·</a></p>
    <p><a class="nav-item nav-link hold" href="#services">#Servicios</a></p>
    <p><a class="nav-link" href="#">·</a></p>
    <p><a class="nav-item nav-link" href="#contact">#Contacto</a></p>
  </div>
</div>
</nav>




<style>
@media (min-width: 50em){


.navbar {
    
    background-color: #000;
    color: #ecf0f1;
    font-weight: lighter;
    font-family: 'Jura', sans-serif;
    font-size: .8rem;
  }

  .navbar-nav .nav-link {

  color: rgba(255,255,255,.5);
  background-color: transparent;
  border-bottom: .15rem solid transparent;
   margin-left: .5rem;
  }

  .navbar-nav .nav-item:hover,
  .navbar-nav .nav-item:focus {
  border-bottom-color: rgba(255,255,255,.25);
  }

  .navbar-nav .active {
  color: #fff;
  border-bottom-color: #fff;
  }

/*   p a {
  	 animation: text-flicker 20s linear infinite;
  	 

  }*/


 .active{
  	 animation: letter-flicker 10s linear infinite;

  }
  
  .hold{
  	animation: letter-flicker 25s linear infinite;
  }

  a{

  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;

 }
 
@keyframes text-flicker {
  0% {
    opacity:0.1;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5);
  }
  
  2% {
    opacity:1;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5);
  }
  8% {
    opacity:0.1;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5);
  }
  9% {
    opacity:1;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5);
  }
  12% {
    opacity:0.1;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5);
  }
  20% {
    opacity:1;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5)
  }
  25% {
    opacity:0.3;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5)
  }
  30% {
    opacity:1;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5)
  }
  
  70% {
    opacity:0.7;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5)
  }
  
  72% {
    opacity:0.2;
    text-shadow:0px 0px 0px rgba(236, 240, 241,.5)
  }
  
  77% {
    opacity:.9;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5)
  }
  100% {
    opacity:.9;
    text-shadow: 0px 0px 0px rgba(236, 240, 241,.5)
  }
}

@keyframes active-flicker {
  0% {
    opacity:0.1;
    text-shadow: 0px 0px 0px #ff3366;;
  }
  
  2% {
    opacity:1;
    text-shadow: 0px 0px 0px #ff3366;;
  }
  8% {
    opacity:0.1;
    text-shadow: 0px 0px 0px #ff3366;;
  }
  9% {
    opacity:1;
    text-shadow: 0px 0px 0px #ff3366;;
  }
  12% {
    opacity:0.1;
    text-shadow: 0px 0px 0px #ff3366;;
  }
  20% {
    opacity:1;
    text-shadow: 0px 0px 0px #ff3366;
  }
  25% {
    opacity:0.3;
    text-shadow: 0px 0px 0px #ff3366;
  }
  30% {
    opacity:1;
    text-shadow: 0px 0px 0px #ff3366;
  }
  
  70% {
    opacity:0.7;
    text-shadow: 0px 0px 0px #ff3366;
  }
  
  72% {
    opacity:0.2;
    text-shadow:0px 0px 0px #ff3366;
  }
  
  77% {
    opacity:.9;
    text-shadow: 0px 0px 0px #ff3366;
  }
  100% {
    opacity:.9;
    text-shadow: 0px 0px 0px #ff3366;
  }
}

@keyframes anchor-flicker {
  0% {
    opacity:0.1;
    text-shadow: 0px 0px 0px #ff3366;
  }
  2% {
    opacity:0.1;
    text-shadow: 0px 0px 0px #ff3366;
  }
  4% {
    opacity:1;
    text-shadow: 0px 0px 0px #ff3366;
  }
  
  
  19% {
    opacity:1;
    text-shadow: 0px 0px 0px #ff3366;
  }
  21% {
    opacity:0.1;
    text-shadow: 0px 0px 0px #ff3366;
  }
  23% {
    opacity:1;
    text-shadow: 0px 0px 0px #ff3366;
  }
  
  80% {
    opacity:1;
    text-shadow: 0px 0px 0px #ff3366;
  }
  83% {
    opacity:0.4;
    text-shadow: 0px 0px 0px #ff3366;
  }
  87% {
    opacity:1;
    text-shadow: 0px 0px 0px #ff3366;
  }
}

@keyframes letter-flicker {
  0% {
    opacity:0.1;
    text-shadow: 0px 0px 0px rgba(52, 152, 219,.5);
  }
  2% {
    opacity:0.1;
    text-shadow: 0px 0px 0px rgba(52, 152, 219,.5);
  }
  4% {
    opacity:1;
    text-shadow: 0px 0px 0px rgba(52, 152, 219,.5);
  }
  
  
  19% {
    opacity:1;
    text-shadow: 0px 0px 0px rgba(52, 152, 219,.5);
  }
  21% {
    opacity:0.1;
    text-shadow: 0px 0px 0px rgba(52, 152, 219,.5);
  }
  23% {
    opacity:1;
    text-shadow: 0px 0px 0px rgba(52, 152, 219,.5);
  }
  
  80% {
    opacity:1;
    text-shadow: 0px 0px 0px rgba(52, 152, 219,.5);
  }
  83% {
    opacity:0.4;
    text-shadow: 0px 0px 0px rgba(52, 152, 219,.5);
  }
  87% {
    opacity:1;
    text-shadow: 0px 0px 0px rgba(52, 152, 219,.5);
  }
}
}
@media (max-width: 50em) {
	   .navbar-offcanvas{

   	background-color: #ecf0f1;
   	color: #313131;
   	font-weight: lighter;
   	font-family: 'Jura', sans-serif;
   	font-size: .8rem;
    overflow:hidden;

   }
   .navbar-dark .navbar-nav .nav-link.active{
    color: #2c3e50;
   }

  .navbar-dark .navbar-nav .nav-link {

  color: #2980b9;

 
  
  }	

	
}
</style>
