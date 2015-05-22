<?php require_once('header.php'); ?>
<?php require_once('blog.php'); ?>
        
        <div class="content blog">
			<?php foreach ($clanki as $key => $clanek) {
				echo '<a href="clanek.php?id='.$key.'">'.$clanek['naslov'].'</a>';
				echo "<p>".substr($clanek['vsebina'], 0, 12)."...</p>";
			} ?>
        </div>
		
<?php require_once('footer.php'); ?>