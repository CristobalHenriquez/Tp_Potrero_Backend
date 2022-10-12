<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>tp5</title>
</head>



<body>
<h2>ejercicio 1</h2>
<?php
$numerospares = ["0", "2", "4", "6", "8", "10"];
foreach ($numerospares as $valor) {
print  "$valor";
echo "<br>";
}
?>
<br>
<hr>
<h2>ejercicio 2</h2>
<?php
$matriz = ["Pedro", "Ana", "34", "1"];
print_r($matriz);
?>
<h2>ejercicio 3</h2>
<asociativa=['nombre'="pedro",'apellido'=>"Torres",'direccion'=>" Av.mayor 3703", 'Telefono'=> "1122334455"];
?>
<br>
<hr>
<h2>Ejercicio 4</h2>
<?php
$ciudades1 = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
print "La ciudad con el índice 0 tiene el nombre $ciudades1[0].";
echo "<br>";
print "La ciudad con el índice 1 tiene el nombre $ciudades1[1].";
echo "<br>";
print "La ciudad con el índice 2 tiene el nombre $ciudades1[2].";
echo "<br>";
print "La ciudad con el índice 3 tiene el nombre $ciudades1[3].";
echo "<br>";
print "La ciudad con el índice 4 tiene el nombre $ciudades1[4].";
echo "<br>";
print "La ciudad con el índice 5 tiene el nombre $ciudades1[5].";
echo "<br>";
?>
<br>
<hr>
<h2>ejercicio 5</h2>
<?php
$ciudades2 = ['MD' => "Madris", 'BCL' => "Barcelona", 'LD' => "Londres", 'NY' => "New York", 'LA' => "Los Angeles", 'CCG' => "Chicago"];
print "El indice de $ciudades2[MD] es MD.";
echo "br";
print "El indice de $ciudades2[BCL] es BCL.";
echo "br";
print "El indice de $ciudades2[LD] es LD.";
echo "br";
print "El indice de $ciudades2[NY] es NY.";
echo "br";
print "El indice de $ciudades2[LA] es LA.";
echo "br";
print "El indice de $ciudades2[CCG] es CCG.";
echo "br";
?>
</body>

</html>