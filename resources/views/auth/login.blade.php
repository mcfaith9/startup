<!DOCTYPE html>
<html>

<head>
    <title>Lets get started</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login_register.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/team_css/team.css') }}"> 
    <script src="{{ asset('js/fontawesome.js') }}"></script>   
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slideshow/style_slideshow.css') }}">
</head>

<style>    
    html {
        overflow-y: hidden;
    }  
    .content {
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
</style>

<body id="page">

<div class="preload">
    <img src="{{asset('image/gif/Preloader_5.gif')}}" />
</div>

<div class="content">
<!-- Slideshow -->
<ul class="cb-slideshow">
    <li><span>Image 01</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
    <li><span>Image 05</span></li>
    <li><span>Image 06</span></li>
    <li><span>Image 06</span></li>
</ul>

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
     <img src="{{ asset('image/login_form.jpg') }}"/>
     </div>
  </div>

 <div class="cont_forms" >
    <div class="cont_img_back_">
     <img src="{{ asset('image/login_form.jpg') }}"/>
 </div>

<form method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}
 <div class="cont_form_login">
    <a href="#" onclick="ocultar_login_sign_up()" ><i class="far fa-times-circle"></i></a>    

       <div class="avatar">
           <img src="{{ asset('image/default.png') }}">
       </div> 

    <h2>LOGIN</h2>
    
    <input class="form-group{{ $errors->has('username') ? ' has-error' : '' }}" type="text" name="username" placeholder="Username" autofocus/>
    @if ($errors->has('username'))
        <span class="help-block">
            <strong>{{ $errors->first('username') }}</strong>
        </span>
    @endif
    <input class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" type="password" name="password" placeholder="Password" autofocus/>
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    
    <div class="field">
        <label class="checkbox">
            <input type="checkbox"> 
              <h5 style="float: left; color: #757575; padding-left: 4px;">Remember me</h5>
              <h5 style="float: left; color: #757575; padding-left: 14px;">Forgot password?</h5>
        </label>
    </div>

    <button class="btn_login" onclick="cambiar_login()">LOGIN</button>    
</div>
</form>

<form method="POST" action="{{ url('/register') }}">
{{ csrf_field() }}
<div class="cont_form_sign_up">
    <a href="#" onclick="ocultar_login_sign_up()"><i class="far fa-times-circle"></i></a>
    <h2>SIGN UP</h2>    
    
    <input class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" type="text" name="email" placeholder="Email" autofocus/>
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    <input class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" type="text" name="name" placeholder="User" />
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
    <input class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" type="password" name="password" placeholder="Password" />
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    <input class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" type="password" name="password_confirmation" placeholder="Confirm Password" />
    @if ($errors->has('password_confirmation'))
        <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </span>
    @endif
    <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>  
</div>
</form>

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
</div>

<script src="{{ asset('js/login_register.js') }}"></script>    
<script src="{{ asset('js/slideshow_js/modernizr.custom.86080.js') }}"></script>

<script src="{{ asset('js/plugins/jquery-1.8.3.js') }}"></script>
<script>
    $(function() {
        $(".preload").fadeOut(1000, function() {
            $(".content").fadeIn(3500);
        });
    });
</script>    

</body>

</html>