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
  
  
  
  
  /* accordion tab open*/
  /* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: auto;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: auto;
}
  /*accordion tabclose*/
  
  
  
  
  
  
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
  </div><!-----titlerep div close---->
  
  
    
  <div style="height:; padding:10px; background-color: #E9F3F2">
  HOME &gt; WHO WE ARE
  </div>
  <P align="center" class="how2A">WHO WE ARE</P>
<div id="terms-how"  style=" background:">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Who we are</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">CEO Statement</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Our Vision</button>
    <button class="tablinks" onclick="openCity(event, 'mission')">Our Mission</button>
        <button class="tablinks" onclick="openCity(event, 'value')">What we Value</button>
</div>
<div id="London" class="tabcontent">
<p align="center">
<img src="images/logo2.png" width="168" height="195"  ></p>
<h4 align="">Who We Are</h4>
  <p align="justify">Teasy International Company Limited was incorporated in 2011 and was licensed by the Central Bank of Nigeria (CBN) in December, 2012 as a Mobile Payments Operator. Teasy was granted commercial approval by the CBN in July, 2013. By virtue of our Mobile Payments licence, we are authorised to carryout Agency Banking activities. Teasy is currently working at expanding her operations and growing her customer base.</p>
  <p align="left">&nbsp;
  <h4>Our History</h4>
  
    <ul>
      <li>Teasy International Company Limited was incorporated in 2011.      </li>
      <li>Teasy was licensed by the Central Bank of Nigeria (CBN) in December, 2012 as a Mobile Payments Operator, and was granted commercial approval by the CBN in July, 2013.      </li>
      <li>By virtue of our Mobile Payments licence, we are authorized to carry out Agency Banking activities.      </li>
      <li>Teasy is currently working at expanding her operations and growing her customer base.</li>
    </ul>
    </p>

</div>

<div id="Paris" class="tabcontent">
  <h4>CEO Statement</h4>
  <p align="justify">&quot;Mobile payments have been recognised as a &quot;game changer&quot; in the delivery of financial services; but we at Teasy challenge ourselves to figure out if we are indeed changing the game or dancing to the same music….no matter how far we go, Teasy can always do better and will strive to keep improving.&quot;<br>
    – Musa Ali Baba Managing Director, Teasy International</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h4>Our Vision</h4>
  <p>To be the leading agent of a Cashless Culture using best practices tocreate a global convergence of mobile money..</p>
</div>


<div id="mission" class="tabcontent">
  <h4>Our Mission</h4>
  <p>To provide mobile financial services to our customers, by leveraging   people, innovation and technology advancement to deliver widely   acceptable and efficient mobile money solutions to both low end and high   end customers everywhere..</p>
</div>



<div id="value" class="tabcontent">
  <h4>What We Value</h4>
  <p>At Teasy, our approach is built on respect, consistency and taking pride in our business. We believe success originates from the enthusiasm and passion of staff and agents, who constantly learn and strive to do things better. We depend on developing and deploying the best technology; and building long-lasting relationships with customers by offering them quality service.</p>
  <p>We are committed to making a difference in Nigeria today and its place in the changing world of tomorrow.</p>
</div>





     <div class="clear"></div>   
</div><!------main divbox close---->
     <div class="clear"></div>
     
     <div id="pagebox" align="center">
  
  <p class="how2A" align="center">Start sending and receiving money today</p
  >
 <p  class="typewrite" data-period="2000" data-type='[ "Hi, Im VipulM.", "I am Creative.", "<strong>I Love Design</strong>.", "I Love to Develop." ]'>
    <span class="wrap"></span></p>
  <p class="how2textA" align="center">Join our over 1 Million custyomers .</p>
  <p class="how2text" align="center">&nbsp;</p>
  
<span><input type="submit" name="button3" id="button3" value="GET STARTED" class="nbutton" ></span>

  
  </div><!----- TERMS div close---->

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
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
