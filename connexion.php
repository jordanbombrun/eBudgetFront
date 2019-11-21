<?php
require './modules/header1.html';
?>
<link rel="stylesheet" href="./styles/styleMar.css">
<?php
require './modules/header2.html';
require './modules/menu.html';
?>

<div class="connexion">
	<form action="" method="post">
		<h2 class="text-center">Ravis de Vous revoir</h2>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Username" required="required">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" required="required">
		</div>
		<div class="form-group clearfix">
			<button type="submit" class="btn btn-primary pull-right">Connexion</button>
		</div>
		<div class="clearfix">
			<a href="./insctiption.html" class="pull-right">Inscrivez vous</a>
		</div>
	</form>
</div>

<?php
include './modules/footer.html';
?>
