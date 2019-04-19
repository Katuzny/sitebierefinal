<?php 
require 'connect.php';
require 'db.php';
require 'header.php';
?>


		
	<div class="wrapper">
		<section class="login-container">
			<div>
				<header>
					<h2>Identification</h2>
				</header>
				<form action="" method="post">
					<input <?= $errmail ?> type="text" name="mail" placeholder="Email" required="required" />
					<input <?= $errpassword ?> type="password" name="password" placeholder="Mot de passe" required="required" />
					<button type="submit">Connexion</button>
				</form>
			</div>
		</section>
	</div>

<?php
require 'footer.php';
?>


	