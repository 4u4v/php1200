<?php
	include_once 'system/system.inc.php';
	$nomarr=$seppage->ShowDate("select * from tb_commo where isnom = 1 order by isnom,id desc",$conn,3,$_GET["pages"]);	
	$smarty->assign("showpage",$seppage->ShowPage("��Ʒ","��"," ","a1",$_GET["page"])); //���������ҳ���ݵ�ģ�����showpage
    $smarty->assign("allnom",$nomarr);	
?>