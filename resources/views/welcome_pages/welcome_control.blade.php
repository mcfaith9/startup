<div id="control">
    <section class="control">
    <div class="md-modal md-effect-12" id="modal-1">
        <div class="md-content">
            <h3>Modal Dialogasdasdas111</h3>
            <div>
                <p>This is a modal window. You can do the following things with it:</p>
                <ul>
                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                </ul>
                <button class="md-close">Close me!</button>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-12" id="modal-location">
        <div class="md-content">
            <h3>Modal Dialogasdasdas222</h3>
            <div>
                <p>This is a modal window. You can do the following things with it:</p>
                <ul>
                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                </ul>
                <button class="md-close">Close me!</button>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-12" id="modal-3">
        <div class="md-content">
            <h3>Modal Dialogasdasd</h3>
            <div>
                <p>This is a modal window. You can do the following things with it:</p>
                <ul>
                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                </ul>
                <button class="md-close">Close me!</button>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
        <header>
            
            <div class="container md-trigger" id="uno" data-modal="modal-1">
                <img class="icon" src="{{ asset('image/icon/home-icon.png') }}">
                <p class="text">Home</p>
            </div>

            <div class="container md-trigger" id="dos" data-modal="modal-location">
                <img class="icon" src="{{ asset('image/icon/pin-icon.png') }}">
                <p class="text">Location</p>
            </div>

            <div class="container md-trigger" id="tres" data-modal="modal-3">
                <img class="icon" src="{{ asset('image/icon/find-person-icon.png') }}">
                <p class="text">Search</p>
            </div>

            <div class="container" id="cuatro" data-modal="modal-4">
                <img class="icon" src="{{ asset('image/icon/job-icon.png') }}">
                <p class="text">Work</p>
            </div>

            <div class="container" id="cinco">
                <a href="{{ url('/3d') }}"><img class="icon" src="{{ asset('image/icon/attachment-2-icon.png') }}">
                <p class="text">File</p></a>
            </div>

            <div class="container" id="seis">
               <a href="{{ url('/login') }}"><img class="icon" src="{{ asset('image/icon/login-icon.png') }}">
                <p class="text">Login</p></a>
            </div>

        </header>
        
    </section>
</div>



<script>
    // this is important for IEs
    var polyfilter_scriptpath = '/js/';
</script>