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
    <link rel="stylesheet" type="text/css" href="css/body_index.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="js/treeanimation.js"></script>
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
                    <li id="inicio"><a href="#">Inicio</a></li>
                    <li><a href="documents/Información deOroVerde.pdf">Catálogo</a></li>
                    <li><a href="realizar_pedido.php">Realizar pedido</a></li>
                    <li><a href="galeria.php">Galería</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section id="container-welcome">
        <h1>FABRICANTE DE PAPEL CON SEMILLAS</h1>
        <p id="bienvenidos">¡Bienvenidos!</p>
        <p id="texto-secundario">Seguid el árbol hasta la raíz para conocer nuestro trabajo</p>
    </section>
    
    <section class="arbol" id="arbol">
        <a class="enlaceCuadro" href="documents/Información deOroVerde.pdf"><img class="imgcatalogo cuadro" id="imgcatalogo" src="images/frame_catalogo.png" alt="Catálogo" ></a>
        <a class="enlaceCuadro" href="galeria.php"><img class="imggaleria cuadro" id="imggaleria cuadro" src="images/frame_galeria.png" alt="Galeria" ></a>
        <a class="enlaceCuadro" href="realizar_pedido.php"><img class="imgpedido cuadro" id="imgpedido" src="images/frame_realizar_pedido.png" alt="Realizar pedido" ></a>
        <a class="enlaceCuadro" href="#inicio"><img class="imgvolver cuadro" id="imgvolver" src="images/frame_volver_inicio.png" alt="Inicio" ></a>
        
    </section>
    <footer>
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