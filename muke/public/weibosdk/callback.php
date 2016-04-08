<?php
session_start();

include_once( '../weibosdk/config.php' );
include_once( '../weibosdk/saetv2.ex.class.php' );

$o = new \SaeTOAuthV2( WB_AKEY , WB_SKEY );

if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = WB_CALLBACK_URL;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
	}
}

if ($token) {
	$_SESSION['token'] = $token;
	setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
?>
<?php 
	echo "<script>alert('登录成功即将进入首页');location.href='http://www.mk.com/weibologin'</script>";
	?>
<?php
} else {
?>
授权失败。
<?php
}
?>
