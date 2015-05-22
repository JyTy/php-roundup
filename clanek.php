<?php
	require_once('header.php');
	
	$id = $_GET["id"];
    $clanek = $db->get_row("SELECT * FROM clanki WHERE id = $id");
?>
        
        <div class="content">
            <h1><?php echo $clanek->naslov; ?></h1>
            <p><?php echo $clanek->vsebina; ?></p>
        </div>
		
<?php require_once('footer.php'); ?>