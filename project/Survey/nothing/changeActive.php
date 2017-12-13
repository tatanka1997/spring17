<?php
	$page_title= 'Welcome to Survey Guys!';
	include('../includes/headerAdmin.html');
	?>
    <link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <b>
<?PHP
		//write new questions to files
		$myFile1 = "qOfDay.txt";
		$myFile2 = "qOfWeek.txt";
		
		$fh1 = fopen($myFile1, 'w') or die("can't open file");
		$fh2 = fopen($myFile2, 'w') or die("can't open file");
		
		//$string1 = $_GET['day'];
		//$string2 = $_GET['week'];
		$string1 = date("d");
                $string2 = date("N");
		fwrite($fh1, $string1);
		fwrite($fh2, $string2);
		
		fclose($fh1);
		fclose($fh2);
		
		echo 'File written successfuly!';
?>


<FORM NAME ="form1" METHOD ="POST" ACTION ="adminHome.php">
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Return to Admin Home">
</FORM>
<?php
    include('../includes/footer.html');
    ?>
    </b>

<html>
<head>
<title>Write to Files</title>
</head>



<body>

</body>
</html>