<title><?php echo $page_title; ?></title>	
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$page_title= 'Welcome to Survey Guys!';
	include('includes/header.html');
	?>
    <link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!-- Start of the page-specific content. -->
		<h1>Welcome!</h1>
			<p>   </p>
            <b>
			<?php
				echo file_get_contents('hmeGreet.txt');
            	
			?>
            </b>
            <p>   </p>
	<!-- End of the page-specific content. --></div>
	
<?php
    include('includes/footer.html');
    ?>
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Survey Guys!</title>
</head>

<body>
</body>
</html>