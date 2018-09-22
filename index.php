<html>
<head>
<title>Prueba de daniel</title>
</head>
<body>
<?php 
$parts = parse_url($url);
parse_str($parts['query'], $query);
echo '<p>Hola mundo $query['nombre'] </p>'; 

?>
</body>
</html>
