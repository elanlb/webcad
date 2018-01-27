<!doctype html>
<html lang="en">
	<head>
		<title>WebCAD Editor</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<?php
		echo file_get_contents("navbar.php");
		?>

		<div class="container">
			<div class="row">
				<h1>Editor</h1>
			</div>
			<div class="row">
				<div class="col-8" id="editor"></div>
				<div class="col-4">
					<table class="table"><tr>
						<td><button class="btn btn-outline-secondary" id="addCube"><img src="images/cube.png"></button></td>
						<td><button class="btn btn-outline-secondary" id="addSphere"><img src="images/sphere.png"></button></td>
						<td><button class="btn btn-outline-secondary" id="addCylinder"><img src="images/cylinder.png"></button></td>
					</tr></table>

					<label for="shapeSelector">Shape</label>
					<select class="form-control" id="shapeSelector"></select>

					<label for="nameField">Name</label>
					<input class="form-control" type="text" id="nameField">

					<table>
						<tr>
							<td>
								<label for="xPosition">x</label>
								<input class="form-control" type="number" id="xPosition">
							</td>
							<td>
								<label for="yPosition">y</label>
								<input class="form-control" type="number" id="yPosition">
							</td>
							<td>
								<label for="zPosition">z</label>
								<input class="form-control" type="number" id="zPosition">
							</td>
						</tr>
						<tr>
							<td>
								<label for="xRadius">x radius</label>
								<input class="form-control" type="number" id="xRadius">
							</td>
							<td>
								<label for="yRadius">y radius</label>
								<input class="form-control" type="number" id="yRadius">
							</td>
							<td>
								<label for="zRadius">z radius</label>
								<input class="form-control" type="number" id="zRadius">
							</td>
						</tr>
					</table>
					<button class="btn btn-primary btn-block" id="updateButton">Update</button>
				</div>
			</div>
			<div class="row">
				<code id="json">
					<?php
					echo '{"shapes":[{"name":"BigCube", "shape":"cube", "center":[0, 0, 0], "radius":[1, 1, 1]},
					{"name":"Sphere", "shape":"sphere", "center":[0.7, 0.7, 0.7], "radius":1.5}],
					"operations":[{"operation":"subtract", "object":1}]}';
					?>
				</code>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<!-- Load csg then GL stuff and then the editor script -->
		<script src="https://rawgit.com/evanw/csg.js/master/csg.js"></script>
		<script src="js/threeGeometry.js"></script>

		<script src="https://rawgit.com/mrdoob/three.js/dev/build/three.js"></script>
		<script src="https://rawgit.com/mrdoob/three.js/dev/examples/js/Detector.js"></script>
		<script src="https://rawgit.com/mrdoob/three.js/dev/examples/js/controls/OrbitControls.js"></script>

		<script src="js/editor.js"></script>
	</body>
</html>
