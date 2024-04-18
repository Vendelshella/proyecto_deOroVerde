<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deOroVerde</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/body_realizar_pedido.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

</head>
<body>
    <header>
        <img id="logohead" src="images/logo.png" alt="deOroVerde">
        <input type="checkbox" class="checkbox">
        <img class="icons open" src="images/menu-hamb.png" alt="">
        <img class="icons close" src="images/simbolo-x.png" alt="">
        <div id="divnav" class="divnav">
            <nav id="nav" class="nav">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="documents/Información deOroVerde.pdf">Catálogo</a></li>
                    <li><a href="realizar_pedido.php">Realizar pedido</a></li>
                    <li><a href="galeria.php">Galería</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <section class="main">
        <h1>Contacto</h1>
        <p>Si prefieres que tu tarjetas tenga un formato personalizado, mándanos un mensaje a través del siguiente formulario para darte un presupuesto ajustado a tus necesidades:</p>
        <form class="form2" action="contacto_form.php" method="post">
            <fieldset class="fs2">
            <table class="table2">
                <th colspan="2">Formulario para tarjetas con formato personalizado:</th>
                <tr>
                    <td><label for="email">E-mail:</label></td>
                </tr>
                <tr>
                    <td><input id="email" type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="asunto">Asunto:</label></td>
                </tr>
                <tr>
                    <td><input id="asunto" type="text" name="asunto"></td>
                </tr>
                <tr>
                    <td><label for="mensaje">Mensaje:</label></td>
                </tr>
                <tr>
                    <td><textarea name="mensaje" id="mensaje" cols="40" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="boton_enviar" type="submit" value="Enviar Mensaje"></td></tr>
            </table>
            </fieldset>
        </form>
    </section>
    <footer>
        <div class="container">
            <table>
                <th id="contacto" colspan="2"><h2>¿Trabajamos juntos?</h2></th>
                <tr>
                    <td><img src="images/mail.png"></td>
                    <td>info@deoroverde.szmblog.es</td>
                </tr>
                <tr>
                    <td><img src="images/telefono.png"></td>
                    <td>616849345</td>
                </tr>
            </table>
        </div>
        
        <div class="container">
            <table>
                <th id="contacto" colspan="2"><h2>Mis redes sociales:</h2></th>
                <tr>
                    <td><img src="images/instagram.png"></td>
                    <td><a href="#">@deOroVerde</a></td>
                </tr>
                <tr>
                    <td><img src="images/twitter.png"></td>
                    <td><a href="#">@de_oro_verde</a></td>
                </tr>
                <tr>
                    <td><img src="images/facebook.png"></td>
                    <td><a href="#">@deoroverde87</a></td>
                </tr>
            </table>
        </div>
        
        <div class="container">
            <table>
                <th id="contacto" colspan="2"><h2>Legal</h2></th>
                <tr>
                    <td><img src="images/cookie.png"></td>
                    <td><a href="#">Política de cookies (UE)</a></td>
                </tr>
                <tr>
                    <td><img src="images/documento.png"></td>
                    <td><a href="#">Aviso legal</a></td>
                </tr>
                <tr>
                    <td><img src="images/documento.png"></td>
                    <td><a href="#">Política de privacidad</a></td>
                </tr>
            </table>
        </div>
    </footer> 
</body>
</html>