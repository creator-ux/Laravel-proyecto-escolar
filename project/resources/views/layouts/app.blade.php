<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sixtyfour+Convergence&display=swap" rel="stylesheet">

<style>
  .titulo{ font-family: 'PACIFICO';font-weight: 50px; }
  .contenido { font-family: "Rock Salt"; src: url("fuentes/RockSalt-Regular.ttf") format("truetype"); }
</style>
</head>
<body>
  <header>Cabecera, no cambia</header>
  
       @yield('content')     <!-- con esto se especifica lo que cambiará -->
 
  <footer>Pié de página, no cambia</footer> 
</body>
</html>