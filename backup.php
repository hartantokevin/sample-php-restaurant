<?php
	//$filename='threemadison.sql';
	//$result = 'mysqldump -u root projeklabsdbl > D:\two.sql';
	//exec($result,$arr,$code);
	//echo $arr;
	
	//$command = "(mysqldump -u root projeklabsdbl > file.sql) 2>&1";
	//exec($command, $output, $exit_status);
	//var_dump($exit_status); // (int) The exit status of the command (0 for success, > 0 for errors)
	//echo "<br />";
	//var_dump($output);
?>
<?php
//$mmm = exec("which mysqldump");
//var_dump($mmm);
	exec("mysqldump -u root projeklabsdbl > projeklabsdbl.sql", $output=array(), $result);
	
	echo '<script>alert("BACK UP SUKSES");location="tabelcourse.php";</script>';
?>
