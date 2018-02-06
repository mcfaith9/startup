<div class="component">
    <!-- Start Nav Structure -->
    <button class="cn-button" id="cn-button">+</button>
    <div class="cn-wrapper" id="cn-wrapper">
        <ul>
          <li><a href="#control" class="scroll"><span class="fa fa-home"></span></a></li>
          <li><a href="#team" class="scroll"><span class="fa fa-info"></span></a></li>
          <li><a href="#gallery" class="scroll"><span class="fa fa-location-arrow"></span></a></li>
          <li><a href="#testimonials" class="scroll"><span class="fa fa-paperclip"></span></a></li>
          <li><a href="#contact" class="scroll"><span class="fa fa-address-book""></span></a></li>
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