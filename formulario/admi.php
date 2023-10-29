  
  <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin.css">
  <title>Administrador</title>
  <meta name="viewport" content="width=device-width, initial -scale=1.0">
   
</head>
<body class="image" style="background:
linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
background-color: #131313;
background-size: 20px 20px;">
  <div class="cosito"style="width:35%; color:white;border: solid 2px white; margin-top:80px;margin-left: 35%; padding-bottom: 25px; background: black; opacity: .8;"> 
   <form action="validar.php" method="POST" id="frmasignar">
     <table>
       <h2>Administrador</h2>
  <form>
    <div class="form">
      <div class="form-2">
       <label for="usuario">Usuario</label>
        <input type="usuario" class="form-control" id="usuario" placeholder="Usuario" name="Usuarios" required>
          </div>
      <div class="form-3">
       <label for="contraseña">Contraseña</label>
        <input type="Password" class="form-control" id="Contraseña" placeholder="Contraseña" name="contraseña" required>
          </div>
           </div>

        <div class="boton">
         <button type="sumit" class="btn btn-success">iniciar</button>
        </div>
     
   </form>
  </div>
</body>
</html>