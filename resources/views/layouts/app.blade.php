<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pila Solution</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
       
    <script>document.documentElement.className = 'js';</script>
</head>
<style>
    html {
        overflow-y: hidden;
    }  
    .content_preload {
        display:none;
    }

    .preload {
        margin:0;
        position: fixed;
        top:50%;
        left:50%;
        margin-right: -50%;
        transform:translate(-50%, -50%);
        z-index: 999999999999999999999;
    } 
    /*Scroll Style*/
    /* width */
    ::-webkit-scrollbar {
        width: 0px;
    }
</style>

<body>
<div class="preload">  
    <img src="{{asset('image/gif/Preloader_5.gif')}}" />
</div>

<div class="content_preload">
    @yield('welcome')
</div>

<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_searchbar.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_contact.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_bundle_css_js/css/normalize.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_bundle_css_js/css/demo.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_bundle_css_js/css/component.css')}}" />

<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome_modal_css/welcome_modal.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome_normalize.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome_css/welcome.css') }}">

<script src="{{asset('css/welcome_css/welcome_bundle_css_js/js/anime.min.js')}}"></script>
<script src="{{asset('css/welcome_css/welcome_bundle_css_js/js/enquire.min.js')}}"></script>
<script src="{{asset('css/welcome_css/welcome_bundle_css_js/js/tabsnav.js')}}"></script>
<script src="{{asset('css/welcome_css/welcome_bundle_css_js/js/demo1.js')}}"></script>
<!-- Map -->

<!-- //Map End here  -->
<script src="{{ asset('js/fontawesome.js') }}"></script>
<script src="{{ asset('js/welcome_js/welcome_polyfills.js') }}"></script> 
<script src="{{ asset('js/plugins/modernizr-2.6.2.min.js') }}"></script> 
<script src="{{ asset('js/plugins/classie.js') }}"></script> 
<script src="{{ asset('js/welcome_js/modalEffects.js') }}"></script> 

<script src="{{ asset('js/plugins/jquery-1.8.3.js') }}"></script>
<script>
    $(function() {
        $(".preload").fadeOut(1000, function() {
            $(".content_preload").fadeIn(1000);
        });
    });
</script>

</body>
</html>