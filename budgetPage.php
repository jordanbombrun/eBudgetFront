<?php
require './modules/header1.html';
?>
<link rel="stylesheet" href="./styles/styleJess.css">
<?php
require './modules/header2.html';
require './modules/menu.html';
?>

<div id="container" class="container">
	<!--menu onglet-->
	<div id="nameValueBudget" class="row ">
		<div id="nameBudget" class="col-md-6 text-center">Nom du budget</div>
		<div id="valueBudget" class="col-md-6 text-left">Valeur du budget</div>
	</div>
	<div id="date" class="row">
		<div id="dateStart" class="col-md-6 text-center">Date début</div>
		<div id="dateEnd"class="col-md-6">Date fin</div>
	</div>
	<div id="content" class="row text-center">
		<div id="user" class="col-md-4">
			<div id="titleUser">Utilisateurs</div>
			<div id="titeAdmin">Administrateurs</div>
			<div id="list"class="row">
				<div id="lignList">Dupont
					<button id="buttonDelete" class="glyphicon glyphicon-remove btn btn-danger" aria-hidden="true"></button>
					<button id="buttonEdit" class="glyphicon glyphicon-pencil btn btn-warning" aria-hidden="true"></button>
				</div>
			</div>
			<div id="titeAdmin">Membres</div>
			<div id="list"class="row">
				<div id="lignList">Dupont
					<button id="buttonDelete" class="glyphicon glyphicon-remove btn btn-danger" aria-hidden="true"></button>
					<button id="buttonEdit" class="glyphicon glyphicon-pencil btn btn-warning" aria-hidden="true"></button>
				</div>
			</div>
		</div>
		<div id="spacing" class="row col-md-1"></div>
		<div id="movement" class="col-md-7">
			<div id="list"class="row">
				<div id="titeMvt">Mouvements</div>
				<div id="lignMvt"> Test Debit Mouvement
					<button id="buttonDelete" class="glyphicon glyphicon-remove btn btn-danger" aria-hidden="true"></button>
					<button id="buttonEdit" class="glyphicon glyphicon-pencil btn btn-warning" aria-hidden="true"></button>
				</div>
			</div>
		</div>
	</div>
	<div id="actionAdd" class="row">
		<a href="./adduser.html" class="col-md-5 btn btn-success">Ajouter un utilisateur</a>
		<div id="spacingButton" class="row col-md-2"></div>
		<a href="./addmouvement.html" class="col-md-5 btn btn-success">Ajouter un mouvement</a>
	</div>
	<div id="actionDelete" class="row">
		<button id="deleteBudget" class="col-md-12 btn btn-danger">Supprimer le budget</button>
	</div>
	</section>
</div>


<?php
include './modules/footer.html';
?>
