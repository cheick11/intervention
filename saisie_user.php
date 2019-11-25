<?php 
include('connexion.php');
  include('nav.php');
  include('nav_late.php');
?>

<!DOCTYPE html>



<html>
    
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Intervention </title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="styleshett" href="styles.css" >


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
				<h1 class="page-header">SAISI DU COURRIER</h1>
			</div>
		</div><!--/.row--> 
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">COURRIER</div>
					<div class="panel-body">
						<div class="col-md-6">
							
						 <form role="form" method="post" action="ajout_user.php" >
            <div class="form-group">
                <label for="nomUser"> Nom et Prenom: </label>
            <input type="text" class="form-control" name="nomUser" id="nomUser" placeholder="Veuillez saisir votre nom ">
            </div>
              <div class="form-group">
                <label for="login"> Nom Utilisateur:  </label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Veuillez saisir votre nom Utilisateur">
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
             <div>
                <label for="role"> Categorie: </label>
            <select class="form-control" name="role" id="role">
                
                    <?php echo $sql="SELECT * FROM role";
                    $req=$cnx->query($sql);
                
                    while ($donnees=$req->fetch()) {
                    ?>
                     <option value="<?php echo $donnees['idRole']; ?>"><?php echo $donnees['nomRole'];?>
                
                     </option>
                    
                     <?php } ?>
            </select>
            </div> <br>
          <div class="form-group">
                <button type="submit"  class="btn btn-primary"name="enregistre" id="enregistre">Enregistre</button>
            </div>
            
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

