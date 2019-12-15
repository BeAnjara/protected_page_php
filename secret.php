<?php 
	require 'header.php'	

?>

<?php 
	if ( (isset($_POST['email']) && isset($_POST['email']))  && (!empty($_POST['email']) && (!empty($_POST['password'])))) {
		echo "<p> Welcome To the Nasa website </p>";
		
		if ($_POST['password'] == 'kangourou') {
			echo "Le code d'accès est 1234";
		} else {
			echo "<p> Vous n'avez accès à ce site </p>";
		}
	}

 ?>


<?php 
	require 'footer.php'
?>