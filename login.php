<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css"></style>
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<section id="login">
    <h2>LOGIN</h2>
    <div class="contenedor-login">
        <form action="" method="post">
            <div class="form">
                <label for="correo">Correo</label>
                <input type="text" name="correo" id="correo" placeholder="Correo Electronico">
            </div>
            <div class="form">
                <label for="contraseña">Contrasena</label>            
                <input type="password" name="contraseña" id="Contraseña" placeholder="Contraseña">
            </div>
            <div class="ingresar">    
                <button type="submit" id="ingresar" name="ingresar">Ingresar</button>
            </div>
            <p>¿Aun no te haz registrado? <a href="registro.html">Registrate aqui</a></p> 
        </form>
    </div>   
</section>
</body>
</html>