<!DOCTYPE html>
<html>

<head>
    <title>Lets get started</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login_register.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/team_css/team.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font_awesome/fontawesome.min.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font_awesome/fontawesome.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font_awesome/fontawesome-all.min.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font_awesome/fontawesome-all.css') }}"> 
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bg_video_css/background.css') }}"> -->
</head>

<style>    
    html {
        overflow-y: hidden;
    }    
    .mySlides {display:none;}
</style>

<body style="background: url('image/cons1.jpg') fixed;">
<!-- <div class="crossfade">
  <figure></figure>
  <figure></figure>
  <figure></figure>
  <figure></figure>
  <figure></figure>
</div> -->

<!-- <div class="tc-videobackground">
    <video src="{{ asset('video/reeds.mov') }}" autoplay loop></video>
</div> -->

  <div class="cotn_principal">
    <div class="cont_centrar">
      <div class="cont_login">
        <div class="cont_info_log_sign_up">
          <div class="col_md_login">
            <div class="cont_ba_opcitiy">

                <h2>LOGIN</h2>  
                <p style="padding-top: 20px">Welcome back.</p> 
                <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
            </div>
        </div>
        <div class="col_md_sign_up">
            <div class="cont_ba_opcitiy">
              <h2>SIGN UP</h2>

              <p style="padding-top: 20px">Lets get started its free.</p>
              <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
          </div>
      </div>
  </div>

  <div class="cont_back_info">
     <div class="cont_img_back_grey">
     <img src="{{ asset('image/cons1.jpg') }}"/>
     </div>
  </div>

 <div class="cont_forms" >
    <div class="cont_img_back_">
     <img src="{{ asset('image/cons1.jpg') }}"/>
 </div>

 <div class="cont_form_login">
    <a href="#" onclick="ocultar_login_sign_up()" ><i class="fa-window-close"></i></a>
    <h2>LOGIN</h2>
    <input type="text" placeholder="Email" />
    <input type="password" placeholder="Password" />
    <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
</div>

<div class="cont_form_sign_up">
    <a href="#" onclick="ocultar_login_sign_up()"><i class="fa-window-close"></i></a>
    <h2>SIGN UP</h2>
    <input type="text" placeholder="Email" />
    <input type="text" placeholder="User" />
    <input type="password" placeholder="Password" />
    <input type="password" placeholder="Confirm Password" />
    <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>

</div>

            </div>
        </div>
    </div>

    <div class="made-with-love">
        "Made with"
        <i>♥</i>
        "by"
        <a target="_blank" href="https://web.facebook.com/mcfaith">Team Pila</a>
    </div>
</div>

<script src="{{ asset('js/login_register.js') }}"></script>    
</body>

</html>