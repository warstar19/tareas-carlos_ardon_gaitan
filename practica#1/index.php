<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interfaz Bonita con PHP</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  .container {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
    padding: 20px;
    width: 300px;
    text-align: center;
  }
  h2 {
    color: #333;
  }
  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  .btn:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
  <div class="container">
    <h2>Descripción Personal</h2>
    <?php
      // Aquí puedes personalizar la descripción
      $nombre = "Nombre del Usuario";
      $descripcion = "Soy una persona apasionada por la tecnología, especialmente el desarrollo de software y la ciberseguridad. Disfruto aprender y aplicar nuevos conocimientos en proyectos desafiantes.";
      
      echo "<p><strong>Nombre:</strong> $nombre</p>";
      echo "<p><strong>Descripción:</strong> $descripcion</p>";
    ?>
    <a href="#" class="btn">Saber más</a>
  </div>
</body>
</html>
