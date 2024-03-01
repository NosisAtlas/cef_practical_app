
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */
	// Handling form data
	$names = ["noparo", "steve", "karam", "merh"]; 
	if(isset($_POST["submit"])){
		$name = strtolower($_POST['name']);
		$password = $_POST['password'];
		$max = 10;
		$min = 5;
		if(empty($name) || empty($password)){
			// echo "Name is: " . $_POST['name'] . "Password :" . $_POST['password'];
			echo "You cannot submit an empty form! Please take the time to fill the infos!";
		}else{
			if(strlen($name) <= $min || strlen($name) > $max){
				echo "Name must not be less than $min or more than $max<br>";
			}
			if(strlen($password)<= $min || strlen($password) > $max){
				echo "Password must not be less than $min or more than $max<br>";
			}

			if(in_array($name, $names)){
				echo "Welcome " . strtoupper($name);
			}else{
				"Sorry you're not allowed to login. This name is not on the list";
			}
			
		}
	}
?>

<form action="#" method="POST">
	Name: <input type="text" name="name" id=""><br>
	Password: <input type="password" name="password" id=""><br>
	<input type="submit" value="Submit" name="submit">
 </form>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>