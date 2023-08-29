<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deOroVerde</title>
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
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="arbol" id="arbol">
        <a class="enlaceCuadro" href="documents/Información deOroVerde.pdf"><img class="imgcatalogo cuadro" id="imgcatalogo" src="images/frame_catalogo.png" alt="Catálogo" ></a>
        <a class="enlaceCuadro" href="galeria.php"><img class="imggaleria cuadro" id="imggaleria cuadro" src="images/frame_galeria.png" alt="Galeria" ></a>
        <a class="enlaceCuadro" href="realizar_pedido.php"><img class="imgpedido cuadro" id="imgpedido" src="images/frame_realizar_pedido.png" alt="Realizar pedido" ></a>
        <a class="enlaceCuadro" href="#inicio"><img class="imgvolver cuadro" id="imgvolver" src="images/frame_volver_inicio.png" alt="Inicio" ></a>
        
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