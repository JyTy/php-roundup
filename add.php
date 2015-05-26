<?php
	require_once('header.php');

    $napaka = 0;
	
    // Dobi podatki iz forme
    if(isset($_POST['naslov'])) {
        if($_POST['naslov'] == "") {
            $napaka = "prosimo vnesite naslov";
        } else {
            $naslov = $_POST['naslov'];
        }

        if($_POST['vsebina'] == "") {
            $napaka = "prosimo dodajte vsebino";
        } else {
            $vsebina = $_POST['vsebina'];
        }

        // Vpis v bazo
        if(!$napaka) {
            $db->query("INSERT INTO clanki (naslov, vsebina) VALUES ('$naslov', '$vsebina')");
        }
    }
?>

<?php
    if($napaka) {
        echo '<div style="color: red;">'.$napaka.'</div>';
    }
?>
<form action="add.php" method="POST">
    Naslov članka:<br>
    <input type="text" name="naslov"><br>
    
    Vsebina:<br>
    <textarea name="vsebina" cols="30" rows="10"></textarea><br>

    <input type="submit" value="Dodaj članek" style="margin-bottom: 40px;">

</form>
		
<?php require_once('footer.php'); ?>