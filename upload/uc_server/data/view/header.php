<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo UC_CHARSET;?>" />
<title>UCenter Administrator's Control Panel</title>
<link rel="stylesheet" href="images/admincp.css" type="text/css" media="all" />
<meta content="Comsenz Inc." name="Copyright" />
</head>
<body><div id="append"></div>
<?php if(!empty($iframe) && !empty($user)) { ?>
	<a class="othersoff" style="float:right;text-align:center" id="header_menu" onclick="headermenu(this)">菜单</a>
	<ul id="header_menu_menu" style="display: none">
		<li><a href="<?php echo UC_ADMINSCRIPT;?>?m=frame&a=main&iframe=1" target="main" class="tabon">หน้าแรก</a></li>
		<?php if($user['allowadminsetting'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=setting&a=ls&iframe=1" target="main">การตั้งค่าพื้นฐาน</a></li><?php } ?>
		<?php if($user['allowadminsetting'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=setting&a=register&iframe=1" target="main">ลงทะเบียน</a></li><?php } ?>
		<?php if($user['allowadminsetting'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=setting&a=mail&iframe=1" target="main">การตั้งค่าอีเมล</a></li><?php } ?>
		<?php if($user['allowadminapp'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=app&a=ls&iframe=1" target="main">การจัดการแอปพลิเคชัน</a></li><?php } ?>
		<?php if($user['allowadminuser'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=user&a=ls&iframe=1" target="main">การจัดการผู้ใช้</a></li><?php } ?>
		<?php if($user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=admin&a=ls&iframe=1" target="main">ผู้ดูแลระบบ</a></li><?php } ?>
		<?php if($user['allowadminpm'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=pm&a=ls&iframe=1" target="main">ข้อความสั้น ๆ</a></li><?php } ?>
		<?php if($user['allowadmincredits'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=credit&a=ls&iframe=1" target="main">แลกเครดิต</a></li><?php } ?>
		<?php if($user['allowadminbadword'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=badword&a=ls&iframe=1" target="main">การกรองคำ</a></li><?php } ?>
		<?php if($user['allowadmindomain'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=domain&a=ls&iframe=1" target="main">DNS</a></li><?php } ?>
		<?php if($user['allowadmindb'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=db&a=ls&iframe=1" target="main">การสำรองข้อมูลข้อมูล</a></li><?php } ?>
		<?php if($user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=feed&a=ls&iframe=1" target="main">แผ่นข้อมูล</a></li><?php } ?>
		<?php if($user['allowadmincache'] || $user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=cache&a=update&iframe=1" target="main">รีเฟรชแคช</a></li><?php } ?>
		<?php if($user['isfounder']) { ?><li><a href="<?php echo UC_ADMINSCRIPT;?>?m=plugin&a=filecheck&iframe=1" target="main">插件中心</a></li><?php } ?>
		<a href="<?php echo UC_ADMINSCRIPT;?>?m=user&a=logout" target="main">เลิก</a>
	</ul>
<?php } ?>
<script type="text/javascript">
	function headermenu(ctrl) {
		ctrl.className = ctrl.className == 'otherson' ? 'othersoff' : 'otherson';
		var menu = document.getElementById('header_menu_body');
		if(!menu) {
			menu = document.createElement('div');
			menu.id = 'header_menu_body';
			menu.innerHTML = '<ul>' + document.getElementById('header_menu_menu').innerHTML + '</ul>';
			var obj = ctrl;
			var x = ctrl.offsetLeft;
			var y = ctrl.offsetTop;
			while((obj = obj.offsetParent) != null) {
				x += obj.offsetLeft;
				y += obj.offsetTop;
			}
			menu.style.left = x + 'px';
			menu.style.top = y + ctrl.offsetHeight + 'px';
			menu.className = 'togglemenu';
			menu.style.display = '';
			document.body.appendChild(menu);
		} else {
			menu.style.display = menu.style.display == 'none' ? '' : 'none';
		}
	}
</script>
