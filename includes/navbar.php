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
			    'qqpistes.php' => '',
			    'opera.php' => '',
			    'biographies.php' => '',
			    'cie_rapsodie.php' => '',
			    'liens.php'];
$page_active[$page_name] = 'active';

$navbar .= "<li class=".$page_active['index.php']."><a href='index.php' id='Accueil'>Accueil</a></li>
			<li class=".$page_active['qqpistes.php']."><a href='qqpistes.php' id='LES CHAISES : Quelques pistes'>LES CHAISES : Quelques pistes</a></li>
			<li class=".$page_active['opera.php']."><a href='opera.php' id='LES CHAISES : Un opéra'>LES CHAISES : Un opéra</a></li>
			<li class=".$page_active['biographies.php']."><a href='biographies.php' id='Biographies'>Biographies</a></li>
			<li class=".$page_active['cie_rapsodie.php']."><a href='cie_rapsodie.php' id='Cie Rapsodie'>Cie Rapsodie</a></li>
			<li class=".$page_active['liens.php']."><a href='liens.php' id='Liens affiliés'>Liens affiliés</a></li>
			</ul>";


$navbar .= "</div></nav>"; //completion of the html above
echo $navbar;
?>
