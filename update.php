
<?php 
  include('connexion.php');
  include('nav.php');
  include('nav_late.php');
if (isset($_POST['submit'])){ 
if(!empty($_POST['date_panne']) AND !empty($_POST['demandeur']) AND !empty($_POST['panne']) AND !empty($_POST['delai_necessaire']) AND !empty($_POST['temps_intervention']) AND !empty($_POST['etat']) AND !empty($_POST['delai_clos']) AND !empty($_POST['intervention']) AND !empty($_POST['idcategorie']) AND !empty($_POST['idUser']) AND !empty($_POST['idDepartement']) ){ 
    


        $date_panne = $_POST['date_panne'];
		$demandeur = $_POST['demandeur'];
        $panne = $_POST['panne'];
		$delai_necessaire = $_POST['delai_necessaire '];
        $temps_intervention  = $_POST['temps_intervention'];
        $etat = $_POST['etat'];
        $delai_clos  = $_POST['delai_clos']; 
        $intervention  = $_POST['intervention'];   
        $idcategorie  = $_POST['idcategorie'];
        $idUser = $_POST['idUser'];
        $idDepartement  = $_POST['idDepartement'];
       
$sql="UPDATE panne SET date_panne ='$date_panne', Demandeur = '$demandeur', Panne ='$panne', Delai Necessaire='$delai_necessaire', Temps Intervention ='$temps_intervention', Etat = '$etat', delai_clos = '$delai_clos', intervention= '$intervention', idcategorie='$idcategorie', idUser='$idUser',  idDepartement ='$idDepartement' WHERE idCour= '".$_GET['name']."' ";
    
   
}

}
//else{
//    echo '  erreur requet ';
//}
//



?>

<?php 

$sqlmode= "SELECT * FROM panne WHERE idPanne='".$_GET['name']."'";
$reqmode= $cnx->query($sqlmode);
$doneesmode=$reqmode->fetch();



?>




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
	
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">MODIFIER INTERVENTION</h1>
			</div>
		</div><!--/.row--> 
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">INTERVENTION</div>
					<div class="panel-body">
						<div class="col-md-6">
							
						 <form role="form" method="post" action="ajout_intervention.php">
							
								<div class="form-group">
									<label for="date_panne">DATE </label>
									<input type="date" class="form-control" name="date_panne" id="date_panne" placeholder="" value=" <?php echo $donnemodi['date_panne'];?>">
								</div>
                                
                                <div class="form-group">
									<label for="demandeur">Demandeur</label>
									<input class="form-control" name="demandeur" id="demandeur" placeholder="Votre nom" value=" <?php echo $donnemodi['demandeur'];?>">
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
									<label>Panne :</label>
									<input class="form-control" name="panne" id="panne" placeholder="LE Probleme" value=" <?php echo $donnemodi['panne'];?>">
								</div>
                             <div class="form-group">
									<label for="idcategorie ">Categorie : </label>
									<select class="form-control" name="idcategorie" id="idcategorie">

                                            <?php echo $sql="SELECT * FROM categorie";
                                            $req=$cnx->query($sql);

                                            while ($donnees=$req->fetch()) {
                                            ?>
                                             <option value="<?php echo $donnees['idcategorie']; ?>"><?php echo $donnees['nomCategorie'];?>

                                             </option>

                                             <?php } ?>
                                    </select>
                                
								</div>
                             <div class="form-group">
									<label for="delai_necessaire ">Delai_necessaire : </label>
									<input type="date" class="form-control" name="delai_necessaire " id="delai_necessaire " placeholder="">
								</div>
                             
                              <div class="form-group">
									<label for="temps_intervention ">temps_intervention : </label>
									<input type="text" class="form-control" name="temps_intervention " id="temps_intervention " placeholder="temps d'intervention">
								</div>
                             
                              <div class="form-group">
									<label for="etat ">Etat :</label>
									<input type="text" class="form-control" name="etat" id="etat" placeholder="etat d'intervention">
								</div>
                             </form>
                    </div>
                        <div class="col-md-6">
                            <form>
                              <div class="form-group">
									<label for="delai_clos ">delai_clos :</label>
									<input type="date" class="form-control" name="delai_clos" id="delai_clos" placeholder="delai de cloture">
								</div>
                             
                              <div class="form-group">
									<label for="intervention ">intervention :</label>
									<input type="text" class="form-control" name="intervention " id="intervention" placeholder="l'intervention a-t'il ete realise?">
								</div>
                        
						    </form>
    	
					 </div>	
                        <div class="col-md-12">
								<a type="submit" class="btn btn-primary" name="submit">MODIFIER</a>
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


