<?php
	require_once('header.php');
	
?>

<form action="add.php" method="POST">
    Naslov članka:<br>
    <input type="text" name="naslov"><br>
    
    Vsebina:<br>
    <textarea name="vsebina" cols="30" rows="10"></textarea><br>

    <input type="submit" value="Dodaj članek" style="margin-bottom: 40px;">

</form>
		
<?php require_once('footer.php'); ?>