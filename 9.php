<?php session_start();

$_SESSION['greeting'] = "Hello Nosis";

?>
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

	// Getting data from URL
	$id = 300;
	$source = "nosis";
	print_r($_GET);

	// Getting data from Form

	if(isset($_POST['submit'])){
		echo "<br>" . $_POST['name'];
	}
	
	?>
	<!-- Link for sending data using URL -->
	<br>
	<a href="9.php?id=<?php echo $id; ?>&source=<?php echo $source; ?>">Click here</a>
	
	<hr>

	<!-- Getting data from Form using Post -->

	<form action="#" method="post">
		<input type="text" name="name">
		<input type="submit" value="Submit" name="submit">
	</form>

	<?php 
		// Setting a cookie
		$name = "CookieToTest";
		$value = 100;
		$expiration = time() + (60*60*24*7);
		setcookie($name, $value, $expiration);

		// Checking if the cookie is set

		if(isset($_COOKIE['CookieToTest'])){
			$person = $_COOKIE['CookieToTest'];
			echo "Cookie: " . $person;
		}else{
			$person = "";
		}
	?>
</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>