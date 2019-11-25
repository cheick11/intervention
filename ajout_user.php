<?php 
session_start();
 include('connexion.php');
  include('nav.php');
  include('nav_late.php');
if(isset($_POST['enregistre'])){ 


		$nomUser = $_POST['nomUser'];
		$login = $_POST['login'];
		$idDepartement = $_POST['idDepartement'];
        $role = $_POST['role'];


		/*$sql = "INSERT INTO user( nomUser, login, idDepartement, role) VALUES ( '".$nomUser."' , '".$login."' , '".$departement."' , '".$role."' ) ";
		$req=$cnx->query($sql);*/
    $sql = "INSERT INTO user( nomUser, login, idDepartement, role) VALUES ( '".$nomUser."' , '".$login."' , '".$idDepartement."' , '".$role."' ) ";
		$req=$cnx->query($sql);
   
}



    ?>
 <script type="text/javascript">window.location.href="liste_user.php";</script>
<?php

?>