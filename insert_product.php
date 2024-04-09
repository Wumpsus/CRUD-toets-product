<?php
    // auteur: Michael Davelaar
    // functie: nieuw product toevoegen

    echo "<h1>Voeg nieuw product toe</h1>";

    require_once('functions.php');
	 
    // Test of er op de voeg toe knop is gedrukt 
    if(isset($_POST) && isset($_POST['voeg'])){

        // Test of insert gelukt is
        if(insertproduct($_POST) == true){
            echo "<script>alert('Product is toegevoegd!')</script>";
        } else {
            echo '<script>alert("womp womp product is niet toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">
        <input type="hidden"  id="naam" name="productcode" required value="<?php echo $row['productcode']; ?>"><br>

        <label for="naam">Naam:</label>
    <input type="text"  id="naam" name="naam" required><br>

    <label for="adres">Merk:</label>
    <input type="text" id="merk" name="merk" required><br>

    <label for="prijs">Prijs:</label>
<input type="text" id="prijs" name="prijs" pattern="[0-9]+(\.[0-9]+)?" title="Voer alleen nummers (en punten) in" required><br>

    <input type="submit" name="voeg" value="Voeg toe">
  </form>

       
        
        <br><br>
        <a href='main.php'>Home</a>
    </body>
</html>
