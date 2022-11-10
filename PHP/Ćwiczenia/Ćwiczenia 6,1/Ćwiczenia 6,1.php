<?php
$x = 97.234;
echo "Zadeklarowana wartość zmiennej \$x: $x <br>";
settype($x, 'string');
echo "Wartość zmiennej \$x po zmianie typu na string: $x <br>";
settype($x, 'integer');
echo "Wartość zmiennej \$x po zmianie typu na integer: $x <br>";
settype($x, 'float');
echo "Wartość zmiennej \$x po zmianie typu na float: $x <br>";
?>