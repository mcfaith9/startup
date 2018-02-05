<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pila Solution</title>   

</head>
<style>
    body {
        font-family: 'Lato';
    }    
    .intro {
        background: url() no-repeat;
        background-position: 50% 50%;
        background-size: cover;
        background: #1abc9c;
    }
    .intro h1 {
        text-align: center;
        text-transform: uppercase;
        font-size: 7em;
        color: #fff;
    }
    /*-- slider-up-arrow --*/
    #toTop {
        display: none;
        text-decoration: none;
        position: fixed;
        bottom: 3%;
        right: 3%;
        overflow: hidden;
        width: 32px;
        height: 32px;
        border: none;
        text-indent: 100%;
        background: url("{{ asset('image/move-up.png') }}") no-repeat 0px 0px;
    }
    #toTopHover {
        width: 32px;
        height: 32px;
        display: block;
        overflow: hidden;
        float: right;
        opacity: 0;
        -moz-opacity: 0;
        filter: alpha(opacity=0);
    }
    /*Scroll Style*/
    /* width */
    ::-webkit-scrollbar {
        width: 0px;
    }
</style>

<body>

<div class="intro">
    <h1>This is intro</h1>
</div> 

<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome_normalize.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome_component2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome_button.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome.css') }}">
@yield('welcome_content')

<script src="{{ asset('js/welcome_js/welcome_menu.js') }}"></script> 
<script src="{{ asset('js/welcome_js/welcome_polyfills.js') }}"></script> 
<script src="{{ asset('js/plugins/modernizr-2.6.2.min.js') }}"></script> 

    <!-- <script src="{{ asset('js/welcome_js/welcome.js') }}"></script>  -->
    
    <script src="{{ asset('js/welcome_js/2.1.3_jquery.min.js') }}"></script> 
    <script type="text/javascript">
        (function() {

            var windowH = $(window).height(),
                introEl = $('div.intro'),
                introHeadingH = introEl.find('h1').height();

            introEl.css('padding', (windowH - introHeadingH)/2 + 'px 0');

            $(document).on('scroll', function() {
                introEl.slideUp(1000, function() { $(document).off('scroll'); });
            });
        })();
    </script>      
    
    <script src="{{ asset('js/plugins/smothScrolling.js') }}"></script>
    <script src="{{ asset('js/plugins/easing.js') }}"></script> 
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
        
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    
    <script src="{{ asset('js/plugins/move-top.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
    </script>
</body>
</html>
