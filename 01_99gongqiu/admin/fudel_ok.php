<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include("../conn/conn.php");
$id=$_GET[id];
$type=$_GET[type];
$state=$_GET[state];
$sql=mysql_query("delete from tb_leaguerinfo where id=$id");
if($sql){
	echo "<script>alert('����Ϣ�Ѿ�ɾ����');window.location.href='find_fufei.php?type=$type&state=$state';</script>";
}
else{
	echo "<script>alert('����Ϣɾ������ʧ�ܣ�');history.back();</script>";
}
?>
