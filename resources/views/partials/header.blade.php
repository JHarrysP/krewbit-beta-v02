<div id="home" class="header d-none d-md-block d-lg-block d-xs-none">
<svg class="hidden">
      <symbol id="icon-menu" viewBox="0 0 24 24">
 
        <path d="M23.8,6H0.1V3h23.7C23.8,3,23.8,6,23.8,6z M23.8,10.5H0.1v3h23.7C23.8,13.5,23.8,10.5,23.8,10.5z M24,18H10v3h14V18z"/>
      </symbol>
      <symbol id="icon-menu-alt" viewBox="0 0 24 24">

        <path d="M10.4,6H0V3h10.4C10.4,3,10.4,6,10.4,6z M10.4,10.5H0v3h10.4C10.4,13.5,10.4,10.5,10.4,10.5z M15.1,18H9v3h6.1V18z M23.4,6H13V3h10.4C23.4,3,23.4,6,23.4,6z M23.4,10.5H13v3h10.4C23.4,13.5,23.4,10.5,23.4,10.5z M23.5,18h-6.1v3h6.1V18z"/>
      </symbol>
    </svg>
    <main >
      <div class="pieces"></div>
      <!-- <div class="pieces" style="background-image: url(/img/brandheader.jpg)" data-img-alt="url(/img/alt.jpg)" data-img-code="url(/img/bin.jpg)"></div> -->
      <div class="overlay overlay--hidden"></div>
      <div class="content">
        <div class="content__inner">
          <div class="content__top">

            <h2 class="title">
              <span class="title__inner mode mode--design mt-5" data-switch data-glitch>ingeniería-digital<span><i class="nc-icon nc-minimal-left d-inline px-5 " style="font-size: .6em; color: #ff3366;"></i></span></span>
            </h2>
            <div class="controls mt-5" style="z-index: 2;">
              <button class="btn btn--menu mode mode--design" data-switch>
                <svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg>
                <svg class="icon icon--menu-alt"><use xlink:href="#icon-menu-alt"></use></svg>
              </button>
            </div>
          </div>
          <nav class="page-nav">
            <div class="container">
             <div class="row justify-content-center">
               <div class="col-md-6">
            <div class="pb-2 dummy--code">
              <p>HTMLElement.prototype.center = function(){</p>
              <p>var  w = document.documentElement.clientWidth,</p>  
              <p class="pl-4">&nbsp;h = document.documentElement.clientHeight;</p>
              <p>this.style.position = 'absolute';</p>
              <p>this.style.left = (w - this.offsetWidth)/2 + 'px';</p>
              <p>this.style.top = (h - this.offsetHeight)/2 + window.pageYOffset + 'px';}</p>
              <p>var img = new Image(),</p>
              <p>body = document.getElementsByTagName("body")[0];</p>
              <p>img.src = "/img/krewbit-logo.png";</p>
              <p>img.onload = function(){</p>
              <p class="pl-4">this.center();}</p>
              <p>body.appendChild(img);</p>      
           </div>
               </div>
             </div>
          </div>
          </nav>
<div class="hover"></div>
       <div class="tiles" style="background-image: url(/img/brandheader.jpg)"></div>
          <div class="menu" style="font-family: 'Roboto Mono', monospace; font-size: 1em; text-transform: lowercase; color:#585656" >
            <ul class="menu__inner">
              <li class="menu__item" data-switch data-glitch><a class="menu__link" data-switch>Diseño de Interfaces</a></li>
              <li class="menu__item"><a class="menu__link" data-switch>Portafolio</a></li>
              <li class="menu__item active"><a class="menu__link" data-switch>Proyectos</a></li>
              <li class="menu__item" data-switch data-glitch><a class="menu__link" data-switch>Inspiraciones</a></li>
            </ul>
          </div>
          <div class="menu menu--code" style="display: none;">
            <ul class="menu__inner">
              <li class="menu__item"><a class="menu__link" data-switch>On Coding</a></li>
              <li class="menu__item"><a class="menu__link" data-switch>DBA: Data Base Admin</a></li>
              <li class="menu__item"><a class="menu__link" data-switch>SysAdmin</a></li>
              <li class="menu__item"><a class="menu__link" data-switch>Inducciones</a></li>
            </ul>
          </div>
          <div class="content__bottom">
            <div class="switch mode mode--design">
              <a id="close" class="switch__item switch__item--current">Diseño</a>
              <a id="open" class="switch__item"><span class="mode mode--design active" data-switch data-glitch>Programación</span><strong class="d-inline pl-1 bar-code">█</strong></a>
            </div>
            <div class="link-wrap">
              <a class="contact-link mode mode--design" data-switch data-glitch>Work with us / Trabaja con nosotros</a>
            </div>
          </div>
      <div class="container" style="z-index: 2; color: #bdc3c7;">
        <div class="text-center pb-2">
          <p class="mb-0" >Para darte a conocer y expandir tus horizontes es necesario tener presencia en la <strong style="color: #3498db;">Red</strong>.</p>
          <footer class="blockquote-footer mode mode--design" ><cite title="Source Title">Krewbit</cite></footer>
        </div>
    </div>
        </div><!-- /content__inner-->

      </div><!-- /content -->

      <div class="loading"></div>
    </main>

</div>


<style>
  html,body {
  height: 100%;
  background-color: #000;


  }


.header {
  height: 100%;
  width: 100%;

  font-family:'Jura', sans-serif;
  font-size: .9rem;
}

 .bar-code{
     animation: text-flicker 1s ease infinite;


  }


</style>
