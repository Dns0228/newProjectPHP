<!DOCTYPE html>
<html lang="de">
<head>
  <?php include 'meta.inc.php'?>
</head>
<body>
        <a href="/">вернуться на главную</a>
    <?php

$a = "не определено";
$b = "не определен";

if(isset($_POST["a"])){
  
    $a = $_POST["a"];
}
if(isset($_POST["c"])){
  
    $c = $_POST["c"];
    $result = $a ** $c;
}
echo '<h2> Результат = ', $result.'</h2><br>'
?>
</body>
</html>