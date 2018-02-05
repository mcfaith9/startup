@extends('layouts.app')

@section('welcome_content')
<div style="float: left;">
    <nav>
        <ul style="float: right;">
            <li><a href="#about" class="scroll" >About</a></li>
            <li><a href="#team" class="scroll" >Team</a></li>
            <li><a href="#gallery" class="scroll" >Gallery</a></li>
            <li><a href="#testimonials" class="scroll" >Testimonials</a></li>
            <li><a href="#contact" class="scroll">Contact</a></li>
            <!-- Authentication Links -->
            <!-- @if (Auth::guest())
                <li><a target="_blank" href="{{ url('/login') }}">Login</a></li>
            @else
                <li>
                    <a href="#">
                        {{ Auth::user()->name }} <span></span>
                    </a>

                    <ul>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            @endif -->
        </ul>
    </nav>   
</div>

<div id="about">
    <section class="about">
        @yield('welcome_button')
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
