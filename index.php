<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_theme
 */

get_header(); ?>
    
    <body>

	<div id="primary" class="content-area">
                
                
                
        <div class="content-wrap">
          <div class="content">
              <div class="menu-content">
                  <div class="full-menu">
                      <nav id="menu" class="menu">
                          <ul>
                              <li>
                                  <a href="#home">Home</a>
                              </li>
                              <li>
                                  <a href="#intro">About</a>
                              </li>
                              <li>
                                  <a href="#galeria">Works</a>
                              </li>
                              <li>
                                  <a href="#contact">Contact</a>
                              </li>
                          </ul>
                      </nav>
                    </div>
                    <div class="hamburguer">
                        <div class="lines line-top"></div>
                            <div class="lines line-mid"></div>
                                <div class="lines line-bottom"></div>
                    </div>
                </div> 
                
                <section id="home">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-content">
                                <h3>I'm Isabel Silva</h3>
                                <hr>
                                <div class="text-move">
                                    <h1>
                                    <span class="typewrite" data-period="2000" data-type='[ "I am a Graphic Designer.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'>
                                    </span>
                                    </h1>
                                </div> 
                            </div> 
                        </div>
                </section>
     
     
      
    

        <!--ABOUT-->
        <section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="text1">About Me</h1>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed laoreet nunc. Integer ullamcorper massa ac nisi ornare, non commodo mauris hendrerit. Phasellus in ex sed neque aliquet sagittis vitae eget odio. Ut et faucibus nisi, risus. 
                  </p>
              </div>
            </div>
          </div>
            <div class="fundo"></div>
        </section>

          
        <!--PORTFOLIO-->
        
        <section class="main-section" id="galeria">
        <div class="col-lg-12 portfolioTitle text-center">
          <h2 class="section-title">Portfolio</h2>
          <hr>
        </div>
        <div class="container">  
            <div class="col-md-4 col-sm-6 col-xs-12 galeria delay-05s animated zoomIn">
                <img src="images/4.jpg" alt="infographics" title="infographics" class="img-responsive">
                <div class="description">
                  <p>INFOGRAPHICS</p> 
                  <a href="" class="viewBTN">VIEW PROJECT</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 galeria delay-05s animated zoomIn">
                <img src="images/2.jpg" alt="website" title="website" class="img-responsive">
                <div class="description">
                  <p>WEBSITE</p> 
                  <a href="" class="viewBTN">VIEW PROJECT</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 galeria delay-05s animated zoomIn">
                <img src="images/3.jpg" alt="editorial" title="editorial" class="img-responsive">
                <div class="description">
                  <p>EDITORIAL</p> 
                  <a href="" class="viewBTN">VIEW PROJECT</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 galeria delay-05s animated zoomIn">
                <img src="images/1.jpg" alt="vector drawing" title="vector drawing" class="img-responsive">
                <div class="description">
                  <p>VECTOR DRAWING</p> 
                  <a href="" class="viewBTN">VIEW PROJECT</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 galeria delay-05s animated zoomIn">
                <img src="images/5.jpg" alt="illustration" title="illustration" class="img-responsive">
                <div class="description">
                  <p>ILLUSTRATION</p> 
                  <a href="" class="viewBTN">VIEW PROJECT</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 galeria delay-05s animated zoomIn">
                <img src="images/6.jpg" alt="illustration" title="illustration" class="img-responsive">
                <div class="description">
                  <p>ILLUSTRATION</p> 
                  <a href="" class="viewBTN">VIEW PROJECT</a>
              </div>
            </div>
           </div>
    
    </section>
        
   
  <!-- BARRA --> 
   <div id="cta">
        <div class="col-md-8 col-md-offset-2 container  text-center">
            <a href="#" class="btn go-to-btn">LET’S TALK BUSINESS.</a>
        </div>
    </div>
    
    
  <!-- CONTACT -->
   
     <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 contactText text-center">
          <h2 class="section-title">Get in Touch</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form name="sentMessage" id="contactForm" novalidate="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name" id="name" required="" data-validation-required-message="Please enter your name." aria-invalid="false">
                  <p class="help-block text-danger"></p>
                </div>
                
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                
                <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
           
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message." aria-invalid="false"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="send">
              <div class="col-lg-12 text-center">
                <button type="submit" class="btnSend btn-xl">Send Message</button>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
    
    
 <!-- Footer -->
     
    <div class="col-md-8 col-md-offset-2 footer">
          <div class="social">
               <div class="social-icons">
               
                <a href="#">
                <img src="images/facebook1.png" width="40" height="40" alt="" onmouseover="src='images/facebook2.png'" onmouseout="src='images/facebook1.png'">
                </a>
                <a href="#"><img src="images/instagram1.png" alt="" onmouseover="src='images/instagram2.png'" onmouseout="src='images/instagram1.png'">
                </a>
                <a href="#"><img src="images/behance1.png" alt="" onmouseover="src='images/behance2.png'" onmouseout="src='images/behance1.png'">
                </a>
                </div>
          </div>
          
          <div class="copyright">
            <div class="tudo">
             <div class="copyright1">
                 <p>Copyright © 2017</p>
             </div>
             
             <div class="separador">
                 <p> • </p>
             </div>
             
              <div class="copyright2">
                  <a href="#">Back to Top</a>
              </div> 
              <div class="separador">
                 <p> • </p>
             </div>
              
              <div class="copyright5">
                  <p href="#">Design by Isabel Silva</p>
              </div>
          </div>   
        </div>
        </div> 
               
               
                
                
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
