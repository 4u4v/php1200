<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
  $title=$_POST[title];
  $content=$_POST[content];
  include("conn/conn.php");
  mysql_query("update tb_gonggao set title='$title',content='$content' where id='".$_POST[id]."'",$conn);
  echo "<script>alert('�����޸ĳɹ�!');history.back();</script>";
?>