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
    <main class="view">   
        <div class="">
            <div class="deco">
            
            </div>

            <!-- <div class="made-with-love">
                Made with <i>♥</i> by
                <a target="_blank" href="https://web.facebook.com/mcfaith">Team Pila</a>       
                   <p>Copyright PilaSolution</p>        
            </div>   -->    
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
            <li><a href="#" class=""><img src="{{asset('image/icon/find-person-icon.png')}}"></a></li>
            <li><a href="#" class=""><img src="{{asset('image/icon/attachment-2-icon.png')}}"></a></li>
            <li><a href="#" class=""><img src="{{asset('image/icon/pin-icon.png')}}"></a></li>
            <li><a href="#" class=""><img src="{{asset('image/icon/login-icon.png')}}"></a></li>
        </ul>
        <ul>
            <li><a href="#" class="bt-icon icon-newspaper">News</a></li>
            <li><a href="#" class="bt-icon icon-file-add">Add</a></li>
            <li><a href="#" class="bt-icon icon-trash">Delete</a></li>
        </ul>
    </nav>
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

<script type="text/javascript" src="{{asset('css/welcome_css/welcome_bundle_css_js/js/borderNav.js"></script>
<script type="text/javascript">    
    (function() {        
        var infoElem = $('.info');            
        infoElem.each(function() {
            var self = $(this),
                selfTooltipText = self.data('tooltip-text');
            if ( selfTooltipText ) $('<span/>', {class: 'tooltip', text: selfTooltipText}).appendTo(self);
        });         
    })();    

    (function() {

        function mobilecheck() {
            var check = false;
            (function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        }

        function init() {

            var menu = document.getElementById( 'bt-menu' ),
                trigger = menu.querySelector( 'a.bt-menu-trigger' ),

                eventtype = mobilecheck() ? 'touchstart' : 'click',
                resetMenu = function() {
                    classie.remove( menu, 'bt-menu-open' );
                    classie.add( menu, 'bt-menu-close' );
                },
                closeClickFn = function( ev ) {
                    resetMenu();
                    overlay.removeEventListener( eventtype, closeClickFn );
                };

            var overlay = document.createElement('div');
            overlay.className = 'bt-overlay';
            menu.appendChild( overlay );

            trigger.addEventListener( eventtype, function( ev ) {
                ev.stopPropagation();
                ev.preventDefault();
                
                if( classie.has( menu, 'bt-menu-open' ) ) {
                    resetMenu();
                }
                else {
                    classie.remove( menu, 'bt-menu-close' );
                    classie.add( menu, 'bt-menu-open' );
                    overlay.addEventListener( eventtype, closeClickFn );
                }
            });

            if( triggerPlay ) {
                triggerPlay.addEventListener( eventtype, function( ev ) {
                    ev.stopPropagation();
                    ev.preventDefault();

                    classie.remove( menu, 'bt-menu-close' );
                    classie.add( menu, 'bt-menu-open' );
                    overlay.addEventListener( eventtype, closeClickFn );
                });
            }
        }
        init();

    })();
</script>
@endsection
