<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <div class="container">
      <h1>  <?php 
         $numbers = ["zero", "one","two", "three","four"];
         echo $numbers[1];

         echo "<br>";
         //another way to write arrays
           $names = array("sheikh", "junaid", "raj", "ravi");
           echo $names[1]; //print values
           echo "<br>";
           echo count($names);  //print value counts
        ?>
      </h1>
    </div>
</body>
</html>