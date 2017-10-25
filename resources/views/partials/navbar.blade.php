<nav class="navbar fixed-top navbar-expand-sm navbar-dark">
<a class="navbar-brand" href="#"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse  justify-content-end" id="navbarNavAltMarkup">
  <div class="navbar-nav ">
    <p><a class="nav-item nav-link active" href="#home">#top<span class="sr-only">(current)</span></a></p>
    <p><a class="nav-link" href="#">·</a></p>
    <p><a class="nav-item nav-link hold" href="#services">#servicios</a></p>
    <p><a class="nav-link" href="#">·</a></p>
    <p><a class="nav-item nav-link" href="#contact">#contacto</a></p>
  </div>
</div>
</nav>


<style>
@media (min-width: 50em){
	   nav{
   	background-color: #000;
   	color: #ecf0f1;
   	font-weight: lighter;
   	font-family: 'Jura', sans-serif;
   	font-size: .8rem;

   }

     .navbar-nav  {
    
    background-color: #000;
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

   a {
  	 animation: text-flicker 20s linear infinite;
  	 

  }


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
/*.navbar-nav p a:hover {
  -webkit-animation: neon2 1.5s ease-in-out infinite alternate;
  -moz-animation: neon2 1.5s ease-in-out infinite alternate;
  animation: neon2 1.5s ease-in-out infinite alternate;
}*/
/*@-webkit-keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
  }
  to {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228DFF, 0 0 35px #228DFF, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 75px #228DFF;
  }
}
*/
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

@keyframes border-flicker {
  0% {
    opacity:0.1;
    -webkit-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
-moz-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
  }
  2% {
    opacity:1;
    -webkit-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
-moz-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
  }
  4% {
    opacity:0.1;
    -webkit-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
-moz-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
  }
  
  8% {
    opacity:1;
    -webkit-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
-moz-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
  }
  70% {
    opacity:0.7;
    -webkit-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
-moz-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
  }
  100% {
    opacity:1;
    -webkit-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
-moz-box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
box-shadow: 0px 0px 78px 4px rgba(16,134,232,0.73);
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
@media (max-width: 49em) {
	   nav{

   	background-color: #000;
   	color: #ecf0f1;
   	font-weight: lighter;
   	font-family: 'Jura', sans-serif;
   	font-size: .8rem;

   }

  .navbar-nav .nav-link {

  color: #ecf0f1;
  background-color: #000;
  border-bottom: .15rem solid transparent;
  
  }	
	
}
</style>
