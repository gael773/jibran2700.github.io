<?php 
    $conexion=mysqli_connect('localhost','root','','lan_blast')
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/Formulario.css">
    <script src="https://kit.fontawesome.com/4446ec27ea.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="encabezado">
        <img src="Imagenes/Logo proyecto.jpeg" alt="Vet pet">
        <h1 id="t1">Gestion veterinaria</h1>
        <h1 id="t2">Clinica de mascotas MVPET</h1>
        <div class="clearfix"></div>
        <nav>
        <a href="index.html">
                <i class="fa-solid fa-right-to-bracket"></i> Salir</a>
            <a href="lista_empleados.php">
                <i class="fa-regular fa-person"></i> Empleado</a>
            <a href="lista_clientes.php">
                <i class="fa-solid fa-address-book"></i> Cliente</a>
            <a href="lista_mascotas.php">
                <i class="fa-regular fa-dog"></i> Mascotas</a>
            <a href="lista_Servicios.php">
                <i class="fa-light fa-briefcase"></i> Servicios</a>
            <a href="lista_usuarios.php">
                <i class="fa-solid fa-user"></i> Usuarios</a>
            <a href="lista_productos.php">
            <i class="fa-solid fa-shelves"></i> Inventario</a>
            <a href="generarcomprobantes.html">
            <i class="fa-thin fa-file-medical"></i> Comprobantes</a>
            <a href="cita.html">
               <i class="fa-solid fa-books-medical"></i> Citas</a>
            <a href="Historial_clinico.html">
            <i class="fa-solid fa-notes-medical"></i>Historial Clinico</a>
                    
        </nav>
    </header>
<div class="contform">
    <form action=""method="POST">
        <h2>Mascotas</h2>
        <div class="f1">
            <div class="c1">
                <label for="">Nombre</label><br>
                <input type="text" required name="nombre">
            </div>
            <div class="c1">
                <label for="">Dueño</label><br>
                <input type="text" required name="dueño">
            </div>
</div>
            <div class="f1">
                <div class="c1">
                    <label for="">Tipo</label><br>
                    <select name="tipo" id="sel">
                        <option value="perro">Perro</option>
                        <option value="gato">Gato</option>
                        <option value="otro">otro</option>
                    </select>
                </div>
                <div class="c1">
                    <label for="">Raza</label><br>
                    <input type="text" required name ="raza">
                </div>
                <div class = "f1">
                <div class="c1">
                    <label for="">Fecha nacimineto</label><br>
                    <input type="date" required name = "fecha">
            </div>
                <div class="c1">
                    <label for="">Genero</label><br>
                    <input type="text" required name="genero">
                </div>
                </div>
                <div class ="f1">
            <div class="c1">
            <input type="submit" value="Enviar" id="env" onclick="alerta()" name="insertar">
            <input type="reset" value="Cancelar" id="can" >
            </div>
            </div>
        </div>
    </form>
    <?php
                $id=0;
                $nombre=$_POST['nombre'];
                $dueño=$_POST['dueño'];
                $tipo=$_POST['tipo'];
                $raza=$_POST['raza'];
                $fecha=$_POST['fecha'];
                $genero=$_POST['genero'];
        if (isset($_POST['insertar'])){
            $ins="INSERT INTO mascota (nombre, dueño, tipo, raza, fecha, genero) VALUES ('$nombre','$dueño','$tipo', '$raza','$fecha','$genero')";
            $sql=mysqli_query($conexion,$ins);
        }
        ?>
</div>
<footer class="footer">
    <table>
    <tr>
        <td>
            &#169; Lan Blast 2024 todos lo derechos reservados <br>
            Clinica de mascotas MVPET <br>
            <i id="loca" class="fa-solid fa-location-dot"></i>
            Calle La verdolaga 105 Col.Benito Juarez Estado de Mexico <br>
            
        </td>
        <td>
            Can Web <br> 
            <i id="whats"  class="fa-brands fa-whatsapp"></i>5537656125 
            <i id="face"  class="fa-brands fa-facebook"></i>

        </td>
    </tr>
</table>
</footer>
</body>
</html>