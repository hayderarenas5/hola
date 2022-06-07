<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Se le esta agregando un titulo a la vista-->
    <title>LOGIN</title>
    <!--Se esta vinculando con el css-->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <!---->
    <!--Se esta vinculando a una pagina externa de diseños-->
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

        <main>
            <!--Se crea un contenedor-->

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                      <h3>¿Ya tienes una cuenta?</h3>
                       <p>Inicia sesion para entrar en la paginaa</p>
                       <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                   </div>
                   <div class="caja__trasera-register">
                         <h3>¿Aun no tienes una cuenta?</h3>
                         <p>Registrate para que puedas iniciar sesion</p>
                         <button id="btn__registrarse">Registrarse</button>
                     </div>
                 </div>
                
            

<!--formulario login y registro-->
    <div class="contenedor__login-register"> 
        <!--login-->
        <form action="modelo/validarInit.php" method="POST">
        <h2>Iniciar sesion</h2>
        <input type="text" placeholder="Nombre Del Usuario" name="usuario">
        <input type="password" placeholder="Contraseña" name="contrasena">

        <button name="submit">Iniciar Sesión</button>
    
        </form>
        
        <!--registro-->
        <form action="/registro" method= "POST" class="formulario__register">
        @csrf
        <h2>Registrarse</h2>

        <input type="text" name= "nombre">
        <input type="text" name= "apellidos">
        <input type="varchar" name= "correo">
        <input type="varchar" name = "usuario">
        <input type="password" name= "contraseña">

        <!--<input type="text" value="2" name= "cargoid" hidden >-->
        <button type="submit">Registrarse</button>
        </form>
     </div>
   </div>
</Main>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>