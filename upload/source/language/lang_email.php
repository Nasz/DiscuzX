<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php 35030 2014-10-23 07:43:23Z laoguozhang $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$lang = array
(
	'hello' => 'สวัสดี',
	'moderate_member_invalidate' => 'ปฏิเสธ',
	'moderate_member_delete' => 'ลบทิ้ง',
	'moderate_member_validate' => 'อนุมัติ',


	'get_passwd_subject' =>		'ร้องขอเปลี่ยนรหัสผ่านใหม่',
	'get_passwd_message' =>		'
<p>{username}，
จดหมายฉบับนี้ส่งโดย {bbname}</p>

<p>คุณได้รับอีเมลฉบับนี้ เพราะมีผู้ใช้อีเมลนี้ในการสมัครเป็นสมาชิกที่เว็บไซต์ {bbname}
และผู้ใช้ได้ร้องขอการเปลี่ยนรหัสผ่านใหม่</p>
<p>
----------------------------------------------------------------------<br />
<strong>สำคัญ！</strong><br />
----------------------------------------------------------------------</p>

<p>หากคุณไม่ได้ส่งคำขอสำหรับการรีเซ็ตรหัสผ่านหรือไม่ได้ลงทะเบียนผู้ใช้ที่ {bbname} กรุณาเพิกเฉย
และลบอีเมลนี้ เมื่อคุณยืนยันว่าคุณต้องการรีเซ็ตรหัสผ่านของคุณ โปรดอ่านเนื้อหาต่อไปนี้ต่อไปนี้
</p>
<p>
----------------------------------------------------------------------<br />
<strong>คำอธิบายรีเซ็ตรหัสผ่าน</strong><br />
----------------------------------------------------------------------</p>
</p>
คุณจะต้องรีเซ็ตรหัสผ่านของคุณโดยคลิกที่ลิงก์ด้านล่างนี้ภายในสามวันหลังจากส่งคำขอ：<br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}&amp;sign={sign}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}&amp;sign={sign}</a>
<br />
(หากด้านบนไม่ใช่แบบฟอร์มลิงก์โปรดวางที่อยู่ด้วยมือไปยังแถบที่อยู่เบราว์เซอร์และเยี่ยมชม)</p>

<p>ป้อนรหัสผ่านใหม่ในหน้าเปิดบนลิงก์ด้านบนและส่งคุณสามารถเข้าสู่เว็บไซต์ด้วยรหัสผ่านใหม่คุณสามารถแก้ไขรหัสผ่านได้ตลอดเวลาในแผงควบคุมผู้ใช้</p>

<p>IP ของผู้ส่งคำขอนี้คือ {clientip}</p>


<p>
สำหรับสิ่งนี้<br />
</p>
<p>{bbname} ทีมผู้บริหาร.
{siteurl}</p>',


	'email_verify_subject' =>	'Email 地址验证',
	'email_verify_message' =>	'<br />
<p>{username}，<br />
จดหมายฉบับนี้ถูกส่งโดย {bbname}</p>

<p>คุณได้รับอีเมลนี้เนื่องจากการลงทะเบียนผู้ใช้ใหม่ดำเนินการใน {bbname} หรือผู้ใช้แก้ไขการใช้อีเมล
ที่อยู่กล่องจดหมายนี้หากคุณยังไม่ได้เยี่ยมชม {bbname} หรือไม่ได้ดำเนินการข้างต้นโปรดทันที
อีเมลนี้เล็กน้อยคุณไม่จำเป็นต้องคัดลอกหรือดำเนินการอื่น ๆ เพิ่มเติม</p>
<br />
----------------------------------------------------------------------<br />
<strong>คำอธิบายการเปิดใช้งานบัญชี</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>หากคุณเป็นผู้ใช้ใหม่ของ {bbname} หรือใช้ที่อยู่นี้เมื่อแก้ไขอีเมลการลงทะเบียนของคุณเราต้องการ
เพื่อตรวจสอบความถูกต้องที่อยู่ของคุณเพื่อหลีกเลี่ยงสแปมหรือที่อยู่ในทางที่ผิด</p>

<p>คุณจะต้องคลิกที่ลิงก์ด้านล่างเพื่อเปิดใช้งานบัญชีของคุณ:<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(หากด้านบนไม่ใช่แบบฟอร์มลิงก์โปรดวางที่อยู่ด้วยมือไปยังแถบที่อยู่เบราว์เซอร์และเยี่ยมชม)</p>

