<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Cliente.css">
    <link rel="stylesheet" href="CSS/Lista.css">
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
            <a href="lista_empleados.html">
                <i class="fa-regular fa-person"></i> Empleado</a>
            <a href="lista_clientes.html">
                <i class="fa-solid fa-address-book"></i> Cliente</a>
            <a href="lista_mascotas.html">
                <i class="fa-regular fa-dog"></i> Mascotas</a>
            <a href="lista_servicios.html">
                <i class="fa-light fa-briefcase"></i> Servicios</a>
            <a href="lista_usuarios.html">
                <i class="fa-solid fa-user"></i> Usuarios</a>
            <a href="lista_productos.html">
            <i class="fa-solid fa-shelves"></i> Inventario</a>
            <a href="generarcomprobantes.html">
            <i class="fa-thin fa-file-medical"></i> Comprobantes</a>
            <a href="cita.html">
               <i class="fa-solid fa-books-medical"></i> Citas</a>
            <a href="historial_clinico.html">
            <i class="fa-solid fa-notes-medical"></i>Historial Clinico</a>
                    
        </nav>
    </header>
    
    <div class="lista">
        <h2>Mascotas</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dueño</th>
                <th>Tipo</th>
                <th>Raza</th>
                <th>Fecha de Nacimiento</th>     
                <th>Genero</th>           
                <th colspan="2">Operaciones</th>
            </tr>
            <tr>
                <td><?php echo $mostrar['ID']?></td>
                <td><?php echo $mostrar['Nombre']?></td>
                <td><?php echo $mostrar['Dueño']?></td>
                <td><?php echo $mostrar['Tipo']?></td>
                <td><?php echo $mostrar['Raza']?></td>
                <td><?php echo $mostrar['Fecha']?></td>
                <td><?php echo $mostrar['Genero']?></td>
                <td><a href="formmascotas.php">
                    <i class="fa-solid fa-pencil"></i>
                    </a>
                </td>
                <td>
                    <i class="fa-solid fa-trash"></i>
                </td>
            </tr>
            <?php
                }
                ?>
                       
            </table>
        <div class="nuevo">
            <a href="generarmascotas.php">
                <i class="fa-solid fa-bone"></i>
            <h3> Nueva Macota</h3>
            </a>
        </div>
    </div>

        
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

    
</body>
</html>
