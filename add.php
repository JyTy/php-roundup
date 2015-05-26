<?php
	require_once('header.php');

    $napaka = array();
	
    // Dobi podatki iz forme
    if(isset($_POST['naslov'])) {
        if($_POST['naslov'] == "") {
            array_push($napaka, "prosimo vnesite naslov");
        } else {
            $naslov = $_POST['naslov'];
        }

        if($_POST['vsebina'] == "") {
            array_push($napaka, "prosimo dodajte vsebino");
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
        foreach ($napaka as $sporocilo) {
            echo '<div style="color: red;">'.$sporocilo.'</div>';
        }
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