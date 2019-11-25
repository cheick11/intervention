<?php 

 include('connexion.php');
   include('nav.php');
  include('nav_late.php');

		$reponse = $cnx->query('SELECT idUser, nomUser, login, user.idDepartement, departement.nomDepartement FROM user,  departement WHERE user.idDepartement=departement.idDepartement ORDER BY user.idUser DESC');

		$user = "";
		while ($data = $reponse->fetch()) {

			$user .= '<tr><td>'.$data["idUser"].'</td><td>'.$data["nomUser"].'</td><td>'.$data["login"].'</td><td>'.$data["nomDepartement"].'</td></tr>';
		}        

		$reponse->closeCursor(); 


	
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Intervention </title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!--<link rel="stylesheet" href="styles.css">-->

<script src="js/lumino.glyphs.js"></script>



</head>

 <body> 
    
		
	<div class="col-sm-9 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
			<h1 class="page-header"><strong> Utilisateur </strong><a href="saisie_user.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus "></span> Ajouter</a> </h1>
			</div>
		</div>
				
	<div class="#">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Liste des Utilisateurs</div>
					<div class="panel-body">
						<table id="libele" class="table table-striped table-bordered" data-toggle="table"   data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead class="libele"> 
						    <tr>
						        <th data-sortable="true"width="1200">N° </th>
						        <th data-sortable="true"width="8800">Nom Prenom</th>
						        <th data-sortable="true">login</th>
						        <th data-sortable="true">Departement </th>
						        
						    </tr>

						    </thead> 
						     <tbody>
                                 <?php
						    	if (isset($user)) {
						    		echo $user;
						    	}
						    	?>
                             </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		</div>
		
	</div>

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
	<?php include("footer.php"); ?>
</body>
    
</html>




















