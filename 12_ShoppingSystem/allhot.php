<?php
	include_once 'system/system.inc.php';
	$arraycommo=$seppage->ShowDate("select * from tb_commo order by sell,id desc",$conn,3,$_GET["pages"]);	
	$smarty->assign("showpage",$seppage->ShowPage("��Ʒ","��"," ","a1",$_GET["page"])); //���������ҳ���ݵ�ģ�����showpage
    $smarty->assign("allhot",$arraycommo);	
?>