<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css" />
    <script type="text/javascript" src="../css/js/bootstrap.js"></script>
    <title>Listado</title>
</head>
<body>
    <div class="container">
        <header style="text-align: center; padding-top: 10px;">
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
        <section style="text-align: center; background-color: #E8E8E8" >
            <h1 style="font-size: 25px; padding: 20px 0;">Artistas y canciones que mas escuchas</h1>
                <?php
                    include("conexion.php");
                    $cn=new Conexion();
                    $cn->Music_List();
                ?>
    
            <h3 style="padding: 20px 0 20px 0; background-color: #000; color: #fff">Play List</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Numero</th>
                    <th scope="col">Play</th>
                    <th scope="col">Youtube</th>
                    <th scope="col">Instagram</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                    <audio controls style='width: 18.75rem; height: 1.5625rem'>
                        <source src="../song/Fkj - Leave My Home.mp3" >
                    </audio>
                    </td>
                    <th scope="col"><a href="https://www.youtube.com/c/FKJ" target="_blank" style="text-decoration: none; color: #BA4A00">French Kiwi Juice</a></th>
                    <th scope="col"><a href="https://www.instagram.com/frenchkiwijuice/" target="_blank" style="text-decoration: none; color: #BA4A00">French Kiwi Juice</a></th>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>
                    <audio controls style='width: 300px; height: 25px'>
                        <source src="../song/Jacquees - Round II.mp3" >
                    </audio>
                    </td>
                    <th scope="col"><a href="https://www.youtube.com/user/jacqueesmusic" target="_blank" style="text-decoration: none; color: #BA4A00">Jacquees</a></th>
                    <th scope="col"><a href="https://www.instagram.com/jacquees/" target="_blank" style="text-decoration: none; color: #BA4A00">Jacquees</a></th>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>
                    <audio controls style='width: 300px; height: 25px'>
                        <source src="../song/Chris Brown - No Guidance.mp3" >
                    </audio>
                    </td>
                    <th scope="col"><a href="https://www.youtube.com/user/ChrisBrownTV" target="_blank" style="text-decoration: none; color: #BA4A00">Chris Brown</a></th>
                    <th scope="col"><a href="https://www.instagram.com/chrisbrownofficial/" target="_blank" style="text-decoration: none; color: #BA4A00">Chris Brown</a></th>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>
                    <audio controls style='width: 300px; height: 25px'>
                        <source src="../song/Ella Mai - Trip.mp3" >
                    </audio>
                    </td>
                    <th scope="col"><a href="https://www.youtube.com/c/ellamai" target="_blank" style="text-decoration: none; color: #BA4A00">Ella Mai</a></th>
                    <th scope="col"><a href="https://www.instagram.com/ellamai/" target="_blank" style="text-decoration: none; color: #BA4A00">Ella Mai</a></th>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>
                    <audio controls style='width: 300px; height: 25px'>
                        <source src="../song/PREP - Cheapest Flight.mp3" >
                    </audio>
                    </td>
                    <th scope="col"><a href="https://www.youtube.com/c/PREPofficial" target="_blank" style="text-decoration: none; color: #BA4A00">PREP</a></th>
                    <th scope="col"><a href="https://www.instagram.com/prepband/" target="_blank" style="text-decoration: none; color: #BA4A00">PREP</a></th>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>
                    <audio controls style='width: 300px; height: 25px'>
                        <source src="../song/Play Nice - Pick Up Your Phone.mp3" >
                    </audio>
                    </td>
                    <th scope="col"><a href="https://www.youtube.com/PlayNicelol/" target="_blank" style="text-decoration: none; color: #BA4A00">Play Nice</a></th>
                    <th scope="col"><a href="https://www.instagram.com/playnicelol/" target="_blank" style="text-decoration: none; color: #BA4A00">Play Nice</a></th>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>
                    <audio controls style='width: 300px; height: 25px'>
                        <source src="../song/Mannywellz - So Good.mp3" >
                    </audio>
                    </td>
                    <th scope="col"><a href="https://www.youtube.com/user/MannywellzTV" target="_blank" style="text-decoration: none; color: #BA4A00">Mannywellz</a></th>
                    <th scope="col"><a href="https://www.instagram.com/mannywellz/" target="_blank" style="text-decoration: none; color: #BA4A00">Mannywellz</a></th>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>
                    <audio controls style='width: 300px; height: 25px'>
                        <source src="../song/Jorja Smith - Be Honest.mp3" >
                    </audio>
                    </td>
                    <th scope="col"><a href="https://www.youtube.com/c/JorjaSmith" target="_blank" style="text-decoration: none; color: #BA4A00">Jorja Smith</a></th>
                    <th scope="col"><a href="https://www.instagram.com/jorjasmith_/" target="_blank" style="text-decoration: none; color: #BA4A00">Jorja Smith</a></th>
                </tr>
                
                </tbody>
            </table>
            <a class="btn btn-danger" href="login.php" style="margin: 10px 0 20px 0px">Volver</a>
        </section>
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