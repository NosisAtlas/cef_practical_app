<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
	// Use a math pre built func
	echo sqrt(100) . "<br>";
	echo rand(1, 100);

	// Use a string pre built func
	echo "<br>" . strlen("HELLO") . "<br>";

	// Use an array pre built func
	$arr = [5, 6, 7];
	$arr2 = [8, 9, 10];

	print_r(array_merge($arr, $arr2));

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>