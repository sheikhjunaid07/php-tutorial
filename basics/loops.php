<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php 

   //while loop
    //print numbers
    $a = 1;
    while($a <= 10){
    echo "<br> $a";
    $a++;
    }

    //print values
    $names = array("sheikh", "junaid", "raj", "ravi");
    $a = 0;
    while($a < count($names)){
        echo $names[$a]. "<br>";
        $a++;
    }
    ?>

    <?php 
    //do-while loop
    $a = 1;
    do{
        echo "<br> $a";
        $a++;
    }while($a <= 10);
    ?>

    <?php 
    //for loop
    $a = 1;
    for ($i=0; $i < 5; $i++) { 
        echo "<br> $a";
        $a++;
    }
    ?>

    <?php 
    //foreach loop
    $numbers = ["zero", "one","two", "three","four"];
    foreach($numbers as $num){
        echo $num . "<br>";
    }
    ?>
</body>
</html>