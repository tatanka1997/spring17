<?PHP
	//get question number from file
	$num = file_get_contents("nothing/qOfDay.txt");
	$qNum = 'q'.$num;
	//get question from database
	$SQL = "SELECT * FROM FROM `eriknurja_48947`.`tblquestions` WHERE `eriknurja_48947`.`tblquestions`.QID = '$qNum'";
?>