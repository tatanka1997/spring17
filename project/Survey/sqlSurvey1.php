<?PHP
	//get active question from file
	$num = file_get_contents("nothing/qOfWeek.txt");
	$qNum = 'q'.$num;
	//get question form database
	$SQL = "SELECT * FROM FROM `eriknurja_48947`.`tblquestions` WHERE `eriknurja_48947`.`tblquestions`.QID = '$qNum'";
?>