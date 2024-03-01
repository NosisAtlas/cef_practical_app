<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values
 */
	// return sum of 2 numbs
	function calculate(){
		return 3+7;
	}	

	// This function introduces a person by name and age
	function introduce($name, $age){
		echo "<br>My name is $name , and I'm $age";
	}
	
	// Calling the functions to execute them
	echo $sum = calculate();
	introduce("John", 25);
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>