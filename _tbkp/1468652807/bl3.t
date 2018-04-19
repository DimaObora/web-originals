<html lang="ru">
 <head>
 <title>$MODULE_NAME$ - $SITE_NAME$</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <?$META_DESCRIPTION$?>
 <?$META_KEYWORDS$?>
 <link type="text/css" rel="StyleSheet" href="/_st/my.css" />
 <!--[if lt IE 9]>
 <script src="/js/html5shiv.min.js"></script>
 <script src="/js/respond.min.js"></script>
 <![endif]-->
 </head>
 <body>
 <div id="wrapper">
 $GLOBAL_AHEADER$
 <!-- <middle> -->
 $GLOBAL_PROMO$
 </section>
 <section class="blog" id="blog">
 <div class="container">
 
 <div class="row">
 <div class="col-md-8">
 <div class="blog-post">
<div class="post-meta">
<span class="author"><a href="$PROFILE_URL$"><?if($AVATAR_URL$)?><img src="$AVATAR_URL$" alt=""><?endif?> $USERNAME$</a></span><?if($CATEGORY_NAME$)?>, 
<span>Добавлено в <a href="$CATEGORY_URL$">$CATEGORY_NAME$</a></span><?endif?>,
<span>$TIME$, <strong>$DATE$</strong></span>
<?if($MODER_PANEL$)?><span>$MODER_PANEL$</span><?endif?>
</div>
<h2 class="post-title"><a href="$ENTRY_URL$">$TITLE$</a></h2>
<?if($IMG_URL1$)?><div class="post-thumb"><a href="$ENTRY_URL$"><img src="$IMG_URL1$" alt="" class="img-responsive"></a></div><?endif?>
<div class="post-content">
$MESSAGE$
<?if($COMMENTS_NUM$="0")?>
<div class="alert alert-info fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4>Нет комментариев</h4>
<p>К сожелению еще никто не добавил комментарий к даному материалу</p>
</div>
<?endif?>
<?if($COM_IS_ACTIVE$)?>
<?if($COM_CAN_READ$)?>
$COM_BODY$
$COM_PAGE_SELECTOR1$
</table>
<?endif?>
<?if($COM_CAN_ADD$)?>
$COM_ADD_FORM$
<?else?>
<?if($USER_LOGGED_IN$)?><?else?><div class="alert alert-warning fade in">Добавлять комментарии могут только зарегистрированные пользователи.<br /><a href="$REGISTER_LINK$">Регистрация</a> | <a href="$LOGIN_LINK$">Вход</a></div><?endif?>
<?endif?>
<?endif?>
</div>
</div>
</div>
 <div class="col-md-4">
 $GLOBAL_CLEFTER$
 </div>
 </div>
 </div>
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
 <script src="/js/jquery.ajaxchimp.min.js"></script>
 <script src="/js/script.js"></script>
 </body>
 </html>