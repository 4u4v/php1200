<?php  
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
include("conn/conn.php");
if($Submit=="�ύ"){
  $sql="insert into tb_note(note_content,note_category)values('".$note_content."','".$note_category."')";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,3,1);
echo "<script>alert('������ӳɹ���');history.back();</script>";

 }
?>