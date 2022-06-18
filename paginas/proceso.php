<?php
    if (isset($_POST["btn_login"])) {

        // print_r($_POST);
        $user = $_POST["txt_user"];
        $psw = $_POST["txt_psw"];

        include("conexion.php");

        $cn = new Conexion();

        $nr = $cn->LoginAccess($user, $psw);

        // echo $nr;

        if ($nr == 1)
            header("location: listado.php");
        else
            header("location: error.php");
}

?>
