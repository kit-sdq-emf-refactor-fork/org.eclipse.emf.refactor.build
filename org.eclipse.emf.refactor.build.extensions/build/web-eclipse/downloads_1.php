<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "EMF Refactor - Downloads";
	$pageKeywords	= "EMF, Refactor, model refactoring, refactoring";
	$pageAuthor		= "Thorsten Arendt";
	
	$html = <<<EOHTML

<div id="maincontent">

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>
	<h2>Releases</h2>
		
<h3>Version 0.7.0</h3>
<ul class="midlist">
    <li><a href="downloads/refactor-extensions-0.7.0.20121218154459.jar">refactor-extensions-0.7.0.20121218154459.jar</a> (released Dez 18, 2012 15:47)</li>
</ul>
