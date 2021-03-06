@extends('layouts.app')

@section('welcome')

<svg class="hidden">
    <symbol id="icon-arrow" viewBox="0 0 24 24">
        <title>arrow</title>
        <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
    </symbol>
    <symbol id="icon-drop" viewBox="0 0 24 24">
        <title>drop</title>
        <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
    </symbol>
    <symbol id="icon-caret" viewBox="0 0 24 24">
        <title>caret</title>
        <polygon points="15.7,16.6 11.1,12 15.7,7.4 14.3,6 8.3,12 14.3,18"/>
    </symbol>
    <symbol id="icon-menu" viewBox="0 0 24 24">
        <title>menu</title>
        <path d="M23.8,6H0.1V3h23.7V6z M23.8,10.5H0.1v3h23.7V10.5z M14.2,18h-14v3h14V18z"/>
    </symbol>
    <symbol id="icon-cross" viewBox="0 0 24 24">
        <title>cross</title>
        <path d="M14.1,12l7.3,7.3l-2.1,2.1L12,14.1l-7.3,7.3l-2.1-2.1L9.9,12L2.6,4.7l2.1-2.1L12,9.9l7.3-7.3l2.1,2.1L14.1,12z"/>
    </symbol>
</svg>

<div class="container">

    <!-- <div class="made-with-love">
        Made with <i>♥</i> by
        <a target="_blank" href="https://web.facebook.com/mcfaith">Team Pila</a>       
           <p>Copyright PilaSolution</p>        
    </div>   -->   

    <main class="view">      
        <div class="">
            <div class="deco">                
            </div> 
            <header class="codrops-header">
                <div class="codrops-links">
                    <button class="btn btn--menu">
						    <svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg>
						    <svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg>
					</button>                    
                </div>
            </header>          
        </div>
        <nav class="tabsnav tabsnav--vertical tabsnav--zeru">
            <div class="tabsnav__item">
                <div class="tabsnav__bar"></div>
                <h3 class="tabsnav__title">Contact</h3>
            </div>
            <div class="tabsnav__item">
                <div class="tabsnav__bar"></div>
                <h3 class="tabsnav__title">About</h3>
            </div>
            <div class="tabsnav__item">
                <div class="tabsnav__bar"></div>
                <h3 class="tabsnav__title">Gallery</h3>
            </div>
            <div class="tabsnav__item">
                <div class="tabsnav__bar"></div>
                <h3 class="tabsnav__title">Map</h3>
            </div>
        </nav>
        <div class="tabscontent">
            <!-- Contact -->
             <div class="tabscontent__item">       
                <div class="column" style="margin-left: 14%">
                    <h3 class="column__title">Pila Solutions</h3>
                    <h4 class="column__text">pilasolution@gamil.com</h4>
                    <h4 class="column__text">City of Naga, Cebu 6037</h4>
                    <h4 class="column__text">213123123123122</h4>                
                    <h3 class="column__title">Social Media</h3>
                    <nav>
                        <ul>
                            <li><a href="#"><i class="fa-2x fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-2x fab fa-facebook-messenger"></i></a></li>
                            <li><a href="#"><i class="fa-2x fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-2x fa fa-phone"></i></a></li>
                        </ul>
                    </nav>                
                </div>            
                <div class="column">
                <h3 class="column__title">Contact Us</h3>
                <h5 class="column__text">Your important</h5>
                  @include('welcome_pages/welcome_contact')
                </div>
            </div>
       
            <div class="tabscontent__item">
               <div class="column">
                  @include('welcome_pages/welcome_about')
               </div>
            </div>

            <!-- Gallery -->
            <div class="tabscontent__item">
               <div class="column">
                   @include('welcome_pages/welcome_gallery')
               </div>
            </div>

            <div class="tabscontent__item">
               <div class="column">
                  @include('welcome_pages/welcome_map')
               </div>
            </div>
            <button class="btn btn--back"><svg class="icon icon--caret"><use xlink:href="#icon-caret"></use></svg></button>
        </div>
    </main>
    <nav id="bt-menu" class="bt-menu">
        <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
        <ul>
            <li><a href="#" class=""><img src="{{asset('image/icon/home-icon.png')}}"></a></li>
            <li><a href="#" class=""><img class="md-trigger" data-modal="modal-12" src="{{asset('image/icon/find-person-icon.png')}}"></a></li>
            <li><a href="#" class=""><img src="{{asset('image/icon/attachment-2-icon.png')}}"></a></li>
            <li><a href="#" class=""><img src="{{asset('image/icon/pin-icon.png')}}"></a></li>
            <li><a href="{{url('login')}}"><img src="{{asset('image/icon/login-icon.png')}}"></a></li>
        </ul>
        <ul>
            <li><a href="#" class="bt-icon icon-newspaper">News</a></li>
            <li><a href="#" class="bt-icon icon-file-add">Add</a></li>
            <li><a href="#" class="bt-icon icon-trash">Delete</a></li>
        </ul>
    </nav>

    <div class="md-modal md-effect-12" id="modal-12">
        <div class="md-content">
            <h3>Modal Dialog</h3>
            <div>
                @include('welcome_pages/welcome_searchbar')
                <button class="md-close">Close me!</button>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
</div>

<link rel="stylesheet" type="text/css" href="{{asset('css/welcome_css/welcome_bundle_css_js/css/borderNav.css')}}">
<style>
    nav {
        position: fixed;
    }
    nav ul li {
        list-style: none;
        display: inline-block;
    }
    nav ul li a {
        display: block;
        padding: 10px 10px;
        text-decoration: none;
        color: #fff;
        transition: background-color 0.4s ease;
    }

    .extra-info{
        position:  absolute;
        margin-top: 630px;
        margin-left: 88%;        
    }
    .extra-info p{
        color: #fff;
    }

    .made-with-love {
        margin-top: 610px;
        padding: 10px;
        clear: left;
        text-align: center;
        font-size: 12px;
        font-family: arial;
        color: #fff;
    }
    .made-with-love i {
        font-style: normal;
        color: #F50057;
        font-size: 18px;
        position: relative;
        top: 2px;
    }
    .made-with-love a {
        color: #fff;
        text-decoration: none;
    }
</style>

<script src="{{asset('css/welcome_css/welcome_bundle_css_js/js/borderNav.js')}}"></script>
<script type="text/javascript">    
    (function() {        
        var infoElem = $('.info');            
        infoElem.each(function() {
            var self = $(this),
                selfTooltipText = self.data('tooltip-text');
            if ( selfTooltipText ) $('<span/>', {class: 'tooltip', text: selfTooltipText}).appendTo(self);
        });         
    })();    
</script>
@endsection
