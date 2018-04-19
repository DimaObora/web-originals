<html lang="ru">
<head>
<title>$PHOTO_NAME$ - $CAT_NAME$ <?if($SECTION_NAME$)?>- $SECTION_NAME$<?endif?> - $MODULE_NAME$ - $SITE_NAME$</title>
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
<div class="col-md-<?if($HIDE_CLEFTER$)?>12<?else?>8<?endif?>"><!-- <body> --><a href="$HOME_PAGE_LINK$"><!--<s5176>-->Главная<!--</s>--></a> &raquo; <a href="$MODULE_URL$"><!--<s5169>-->Фотоальбом<!--</s>--></a> <?if($SECTION_NAME$)?>&raquo; <a href="$SECTION_URL$">$SECTION_NAME$</a><?endif?> &raquo; <a href="$CAT_URL$">$CAT_NAME$</a> &raquo; $PHOTO_NAME$
 <hr />
 <div id="u-photos">
 <div class="uphoto-entry">
 <h2 class="photo-etitle">$PHOTO_NAME$</h2>
 <div class="photo-edescr">
 $PHOTO_DESCR$
 </div>
 <div class="u-center">
 <div class="photo-block">
 <div class="ph-wrap">
 <span class="photo-expand">
 $PHOTO$
 <?if($FULL_PHOTO_DIRECT_URL$)?><a class="dd-tip ulightbox" href="$FULL_PHOTO_DIRECT_URL$" target="_blank"><i class="expand-ico"></i><!--<s10014>-->В реальном размере<!--</s>--> <b>$PHOTO_SIZE$</b> / $PHOTO_WEIGHT$Kb</a><?endif?>
 </span>
 </div>
 <div class="photo-edetails ph-js-details">
 <span class="phd-views">$REVIEWS$</span>
 <span class="phd-comments">$COMMENTS_NUM$</span>
 <?if($RATING$)?>
 <span class="phd-rating">
 <span id="entRating$ID$">$RATING$</span>
 </span>
 <span class="phd-dorating"><?$RSTARS$('14','/.s/img/photopage/rstars.png','1','float')?></span>
 <?endif?>
 </div>
 <hr class="photo-hr" />
 <div class="photo-edetails2">
<!--<s10015>-->Добавлено<!--</s>--> $ADD_DATE$ <a class="phd-author" href="$PROFILE_URL$">$USER$</a>
 </div>
 </div>
 <?if($MODER_PANEL$)?><span style="display: block;vertical-align: middle;margin: 10px 0;white-space: nowrap;">$MODER_PANEL$</span><?endif?>
 </div>
 </div>
 <div class="photo-slider u-center">
 <?if($OTHER_PHOTOS$)?>$NEAR_PHOTOS$<?endif?>
 </div>
 </div>
 <hr />

 <?if($COM_IS_ACTIVE$)?>
 <?if($COM_CAN_READ$)?>
 <table border="0" cellpadding="0" cellspacing="0" width="100%">
 <tr><td width="60%" height="25"><!--<s5183>-->Всего комментариев<!--</s>-->: <b>$COM_NUM_ENTRIES$</b></td><td align="right" height="25">$COM_PAGE_SELECTOR$</td></tr>
 <tr><td colspan="2">$COM_BODY$</td></tr>
 <tr><td colspan="2" align="center">$COM_PAGE_SELECTOR1$</td></tr>
 <tr><td colspan="2" height="10"></td></tr>
 </table>
 <?endif?>

 <?if($COM_CAN_ADD$)?>
 $COM_ADD_FORM$
 <?else?>
 <?if($USER_LOGGED_IN$)?><?else?><div align="center" class="commReg"><!--<s5237>-->Добавлять комментарии могут только зарегистрированные пользователи.<!--</s>--><br />[ <a href="$REGISTER_LINK$"><!--<s3089>-->Регистрация<!--</s>--></a> | <a href="$LOGIN_LINK$"><!--<s3087>-->Вход<!--</s>--></a> ]</div><?endif?>
 <?endif?>
 <?endif?><!-- </body> --></div>
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