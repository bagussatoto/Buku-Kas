<html> 
<head> 
<title>Membuat Form input penjumlahan dengan CI</title>  
</head>  
<body> 
<table> 
<? echo form_open('form/jumlah');
$data1=array( 
'name' => 'angka1',  
'size'=>'15');  
echo "<tr><td>Angka 1</td><td> 
:</td><td>".form_input($data1)."</td></tr>";  
$data2=array( 
'name' => 'angka2',  
'size'=>'15');  
echo "<tr><td>Angka 2</td><td> :</td><td> 
".form_input($data2)."</td></tr>";  
echo "<tr><td>".form_submit('mysubmit','Ok') ; 
echo " ".form_reset('mysubmit','Clear')." </td></tr>";  
?> 
</table>  
</bo dy>  
</html> 