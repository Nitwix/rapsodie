<!DOCTYPE html>
<html>
	<?php include "includes/head.php" ?>
	<body onclick="collapseNavbar()">
		<?php include "includes/navbar.php";?>
		<div class="container" > <!-- collapses the navbar when the 'content' is clicked-->
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center"><span class="styled_text">Biographies</span></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-justify">
					<ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#AG" id="Alice Grandjean">Alice Grandjean</a></li>
						<li><a data-toggle="pill" href="#LS" id="">Menu 1</a></li>
						<li><a data-toggle="pill" href="#MA" id="">Menu 2</a></li>
						<li><a data-toggle="pill" href="#CWJ" id="">Menu 3</a></li>
						<li><a data-toggle="pill" href="#CL" id="">Menu 3</a></li>
						<li><a data-toggle="pill" href="#SM" id="">Menu 3</a></li>
					</ul>
				</div>
			</div>
			<div class="tab-content text-justify">
				<?php include "bios/AG.php" ?>

			</div>
		</div>
		<?php include "includes/footer.php" ?>
	</body>
</html>