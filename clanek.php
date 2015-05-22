<?php
	require_once('header.php');
    require_once('blog.php');
	
	$id = $_GET["id"];
?>
        
        <div class="content">
            <h1><?php echo $clanki[$id]['naslov']; ?></h1>
            <p><?php echo $clanki[$id]['vsebina']; ?></p>
        </div>
		
<?php require_once('footer.php'); ?>