<?php
include("conn/conn.php");
if($_POST[Submit]!=""){
$libraryname=$_POST[libraryname];
$curator=$_POST[curator];
$tel=$_POST[tel];
$address=$_POST[address];
$email=$_POST[email];
$url=$_POST[url];
$createDate=$_POST[createDate];
$introduce=$_POST[introduce];
$query=mysql_query("update tb_library set libraryname='$libraryname',curator='$curator',tel='$tel',address='$address',email='$email',url='$url',createDate='$createDate',introduce='$introduce'");
if($query==true){
	echo "<script language=javascript>alert('����ͼ�����Ϣ�޸ĳɹ���');history.back();</script>";
}else{
	echo "<script language=javascript>alert('����ͼ�����Ϣ�޸�ʧ�ܣ�');history.back();</script>";
}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
