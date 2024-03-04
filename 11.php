<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  Step 1: Opening and creating files

		Step 2: Writing to files

		Step 3: Reading files

		Step 4: Deleting files
			
	*/

    // Naming the file
    $file = "exmple.txt";

    // Handling the writinf on the file
    $handle = fopen($file, "w");

     // Check if the file opened successfully
     if ($handle) {
        
        // specify the content that will be written
        $content = "It's the second time that we welcome the masters of PHP";
        fwrite($handle, $content);

        // Close the file handle
        fclose($handle);
        
        echo "Content has been written to the file.";
    } else {
        echo "Failed to open the file.";
    }

    // Handling the reading on the file
    $handleReading = fopen($file, "r");

     // Check if the file opened successfully
     if ($handleReading) {
        
        // Reading the specified characters by bytes
        // $content = fread($handleReading, 10); // Each bite equals a character

        // Reading the whole file
        $content = fread($handleReading, filesize($file)); // Each bite equals a character
        
        // Close the file handle
        fclose($handleReading);
        
        echo "Content has been read. <br>";
        echo $content;
    } else {
        echo "Failed to read the file.";
    }

    // Deleteing the file
    // unlink("exmple.txt");

    ?>



</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>