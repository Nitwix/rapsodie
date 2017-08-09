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
						<li><a data-toggle="pill" href="#AG" id="Alice Grandjean">Alice Grandjean</a></li>
						<li><a data-toggle="pill" href="#LS" id="Léonard Schneider">Léonard Schneider</a></li>
						<li><a data-toggle="pill" href="#MA" id="Mathieu Alexandre">Mathieu Alexandre</a></li>
						<li><a data-toggle="pill" href="#CWJ" id="Carolyn Woods-Jardine">Carolyn Woods-Jardine</a></li>
						<li><a data-toggle="pill" href="#CL" id="Cédric Liardet">Cédric Liardet</a></li>
						<li><a data-toggle="pill" href="#SM" id="Steve Muriset">Steve Muriset</a></li>
					</ul>
				</div>
			</div>
			<div class="tab-content text-justify">
				
				<?php 
				
				include 'bios/AG.php';
				include 'bios/LS.php';
				include 'bios/MA.php';
				include 'bios/CWJ.php';
				include 'bios/CL.php';
				include 'bios/SM.php';
					
				?>
				
			</div>
			
		</div>
		<?php include "includes/footer.php" ?>
		
		<script>
			$(document).ready(function(){
				$("#Léonard\ Schneider").trigger("click");
			});
		</script>
		
	</body>
</html>