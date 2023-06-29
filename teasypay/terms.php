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
  <img src="images/termss.jpg" width="100%" height="250px"/>
  </div>
  
<div id="terms">
  <p><strong>Terms of Service</strong><br/>
    Paga is provided by Pagatech Limited ("Pagatech" or "We"), a private limited liability company licenced by the Central Bank of Nigeria to provide electronic payment systems services.
    
    You are required to read and understand these terms, as they are a binding agreement between you and Pagatech. Customers who are under eighteen (18) years of age should review these Terms of Use with a parent or guardian.
    
    By registering for a Paga Account or Wallet or using any of the services provided on this website, you agree to comply with and to be bound by these Terms of Use, including the Privacy Policy and all rules, guidelines, policies, terms, and conditions applicable to such service, and they shall be deemed to be incorporated into this Terms of Use and shall be considered as part and parcel of this Terms of Use.
    
    1. Definitions
  </p>
  
  
  The use of this website is subject to the following terms of use:
The content of the pages of this website is for your general information and use only. It is subject to change without notice.

Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.<br/>

Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.<br/>

This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.<br/>

All trademarks reproduced in this website which are not the property of, or licensed to, the operator are the property of their respective trade mark owners.<br/>

Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.

From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).<br/>

Your use of this website and any dispute arising out of such use of the website is subject to the laws of [England and Wales].<br/>

<strong>Copyright notice</strong>
All content, unless otherwise stated, is copyright © 2019 D1 F7 Horizon 2 Estate, Meadowhall way, off Lekki Expressway, Lagos Nigeria.

<strong>GDPR compliance statement</strong>
Voucher Net Limited. "Voucher Net Limited" respects and complies with the EU General Data Protection Regulations (GDPR). You can learn more about GDPR and its implications here.
  <p>&nbsp;</p>
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