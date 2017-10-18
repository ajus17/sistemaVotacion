<?php require_once "ruta.php"; ?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?php echo 'cssmenu/'; ?>styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="<?php echo 'cssmenu/'; ?>script.js"></script>
</head>
<body>

<div id='cssmenu' style="margin: 0px auto">
<ul>
   <li><a href='#'>Inicio</a></li>
   <li class='active has-sub'><a href='#'>Aplicaciones</a>
      <ul>
         <li><a href='app.php'>Agregar</a>
         </li>
         <li><a href='#'>Buscar</a>
         </li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'>Votaciones</a>
      <ul>
         <li><a href='#'>Reporte</a>
         </li>
         <li><a href='#'>En construcci&oacute;n</a>
         </li>
      </ul>
   </li>
   <li><a href='#'>Configuraciones</a>
     <ul>
        <li class='has-sub'><a href='#'>Categorias</a>
           <ul>
              <li><a href='#'>Agregar</a></li>
              <li><a href='#'>Buscar</a></li>
           </ul>
        </li>
        <li class='has-sub'><a href='#'>Usuarios</a>
           <ul>
             <li><a href='#'>Agregar</a></li>
             <li><a href='#'>Buscar</a></li>
           </ul>
        </li>
     </ul>
   </li>
   <li><a href='#'>Salir</a></li>
</ul>
</div>

</body>
<html>
