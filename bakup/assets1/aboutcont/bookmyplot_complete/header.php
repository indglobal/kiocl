<!-- menu starts here -->
	<div class="container-fluid StikyHeader">
		<div class="container">
			<div class="TopHeader1 paddigTop">
				<div class="row">
					<div class="col-md-3" style="padding:0">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-md-6" style="padding:0">
						<select class="form-control locality">
						  <option>Select preffered locality</option>
						  <option>Mumbai</option>
						  <option>Bangalore</option>
						  <option>Pune</option>
						  <option>Belgaum</option>
						</select>
						<label class="localityText">Budget</label>
						<select class="form-control localityMin">
						  <option>Min</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
						<select class="form-control localityMin">
						  <option>Max</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
						<button class="btn btn-Search glyphicon glyphicon-th-large"> Search</button>
					</div>
					<div class="col-md-3" style="padding:0">
						<select class="form-control City">
						  <option>Select City</option>
						  <option>Bangalore</option>
						  <option>Pune</option>
						  <option>Chennai</option>
						  <option>Mumbai</option>
						</select>
						<div class="SmallRightdiv">
							<button class="btn btn-login_Signup" data-toggle="modal" data-target="#myModal">Login / SignUp</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- menu ends here -->

<?php include_once('modals.php'); ?>