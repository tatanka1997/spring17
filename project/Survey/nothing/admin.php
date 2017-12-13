<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<?php
		$page_title= 'Administrator Login';
		include('../includes/header.html');
		
		//declare admin name and password
		$userNm = 'admin';
		$passW  = 'fu';
		
		//Check for form submission
		if($_SERVER['REQUEST_METHOD']=='POST'){
			
			//validate form
			if($_POST['username']==$userNm && $_POST['password']==$passW){
				header('Location: adminHome.php');
			}
			else {//invalid values
				echo '<h1>Error!</h1>
				<p class="error">Please enter credentials again.</p>';
			}
		}
	
	?>
    <!-- Start of the page-specific content. -->
		<h1>Admin Login</h1>
        <form action="admin.php" method="post">
        <fieldset<legend>Please log in</legend>
        <p>Username: <input type="text" name="username" /></p>
        <p>Password: <input type="password" name="password" /></p>
        <p><input type="submit" name="submit" value="Log in" /></p>
        </form>
				
	<!-- End of the page-specific content. --></div>
	
<?php
    include('../includes/footer.html');
    ?>
</body>
</html>