<p>ขอบคุณสำหรับการเยี่ยมชมของคุณขอให้คุณมีความสุข！</p>


<p>
สำหรับสิ่งนี้<br />

{bbname} ทีมผู้บริหาร.<br />
{siteurl}</p>',

	'email_register_subject' =>	'ที่อยู่การลงทะเบียนฟอรัม',
	'email_register_message' =>	'<br />
<p>จดหมายฉบับนี้ถูกส่งโดย {bbname}</p>

<p>คุณได้รับอีเมลนี้เนื่องจากคุณได้รับที่อยู่ที่ลงทะเบียนผู้ใช้ใหม่ใน {bbname}
ที่อยู่กล่องจดหมายนี้หากคุณยังไม่ได้เยี่ยมชม {bbname} หรือไม่ได้ดำเนินการข้างต้นโปรดทันที
อีเมลนี้เล็กน้อยคุณไม่จำเป็นต้องคัดลอกหรือดำเนินการอื่น ๆ เพิ่มเติม</p>
<br />
----------------------------------------------------------------------<br />
<strong>คำแนะนำการลงทะเบียนผู้ใช้ใหม่</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>หากคุณเป็นผู้ใช้ใหม่ของ {bbname} หรือใช้ที่อยู่นี้เมื่อแก้ไขอีเมลการลงทะเบียนของคุณเราต้องการ
เพื่อตรวจสอบความถูกต้องที่อยู่ของคุณเพื่อหลีกเลี่ยงสแปมหรือที่อยู่ในทางที่ผิด</p>

<p>คุณจะต้องคลิกที่ลิงก์ด้านล่างเพื่อลงทะเบียนสำหรับผู้ใช้ลิงก์ต่อไปนี้ใช้ได้ 3 วันคุณสามารถขอให้ส่งการยืนยันจดหมายใหม่ได้อีกครั้ง：<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(หากด้านบนไม่ใช่แบบฟอร์มลิงก์โปรดวางที่อยู่ด้วยมือไปยังแถบที่อยู่เบราว์เซอร์และเยี่ยมชม)</p>

<p>ขอบคุณสำหรับการเยี่ยมชมของคุณขอให้คุณมีความสุข！</p>


<p>
สำหรับสิ่งนี้<br />

ทีมผู้บริหาร{bbname}<br />
{siteurl}</p>',


	'add_member_subject' =>		'คุณถูกเพิ่มเป็นสมาชิก',
	'add_member_message' => 	'
{newusername} ，
จดหมายฉบับนี้ส่งโดย {bbname}<br />
<br />
ฉันเป็นหนึ่งในผู้จัดการของ {adminusername}, {bbname}คุณได้รับอีเมลนี้เพราะคุณ <br />
ฉันเพิ่งถูกเพิ่มเข้ามาในฐานะสมาชิกของ {bbname} และอีเมลปัจจุบันคือที่อยู่กล่องจดหมายที่เราลงทะเบียนให้คุณ<br />
<br />
----------------------------------------------------------------------<br />
สำคัญ!<br />
----------------------------------------------------------------------<br />
<br />
หากคุณไม่สนใจ {bbname} หรือไม่เต็มใจที่จะเป็นสมาชิกโปรดละเว้นอีเมลนี้<br />
<br />
----------------------------------------------------------------------<br />
ข้อมูลเกี่ยวกับบัญชี<br />
----------------------------------------------------------------------<br />
<br />
ชื่อเว็บไซต์:{bbname}<br />
ที่อยู่เว็บไซต์:{siteurl}<br />
<br />
ชื่อผู้ใช้:{newusername}<br />
รหัสผ่าน:{newpassword}<br />
<br />
จากนี้ไปคุณสามารถเข้าสู่ระบบ {bbname} ด้วยบัญชีของคุณฉันขอให้คุณใช้งานได้อย่างมีความสุข!<br />
<br />
<br />
<br />
สำหรับสิ่งนี้<br />
<br />
ทีมผู้บริหาร{bbname}<br />
{siteurl}',


	'birthday_subject' =>		'สุขสันต์วันเกิด',
	'birthday_message' => 		'<br />
{username}，<br />
จดหมายฉบับนี้ถูกส่งโดย {bbname}<br />
<br />
คุณได้รับอีเมลนี้เนื่องจากที่อยู่ของกล่องจดหมายนี้ลงทะเบียนเป็นกล่องจดหมายผู้ใช้ใน {bbname}<br />
และจากข้อมูลที่คุณเติมเต็มวันนี้เป็นวันเกิดของคุณฉันดีใจที่ได้นำเสนอสำเนาของคุณในเวลานี้ <br />
พรของวันเกิดฉันต้องการเป็นตัวแทนทีมผู้บริหาร {bbname} และขอให้คุณมีความสุขในวันเกิด<br />
<br />
หากคุณไม่ใช่สมาชิกของ {bbname} หรือวันนี้ไม่ใช่วันเกิดของคุณอาจมีคนใช้โพสต์ของคุณในทางที่ผิด <br />
ที่อยู่ชิ้นส่วนหรือกรอกข้อมูลวันเกิดอย่างผิด ๆอีเมลนี้จะไม่ถูกส่งซ้ำหลายครั้งโปรดละเว้นอีเมลนี้<br />
<br />
<br />
สำหรับสิ่งนี้<br />
<br />
ทีมผู้บริหาร {bbname}<br />
{siteurl}',

	'email_to_friend_subject' =>	'{$_G[\'member\'][\'username\']} แนะนำให้คุณ: {$thread[\'subject\']}',
	'email_to_friend_message' =>	'<br />
