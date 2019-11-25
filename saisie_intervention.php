
<!--<?php 
include('connexion.php');
  include('nav.php');
  include('nav_late.php');
/*include('connexion.php');
if (isset($_POST['idPanne ']) AND isset($_POST['date ']) AND isset($_POST['demandeur']) AND isset($_POST['panne ']) AND isset($_POST['delai_necessaire']) AND isset($_POST['nature_demande']) AND isset($_POST['temps_intervention']) AND isset($_POST['etat']) AND isset($_POST['delai_clos'])  AND isset($_POST['intervention'])  AND isset($_POST['idcategorie'])  AND isset($_POST['idUser'])  AND isset($_POST['idDepartement']) ) {
	
		$date = $_POST['date'];
		$demandeur = $_POST['demandeur'];
        $panne = $_POST['panne'];
		$delai_necessaire = $_POST['delai_necessaire '];
        $temps_intervention  = $_POST['temps_intervention '];
        $etat = $_POST['etat'];
        $delai_clos  = $_POST['delai_clos']; 
        $intervention  = $_POST['intervention'];   
        $idcategorie  = $_POST['idcategorie'];
        $idUser = $_POST['idUser'];
        $idDepartement  = $_POST['idDepartement'];
        $panne = $_POST['panne'];


		$querry = $cnx->prepare("INSERT INTO panne(idPanne, date, demandeur, panne, ) VALUES (NULL, :date, :demandeur, :panne )");
		$querry->execute(array(
			'date' => $date, 
			'demandeur' => $demandeur,
			'panne' => $panne
			));

} */
?>-->







<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INTERVENTION</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
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
				<h1 class="page-header">SAISIE INTERVENTION</h1>
			</div>
		</div><!--/.row--> 
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">COURRIER</div>
					<div class="panel-body">
						<div class="col-md-6">
							
						 <form role="form" method="post" action="ajout_intervention.php">
							
								<div class="form-group">
									<label for="date_panne">DATE </label>
									<input type="date" class="form-control" name="date_panne" id="date_panne" placeholder="">
								</div>
                                
                                <div class="form-group">
									<label for="demandeur">Demandeur</label>
									<input class="form-control" name="demandeur" id="demandeur" placeholder="Votre nom">
								</div>
                              <div class="form-group">
                                       <label for="idDepartement"> Departement: </label>
                                    <select class="form-control" name="idDepartement" id="idDepartement">

                                            <?php echo $sql="SELECT * FROM departement";
                                            $req=$cnx->query($sql);

                                            while ($donnees=$req->fetch()) {
                                            ?>
                                             <option value="<?php echo $donnees['idDepartement']; ?>"><?php echo $donnees['nomDepartement'];?>

                                             </option>

                                             <?php } ?>
                                    </select>
                            </div>

								<div class="form-group">
									<label>Panne</label>
									<input class="form-control" name="panne" id="panne" placeholder="LE Probleme">
								</div>
                           
								<button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
							
						</form>
    
							</div>
			
						
					 </div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
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



