<?php

session_start();
if (empty($_SESSION['count'])) {   
	$_SESSION['count'] = 1;
} else {   
	$_SESSION['count']++;
}
?>


<h2> Vous avez vu cette page <?php echo $_SESSION['count']; ?> fois.</h2>


