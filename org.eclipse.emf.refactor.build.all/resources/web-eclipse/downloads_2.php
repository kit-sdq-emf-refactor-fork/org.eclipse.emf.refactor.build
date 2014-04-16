		<h3>Version 0.6.0</h3>
		<ul class="midlist">
		    <li><a href="downloads/refactor-0.6.0.20111019171158.jar">refactor-0.6.0.20111019171158.jar</a> (released Oct 19, 2011 17:12)</li>
		</ul>
		<h3>Version 0.5.0</h3>
		<ul class="midlist">
    		<li><a href="downloads/refactor-0.5.0.20110111155417.jar">refactor-0.5.0.20110111155417.jar</a> (released Jan 11, 2011 15:54)</li>
		</ul>
		
		<h2>How to's</h2>
		<ul class="midlist">
			<li><a href="downloads/manual_application.pdf" target="_blank">How to apply EMF model refactorings</a></li>
			<li><a href="downloads/manual_generation.pdf" target="_blank">How to generate new EMF model refactorings using Java code</a></li>
			<li><a href="downloads/manual_henshin.pdf" target="_blank">How to generate new EMF model refactorings using Henshin transformations</a></li>
		</ul>
		<h2>Specials</h2>
		This download area is dedicated to the article <b><i>Besser modellieren - Qualit&auml;tssicherung von UML-Modellen</i></b> 
		submitted to the <a href="http://www.sigs-datacom.de/fachzeitschriften/objektspektrum.html" target="_blank">OBJEKTspektrum</a> magazine on June 20, 2012, 
		as well as to the tutorial at <a href="http://www2.imm.dtu.dk/conferences/ECMFA-2012/" target="_blank">ECMFA 2012</a> on July 2, 2012 (find tutorial slides in
		the <a href="docu.php">documentation</a> section).
		<br/><br/>
		<h3>Eclipse Juno</h3>
		<ul class="midlist">
			<li><a href="downloads/Juno.zip" target="_blank">Plugins bundle for UML modeling environment Papyrus (Eclipse Juno)</a></li>
			<li><a href="downloads/ExampleProjectJuno.zip" target="_blank">Example project for UML modeling environment Papyrus (Eclipse Juno)</a></li>
		</ul>
		Please install the Juno Eclipse Modeling Tools from <a href="http://www.eclipse.org/downloads" target="_blank">
		http://www.eclipse.org/downloads</a></li>.
		Start Eclipse and install the UML modeling environment Papyrus (<i>Help > Install New Software... > Work with: Juno > Modeling
		> Papyrus SDK Binaries > next > ...</i>) as well as the reporting tool BIRT 
		(<i>Help > Install New Software... > Work with: Indigo > Bussiness... > BIRT Framework > next > ...</i>). 
		Download <b>Juno.zip</b> from above, unzip it
		into the plugins directory of your Eclipse installation and restart Eclipse. Download <b>ExampleProjectJuno.zip</b> from above and import the example
		project <b>VehicleRentalCompany</b> into your workspace 
		(<i>File > Import... > General > Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) > Finish</i>).
		<br/><br/>
		<h3>Eclipse Indigo</h3>
		<ul class="midlist">
			<li><a href="downloads/Indigo.zip" target="_blank">Plugins bundle for UML modeling environment Papyrus (Eclipse Indigo)</a></li>
			<li><a href="downloads/ExampleProjectIndigo.zip" target="_blank">Example project for UML modeling environment Papyrus (Eclipse Indigo)</a></li>
		</ul>
		Please install the Indigo Eclipse Modeling Tools from <a href="http://www.eclipse.org/downloads/packages/release/indigo/sr2" target="_blank">
		http://www.eclipse.org/downloads/packages/release/indigo/sr2</a></li>.
		Start Eclipse and install the UML modeling environment Papyrus (<i>Help > Install New Software... > Work with: Indigo > Modeling
		> MDT Papyrus > next > ...</i>) as well as the reporting tool BIRT 
		(<i>Help > Install New Software... > Work with: Indigo > Bussiness... > BIRT Framework > next > ...</i>). 
		Download <b>Indigo.zip</b> from above, unzip it
		into the plugins directory of your Eclipse installation and restart Eclipse. Download <b>ExampleProjectIndigo.zip</b> from above and import the example
		project <b>VehicleRentalCompany</b> into your workspace 
		(<i>File > Import... > General > Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) > Finish</i>).
		<br/><br/>
		<h3>IBM RSA v7.5.5</h3>
		<ul class="midlist">
			<li><a href="downloads/RSA755.zip" target="_blank">Plugins bundle for UML modeling environment IBM Rational Software Architect v7.5.5</a></li>
			<li><a href="downloads/ExampleProjectRSA755.zip" target="_blank">Example project for UML modeling environment IBM Rational Software Architect v7.5.5</a></li>
		</ul>
		Download <b>RSA755.zip</b> from above, unzip it
		into the plugins directory of your RSA installation and restart IBM RSA. Download <b>ExampleProjectRSA755.zip</b> from above and import the example
		project <b>VehicleRentalCompany</b> into your workspace
		(<i>File > Import... > General > Existing Projects into Workspace > Next > Select archive file > Browse (to the zip file) > Finish</i>).
		</p>	
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">	
   		<h6>Incubation</h6>
		<p>This component is currently in its <a href="http://www.eclipse.org/projects/dev_process/validation-phase.php">Validation (Incubation) Phase</a>.</p>
   			<div align="center"><a href="/projects/what-is-incubation.php"><img align="center" src="/images/egg-incubation.png"  border="0" alt="Incubation" /></a></div>
 		</div>
		
	</div>
		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>