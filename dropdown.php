<?php

//auteur: Michael Davelaar
// funtie: Dropdown

include 'functions.php';

function dropdownproduct(){

    // Haalt product data uit de database
    $result = getData('product');
    // Connect de database
    // query $sql = SELECT * from product 
    $conn = connectDb();
    // Ophalen van data

$text = "
<select name='productcode' id='productcode'>";

foreach ($result as $row){
    $text .= "<option value='$row[productcode]'>$row[naam]</option>\n";
}

$text .= "</select>";
echo $text;
}

if (isset($_POST['kies'])) {
        echo "$_POST[productcode]";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?php dropdownproduct(); ?>

        <input type="submit" value="kies" name="kies">


    </form>
</body>
</html>