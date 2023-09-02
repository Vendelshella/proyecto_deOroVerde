<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deOroVerde</title>
    
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
                    <li><a href="#contacto">Contacto</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <section class="main">
        <h1>Realiza tu pedido</h1>
        <p>Para realizar tu pedido mándanos la imagen que quieres que aparezca en tu tarjeta (tamaño máximo 2MB) y el formato de la misma (.jpg, .jpeg y .png) a través de las siguientes opciones:</p>
        <p>(Todos los campos son obligatorios.)</p>
        
        <form class="form1" action="pedido_form1v2.php" method="post" enctype="multipart/form-data">
            <fieldset class="fs1">
            <table class="table1">
                <th colspan="2">Formulario para tarjetas con formato predefinido:</th>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input id="nombre" type="text" name="nombre" required></td>
                </tr>
                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input id="email" type="email" name="email" required></td>
                </tr>
                <tr class="subir_imagen">
                    <td><label>Subir imagen:</label></td>
                    <td class="boton_archivo">
                        <div class="input_file">
                            <p>Seleccionar archivo</p>
                            <input class="subir_archivo" type="file" id="subir_archivo" name="archivo" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="formato_tarjeta">Formato tarjeta:</label></td>
                    <td>
                        <select class="seleccion" name="formato" id="formato_tarjeta">
                            <option value="visita">Tarjeta de visita</option>
                            <option value="agradecimiento">Tarjeta de agradecimiento</option>
                            <option value="etiqueta">Etiqueta con cuerda</option>
                            <option value="soporte">Soporte pendientes</option>
                            <option value="tamañoA5">Tamaño A5</option>
                            <option value="tamañoA6">Tamaño A6</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Cantidad (unidades):</td>
                <td>
                    <select  class="seleccion" name="cantidad" id="cantidad">
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="250">250</option>
                        <option value="500">500</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td colspan="2"><input class="boton_enviar" type="submit" value="Enviar"></td>
                </tr>
            </table>
            </fieldset>
        </form>

        <p>Si prefieres que tu tarjetas tenga un formato personalizado, mándanos un mensaje a través del siguiente formulario para darte un presupuesto ajustado a tus necesidades:</p>
        <form class="form2" action="pedido_form2.php" method="post">
            <fieldset class="fs2">
            <table class="table2">
                <th colspan="2">Formulario para tarjetas con formato personalizado:</th>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input id="nombre" type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input id="email" type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="mensaje">Mensaje:</label></td>
                    <td><textarea name="nombre" id="nombre" cols="60" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="boton_enviar" type="submit" value="Enviar Mensaje"></td></tr>
            </table>
            </fieldset>
        </form>
    </section>
    <footer class="contacto">
        <table>
            <th id="contacto" colspan="2"><h2>Contacto</h2></th>
            <tr>
                <td class="texto">E-mail</td>
                <td>info@deoroverde.szmblog.es</td>
            </tr>
            <tr>
                <td class="texto">Teléfono</td>
                <td>616849345</td>
            </tr>
        </table>
    </footer> 
</body>
</html>