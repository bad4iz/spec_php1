<?
$operator ='';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num1 = abs((int)$_POST['num1']);
    $num2 = abs((int)$_POST['num2']);
    $operator = trim(strip_tags($_POST['operator']));
}
$operator = preg_match('/[-+*\/]/',$operator) ? $operator : false;
function mySun($num1, $num2,$operator){

}


?>
   <?=$operator?>
    <!-- Область основного контента -->
    <form action='<?= $_SERVER['REQUEST_URI']?>' method="post">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->

