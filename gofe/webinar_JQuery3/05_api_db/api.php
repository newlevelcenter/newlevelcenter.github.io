<?php// Устанавливаем возможность отправлять ответ для любого доменаheader('Access-Control-Allow-Origin: *');if (version_compare(phpversion(), '5.3.0', '>=')  == 1)  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);else  error_reporting(E_ALL & ~E_NOTICE); include ("config.php");include ("connect.php");/*$query = "SELECT * FROM t";$result = mysql_query($query)or DIE(mysql_error());*/// Получаем параметры POST$sAction = $_REQUEST['a'];$iParam1 = (int)$_REQUEST['p1'];$iParam2 = (int)$_REQUEST['p2'];$query = "INSERT INTO action (p1,p2,a,timestamp) VALUES ($iParam1 ,$iParam2,$sAction,CURRENT_TIME())";$result = mysql_query($query)or DIE(mysql_error());// Выполняем вычисления$iResult = 0;switch ($sAction) {    case '1':        $iResult = $iParam1 + $iParam2;        break;    case '2':        $iResult = $iParam1 - $iParam2;        break;    case '3':        $iResult = $iParam1 * $iParam2;        break;    case '4':        $iResult = $iParam1 / $iParam2;        break;}// Подготавливаем массив результатов$aResult = array(    'result' => $iResult, 'name' => 'max');if (isset($_REQUEST['readme'])){    if ($_REQUEST['readme']==1){      $aResult = array(    'result' => 'Input: p1, p2. And sign -  a. a=1 - plus, a=2 - minus, a=3 - multiplication, a=4 - devide');  }}// Генерируем результатheader('Content-type: application/json');echo json_encode($aResult);