<?php
include './modules/header.html';
include './modules/menu.html';
?>

<div class="container">
	<div class="row" id="barre">
		<div class="col-12 offset-md6">
			<header>
				<h1>Manage your budget with eBudget</h1>
			</header>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<span>
				<a href="addbudget.html"><button id="nE" type="">Créer un nouveau budget</button></a>
			</span>

			<span>


				<table class="table border border-danger table-stripped">
					<thead>
						<tr class="border border-primary">
							<th>#</th>
							<th>Budjet voyages à NewCastles</th>
							<th>Last Name</th>
							<th>@@@@</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Budjet Cadeau de Marwane</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Budjet Vacances 2019 au Ski</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>


			</span>
		</div>
		<div class="col-md-6">
			<span>
				<a href="addmouvement.html"><button id="nB" type="">Ajouter une nouvelle dépense</button></a></span>
			<span>

				<table class="table border border-danger table-stripped">
					<thead>
						<tr>
							<th>#</th>
							<th> <a href="budgetList.html">Budjet voyages à NewCastles</a> </th>
							<th>Last Name</th>
							<th>@@@</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td> <a href="budgetList.html">Mark</a></td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td> <a href="budgetList.html">Budjet Cadeau de Marwane</a> </td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Budjet Vacances 2019 au Ski</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>


			</span>
		</div>
	</div>


</div>

<?php
include './modules/footer.html';
?>
