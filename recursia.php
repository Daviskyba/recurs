<?php
$shui = "C:\Program Files (x86)\TeamViewer";
function scan($shui){
$scron[$shui] = scandir($shui);
    unset($scron[$shui][0]);
    unset($scron[$shui][1]);
    foreach ($scron[$shui] as $key => $value){
        if (is_dir($shui . '\\' . $value)){
            $scron[$key][$shui . '\\' . $value] = scan($shui . '\\' . $value);
        }
    }
    return $scron;
}
$files = scan($shui);
echo "Начальная папка: $shui";
echo "<pre>";
print_r($files);
?>