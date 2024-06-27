<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/contentsConfig.php'); ?>
<?php session_start() ?>
<?php $session = $_SESSION['contact_form'] ?>
<?php $_SESSION['contact_form'] = array() ?>
<!DOCTYPE html>
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LB964JX');</script>
<!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <title>森田アルミ工業</title>
  <meta name="description" content="森田アルミ工業">
  <meta name="Keywords" content="">
  <meta property="og:title" content="森田アルミ工業">
  <meta property="og:type" content="website">
  <meta property="og:description" content="森田アルミ工業">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="森田アルミ工業">
  <link rel="shortcut icon" href="/image/icon/favicon.ico">
  <link rel="apple-touch-icon" href="/image/icon/ios.png"/>
  <link rel="icon" href="/image/icon/ios.png">
  <link rel="stylesheet" type="text/css" href="/common/css/reset-fonts.css">
  <link rel="stylesheet" type="text/css" href="/common/css/reset-min.css">
  <link rel="stylesheet" type="text/css" href="/common/css/comp.css">
  <link rel="stylesheet" type="text/css" href="uniq.css">
  <!--[if IE]><link rel="stylesheet" href="/common/css/fontsize_ie.css" media="all" /><![endif]-->
  <!--[if lt IE 9]><script src="/common/js/html5shiv.js"></script><![endif]-->
  <link href="/common/css/bootstrap.min.css" rel="stylesheet">
  <link href="/common/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Quicksand|Source+Sans+Pro:400,200,300' rel='stylesheet' type='text/css'>
  <!-- TETORI tag www.moritaalumi.co.jp -->
  <script>
    (function (w, d, s, u) {
      // TAG VERSION 1.00
      if (w._wsq_init_flg) {
        return false;
      }
      w._wsq_init_flg = true;
      _wsq = w._wsq || (_wsq = []);
      _wsq.push(['init', u, 2060]);
      _wsq.push(['domain', 'www.moritaalumi.co.jp']);
      var a = d.createElement(s); a.async = 1; a.charset='UTF-8'; a.src = 'https://cdn.' + u + '/share/js/tracking.js';
      var b = d.getElementsByTagName(s)[0]; b.parentNode.insertBefore(a, b);
    })(window, document, 'script', 'tetori.link');
  </script>
  <!-- TETORI conversion tag -->
  <script>
    (function (w) {
      _wsq = w._wsq || (_wsq = []);
      _wsq.push(['conversion']);
    })(window);
  </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LB964JX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/common/include/header.php'); ?>
<section id="md_area">
  <div id="md_area_in">
    <h1>お問合せ</h1>
  </div>
  <!--/md_area_in-->
</section>
<!--/md_area-->

<article id="contents" class="privacy">
  <nav id="pan">
    <ul>
      <li><a href="/index.php">HOME</a></li>
      <li><span>お問合せ</span></li>
    </ul>
    <br class="clearfix">
  </nav>
  <!--/pan-->

  <div class="md002">
    <h2 class="head">お問合せ完了</h2>
  </div>
  <!--/md002-->

  <section class="box">
    <p class="txt02 btm40">この度はお問合せいただきありがとうございました。<br>
      内容確認後、3営業日以内に記入いただいたメールアドレスにご返信させていただきます。<br>今しばらくお待ちくださいませ。 </p>


    <nav class="btn_area">
      <ul>
        <!--<li><a href="/" class="btn02">TOPページへ</a></li>-->
        <li><a href="/" class="btn01">トップページへ</a></li>
      </ul>
    </nav>
    <!--/btn_area-->

  </section>
  <!--/box-->

</article>
<!--/contents-->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/common/include/footer.php'); ?>
<script src="/common/js/import.js"></script>
<script src="/common/js/bootstrap.min.js"></script>

<?php if ($session) { ?>
  <iframe src="https://ma.moritaalumi.co.jp/l/1048092/2023-11-14/542i?comment=<?php echo str_replace("\r\n", '', $session['comment']) ?>&companyName=<?php echo $session['companyName'] ?>&lastname=<?php echo $session['sei'] ?>&firstname=<?php echo $session['mei'] ?>&businessCategory=<?php echo $session['businessCategory_data'] ?>&jobCategory=<?php echo $session['jobCategory_data'] ?>&busyo=<?php echo $session['busyo'] ?>&month=<?php echo $session['month'] ?>&zip=<?php echo $session['zip_data'] ?>&address=<?php echo $session['address_data'] ?>&tel=<?php echo $session['tel_data'] ?>&fax=<?php echo $session['fax_data'] ?>&url=<?php echo $session['url'] ?>&know=<?php echo $session['know_data'] ?>" width="1" height="1"></iframe>
<?php } ?>
	<script type='text/javascript'>
piAId = '1049092';
piCId = '2117';
piHostname = 'ma.moritaalumi.co.jp';

(function() {
	function async_load(){
		var s = document.createElement('script'); s.type = 'text/javascript';
		s.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + piHostname + '/pd.js';
		var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
	}
	if(window.attachEvent) { window.attachEvent('onload', async_load); }
	else { window.addEventListener('load', async_load, false); }
})();
</script>
</body>
</html>
