<?php
	$page_title= 'Survey of the Week!';
	include('includes/header.html');
	?>
    <link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <b>
<?PHP
	include 'sqlSurvey1.php';
	$qID = '';
	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';
	    //$user_name = "root";
		//$password = "";
		//$database = "surveyTest";
		//$server = "127.0.0.1";
		$user_name = "eriknurja";
		$password = "columbia2014";
		$database = "eriknurja_48947";
		$server = "209.129.8.7";
$db_handle = mysqli_connect($server, $user_name, $password, $database) or die(mysql_error());
	if ($db_handle) {
		$SQL = "SELECT * FROM `eriknurja_48947`.`tblquestions`";
		$result = mysqli_query($db_handle,$SQL);
		$db_field = mysqli_fetch_assoc($result);
			$qID = $db_field['QID'];
			$question = $db_field['Question'];
			$A = $db_field['q_A'];
			$B = $db_field['q_B'];
			$C = $db_field['q_C'];
			mysqli_close($db_handle);
	}
	else {
		print "Error getting Survey";
		mysqli_close($db_handle);
	}
?>
<html>
<head>
<title>Survey of the Week</title>
</head>


<body>
<h1>Survey of the Week!</h1>
			<p>   </p>

<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>

<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="viewResults.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "View results">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
</FORM>

</body></b>

<?php
    include('includes/footer.html');
    ?>

</html>



