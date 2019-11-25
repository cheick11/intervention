<?php
include('connexion.php');


		$reponse = $cnx->query('SELECT idPanne, date_panne, demandeur, panne, etat FROM panne GROUP BY panne.idpanne ORDER BY panne.idPanne DESC');

		$panne = "";
		while ($data = $reponse->fetch()) {

		$panne .='<tr><td>' .$data["idPanne"]. '</td><td>' .$data["date_panne"]. '</td><td>' .$data["demandeur"]. '</td><td>' .$data["panne"]. '</td> <td>' .$data["etat"]. '</td></tr>';
		}        

		$reponse->closeCursor(); 


?>












<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Intervention</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <?php include("./nav.php"); ?>
	<?php include("./nav_late.php"); ?> 
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			<h1 class="page-header"><strong>Intervention </strong><a href="saisie_intervention.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus "></span> Ajouter</a> </h1>
			</div>
		</div><!--/.row-->
				
	<div class="#">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Liste des Interventions</div>
					<div class="panel-body">
						<table id="libele" class="table table-striped table-bordered" data-toggle="table"   data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead class="libele"> 
						    <tr>
						        <th data-sortable="true"width="1200">N° Panne</th>
						        <th data-sortable="true"width="8800">Date- Panne </th>
						        <th data-sortable="true">Demandeur</th>
						        <th data-sortable="true">Panne </th>
                                 <th data-sortable="true">Etat </th>
						        <!--  <th data-sortable="true">Destination </th>
						        <th data-sortable="true">Etat du Courrier</th>
						        <th data-sortable="true">Fichier</th>
						        <th data-sortable="true">Type du Courrier</th>
						        <th data-sortable="true" width=100%>Commentaire</th>
						        <th data-sortable="true">Agent</th>-->
						        <th data-sortable="true" colspan="3">  Action</th>
						    </tr>

						    </thead> 
						    <tbody>
						
						    	
						    	<?php
						    	if (isset($panne)) {
						    		echo $panne;
						    	}
						    	?>
						    
						    </tbody>

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		</div>
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
	<?php include("./footer.php"); ?>
</body>

</html>



