<?php
require './modules/header1.html';
?>
<link rel="stylesheet" href="./styles/styleKal.css">
<?php
require './modules/header2.html';
require './modules/menu.html';
?>

<div class="container">
	<h1>Budget List</h1>
	<div class="row" id="budRow">
		<div class="col-md-12 ">
			<div class="input-group input-group-lg" id="budInput">
				<input type="text" id="inp" class="form-control" placeholder="Budget Name"
					aria-describedby="sizing-addon1">
				<button type="button" class="btn btn-default" id="searchBtn" onclick="">Serach</button>
			</div>
			<div class="input-group input-group-lg" id="budInput2">
				<input type="date" id="inp" class="form-control" placeholder="Budget Name"
					aria-describedby="sizing-addon1">
				<button type="button" class="btn btn-default" id="searchBtn" onclick="">Serach</button>
			</div>
			<div class="row">
				<div class="col-md-12" id="budgetTbl">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Amount</th>
								<th scope="col">Date</th>
								<th scope="col">View</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td><span class="glyphicon glyphicon-th-list" onclick=""></span></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td><span class="glyphicon glyphicon-th-list" onclick=""></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><span class="glyphicon glyphicon-th-list" onclick=""></span></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td><span class="glyphicon glyphicon-th-list"></span></td>
							</tr>
						</tbody>
					</table>
					<div id="slideBtn">
						<span class="glyphicon glyphicon-chevron-left" onclick="showNext()"></span>
						<span class="glyphicon glyphicon-chevron-right" onclick="showPrevious()"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include './modules/footer.html';
?>
