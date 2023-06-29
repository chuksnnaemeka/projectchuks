<!DOCTYPE html>
<html lang="en">
<head>
  <!--  -->
  <title>TeasyPay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="cs/csfile.css" rel="stylesheet" type="text/css">
   <link href="cs/accord.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
   <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  
  
  
  
  
  
  
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 0px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;

    /*background-color: #f4511e;*/
	background-color: #F96;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
   /* letter-spacing: 4px;*/
   letter-spacing: 0px
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    /*color: #fff !important;*/
	 color: #036 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #900 !important;
   /* background-color: #039 !important;*/
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
  

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  
  <div class="container" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="images/logo2.png" width="100" height="50">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="dislay:inline;">
         <li><a href="index.php">Home</a></li>
        <li><a href="#about">Pay Bills</a></li>
        <li><a href="#services">Send Money</a></li>
        <li><a href="#portfolio">Airtime</a></li>
         <div style="margin-top:20px;"><a href="#pricing" class="topbutton">LOGIN</a> <a href="#pricing" class="topbutton">	REGISTER</a></div>
        

      </ul>
      
    </div>
  </div>
</nav><!-------------navbar closes here---->

<div style=" height:70px;">
</div><!------------menu div close here--->

  
  
  <div id="titlerep">
  <img src="images/f2.jpg" width="100%" height="250px"/>
  </div><!--------------title div close--->
  
  
  <div style="height:; padding:10px; background-color: #E9F3F2">
  HOME &gt; FAQ
  </div>
  
  
  
    <div id="newbox">
    <div class="new1">
    
<span class="howtext">Frequently Asked Questions</span><p></p>
<button class="accordion">How many video can i watch in a day</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">how many video can i watch in a day and how much can i earn</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

    
    
    </div><!-----FAQ box close--->
    
    
    
    <div class="new2 row text-center slideanim" align="center">
    <img src="images/faq-cube.jpg" width="429" height="369"/>
    </div>
    <div class="clear"></div>
    </div><!------------NEWBOX	close---->
    <div class="clear"></div><!-----UNDERSIRVICEBOX close----->
<div class=" clear"></div>

     <div id="pagebox" align="center">
  
  <p class="how2A" align="center">Start sending and receiving money today</p
  >
 <p  class="typewrite" data-period="2000" data-type='[ "Hi, Im VipulM.", "I am Creative.", "<strong>I Love Design</strong>.", "I Love to Develop." ]'>
    <span class="wrap"></span></p>
  <p class="how2textA" align="center">Join our over 1 Million custyomers .</p>
  <p class="how2text" align="center">&nbsp;</p>
  
<span><input type="submit" name="button3" id="button3" value="GET STARTED" class="nbutton" ></span>

  
  </div>
     
 <div id="footerbox">
 <div class="footerboxa">
 <span class ="footerheader">Head Office</span><br/>
 <span class="footercontent">
 3 Elbe Close, <br/>off Panama Street,<br/> Maitama District, Abuja<br/>
+234 (0) 701 155 4772
<br/>
09-7823019
info@teasypay.ng
</span>
 </div>
 
 <div class="footerboxa">
 <span class ="footerheader">About</span><br/>
 <span class ="footercontent">Who We Are <br/>
What We Do <br/>
Our Team <br/>
<li class="fa fa-facebook-official" style="font-size:28px"></li> <li class="fa fa-instagram" style="font-size:28px"></li> <li class="fa fa-twitter-square" style="font-size:28px"></li>

</span>
 </div>
  <div class="footerboxa">
  <span class ="footerheader">Product</span><br/>
 <span class ="footercontent">How It Works <br/>
Terms Of Service<br/>
FAQs 
</span>
  </div>
   <div class="footerboxa">
  <span class ="footerheader">Merchant</span><br/>
 <span class ="footercontent">Registration <br/>
Agents Directory <br/>
Customer Care 
</span>
   </div>
   <div class="footerboxa"><img src="images/play.png" width="100%" height="45"><p></p>
   <img src="images/apple.png" width="100%" height="45"></div>
    
<div class="clear"></div>
 </div><!-------------FOOTERBOX CLOSE---->   
<div class="clear"></div> 
    
    
<div id="footercopyright" align="center">

<span class="copyrighttext">Copyright © <?php echo date('Y');?> TeasyPay IT Department</span>

<br/>
<a href="#myPage" title="To Top" > 
    <span class="glyphicon glyphicon-chevron-up" ></span>
  </a>

</div><!---------------FOOTERCOPYRIGHT close--->
    

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

</script>

<script>
<!------Accordion script--->
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</body>
</html>
