<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
	


	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
	// This to echo I love PHP
	$cond = false;

	if($cond){
		echo "I love PHP";
	}elseif($cond == false){
		echo "I still love PHP";
	}
	
	// Display 10 numbers
	for($i=0; $i <= 10; $i++){
		echo "$i <br>";
	}

	// Switch statement
	$day = 1;
	switch($day){
		case 1: 
			echo "Sunday";
			break;
		case 2: 
			echo "Monday";
			break;
		case 3: 
			echo "Tuesday";
			break;
		case 4: 
			echo "Wednesday";
			break;
		case 5: 
			echo "Thursday";
			break;
		case 6: 
			echo "Friday";
			break;
		case 7: 
			echo "Saturday";
			break;

		default :
			echo "Today is a vacancy";
			break;

	}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>