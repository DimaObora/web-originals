<html lang="ru">
<head>
<title>$SECTION_NAME$ - $SITE_NAME$</title>
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
<div class="col-md-<?if($HIDE_CLEFTER$)?>12<?else?>8<?endif?>"><!-- <body> --><div><a href="$HOME_PAGE_LINK$"><!--<s5176>-->Главная<!--</s>--></a> &raquo; $SECTION_NAME$</div>
<hr />
<?if($MODULE_SELECTOR$)?>$MODULE_SELECTOR$<hr /><?endif?>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><tr>
<td width="60%"><!--<s5246>-->Найдено комментариев<!--</s>-->: <b>$NUM_ENTRIES$</b><?if($NUM_SHOWN$)?><br /><!--<s5247>-->Показано комментариев<!--</s>-->: <b>$NUM_SHOWN$</b><?endif?></td>
<td align="right"><?if($PAGE_SELECTOR$)?><!--<s3015>-->Страницы<!--</s>-->: $PAGE_SELECTOR$<?endif?></td></tr></table><hr />
$BODY$
<?if($PAGE_SELECTOR1$)?><div style="text-align:center;">$PAGE_SELECTOR1$</div><?endif?><!-- </body> --></div>
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