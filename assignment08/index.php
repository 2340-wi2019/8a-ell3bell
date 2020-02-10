<?php
    include "includes/header.php";

    //write PHP here...
    $weight = "115";
    $age = "26";
    $f_name = "Allie ";
    $l_name = "French";
    
        function poundsToKg($lbs){
            return $kg = $lbs * (1/2.2);
        }

    $result = poundsToKg($weight);

?>
<body>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo $f_name; echo $l_name; ?>!
<p>I am <?php echo $age; ?> years old. I weigh <?php echo $weight; ?> pounds, which is <?php echo $result; ?> kg!</p>

</body>
<?php
    include "includes/footer.php";
?>


