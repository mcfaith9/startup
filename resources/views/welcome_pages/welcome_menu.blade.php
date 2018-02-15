<div class="component">
        <!-- Start Nav Structure -->
        <button class="cn-button" id="cn-button"><i class="fa fa-wrench"></i></button>
        <div class="cn-wrapper" id="cn-wrapper">
          <ul>
            <li><a href="#"><span></span></a></li>
            <li><a href="#"><span></span></a></li>
            <li><a href="#"><span><i class="fa fa-paperclip"></i></span></a></li>
            <li><a href="{{ url('/3d') }}"><span><i class="fa fa-compass"></i></span></a></li>
            <li><a href="{{ url('/login') }}"><span><i class="fa fa-unlock"></i></span></a></li>
          <!-- <li><a href="#"><span class="fa fa-home"></span></a></li>
          <li><a href="#" ><span class="fa fa-info"></span></a></li>
          <li><a href="#" ><span class="fa fa-location-arrow"></span></a></li>
          <li><a href="#" ><span class="fa fa-paperclip"></span></a></li>
          <li><a href="#" ><span class="fa fa-address-book""></span></a></li> -->
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