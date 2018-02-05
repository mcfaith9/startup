@extends('layouts.app')

@section('welcome_content')
<div class="component">
                <!-- Start Nav Structure -->
                <button class="cn-button" id="cn-button">+</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                      <li><a href="#control" class="scroll"><span class="icon-picture"></span></a></li>
                      <li><a href="#team" class="scroll"><span class="icon-headphones"></span></a></li>
                      <li><a href="#gallery" class="scroll"><span class="icon-home"></span></a></li>
                      <li><a href="#testimonials" class="scroll"><span class="icon-facetime-video"></span></a></li>
                      <li><a href="#contact" class="scroll"><span class="icon-envelope-alt"></span></a></li>
                      <!-- Authentication Links -->
                      <!-- @if (Auth::guest())
                          <li><a target="_blank" href="{{ url('/login') }}">Login</a></li>
                      @else
                          <li>
                              <a href="#" class="scroll">
                                  {{ Auth::user()->name }} <span></span>
                              </a>

                              <ul>
                                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                              </ul>
                          </li>
                      @endif -->
                     </ul>
                </div>
        <div id="cn-overlay" class="cn-overlay"></div>
        <!-- End Nav Structure -->
</div>

<div id="control">
    <section class="control">
        <header>
            
            <div class="container" id="uno">
                <img class="icon" src="pictures/icon1.png">
                <p class="text">Home</p>
            </div>

            <div class="container" id="dos">
                <img class="icon" src="pictures/icon2.png">
                <p class="text">Location</p>
            </div>

            <div class="container" id="tres">
                <img class="icon" src="pictures/icon3.png">
                <p class="text">google +</p>
            </div>

            <div class="container" id="cuatro">
                <img class="icon" src="pictures/icon4.png">
                <p class="text">apple</p>
            </div>

            <div class="container" id="cinco">
                <img class="icon" src="pictures/icon5.png">
                <p class="text">html 5</p>
            </div>

            <div class="container" id="seis">
                <img class="icon" src="pictures/icon6.png">
                <p class="text">Login</p>
            </div>

        </header>
    </section>
</div>           

<div id="team">    
    <section class="team">
        <h1>Team</h1>
    </section>
</div>    
    
<div id="gallery">
   <section class="gallery">
        <h1>Gallery</h1>
    </section>
</div>

<div id="testimonials">
    <section class="testimonials">
        <h1>Testimonials</h1>
    </section>
</div>

<div id="contact">
    <section class="contact">
        <h1>Contact</h1>
    </section>  
</div> 

    
@endsection
