<html>
<head>
<title>Информация о пользователе</title>
<link type="text/css" rel="StyleSheet" href="/_st/my.css" />
</head>
<body>

<table border="0" cellpadding="0" cellspacing="0" width="100%" id="casing" class="popuptable">
<tr><td><div class="popuptitle"><div><span>Информация о пользователе</span></div></div><div class="popupbody"><div align="center">
<script type="text/javascript">
if (window.name.length>2){window.resizeTo(750,420);}
function uSocialConnect(obj){
	var social = obj.id.split('-')[1];
	obj = $(obj);
	if(obj.hasClass('is-connected')){
		if(confirm('Вы действительно желаете отключить аккаунт?')){
			obj.addClass('wait');
			_uPostForm('',{type:'POST',url:'/index/sub/', data:{a:4,s:social}});
		}
	}else if(!obj.hasClass('wait')){
		uSocialLogin(social);
	}
	return false;
}
</script>
<style type="text/css">
	.udtb { text-align:left; padding:3px }
	.udtlb { clear:left; float:left; width:150px }
	.social-accounts { padding:10px 0 3px }
	.social-accounts a { opacity:.4 }
	.social-accounts .is-connected { opacity:1!important }
	.social-accounts .wait i { background:url(/.s/img/icon/ajsml.gif) no-repeat center center!important }
	.social-accounts a.cursor-default, .social-accounts a.cursor-default i { cursor:default!important }
</style>
<div style="position:relative;float:right;text-align:center;">
<?if($_AVATAR$)?>$_AVATAR$<br /><br /><?endif?>
<?if($_UID$)?><div style="padding-bottom:4px;"><img alt="" style="vertical-align:-4px;" border="0" src="/.s/img/ma/uid.gif"> <a href="$_UID_URL$" target="_blank"><b>uID профиль</b></a></div><?endif?>
<?if($_CHANGE_DETAILS_URL$)?>[ <a href="$_CHANGE_DETAILS_URL$">Изменить данные</a> ]<?endif?>
<?if($_PM_READ_URL$)?><div style="padding-top:4px;" id="userPMread">[ <a href="$_PM_READ_URL$">Читать ЛС (<b>$UNREAD_PM$</b>)</a> ]</div><?endif?>
<?if($_PM_SEND_URL$)?><div style="padding-top:4px;" id="userPMread">[ <a href="$_PM_SEND_URL$" title="Отправить личное сообщение">Отправить ЛС</a> ]</div><?endif?>
</div>
<div id="block1" class="udtb"><div class="udtlb">Пользователь:</div> <a href="javascript://" rel="nofollow" onclick="prompt('Адрес профиля данного пользователя','$_PROFILE_URL$')"><b>$_USERNAME$</b></a> <?if($MODER_PANEL$)?>[id: <b>$_USER_ID$</b>]<?endif?> <?if($_RANK_NAME$)?><span title="Ранг: $_RANK$">$_RANK_ICON$</span> [ $_RANK_NAME$ ]<?endif?></div>
<?if($_BANNED_TILL$)?>
<?if($_BANNED_TILL$="1")?><div id="blockBanned" style="text-align:center;padding:3px;"><b style="color:red;">Активность заблокирована навсегда!</b></div><?else?><div id="blockBanned" style="text-align:center;padding:3px;">Активность заблокирована до $_BANNED_TILL$</div><?endif?>
<?endif?>
<div id="block2" class="udtb"><div class="udtlb">Группа:</div>
<?if($MODER_PANEL_RIGHT$)?>
$MODER_PANEL_RIGHT$
<?else?>
 $_GROUP_NAME$ <?if($_GROUP_ICON$)?>$_GROUP_ICON$<?endif?>
<?endif?>
</div>

<?if($AWARDS_READ_URL$ || $_REP_READ_URL$)?>
<div id="block25" class="udtb"><div class="udtlb">Поощрения:</div> <?if($AWARDS_READ_URL$)?><a href="$AWARDS_READ_URL$" title="Список наград">Награды (<b>$AWARDS$</b>)</a> <?if($AWARDS_DO_URL$)?>[<a href="$AWARDS_DO_URL$">+</a>]<?endif?><?endif?><?if($_REP_READ_URL$)?><?if($AWARDS_READ_URL$)?> &nbsp; <?endif?><a title="Смотреть историю репутации" class="repHistory" href="$_REP_READ_URL$">Репутация (<b>$_REPUTATION$</b>)</a><?if($_REP_DO_URL$)?> [<a href="$_REP_DO_URL$">&plusmn;</a>]<?endif?><?endif?></div>
<?endif?>

