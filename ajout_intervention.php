<?php 
include('connexion.php');
  include('nav.php');
  include('nav_late.php');
if (isset($_POST['submit'])){ 
/*if (!empty($_POST['date_panne']) AND !empty($_POST['demandeur']) AND !empty($_POST['panne'])) {
    /* AND isset($_POST['delai_necessaire']) AND isset($_POST['nature_demande']) AND isset($_POST['temps_intervention']) AND isset($_POST['etat']) AND isset($_POST['delai_clos'])  AND isset($_POST['intervention'])  AND isset($_POST['idcategorie'])  AND isset($_POST['idUser'])  AND isset($_POST['idDepartement']) */
	
		$date_panne = $_POST['date_panne'];
		$demandeur = $_POST['demandeur'];
        $panne = $_POST['panne'];
		/*$delai_necessaire = $_POST['delai_necessaire '];
        $temps_intervention  = $_POST['temps_intervention '];
        $etat = $_POST['etat'];
        $delai_clos  = $_POST['delai_clos']; 
        $intervention  = $_POST['intervention'];   
        $idcategorie  = $_POST['idcategorie'];
        $idUser = $_POST['idUser'];
        $idDepartement  = $_POST['idDepartement'];*/
       


		$sql= "INSERT INTO panne(date_panne, demandeur, panne, delai_necessaire, nature_demande, temps_intervention, etat, delai_clos, intervention, idcategorie, idUser,idDepartement) VALUES ( '".$date_panne."', '".$demandeur."' , '".$panne."', '','','','ATTENTE','','','6','2','2' )";
		
        $req=$cnx->query($sql);
/*}
    else{
  	echo ' erreur de requet ';
  }*/
          
?>
<script type="text/javascript"> window.location.href="liste_intervention.php";</script>
<?php
} 
?>
