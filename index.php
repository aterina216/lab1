<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
a:<input type="text" name="a">
b:<input type="text" name="b">
c:<input type="text" name="c">
<input type="submit">
</form>
<?php
     print nl2br("Вычисление площади треугольника \nВведите стороны треугольника. После ввода каждого значения нажмите Enter\n");
  $a=isset($_GET['a']) ? $_GET['a'] :2 ;
  $b=isset($_GET['b']) ? $_GET['b'] :2 ;
  $c=isset($_GET['c']) ? $_GET['c'] :2 ;
  function geron($a, $b, $c){
    $p = ($a + $b + $c) / 2;
    return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}
  if (($a > 0) && ($b > 0) && ($c > 0) && (($a < ($b + $c) && ($b < ($a + $c) && ($c < ($a + $b)))))) {
  echo '<div style="color:brown">Площадь треугольника со сторонами ' . $a . ', '. $b . ' и ' . $c .
      ' равна ' . geron($a, $b, $c) . '</div>';
} elseif (($a <= 0) || ($b <= 0) || ($c <= 0)) {
  echo '
<div style="color:brown">Ошибка! <i>Введены недопустимые длины сторон треугольника.</i>

<i>Длины сторон должны быть положительными.</i></div>';
} elseif (($a >= ($b + $c) || ($b >= ($a + $c) || ($c >= ($a + $b))))) {
  echo '<div style="color:brown">Треугольник со сторонами ' . $a . ', '. $b . ' и ' . $c . ' не существует!</div>';
}

?>