<?if($_BAN_READ_URL$)?>
<div id="block3" class="udtb"><div class="udtlb">Замечания:</div> <a class="banPercent" title="Смотреть историю замечаний" href="$_BAN_READ_URL$">$_BAN_PERCENT$%</a> <?if($_BAN_DO_URL$)?>&nbsp; <a href="$_BAN_DO_URL$"><img alt="" style="margin:0;padding:0;border:0;" title="Изменить уровень замечаний" src="http://s24.ucoz.net/img/fr/wm.gif" width="10" height="9" /></a><img alt="" style="margin:0;padding:0;border:0;" src="http://s24.ucoz.net/img/fr/w$_BAN_RATING$.gif" width="49" height="9" /><a href="$_BAN_DO_URL$"><img alt="" style="margin:0;padding:0;border:0;" title="Изменить уровень замечаний" src="http://s24.ucoz.net/img/fr/wp.gif" width="10" height="9" /></a><?endif?></div>
<?endif?>
<?if($_NAME$)?>
<div id="block5" class="udtb"><div class="udtlb">Имя:</div> $_NAME$ <?if($_GENDER_NAME$)?>[ $_GENDER_NAME$ ]<?endif?></div>
<?endif?>
<?if($_STATUS$)?>
<div id="block6" class="udtb"><div class="udtlb">Статус:</div> $_STATUS$</div>
<?endif?>
<?if($MODER_PANEL$)?>
<div id="block7" class="udtb"><div class="udtlb">Регистрационный IP:</div> <a href="https://apps.db.ripe.net/search/query.html?searchtext=$_IP_ADDRESS$" target="_blank">$_IP_ADDRESS$</a></div>
<?endif?>
<?if($_REG_TIME$)?>
<div id="block8" class="udtb"><div class="udtlb">Дата регистрации:</div> $_REG_TIME$</div>
<?endif?>
<?if($_LOG_TIME$)?>
<div id="block9" class="udtb"><div class="udtlb">Дата входа:</div> $_LOG_TIME$</div>
<?endif?>
<?if($SOCIAL_LOGIN$)?>
<div id="block17" class="udtb"><div class="udtlb">Социальные аккаунты:</div><div class="social-accounts">$_SOCIAL_ACCOUNTS$</div></div>
<?endif?>
<?if($_BIRTHDAY$)?>
<div id="block10" class="udtb"><div class="udtlb">Дата рождения:</div>$_BIRTHDAY$ [ <b>$_AGE$</b> $_ZODIAC$ ]</div>
<?endif?>
<div id="block11" class="udtb"><div class="udtlb">E-mail:</div>
<?if($_IS_OWN_PROFILE$)?>$_EMAIL$
  <?if($_EMAIL_IS_HIDDEN$)?><span style="font-size:7pt">(Адрес скрыт)</span><?endif?>
<?else?>
  <?if($MODER_PANEL$)?><a href="mailto:$_EMAIL$">$_EMAIL$</a>
    <?if($_EMAIL_IS_HIDDEN$)?><span style="font-size:7pt">(Адрес скрыт)</span><?endif?>
    <?if(!$_EMAIL_IS_VERIFIED$)?><span style="color:red;" title="Not verified e-mail">*</span><?endif?>
  <?else?>
    <?if($_SEND_EMAIL_URL$)?><a href="$_SEND_EMAIL_URL$">Написать письмо пользователю</a>
    <?else?>$_EMAIL$
  <?endif?>
<?endif?>
<?endif?>
<?if($_EMAIL_VERIFICATION_URL$)?>[ <b><a href="$_EMAIL_VERIFICATION_URL$"><span style="color:red">Подтвердить e-mail</span></a></b> ]<?endif?></div>
<?if($_WWW$)?>
<div id="block12" class="udtb"><div class="udtlb">Сайт:</div> $_WWW$</div>
<?endif?>
<?if($_ICQ$)?>
<div id="block13" class="udtb"><div class="udtlb">ICQ:</div> $_ICQ$</div>
<?endif?>
<?if($_AOL$)?>
<div id="block14" class="udtb"><div class="udtlb">AOL:</div> $_AOL$</div>
<?endif?>
<?if($_MSN$)?>
<div id="block15" class="udtb"><div class="udtlb">MSN:</div> $_MSN$</div>
<?endif?>
<?if($_YAHOO$)?>
<div id="block16" class="udtb"><div class="udtlb">Yahoo:</div> $_YAHOO$</div>
<?endif?>
<?if($_PHONE$)?>
<div id="block26" class="udtb"><div class="udtlb">Телефон:</div>$_PHONE$
<?if($_IS_OWN_PROFILE$ || $MODER_PANEL$)?>
  <?if($_PHONE_IS_HIDDEN$)?><span style="font-size:7pt">(Телефон скрыт)</span><?endif?>
