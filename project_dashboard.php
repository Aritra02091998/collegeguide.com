<!DOCTYPE html>
    <html>
        <head>
            <title>Dashboard</title>
            <link rel="stylesheet"href="css/project_dashboard.css"/>
        </head>
        <body>
        	<div id="a">
        		<div id="a1">
        			<h1 id="a1-1"><img id="a1-1-1"src="img/logo.png"/><big id="a1-1-2">C</big><i id="a2-1-2">ollegeguide</i>.com</h1>
                	<h2 id="a1-2"><u>Guidence helps you to find your best choice.</u></h2>
        		</div>
        		<div id="a2">
        			<p id="a2-1">
        			<?php
    					session_start();
      
    					if(isset($_SESSION['name'])){
        				echo  "HELLO ".$_SESSION['name'];
   							}
					?>
					</p>
        		</div>
        	</div>
        	<div id="b">
        		<div id="b1">
        			<p id="b1-1"><a href="project_mba">MBA</a></p>
        		</div>
        		<div id="b2">
        			<p id="b2-1"><a href="project_bba">BBA</a></p>
        		</div>
        		<div id="b3">
        			<p id="b3-1"><a href="project_bsc">BSC</a></p>
        		</div>
        		<div id="b4">
        			<p id="b4-1"><a href="project_engi_page.php">ENGINEERING</a></p>
        		</div>
        		<div id="b5">
        			<p id="b5-1"><a href="project_medi">MEDICAL</a></p>
        		</div>
        	</div>
        	<div id="c">
        		<div id="c1">
        			<img id="c1-1"src="img/dashboardslider.jpg"/>
        		</div>
        		<div id="c2">
        			<img id="c2-1"src="img/dashboardslider2.jpg"/>
        		</div>
        	</div>
        	<div id="d">
        		<p id="d1"><b>FEATURED TOP COLLEGES</b></p>
        	</div>
        	<div id="e">
        		<div id="e1">
        			<img id="e1-1"src="img/dashboardfeature1.jpg"/>
        		</div>
        		<div id="e2">
        			<img id="e2-1"src="img/dashboardfeature2.jpg"/>
        		</div>
        		<div id="e3">
        			<img id="e3-1"src="img/dashboardfeature3.jpg"/>
        		</div>
        		<div id="e4">
        			<img id="e4-1"src="img/dashboardfeature4.jpeg"/>
        		</div>
        		<div id="e5">
        			<img id="e5-1"src="img/dashboardfeature5.jpg"/>
        		</div>
        	</div>
        	<div id="f">
        		<p id="f1"><b>For Career Guidence mail us at-->collegeguide.corporate@gmail.com</b></p>
        	</div>
        </body>
     </html>
        
        
        
    
