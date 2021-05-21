<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO CLIENTE</h1>
    <form method="POST" action="/cliente" >
    @csrf
        <label for="nombre"> Nombre</label>
        <input type="text" name="nombre"><br>

        <label for="correo"> correo</label>
        <input type="text" name="correo"><br>
    
        <label for="contrasenia"> contrasenia</label>
        <input type="text" name="contrasenia"><br>

        <label for="domicilio"> domicilio</label>
        <input type="text" name="domicilio"><br>

        <label for="numeroDomicilio"> numeroDomicilio</label>
        <input type="text" name="numeroDomicilio"><br>

        <input type="submit" value="enviar">
    </form>

</body>
</html>