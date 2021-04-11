<!DOCTYPE html>
<html>
<center>
<head> 
<img src="para el blog.ico.png" width="600" height="150">

    <style>
    
    #menu{
        background-color: #0F1C7C;
        display: contents;
        box-sizing: border-box;
        margin: 15;
        padding: 20;
    }
    
    #menu ul{
        list-style: lower-latin;
        margin: 10;
        padding: 20;
    }
    
    
    #menu ul li{
        display: inline-block;
      
    }
    
    #menu ul li a{
        color: white;
        display: block;
        padding: 10px; 20px;
        text-decoration: none;
    }   
    
    
    
    #menu ul li a:hover{
        background-color: blue;
        
        
    }
    </style>
   
<div id="menu">
	<ul>
        <li><a href="index.html"><h3>Inicio</h3></a></li>
        <li><a href="Cs.html"><h3>Comics</h3></a></li>
        <li><a href="Consultas.html"><h3>Consultas</h3></a></li>
        <li><a href="Novedades.html"><h3>Novedades</h3></a></li>
        

	</ul>    
    </div>

</head>
</center>




<html lang="en">
<center>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
    </center>    
<body background="nubes.jpg">
<center>
<?php
alert("Tu Mensaje fue enviado exitosamente");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

    <form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input id="nombre" type="text" name="nombre" placeholder="Nombre" required="" /><br></br>

    <label for="apellido">Apellido:</label>
    <input id="apellido" type="text" name="apellido"  placeholder="Apellido" required="" /><br></br>

    <label for="correo">Email:</label>
    <input id="correo" type="email" name="correo" placeholder="ejemplo@correo.com" required="" /><br></br>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" placeholder="mensaje" required=""></textarea><br></br>

    <input type="submit" name="agregar" value="agregar" href="index.php">
    <a href="index.php">Regresar</a>
    </form>

    </body>
    </center>
</html>
