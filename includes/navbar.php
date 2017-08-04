<?php
$navbar = "<nav class='navbar navbar-default navbar-static-top'>
		<div class='navbar-header'>
			<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
				<span class='sr-only'>Toggle navigation</span>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
				<span class='icon-bar'></span>
			</button>
			<a class='navbar-brand' href='http://rapsodie.ch' id='Rapsodie Productions'>Rapsodie Productions</a>
		</div>
		<div id='navbar' class='collapse navbar-collapse'>
			<ul class='nav navbar-nav'>";


$page_name = basename($_SERVER['PHP_SELF']); //name of the php file the user is on
$page_active = ['index.php' => '',
			    'contact.php' => '',
			    'agenda.php' => '',
			    'photos.php' => ''];
$page_active[$page_name] = 'active';

$navbar .= "<li class=".$page_active['index.php']."><a href='index.php' id='Accueil'>Accueil</a></li>
			<li class=".$page_active['contact.php']."><a href='contact.php' id='Placeholder1'>Placeholder1</a></li>
			<li class=".$page_active['agenda.php']."><a href='agenda.php' id='Placeholder2'>Placeholder2</a></li>
			<li class=".$page_active['photos.php']."><a href='photos.php' id='Placeholder3'>Placeholder3</a></li>
			</ul>";


$navbar .= "</div></nav>"; //completion of the html above
echo $navbar;
?>
