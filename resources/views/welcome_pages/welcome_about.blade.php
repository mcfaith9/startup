<style>
	.container-inline {
    width: 90%;
    max-width: 1000px;
    margin: 0 auto;
}

.page-heading {
    text-align: center;
    text-transform: uppercase;
    font-size: 22px;
    color: #fff;
    font-weight: 300;
    letter-spacing: 0.3em;
    padding: 80px 0 40px 0;
}

.btnInline {
    display: inline-block;
    text-decoration: none;
    color: #bfc250;
    border-bottom: 2px solid #bfc250;
    font-weight: 300;
    padding: 0 5px;
    text-indent: 0;
    -webkit-transition: background-color 0.4s ease, color 0.4s ease;
    -moz-transition: background-color 0.4s ease, color 0.4s ease;
    transition: background-color 0.4s ease, color 0.4s ease;
}
.btnInline:hover {
    background-color: #bfc250;
    color: #000;
}

.hidden-content {
    display: none;
    visibility: hidden;
}

/*___ ACTIVE CONTENT ___*/
.content-box {
    position: relative;
    background: #006666;
    padding: 10%;
    margin-bottom: 100px;
    -webkit-transition: -webkit-transform 0.3s ease;
    -moz-transition: -moz-transform 0.3s ease;
    transition: transform 0.3s ease;
}
.content-box.transitionEffect {
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    transform: scale(0.9);
}

.active-content p {
    text-indent: 40px;
    font-size: 1.2em;
    font-weight: 300;
    color: #c8c8ff;
    line-height: 2em;
}

.page-transition-overlay {
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: #006666;
}

.btnInline.facebook {
    color: #3b5998;
    border-bottom: 2px solid #3b5998;
}
.btnInline.facebook:hover {
    background-color: #3b5998;
    color: #000;
}
.btnInline.twitter {
    color: #00aced;
    border-bottom: 2px solid #00aced;
}
.btnInline.twitter:hover {
    background-color: #00aced;
    color: #000;
}
.btnInline.instagram {
    color: #517fa4;
    border-bottom: 2px solid #517fa4;
}
.btnInline.instagram:hover {
    background-color: #517fa4;
    color: #000;
}
/*___ MEDIA QUERIES ___*/
@media only screen and (min-width: 750px) {
    body {
        font-size: 1em;
    }
}
</style>

<section class="about">
    <div class="container-inline">        
        <div class="content-box">
            <div class="active-content">
                <div class="home-page content-wrapper">
                    <p>Hello, We are Team Pila. In this website, you will be knowledgeable on how to aquire legal documents and id's that you might need on any purposes. With this site you can search and locate the nearest office and facilities where you can transact with regards to your legal documents and id's. <a href="#" class="btnInline nav-btn" data-target-class="about-page">about us</a>
                     and our <a href="#" class="btnInline nav-btn" data-target-class="projects-page">recent projects</a>. You can also <a href="#" class="btnInline nav-btn" data-target-class="contact-page">contact us</a>, using various channels of communication.</p>
                </div> <!-- end of home page -->
            </div> <!-- end of active content -->                
            <div class="page-transition-overlay"></div>
        </div> <!-- end of content box -->
        
    </div> <!-- end of container -->        
    <div class="hidden-content">
        <div class="about-page content-wrapper">
            <p>So we are team Pila, first and foremost we are compose of three persona namely: McFaith, Stephen and Macky, we are the developer of this site. It was our passion for several years and until now.</p>
            <p>McFaith came from City of Naga, Cebu, which is in the Philippines while Stephen and Macky came from Minglanilla, Cebu which is also in the Philippines. We collaborate our ideas like to create something beautiful looking and helpful to the community, using each imagination. We prefer functionality over estetics, when it comes to software design.</p>
            <p>Other things that we keep close to our heart is playing internet games like "dota2, ros", break dancing in which McFaith loves to do and playing basketball.</p>
            <p>Now that you know something about us, you can view our <a href="#" class="btnInline nav-btn" data-target-class="projects-page">recent projects</a>, <a href="#" class="btnInline nav-btn" data-target-class="contact-page">contact me</a> or return to <a href="#" class="btnInline nav-btn" data-target-class="home-page">home page</a>.</p>
        </div> <!-- end of about page -->
        
        <div class="projects-page content-wrapper">
            <p>Here you will find our most recent projects.</p>
            <p>Our last project was <a href="#" class="btnInline">Epets website</a>. We tried to get the main message and purpose of the site is selling pet food and accessories while using light background colors and bold font with dark colors.</p>
            <p>The other project i want to tell you about is <a href="#" class="btnInline">Questionaire System</a>. This system automate a questionaire given by a teacher to the student, so it is not surprising that the main color is pink. I also used a lot of images in this app, because it keeps the desing balanced.</p>
            <p>And the last project is <a href="#" class="btnInline">Alpha Company website</a>. Because it is a banking institution, i had to keep the desing professional. I used dark, bold colors and kept saturated colors to minimum in this desing.</p>
            <p>If you like my work and are interested in working with me, why won't you <a href="#" class="btnInline nav-btn" data-target-class="contact-page">contact me</a>. You can also return to <a href="#" class="btnInline nav-btn" data-target-class="home-page">home page</a>.</p>
        </div> <!-- end of projects page -->
        
        <div class="contact-page content-wrapper">
            <p>As i said, i am from London, where i have a little office on <a target="_blank" href="https://www.google.com/maps/place/236+Oxford+St,+London+W1D+2LT,+UK/@51.5153975,-0.1413229,17z/data=!3m1!4b1!4m2!3m1!1s0x48761ad556c55073:0x3a5a72d8f000b8f4" class="btnInline">Oxford street 236</a>.</p>
            <p>If you have any questions, please contact me. I am on basically every social network you can imagine - <a href="#" class="btn facebook">facebook</a>, <a href="#" class="btnInline twitter">twitter</a>, <a href="#" class="btnInline instagram">instagram</a>. So contacting me should not be a problem.</p>
            <p>You can also return to <a href="#" class="btnInline nav-btn" data-target-class="home-page">home page</a>.</p>
        </div> <!-- end of contact page -->
    </div> <!-- end of hidden content -->

</section>
<script src="{{asset('js/plugins/2.1.3_jquery.min.js')}}"></script>
<script>
	(function() {
	    
	    // Variables
	    var contentBox = $('div.content-box'),
	        activeContent = contentBox.find('div.active-content'),
	        pageTransitionOverlay = contentBox.find('div.page-transition-overlay'),
	        navBtn = $('a.nav-btn'),
	        hiddenContent = $('div.hidden-content');
	    
	    navBtn.on('click', function(e) {
	        var self = $(this),
	            moveToActive = hiddenContent.find('div.' + self.data('target-class'));
	        
	        contentBox.addClass('transitionEffect');
	        pageTransitionOverlay.fadeIn(300, function() {
	            // Change content
	            self.closest('div.content-wrapper').appendTo(hiddenContent);
	            moveToActive.appendTo(activeContent);
	            
	            // Transition effect
	            contentBox.removeClass('transitionEffect');
	            pageTransitionOverlay.fadeOut(300);
	        });
	        e.preventDefault();
	    });    
	})();
</script>