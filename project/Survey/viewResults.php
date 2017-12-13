<?php
	$page_title= 'Results!';
	include('includes/header.html');
	?>
    <link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <h1>Results!</h1>
			<p>   </p>
            <b>
<?PHP
$question = '';
$answerA = '';
$answerB = '';
$answerC = '';
$imgTagA = '';
$imgWidthA = '0';
$imgTagB = '';
$imgWidthB = '0';
$imgTagC = '';
$imgWidthC = '0';
$imgHeight = '10';
$totalP = '';
$percentA = '0';
$percentB = '0';
$percentC = '0';
$qA = '';
$qB = '';
$qC = '';
if (isset($_GET['Submit2'])) {
		$qNum = $_GET['h1'];
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
			$SQL = "SELECT * FROM `eriknurja_48947`.`tblquestions`, `eriknurja_48947`.`answers` WHERE `eriknurja_48947`.`tblquestions`.QID = `eriknurja_48947`.`answers`.QID AND `eriknurja_48947`.`answers`.QID = '$qNum'";
			$result = mysqli_query($db_handle,$SQL);
			$db_field = mysqli_fetch_assoc($result);
			$question = $db_field['Question'];
			$answerA = $db_field['A'];
			$answerB = $db_field['B'];
			$answerC = $db_field['C'];
			$qA = $db_field['q_A'];
			$qB = $db_field['q_B'];
			$qC = $db_field['q_C'];
			$imgWidthA = $answerA;
			$imgWidthB = $answerB;
			$imgWidthC = $answerC;
$totalP = $answerA + $answerB + $answerC;
$percentA = (($answerA * 100) / $totalP);
$percentA = floor($percentA);
$percentB = (($answerB * 100) / $totalP);
$percentB = floor($percentB);
$percentC = (($answerC * 100) / $totalP);
$percentC = floor($percentC);
$imgWidthA = $percentA * 2;
$imgWidthB = $percentB * 2;
$imgWidthC = $percentC * 2;
			$imgTagA = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthA. ">";
			$imgTagB = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthB . ">";
			$imgTagC = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthC . ">";
			mysqli_close($db_handle);
		}
		else {
			print "database error";
		}
}
else {
	print "no results to display";
}
?>

<html>
<head>
<title>Process Survey</title>
</head>



<body>

<?PHP
print $question . "<BR>";
print $imgTagA . " " . $percentA . "% " . $qA . "<BR>";
print $imgTagB . " " . $percentB . "% " . $qB . "<BR>";
print $imgTagC . " " . $percentC . "% " . $qC . "<BR>";
?>
</b>
<?php
    include('includes/footer.html');
    ?>
</body>
</html>