จดหมายฉบับนี้คือโดย {$_G[\'setting\'][\'bbname\']} 的 {$_G[\'member\'][\'username\']} ส่ง.<br />
<br />
คุณได้รับอีเมลนี้เนื่องจาก {$_G[\'member\'][\'username\']} ผ่าน {$_G[\'setting\'][\'bbname\']} ของ“แนะนำให้เพื่อน”<br />
แนะนำฟังก์ชั่นสำหรับคุณด้านล่างหากคุณไม่สนใจสิ่งนี้โปรดเพิกเฉยต่ออีเมลนี้คุณไม่จำเป็นต้องคัดลอกหรือดำเนินการอื่น ๆ เพิ่มเติม<br />
<br />
----------------------------------------------------------------------<br />
ข้อความต้นฉบับของตัวอักษรเริ่มต้นขึ้น<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
ข้อความต้นฉบับของจดหมายจบ<br />
----------------------------------------------------------------------<br />
<br />
โปรดทราบว่าผู้ใช้ใช้จดหมายฉบับนี้เท่านั้น“แนะนำให้เพื่อน”ไม่ใช่เว็บไซต์อย่างเป็นทางการของเว็บไซต์<br />
ทีมผู้บริหารเว็บไซต์จะไม่รับผิดชอบต่ออีเมลดังกล่าว<br />
<br />
ยินดีต้อนรับสู่การเยี่ยมชม {$_G[\'setting\'][\'bbname\']}<br />
{$_G[\'siteurl\']}',

	'email_to_invite_subject' =>	'เพื่อนของคุณ {$_G[\'member\'][\'username\']} ส่ง {$_G[\'setting\'][\'bbname\']} รหัสเชิญลงทะเบียนไซต์สำหรับคุณ ',
	'email_to_invite_message' =>	'<br />
$sendtoname,<br />
จดหมายฉบับนี้คือโดย {$_G[\'setting\'][\'bbname\']} ของ {$_G[\'member\'][\'username\']} ส่ง.<br />
<br />
คุณได้รับอีเมลนี้เนื่องจาก {$_G[\'member\'][\'username\']} ผ่าน {bbname} ของ“ส่งรหัสคำเชิญให้เพื่อน”<br />
แนะนำฟังก์ชั่นสำหรับคุณด้านล่างหากคุณไม่สนใจสิ่งนี้โปรดเพิกเฉยต่ออีเมลนี้คุณไม่จำเป็นต้องคัดลอกหรือทำรายการอื่น ๆ<br />
การดำเนินการหนึ่งขั้นตอน<br />
<br />
----------------------------------------------------------------------<br />
ข้อความต้นฉบับของตัวอักษรเริ่มต้นขึ้น<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
ข้อความต้นฉบับของจดหมายจบ<br />
----------------------------------------------------------------------<br />
<br />
โปรดทราบว่าผู้ใช้ใช้จดหมายฉบับนี้เท่านั้น “ส่งรหัสคำเชิญให้เพื่อน”ไม่ใช่เว็บไซต์อย่างเป็นทางการของเว็บไซต์<br />
ทีมผู้บริหารเว็บไซต์จะไม่รับผิดชอบต่ออีเมลดังกล่าว<br />
<br />
ยินดีต้อนรับสู่การเยี่ยมชม {$_G[\'setting\'][\'bbname\']}<br />
{$_G[\'siteurl\']}',


	'moderate_member_subject' =>	'ประกาศผลการตรวจสอบผู้ใช้',
	'moderate_member_message' =>	'<br />
<p>{username},
จดหมายฉบับนี้คือโดย{bbname} ส่ง.</p>

<p>คุณได้รับอีเมลนี้เนื่องจากที่อยู่ของกล่องจดหมายนี้อยู่ใน {bbname} เมื่อลงทะเบียนโดยผู้ใช้ใหม่
ใช้และผู้ดูแลระบบตั้งค่าการตรวจสอบด้วยตนเองของผู้ใช้ใหม่อีเมลนี้จะแจ้งให้คุณส่ง
ผลการตรวจสอบของแอปพลิเคชัน</p>
<br />
----------------------------------------------------------------------<br />
<strong>ข้อมูลการลงทะเบียนและผลการตรวจสอบ</strong><br />
----------------------------------------------------------------------<br />
<br />
ชื่อผู้ใช้: {username}<br />
เวลาลงทะเบียน: {regdate}<br />
เวลาส่ง: {submitdate}<br />
จำนวนเวลาการส่ง: {submittimes}<br />
ลงนามเหตุผล: {message}<br />
<br />
ผลการตรวจสอบ: {modresult}<br />
เวลาตรวจสอบ: {moddate}<br />
ตรวจสอบผู้ดูแลระบบ: {adminusername}<br />
ผู้ดูแลระบบฝากข้อความ: {remark}<br />
<br />
----------------------------------------------------------------------<br />
<strong>คำอธิบายของผลการตรวจสอบ</strong><br />
----------------------------------------------------------------------<br />

<p>ผ่าน: การลงทะเบียนของคุณผ่านการตรวจสอบแล้วและคุณได้กลายเป็นผู้ใช้อย่างเป็นทางการของ {bbname}</p>

<p>ยับยั้ง: ข้อมูลการลงทะเบียนของคุณไม่สมบูรณ์หรือข้อกำหนดบางประการของผู้ใช้ใหม่ของเราไม่เป็นไปตาม
	  ฝากข้อความตามผู้ดูแลระบบ<a href="home.php?mod=spacecp&ac=profile" target="_blank">ปรับปรุงข้อมูลการลงทะเบียนของคุณ</a>จากนั้นส่งอีกครั้ง</p>

<p>ลบ：เนื่องจากการลงทะเบียนของคุณมีขนาดใหญ่เนื่องจากข้อกำหนดของเราหรือจำนวนการลงทะเบียนใหม่ในเว็บไซต์นี้มีอยู่แล้ว
	  ความคาดหวังที่ยอดเยี่ยมแอปพลิเคชันถูกปฏิเสธบัญชีของคุณถูกลบออกจากฐานข้อมูลและจะไม่
	  ใช้การเข้าสู่ระบบหรือส่งไปยังรีวิวอีกครั้งโปรดยกโทษให้ฉัน</p>

<br />
<br />
สำหรับสิ่งนี้<br />
<br />
ทีมผู้บริหาร {bbname}<br />
{siteurl}',

	'adv_expiration_subject' =>	'โฆษณาที่เว็บไซต์ของคุณจะเปิดอยู่ {day} หลังจากวันหมดอายุของวันโปรดจัดการในเวลา',
	'adv_expiration_message' =>	'โฆษณาต่อไปนี้ในเว็บไซต์ของคุณจะเปิดอยู่ {day} หลังจากวันหมดอายุของวันโปรดจัดการในเวลา：<br /><br />{advs}',
	'invite_payment_email_message' => '
ยินดีต้อนรับ{bbname}（{siteurl}），คำสั่งของคุณ{orderid}การชำระเงินได้รับการชำระแล้วและคำสั่งซื้อได้รับการยืนยันแล้ว<br />
<br />----------------------------------------------------------------------<br />
ต่อไปนี้เป็นรหัสคำเชิญของคุณ
<br />----------------------------------------------------------------------<br />

{codetext}

<br />----------------------------------------------------------------------<br />
สำคัญ！
<br />----------------------------------------------------------------------<br />',
);

?>