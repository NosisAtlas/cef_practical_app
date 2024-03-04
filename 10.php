<?php session_start();

echo $_SESSION['greeting'];

?>
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

		Step 6: Call the method ShowAll
			
	*/

	// Define the Dog class
	class Dog {
		// Default vars
		var $name = "waggy";
		var $eyeColor = "green";
		var $furColor = "brown";
		// Running method
		function Run(){
			echo $this->name . " is running...";
		}
		// Showing all infos about the object method
		function showAll(){
			echo "This dog's name is " . $this->name . ", he has a " . $this->eyeColor . " eyes and has a " . $this->furColor . " fur.";
		}
	}

	// Class inheritance for Golden Retriever breed
	class GoldenRetriever extends Dog {
		var $name = "Goldy";
		var $furColor = "golden";
		var $eyeColor = "black";
	}
	
	// Instantiating the object
	$dog = new Dog();
	// Calling the running method
	$dog->Run();
	echo "<br>";
	// Calling the showAll method
	$dog->showAll();
	echo "<br>";

	// Instantiating the object
	$golden = new GoldenRetriever();
	// Calling the showAll method
	$golden->showAll();
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>