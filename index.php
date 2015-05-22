<?php require_once('header.php'); ?>

<?php 
    $clanki = $db->get_results("SELECT * FROM clanki ORDER BY datum DESC LIMIT 3");
?>
        
        <div class="content blog">
			<?php foreach ($clanki as $clanek) {
				echo '<a href="clanek.php?id='.$clanek->id.'">'.$clanek->naslov.'</a>';
				echo "<p>".substr($clanek->vsebina, 0, 12)."...</p>";
			} ?>
        </div>
		
<?php require_once('footer.php'); ?>