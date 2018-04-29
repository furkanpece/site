<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>
<?php
$aramasorgusu = @mysql_real_escape_string($_GET['aramasorgusu']);
$sonucsorgu = @mysql_query("SELECT * FROM konular WHERE baslik LIKE '%".$aramasorgusu."%'" );
if(@mysql_num_rows($sonucsorgu)>0){
 while($sorguoku=@mysql_fetch_array($sonucsorgu)){
  echo $sorguoku['baslik'].'<br>';
 }
}
else{
 echo 'Aradığınız İçerik Bulunamadı';
}
?>
<body>
</body>
</html>