<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD Productos</title>
        <link rel="stylesheet" href="archivo.css">
    </head>
         <body>
        <table width="100%" border="1">
            <tr>
                <td height="55" colspan="4"><table width="588" border="1" align="center">
                        <tr>
                            <td width="25%" align="center"><a href="./clientes.php" target="cuerpoby"><div style="width: 100%; height: 50px; margin-top: 20px"  ><font color="#000000"><b>CLIENTES</b></font></div></a></td>
                            <td width="23%" align="center"><a href="./index.php" target="cuerpoby"><div style="width: 100%; height: 50px; margin-top: 20px" ><font color="#000000"><b>PRODUCTOS</b></font></div></a></td>
                            <td width="25%" align="center"><a href="./facturas.php" target="cuerpoby"><div style="width: 100%; height: 50px; margin-top: 20px" ><font color="#000000"><b>PROVEEDORES</b></font></div></a></td>
                        </tr>
                    </table></td>
            </tr>
           
        </table>
    
        <p align="center"><b><font face="Monotype " size="6">Proveedores</font></b></p>
        <table align="center">
            <tr><td>
                    <center> <form action="controller/controllerf.php">
                        <input type="hidden" value="listarF" name="opc">
                        <input type="submit" style="width: 150px; height: 60px;" value="Ver listado">
                    </form></center> 
                </td>
                <td>
                    <form action="controller/controllerf.php">
                        <input type="hidden" value="crearF" name="opc">
                        <input type="submit" style="width: 150px; height: 60px;" value="Crear Nuevo">
                    </form>
                </td></tr>
        </table>
        <table border="1" align="center">
            <tr bgcolor="#F0E68C" bordercolor="#FFFFFF" height="40">
                <th><font color="#000000">ID</font></th>
                <th><font color="#000000">NOMBRE</font></th>
                <th><font color="#000000">DIRECCION</font></th>
                <th><font color="#000000">TELEFONO</font></th>
                <th><font color="#000000">EMAIL</font></th>
                <th><font color="#000000">ELIMINAR</font></th>
                <th><font color="#000000">ACTUALIZAR</font></th>

            </tr>
            <?php
            session_start();
            include './model/Factura.php';
//verificamos si existe en sesion el listado de productos:
            if (isset($_SESSION['listadofac'])) {
                $listadof = unserialize($_SESSION['listadofac']);
                foreach ($listadof as $p) {
                    echo "<tr>";
                    echo "<td>" . $p->getId() . "</td>";
                        echo "<td>" . $p->getNombre() . "</td>";
                    echo "<td>" . $p->getDireccion() . "</td>";
                    echo "<td>" . $p->getTelefono() . "</td>";
                    echo "<td>" . $p->getEmail() . "</td>";
                    echo "<td><a href='controller/controllerf.php?opc=eliminarF&id=" . $p->getId() . "'>eliminar</a></td>";
                    echo "<td><a href='controller/controllerf.php?opc=actualizarF&id=" . $p->getId() . "'>actualizar</a></td>";
                    echo "</tr>";
                }
            } else {
                echo " ";
            }
            ?>
        </table>

        </font>
    </body>
</html>