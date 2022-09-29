<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_tradelist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'tradelist_fids' => 'เลือกบอร์ด',
	'tradelist_fids_comment' => '设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'tradelist_uids' => 'UIDผู้ใช้',
	'tradelist_uids_comment' => 'กรอก IDผู้ใช้(uid) สามารถกรอกได้หลายคนโดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'tradelist_startrow' => 'แถวข้อมูลเริ่มต้น',
	'tradelist_startrow_comment' => 'หากต้องการกำหนดแถวเริ่มต้นของข้อมูล ใส่ 0 หมายถึงเริ่มจากแถวแรกเป็นต้นไป',
	'tradelist_items' => '显示数据条数',
	'tradelist_items_comment' => '设置一次显示的主题条目数，请设置为大于 0 的整数',
	'tradelist_titlelength' => '标题最大字节数',
	'tradelist_titlelength_comment' => '设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'tradelist_fnamelength' => '标题最大字节数包含版块名称',
	'tradelist_fnamelength_comment' => '设置标题长度是否将所在版块名称的长度一同计算在内',
	'tradelist_summarylength' => '主题简短内容文字数',
	'tradelist_summarylength_comment' => '设置主题简短内容的文字数，0 为使用默认值 255',
	'tradelist_tids' => 'เลือกกระทู้',
	'tradelist_tids_comment' => 'กรอก IDกระทู้(tid) สามารถกรอกได้หลายกระทู้โดยใช้เครื่องหมายจุลภาค (,) แยกออกจากกัน',
	'tradelist_keyword' => 'คีย์เวิร์ดชื่อ',
	'tradelist_keyword_comment' => 'กำหนดคีย์เวิร์ดสำหรับการเลือกจากชื่อ ข้อสังเกต: ปล่อยว่างหากไม่ต้องการกรอง； คีย์เวิร์ดสามารถใส่ * เพื่อค้นหาชื่อที่มีบางส่วนคล้ายกัน； การจับจับคู่หลายคีย์เวิร์ดเพื่อตีวงแคบ สามารถใช้การเคาะสเปซ หรือใช้ AND เชื่อมก็ได้ เช่น win32 AND unix；จับคู่หลายคีย์เวิร์ดเพื่อขยายวงการค้นหา สามารถใช้ | หรือ OR เชื่อมก็ได้ เช่น win32 OR unix',
	'tradelist_typeids' => 'เลือกชนิดกระทู้',
	'tradelist_typeids_comment' => 'เลือกกรองจากชนิดของกระทู้ หมายเหตุ: เลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'tradelist_typeids_all' => '全部的主题分类',
	'tradelist_sortids' => '分类信息',
	'tradelist_sortids_comment' => '设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'tradelist_sortids_all' => '全部的分类信息',
	'tradelist_digest' => 'กรองกระทู้สำคัญ',
	'tradelist_digest_comment' => 'เลือกกรองเฉพาะกระทู้ หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'tradelist_digest_0' => 'กระทู้ทั่วไป',
	'tradelist_digest_1' => 'สำคัญ I',
	'tradelist_digest_2' => 'สำคัญ II',
	'tradelist_digest_3' => 'สำคัญ III',
	'tradelist_stick' => 'กรองกระทู้ปักหมุด',
	'tradelist_stick_comment' => 'เลือกกรองเฉพาะกระทู้ หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'tradelist_stick_0' => 'กระทู้ทั่วไป',
	'tradelist_stick_1' => 'ปักหมุด I',
	'tradelist_stick_2' => 'ปักหมุด II',
	'tradelist_stick_3' => 'ปักหมุด III',
	'tradelist_special' => 'กรองกระทู้พิเศษ',
	'tradelist_special_comment' => 'เลือกกรองเฉพาะกระทู้ หมายเหตุ: เหลือกทั้งหมดหรือไม่เลือกเท่ากับไม่มีการกรอง',
	'tradelist_special_1' => 'กระทู้โพล',
	'tradelist_special_2' => 'กระทู้ขายของ',
	'tradelist_special_3' => 'กระทู้ว่าจ้าง',
	'tradelist_special_4' => 'กระทู้กิจกรรม',
	'tradelist_special_5' => 'กระทู้ดีเบต',
	'tradelist_special_0' => 'กระทู้ทั่วไป',
	'tradelist_special_reward' => 'กรองกระทู้รางวัล',
	'tradelist_special_reward_comment' => 'ตั้งค่ากรองเฉพาะกระทู้แจกรางวัล',
	'tradelist_special_reward_0' => 'ทั้งหมด',
	'tradelist_special_reward_1' => 'จบแล้ว',
	'tradelist_special_reward_2' => 'ยังไม่จบ',
	'tradelist_recommend' => 'กรองกระทู้แนะนำ',
	'tradelist_recommend_comment' => 'ตั้งค่าว่าจะแสดงเฉพาะกระทู้แนะนำ',
	'tradelist_orderby' => 'เรียงตาม',
	'tradelist_orderby_comment' => 'ตั้งค่าวิธีการเรียงลำดับจากฟิลด์ของกระทู้',
	'tradelist_orderby_lastpost' => 'ให้ตอบล่าสุดให้มาก่อน',
	'tradelist_orderby_dateline' => 'เผยแพร่ล่าสุดมาก่อน',
	'tradelist_orderby_replies' => 'ตอบล่าสุดมาก่อน',
	'tradelist_orderby_views' => 'ผู้ชมมากสุดมาก่อน',
	'tradelist_orderby_heats' => 'ป็อบมากสุดมาก่อน',
	'tradelist_orderby_recommends' => 'ห้วข้อแนะนำล่าสุดมาก่อน',
	'tradelist_orderby_hourviews' => 'จำนวนวิวในช่วงเวลาที่กำหนดเยอะสุดมาก่อน',
	'tradelist_orderby_todayviews' => 'จำนวนวิวในรอบวันเยอะสุดมาก่อน',
	'tradelist_orderby_weekviews' => 'จำนวนวิวในรอบสัปดาห์เยอะสุดมาก่อน',
	'tradelist_orderby_monthviews' => 'จำนวนวิวเดือนปัจจุบันเยอะสุดมาก่อน',
	'tradelist_orderby_hours' => 'ระยะเวลา(ชั่วโมง)',
	'tradelist_orderby_hours_comment' => '指定时间内浏览次数倒序排序的时间值',
	'tradelist_orderby_todayhots' => '按当天累计售出数倒序排序',
	'tradelist_orderby_weekhots' => '按本周累计售出数倒序排序',
	'tradelist_orderby_monthhots' => '按当月累计售出数倒序排序',
	'tradelist_price_add' => ' 附加 ',
	'tradelist_place' => '活动地点',
	'tradelist_class' => '活动类型',
	'tradelist_gender' => '性别要求',
	'tradelist_gender_0' => 'ไม่จำกัด',
	'tradelist_gender_1' => 'ชาย',
	'tradelist_gender_2' => 'หญิง',
	'tradelist_orderby_weekstart' => '按一周内活动开始时间排序',
	'tradelist_orderby_monthstart' => '按一月内活动开始时间排序',
	'tradelist_orderby_weekexp' => '按一周内报名截止时间排序',
	'tradelist_orderby_monthexp' => '按一月内报名截止时间排序',
	'tradelist_highlight' => '获得高亮值',
);

?>