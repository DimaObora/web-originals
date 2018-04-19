<html lang="ru">
<head>
<title>Доступ запрещен - $SITE_NAME$</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?$META_DESCRIPTION$?>
<?$META_KEYWORDS$?>
<link type="text/css" rel="StyleSheet" href="/_st/my.css" />
</head>
<body>
<div id="wrapper">
$GLOBAL_AHEADER$

<!-- <middle> -->
$GLOBAL_PROMO$
<section class="gocontent" id="gocontent">
<div class="container">
<div class="row">
<div class="col-md-<?if($HIDE_CLEFTER$)?>12<?else?>8<?endif?>"><!-- <body> --><div align="center"><?if($USER_LOGGED_IN$)?><br /><br /><br /><!--<s5213>-->Вы входите в группу пользователей, которым запрещено совершать данное действие.<br><br><br>По всем вопросам обращайтесь к администратору сайта.<!--</s>--><br /><br /><br /><br /><?endif?>
<?if(!$USER_LOGGED_IN$)?><br /><br /><br /><!--<s5211>-->Гостям запрещено просматривать данную страницу, пожалуйста, войдите на сайт как пользователь.<!--</s>--><br /><br /><br /><span style="font-size:13pt;text-transform:uppercase;">[ <a href="$LOGIN_LINK$"><b><!--<s3087>-->Вход<!--</s>--></b></a> ]</span><br /><br /><br /><br /><?endif?></div><!-- </body> --></div>
<?if(!$HIDE_CLEFTER$)?>
<div class="col-md-4">
<div class="widgets">
$GLOBAL_CLEFTER$
</div>
</div>
<?endif?>
</section>
<!-- </middle> -->

$GLOBAL_BFOOTER$
<!-- Scripts -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/jquery.stellar.js"></script>
<script src="/js/jquery.appear.js"></script>
<script src="/js/jquery.nicescroll.min.js"></script>
<script src="/js/jquery.countTo.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/script.js"></script>
 
<div style="display:none">

</body>
</html>