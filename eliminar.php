<?php 

    include("conectar.php");

    if(isset($_GET["id_post"])){

        $id=$_GET["id_post"];

        $link=mysqli_connect($host, $user,$pass,$db)or die("Problemas");
        if(!$link){
            echo "Problemas para conectar";
        }

        $delete = "DELETE FROM posteos WHERE id_post = '$id'";

        $result = mysqli_query($link, $delete);

        if($result){

            echo "Los datos fueron eliminador correctamente";

        }else{
            echo "problemas para eliminar los datos";
        }
        
    }

?>