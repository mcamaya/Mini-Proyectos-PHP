<?php

//creamos las cookies
setcookie("PrimeraCookie", "Hello world");
setcookie("SegundaCookie", "Cookie expira en un minuto", time() + 3600);
setcookie("TerceraCookie", "Cookie con fecha", strtotime('2023-12-31 23:59:59'));

//llamamos las cookies con la variable superglobal
echo "Mi primera cookie es : " . $_COOKIE['PrimeraCookie'];
echo "<br><br>------------------------------------------------------------------<br><br>";
echo "Mi segunda cookie es : " . $_COOKIE['SegundaCookie'];
echo "<br><br>------------------------------------------------------------------<br><br>";
echo "Mi primera cookie es : " . $_COOKIE['TerceraCookie'];
echo "<br><br>------------------------------------------------------------------<br><br>";