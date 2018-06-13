<?php
$salida = 'cd /var/www && ls ';
while (@ ob_end_flush());
$proc = popen($salida,'r');
echo "<pre>";
while (!feof($proc)) {
  echo fread($proc, 4096);
  @ flush();
}
echo "</pre>";
 ?>
