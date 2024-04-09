<?php
    // auteur: Michael Davelaar
    // functie: Update een product

    require_once('functions.php');

    // Test of de wijzig knop is geklikt 
    if(isset($_POST['wijzig'])){

        // Test of de update goed is gegaan
        if(updateproduct($_POST) == true){
            echo "<script>alert('Product is gewijzigd!')</script>";
        } else {
            echo '<script>alert("womp womp product is niet gewijzigd (fout)")</script>';
        }
    }

    // Test of productcode is meegegeven in de URL
    if(isset($_GET['productcode'])){  
        // Haalt alle info van de betreffende productcode $_GET['productcode']
        $productcode = $_GET['productcode'];
        $row = getproduct($productcode);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig product</title>
</head>
<body>
  <h2>Wijzig product</h2>
  <form method="post">

<input type="hidden"  id="productcode" name="productcode" required value="<?php echo $row['productcode']; ?>"><br>

    <label for="naam">Naam:</label>
    <input type="text"  id="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="adres">Merk:</label>
    <input type="text" id="merk" name="merk" required value="<?php echo $row['merk']; ?>"><br>

    <label for="plaats">Prijs:</label>
    <input type="text" id="prijs" name="prijs" required value="<?php echo $row['prijs']; ?>"><br>

    <input type="submit" name="wijzig" value="Wijzig">
  </form>
  <br><br>
  <a href='main.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen productcode opgegeven<br>";
    }
?>