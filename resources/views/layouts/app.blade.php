<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Pila Solution</title>   
    <script>document.documentElement.className = 'js';</script>
</head>
<style>
    /*body {
        font-family: 'Lato';
    }    
    .intro {
        background: url() no-repeat;
        background-position: 50% 50%;
        background-size: cover;
        background: #1abc9c;
        z-index: 99999999;
    }
    .intro h1 {
        text-align: center;
        text-transform: uppercase;
        font-size: 7em;
        color: #fff;
    }
    /*-- slider-up-arrow --*/
    /*#toTop {
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
    }*/
    html {
        overflow-y: hidden;
    }  
    .content_preload {
        display:none;
    }

    .preload {
        margin:0;
        position:absolute;
        top:50%;
        left:50%;
        margin-right: -50%;
        transform:translate(-50%, -50%);
    } 
    /*Scroll Style*/
    /* width */
    ::-webkit-scrollbar {
        width: 0px;
    }
</style>

<body class="demo-2">

<div class="preload">
    <img src="{{asset('image/gif/Preloader_5.gif')}}" />
</div>

<div class="content_preload">
    @yield('welcome')
</div>

    <!-- <script src="{{asset('js/3d_map_js/classie.js')}}"></script>
    <script src="{{asset('js/3d_map_js/list.min.js')}}"></script>
    <script src="{{asset('js/3d_map_js/main.js')}}"></script>   
    <script src="{{asset('js/3d_map_js/modernizr-custom.js')}}"></script> -->

<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_contact.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_bundle_css_js/css/normalize.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_bundle_css_js/css/demo.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_bundle_css_js/css/component.css')}}" />

<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome_modal_css/welcome_modal.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome_normalize.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome_menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome.css') }}">

<script src="{{asset('css/welcome_css/welcome_bundle_css_js/js/anime.min.js')}}"></script>
<script src="{{asset('css/welcome_css/welcome_bundle_css_js/js/enquire.min.js')}}"></script>
<script src="{{asset('css/welcome_css/welcome_bundle_css_js/js/tabsnav.js')}}"></script>
<script src="{{asset('css/welcome_css/welcome_bundle_css_js/js/demo1.js')}}"></script>
<!-- Map -->

<!-- //Map End here  -->
<script src="{{ asset('js/fontawesome.js') }}"></script>
<script src="{{ asset('js/welcome_js/welcome_menu.js') }}"></script> 
<script src="{{ asset('js/welcome_js/welcome_polyfills.js') }}"></script> 
<script src="{{ asset('js/plugins/modernizr-2.6.2.min.js') }}"></script> 
<script src="{{ asset('js/plugins/classie.js') }}"></script> 
<script src="{{ asset('js/welcome_js/modalEffects.js') }}"></script> 

<script src="{{ asset('js/plugins/jquery-1.8.3.js') }}"></script>
<script>
    $(function() {
        $(".preload").fadeOut(1000, function() {
            $(".content_preload").fadeIn(3500);
        });
    });
</script>
<!-- <script src="{{ asset('js/welcome_js/2.1.3_jquery.min.js') }}"></script> 
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
</script> -->
</body>
</html>