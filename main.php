<!DOCTYPE html>
<html lang="de">
<head>
  <?php include 'meta.inc.php'?>
</head>
<body>
    <nav class="header">
        <?php include 'logo.inc.php'?>
        <?php include 'menu.inc.php'?>
    </nav>
      <h1 class="nameSite">
         <?php
         echo $nameSite ?>
      </h1>
      <div class="aboutMe">
      <?php 
          echo '<img class="col-6"src="img/me.jpg" style="width=100px">'?>

                    <div class="about"> Меня зовут
                        <?php 
                          echo $name,' ',$surname .'<br>';
                          echo "Город", ' ', $city .'<br>'; 
                          echo "Моя цель:", ' ', '<q>', $target .'</q>';
                          ?>
                      </div>
      </div>
      <h2>Произведем возведение в степерь в PHP</h2>
      <form action="easy.php" method="POST">
        <input type="number" name="a" placeholder="Оперант" />
        <input type="number" name="c" placeholder="Степень"/>
        <input type="submit" value="Вычислить">
      </form><br>

      <hr>

           <footer>
            <div class="soc">
              <ul>  
                <?php include 'soc.inc.php'?>
              </ul>
            </div>
              <a href="/" class="dp">design by Denis &reg; 2022</a>
           </footer>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
</body>
</html>