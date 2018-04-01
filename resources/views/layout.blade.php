<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Krewbit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Jura:400,500,600|Michroma|Rajdhani:400,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Roboto+Mono" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <!--        <link rel="stylesheet" href="{{('css/app.css')}}"> -->
        <link rel="stylesheet" href="{{('css/nucleo-icons.css')}}">
        <link rel="stylesheet" href="{{('css/demo.css')}}">       
        <link rel="stylesheet" href="{{('css/shatter.css')}}">
        <link rel="stylesheet" href="{{('css/keyboard.css')}}">
        <link rel="stylesheet" href="{{('css/bootstrap.offcanvas.css')}}">
        <script>document.documentElement.className = 'js';</script>
    </head>
<body data-spy="scroll" data-target=".navbar">


    @yield('header')

    @yield('body')

    @yield('footer')



  </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="{{('js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{('js/anime.min.js')}}" type="text/javascript"></script>
<script src="{{('js/charming.min.js')}}" type="text/javascript"></script>
<script src="{{('js/binary.js')}}" type="text/javascript"></script>
<script src="{{('js/pieces.js')}}" type="text/javascript"></script>
<script src="{{('js/main.js')}}" type="text/javascript"></script>
<script src="{{('js/keyboard.js')}}" type="text/javascript"></script>
<script src="{{('js/bootstrap.offcanvas.js')}}" type="text/javascript"></script>



