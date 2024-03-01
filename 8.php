<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/

	// Connecting to database
	$conn = new PDO("mysql:host=localhost;dbname=login_test", "root", "");
	if($conn) {
		echo "Connected successfully to login_test<br>";
	}else {
		die("Connection failed");
	}

	// Updating form data
	if(isset($_POST["submit"])){
		$name = strtolower($_POST['name']);
		$password = $_POST['password'];
		$id = $_POST['select_id'];
		var_dump($id);
		$max = 10;
		$min = 5;
		// Error for empty inputs
		if(empty($name) || empty($password)){
			echo "You cannot submit an empty form! Please take the time to fill the infos!";
		}else{
			// Validating the data
			if(strlen($name) <= $min || strlen($name) > $max){
				echo "Name must not be less than $min or more than $max<br>";
			}
			if(strlen($password)<= $min || strlen($password) > $max){
				echo "Password must not be less than $min or more than $max<br>";
			}
			// Updating the existing row into db
			if ($conn) {
				$query = "UPDATE users SET name = :name, password = :password WHERE id = :id";
				// Prepare statement
				$stmt = $conn->prepare($query);
				// Bind parameters
				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':password', $password);
				$stmt->bindParam(':id', $id);
				// Execute statement
				$stmt->execute();
				echo " Record updated successfully";
			} else {
				echo "Sorry couldn't update the requested record";
			}
			
		}
	}

	// Reading data from db
	$users;
	if($conn){
		$query = $conn->prepare("SELECT * FROM USERS");
		$query->execute(); // Exexute the prepared query
		$users = $query->fetchAll(); // Fetch all rows from the result
	}else{
		"No records were found";
	}
	
	?>

<form action="#" method="POST">
	Name: <input type="text" name="name" id=""><br>
	Password: <input type="password" name="password" id=""><br>
	<select name="select_id" id="">
	<?php
		foreach($users as $user){
			echo "<option value='{$user['id']}'>{$user['id']}</option>";
		}
	?>
	</select><br><br>
	<input type="submit" value="Update" name="submit">
 </form>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>