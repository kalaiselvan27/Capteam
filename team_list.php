<?php require_once('config/tank_config.php'); ?>
<?php require_once('session_unset.php'); ?>
<?php require_once('session.php'); ?>
<!DOCTYPE html PUBLIC >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Capteam - <?php echo $multilingual_dept_title; ?></title>
<link href="css/custom.css" rel="stylesheet" type="text/css" />
<link href="css/tk_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/JavaScript">
<!--
function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
</head>

<body>
<!-- admin head-->
<div class="admin_topbar" id="headerlink">
<div class="admin_logo"></div>
<div class="logininfo"><div class="float_left"><?php echo $multilingual_head_hello; ?> <?php echo "$_SESSION['MM_Displayname']"; ?>, </div> 
  &nbsp;&nbsp;<a href="index.php"><?php echo $multilingual_head_frontend; ?></a>&nbsp;&nbsp;<a href="<?php echo $logoutAction ?>"><?php echo $multilingual_head_logout; ?></a></div></div>
  
<table border="0" cellspacing="5" cellpadding="12" width="100%">
  <tr>
    <td width="200px" class="set_menu_bg" valign="top"><?php require('setting_menu.php'); ?></td>
	<td >
<div class="ui-widget"  style="margin:auto; width:580px;">
<div class="ui-state-highlight fontsize-s" style=" padding: 5px; width:100%;"> 
				<span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
	<strong class="font_big glink"><?php echo $multilingual_error_oursite; ?></strong> <br /><br />
<li class="feature02" >
<span class="fontbold "><?php echo $multilingual_dept_title; ?></span><br />
<?php echo $multilingual_dept_text; ?> 
</li>
    </div>
    </div>
</div>
	</td>
  </tr>
</table>

<?php require('foot.php'); ?>
</body>
</html>
