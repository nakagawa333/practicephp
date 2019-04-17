<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>簡易電卓</title>
</head>
<body>
  <h1>簡易電卓</h1>
  <form action="test.php" method="post">
    <input type="text" name="num1"> + <input type="text" name="num2">
    <input type="submit" value="ca">
  </form>

 <?php
   if(isset($_POST)){
   	$num1 = $_POST["num1"];
   	$num2 = $_POST["num2"];
   	$total = $num1 + $num2;
   	echo $total;
   }
 ?>
</body>
</html>