<?endif?>
</div>
<?endif?>
<?if($_COUNTRY$)?>
<div id="block18" class="udtb"><div class="udtlb"><?if($_UID$)?>Место проживания<?else?>Страна<?endif?>:</div> $_COUNTRY$</div>
<?endif?>
<?if($_STATE$)?>
<div id="block19" class="udtb"><div class="udtlb">Штат:</div> $_STATE$</div>
<?endif?>
<?if($_CITY$)?>
<div id="block20" class="udtb"><div class="udtlb">Город:</div> $_CITY$</div>
<?endif?>
<?if($_SIGNATURE$)?>
<div id="block21" class="udtb"><div class="udtlb">Подпись:</div> $_SIGNATURE$</div>
<?endif?>
<?if($_IS_ACTIVITY$)?>
<div id="block25" class="udtb"><hr></div><div id="block22" class="udtb" style="text-align:center">
<?if($_COM_ENTRIES$)?> | <a href="$_COM_ACTIVITY_URL$" target="_blank">комментарии(<b>$_COM_ENTRIES$</b>)</a><?endif?>
<?if($_FORUM_ENTRIES$)?> | <a href="$_FORUM_ACTIVITY_URL$" target="_blank">форум(<b>$_FORUM_ENTRIES$</b>)</a><?endif?>
<?if($_BLOG_ENTRIES$)?> | <a href="$_BLOG_ACTIVITY_URL$" target="_blank">блог(<b>$_BLOG_ENTRIES$</b>)</a><?endif?>
<?if($_NEWS_ENTRIES$)?> | <a href="$_NEWS_ACTIVITY_URL$" target="_blank">новости(<b>$_NEWS_ENTRIES$</b>)</a><?endif?>
<?if($_PUBL_ENTRIES$)?> | <a href="$_PUBL_ACTIVITY_URL$" target="_blank">статьи(<b>$_PUBL_ENTRIES$</b>)</a><?endif?>
<?if($_LOAD_ENTRIES$)?> | <a href="$_LOAD_ACTIVITY_URL$" target="_blank">файлы(<b>$_LOAD_ENTRIES$</b>)</a><?endif?>
<?if($_DIR_ENTRIES$)?> | <a href="$_DIR_ACTIVITY_URL$" target="_blank">сайты(<b>$_DIR_ENTRIES$</b>)</a><?endif?>
<?if($_BOARD_ENTRIES$)?> | <a href="$_BOARD_ACTIVITY_URL$" target="_blank">объявления(<b>$_BOARD_ENTRIES$</b>)</a><?endif?>
<?if($_PHOTO_ENTRIES$)?> | <a href="$_PHOTO_ACTIVITY_URL$" target="_blank">фото(<b>$_PHOTO_ENTRIES$</b>)</a><?endif?>
<?if($_STUFF_ENTRIES$)?> | <a href="$_STUFF_ACTIVITY_URL$" target="_blank">игры(<b>$_STUFF_ENTRIES$</b>)</a><?endif?>
<?if($_SHOP_ENTRIES$)?> | <a href="$_SHOP_ACTIVITY_URL$" target="_blank">товары(<b>$_SHOP_ENTRIES$</b>)</a><?endif?>
<?if($_VIDEO_ENTRIES$)?> | <a href="$_VIDEO_ACTIVITY_URL$" target="_blank">видео(<b>$_VIDEO_ENTRIES$</b>)</a><?endif?> |</div>

<?endif?>
<?if($USERS_LIST_URL$)?>
<hr /><form method="post" action="/index" name="fuser" style="margin:0px"><table border="0" cellpadding="4" cellspacing="1" width="100%" id="usch"><tr><td align="center"><input type="button" class="allUsersBtn" style="width:150px;" onclick="window.location.href='/index/15-1'" value="Список пользователей" />&nbsp;<input type="text" class="uSearchFl" name="user" style="width:240px;text-align:center;" size="20" value="Логин пользователя" onclick="if (this.value=='Логин пользователя'){this.value='';}" maxlength="25" /> <input type="submit" class="uSearchFlSbm" style="width:150px;" value="Найти пользователей" /></td></tr></table><input type="hidden" name="a" value="15" /></form>
<?endif?></div></div></td></tr>
</table>

</body>
</html>