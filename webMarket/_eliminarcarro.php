<?php
require_once('php/conexion.php');
if(isset($_POST['eliminar'])){
    $idcarrito = $_POST["id"];
    $sql = "DELETE FROM carro WHERE id = '$idcarrito'";
    var_dump($_POST);

    if(mysqli_query($con,$sql)){
        echo "<script>
            alert('El producto ha sido eliminado del carrito.');
            window.location= 'carrito.php'
                </script>";
    
    
}else{

    echo "<script>
            alert('Ha ocurrido un error al intentar eliminar el producto.');
            window.location= 'carrito.php'
                </script>";
}
}
?>