<script>
        {
        

            const piecesEl = document.querySelector('.content .tiles');
            const piecesObj = new Pieces(piecesEl, {
                 pieces: {rows: 14, columns: 12}
            });
            const menuEl = document.querySelector('.page-nav');
            const optionsCtrl = document.querySelector('#open');
            const closeOptionsCtrl = document.querySelector('#close');
            const hoverItem = document.querySelector('.dummy--code');
            const hoverTrigger = document.querySelector('.hover');

            const showOptions = () => {
              
                menuEl.classList.add('page-nav--open');
                hoverTrigger.classList.add('hover--open');

                piecesObj.animate({
                    duration: 3000,
                    delay: (t,i) => {
                        const elBounds = piecesEl.getBoundingClientRect();
                        const x1 = elBounds.left + elBounds.width/2;
                        const y1 = elBounds.top + elBounds.height/2;
                        const tBounds = t.getBoundingClientRect();
                        const x2 = tBounds.left + tBounds.width/2;
                        const y2 = tBounds.top + tBounds.height/2;
                        const dist = Math.sqrt(Math.pow(x2-x1,2) + Math.pow(y2-y1,2));
                        const maxDist = Math.sqrt(Math.pow(elBounds.left-x1,2) + Math.pow(elBounds.top-y1,2));
                        const maxDelay = 300;

                        t.dataset.centerx = x2;
                        t.dataset.centery = y2;

                        return -1*maxDelay/maxDist*dist + maxDelay;
                    },
                    easing: [0.1,1,0,1],
                    translateX: (t,i) => { 
                        return t.dataset.column < piecesObj.getTotalColumns()/2 ? anime.random(-400,0) : anime.random(0,400);
                    },
                    translateY: (t,i) => { 
                        return t.dataset.row < piecesObj.getTotalRows()/2 ? anime.random(-400,0) : anime.random(0,400);
                    },
                    opacity: 0.2
                });
                
                anime.remove(optionsCtrl);
                anime({
                    targets: optionsCtrl,
                    duration: 700,
                    easing: 'easeOutExpo',
                    scale: 1.2,
                    opacity: 0
                });

                anime.remove(menuEl);
                anime({
                    targets: menuEl,
                    duration: 700,
                    delay: 150,
                    easing: 'easeOutExpo',
                    scale: [0,1],
                    opacity: 1
                });
            };

            const hideOptions = (ev) => {
                ev.preventDefault();
                menuEl.classList.remove('page-nav--open');
                 hoverTrigger.classList.remove('hover--open');

                piecesObj.animate({
                    duration: 600,
                    delay: (t,i) => {
                        const elBounds = piecesEl.getBoundingClientRect();
                        const x1 = elBounds.left + elBounds.width/2;
                        const y1 = elBounds.top + elBounds.height/2;
                        const x2 = t.dataset.centerx;
                        const y2 = t.dataset.centery;
                        const dist = Math.sqrt(Math.pow(x2-x1,2) + Math.pow(y2-y1,2));
                        const maxDist = Math.sqrt(Math.pow(elBounds.left-x1,2) + Math.pow(elBounds.top-y1,2));
                        const maxDelay = 800;

                        return maxDelay/maxDist*dist;
                    },
                    easing: [0.1,1,0,1],
                    translateX: 0,
                    translateY: 0,
                    opacity: 1
                });
                
                anime.remove(optionsCtrl);
                anime({
                    targets: optionsCtrl,
                    duration: 700,
                    delay: 200,
                    easing: 'easeOutQuint',
                    scale: [1.1,1],
                    opacity: 1
                });

                anime.remove(menuEl);
                anime({
                    targets: menuEl,
                    duration: 700,
                    easing: 'easeOutQuint',
                    scale: 0.8,
                    opacity: 0
                });
            };

            const randomizeTilts = (ev) => {
                ev.preventDefault();
               

             
                piecesObj.animate({
                    duration: 3000,
                    delay: (t,i) => {
                        const elBounds = piecesEl.getBoundingClientRect();
                        const x1 = elBounds.left + elBounds.width/2;
                        const y1 = elBounds.top + elBounds.height/2;
                        const tBounds = t.getBoundingClientRect();
                        const x2 = tBounds.left + tBounds.width/2;
                        const y2 = tBounds.top + tBounds.height/2;
                        const dist = Math.sqrt(Math.pow(x2-x1,2) + Math.pow(y2-y1,2));
                        const maxDist = Math.sqrt(Math.pow(elBounds.left-x1,2) + Math.pow(elBounds.top-y1,2));
                        const maxDelay = 300;

                        t.dataset.centerx = x2;
                        t.dataset.centery = y2;

                        return -1*maxDelay/maxDist*dist + maxDelay;
                    },
                    easing: [0.1,1,0,1],
                    translateX: (t,i) => { 
                        return t.dataset.column < piecesObj.getTotalColumns()/2 ? anime.random(-400,0) : anime.random(0,400);
                    },
                    translateY: (t,i) => { 
                        return t.dataset.row < piecesObj.getTotalRows()/2 ? anime.random(-400,0) : anime.random(0,400);
                    },
                    opacity: 0.2
                });

        
            };
                        const rearrangeTiles = (ev) => {
                ev.preventDefault();
             

                piecesObj.animate({
                    duration: 600,
                    delay: (t,i) => {
                        const elBounds = piecesEl.getBoundingClientRect();
                        const x1 = elBounds.left + elBounds.width/2;
                        const y1 = elBounds.top + elBounds.height/2;
                        const x2 = t.dataset.centerx;
                        const y2 = t.dataset.centery;
                        const dist = Math.sqrt(Math.pow(x2-x1,2) + Math.pow(y2-y1,2));
                        const maxDist = Math.sqrt(Math.pow(elBounds.left-x1,2) + Math.pow(elBounds.top-y1,2));
                        const maxDelay = 800;

                        return maxDelay/maxDist*dist;
                    },
                    easing: [0.1,1,0,1],
                    translateX: 0,
                    translateY: 0,
                    opacity: 1
                });
            };

            optionsCtrl.addEventListener('click', showOptions);
            closeOptionsCtrl.addEventListener('click', hideOptions);
            hoverItem.addEventListener('mouseenter', randomizeTilts);
            hoverTrigger.addEventListener('mouseenter', randomizeTilts);
            hoverTrigger.addEventListener('mouseleave', rearrangeTiles);
        }
        </script>
</html>
