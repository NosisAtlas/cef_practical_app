<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out

		*/
		$number1 = 10;
		$number2 = 20;
		$sum = $number1 + $number2;
		echo "$sum <br>";
		
		$numberLists = array(10, 20);
		$numberLists2_assoc = array("number" => 10, "number" => 20);
		$numberLists3_assoc = [ 'n1' => 10, 'n2' => 20 ];

		foreach($numberLists as $num){
			echo "$num <br>";
		}

		print_r($numberLists2_assoc);


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>