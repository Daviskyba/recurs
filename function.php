<?php
include "function.html";
if (isset($_POST['os']))
{
    $os1 = $_POST['os'];

if ($os1 == '1')
    echo 'Вы брали - Windows XP';
elseif ($os1 == '2') echo 'Вы брали - Windows Vista';
elseif ($os1 == '3') echo 'Вы брали - Windows 7';
elseif ($os1 == '4') echo 'Вы брали - Windows 8';
elseif ($os1 == '5') echo 'Вы брали - Другую ';
elseif ($os1 == '0') echo 'Вы не выбрали операционную систему';
else echo 'Мы не смогли определить вашу операционную систему';
}
?>