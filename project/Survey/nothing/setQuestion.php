                                                          <?php
	$page_title= 'Welcome to Survey Guys!';
	include('../includes/headerAdmin.html');
	?>
     <link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <h1>Set a new question</h1>
			<p>   </p>
<?PHP
$errorMessage = "Error";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	//get questions and answers
	$question = $_POST['question'];
	$answerA = $_POST['AnswerA'];
	$answerB = $_POST['AnswerB'];
	$answerC = $_POST['AnswerC'];
	$question  = htmlspecialchars($question);
	$answerA = htmlspecialchars($answerA);
	$answerB = htmlspecialchars($answerB);
	$answerC = htmlspecialchars($answerC);
	    //$user_name = "root";
		//$password = "";
		//$database = "surveyTest";
		//$server = "127.0.0.1";
		$user_name = "eriknurja";
		$password = "columbia2014";
		$database = "eriknurja_48947";
		$server = "209.129.8.7";
	$db_handle = mysqli_connect($server, $user_name, $password, $database) or die(mysql_error());
        //$db_handle = mysqli_connect($server, $user_name, $password);
	//$db_found = mysqli_select_db($db_handle, $database);
        
	if ($db_handle) {
	
		$SQL = "SELECT * FROM `eriknurja_48947`.`tblquestions`";
                
		$result = mysqli_query($db_handle,$SQL);
             
		$numRows = mysqli_num_rows($result);

		$boolLastRow = mysqli_data_seek($result, ($numRows - 1));

		$row = mysqli_fetch_row($result);

		$qID = $row[0];

		$next_Q_Number = ltrim($qID, 'q');
		$next_Q_Number++;
		$question_Number = 'q' . $next_Q_Number;

		$SQL = "INSERT INTO `eriknurja_48947`.`tblquestions` (Question, q_A, q_B, q_C) VALUES ('".$question."', '".$answerA."', '".$answerB."', '".$answerC."')";
  $result = mysqli_query($db_handle,$SQL);
$SQL = "INSERT INTO `eriknurja_48947`.`answers` (A, B, C) VALUES ('".$answerA."', '".$answerB."', '".$answerC."')";
  $result = mysqli_query($db_handle,$SQL);
		mysqli_close($db_handle);
		print "The question has been added to the database";
	}
	else {
		print "Database NOT Found ";
		mysqli_close($db_handle);
	}
}
?>


<html>
<head>
<title>Survey Admin Page</title>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="setQuestion.php">

Enter a question: <INPUT TYPE = 'TEXT' Name ='question'  value="What is the Question?" maxlength="40">
<p>
Answer A: <INPUT TYPE = 'TEXT' Name ='AnswerA'  value="a" maxlength="20">
Answer B: <INPUT TYPE = 'TEXT' Name ='AnswerB'  value="b" maxlength="20">
Answer C: <INPUT TYPE = 'TEXT' Name ='AnswerC'  value="c" maxlength="20">

<P align = center>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Set this Question">
</P>

</FORM>

<P>
<?PHP //print $errorMessage;?>


<?php
    include('../includes/footer.html');
    ?>

</body>
</html>



