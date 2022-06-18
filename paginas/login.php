<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css" />
    <script type="text/javascript" src="../css/js/bootstrap.js"></script>
    <title>Login - FutureSound</title>
</head>
<body>
    <div class="container" style="background-color: #fafafa; padding-top: 10px">
    <header style="text-align: center">
        <img
          src="../img/logo.png"
          alt="futureSong"
          style="
            width: 150px;
            border-radius: 10px;
            margin: 10px;
            border: 6px double #ff4d57;
          "
        />
        <h1 style="margin-bottom: 20px">
          <i class="fa-solid fa-compact-disc"></i> Future Sound
          <i class="fa-solid fa-compact-disc"></i>
        </h1>
        </header>

        <section>
            <div class="container" style="width: 50%; border: 1px solid #d3d3d3; border-radius: 10px; padding: 10px;">
                <center><h3>Inicio de sesion</h3></center><br>
                <form name="frmacceso" id="frmacceso" method="post" action="proceso.php">
                    <div class="mb-3">
                      <label for="txtuser" class="form-label">Usuario</label>
                      <input type="text" class="form-control" name="txt_user" id="txt_user">
                    </div>
                    <div class="mb-3">
                      <label for="txtpsw" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" name="txt_psw" id="txt_psw">
                    </div>
                    <button type="submit" class="btn btn-dark" name="btn_login" id="btn_login">Enviar</button>
                    <a href="../index.html" class="btn btn-danger">Volver</a>
                </form>
            </div>
        </section>
        <br>
        <footer>
        <div
          class="container"
          style="background-color: #ffc107; height: 40px; padding-top: 10px"
        >
          <div class="row">
            <div class="col-sm-4" style="text-align: center; font-weight: bold">
              <i class="fa-solid fa-moon"></i> FutureSound
            </div>
            <div
              class="col-sm-8"
              style="text-align: center; font-style: italic"
            >
              <i class="fa-solid fa-cube"></i> Copyright - @Derechos Reservados
              2022
            </div>
          </div>
        </div>
      </footer>
    </div>
</body>
</html>