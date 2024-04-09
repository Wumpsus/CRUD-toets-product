<?php
// auteur: Michael Davelaar
// functie: Verwijdert product die aangegeven word

include 'functions.php';

// Haalt bier uit de database
if(isset($_GET['productcode'])){

    // Kijkt of insert goed gelukt is
    if(deleteproduct($_GET['productcode']) == true){
        echo '<script>alert("productcode: ' . $_GET['productcode'] . ' is verwijderd!")</script>';
        echo "<script> location.replace('main.php'); </script>";
    } else {
        echo '<script>alert("womp womp product is niet verwijderd")</script>';
    }
}
?>

