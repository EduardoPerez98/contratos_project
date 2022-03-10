<?php include("templates/cabecera.php"); ?>

<?php
    require '../webcontratos/administrador/config/bd.php';



$id_eva = (isset($_POST['id_eva'])) ? $_POST['id_eva'] : "";
$nombre_eva = (isset($_POST['nombre_eva'])) ? $_POST['nombre_eva'] : "";
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : "";
$curp = (isset($_POST['curp'])) ? $_POST['curp'] : "";
$nacionalidad = (isset($_POST['nacionalidad'])) ? $_POST['nacionalidad'] : "";
$ciudad = (isset($_POST['ciudad'])) ? $_POST['ciudad'] : "";
$colonia = (isset($_POST['colonia'])) ? $_POST['colonia'] : "";
$cp = (isset($_POST['cp'])) ? $_POST['cp'] : "";
$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
$uni_titulo = (isset($_POST['uni_titulo'])) ? $_POST['uni_titulo'] : "";
$fecha_titulo = (isset($_POST['fecha_titulo'])) ? $_POST['fecha_titulo'] : "";
$cedula = (isset($_POST['cedula'])) ? $_POST['cedula'] : "";
$periodo_ini = (isset($_POST['periodo_ini'])) ? $_POST['periodo_ini'] : "";
$periodo_fin = (isset($_POST['periodo_fin'])) ? $_POST['periodo_fin'] : "";

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

echo $id_eva."<br/>";
echo $nombre_eva. "<br/>";
echo $edad. "<br/>";
echo $curp. "<br/>";
echo $nacionalidad. "<br/>";
echo $ciudad. "<br/>";
echo $colonia. "<br/>";
echo $cp. "<br/>";
echo $titulo. "<br/>";
echo $uni_titulo. "<br/>";
echo $fecha_titulo. "<br/>";
echo $cedula. "<br/>";
echo $periodo_ini. "<br/>";
echo $periodo_fin. "<br/>";
echo $accion."<br/>";

try {
    if($conn){
        echo "Conectado... a sistema";
    }
} catch (Exception $th) {

    echo $ex ->getMessage();

}

switch ($accion) {

    case "Agregar":

        $ns = pg_query($conn,"INSERT INTO evaluados VALUES('$id_eva','$nombre_eva','$edad','$curp','$nacionalidad','$ciudad','$colonia','$cp','$titulo','$uni_titulo','$fecha_titulo','$cedula','$periodo_ini','$periodo_fin')");
        echo "Presionando el botón agregar";
        break;

    case "Modificar":
        echo "Presionando el botón Modificar";
        break;

    case "Cancelar":
        echo "Presionando el botón Cancelar";
        break;
}

?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Contratos
        </div>
        <div class="card-body">
            <h4 class="card-title">Formulario de Docentes</h4>
            <p class="card-text">Llene todos los campos</p>




            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="id_eva">Plaza Asignada:</label>
                    <input type="text" name="id_eva" class="form-control" class="id_eva" id="id_eva" placeholder="Ingresa la plaza">
                </div>

                <div class="form-group">
                    <label for="nombre_eva">Nombre:</label>
                    <input type="text" class="form-control" name="nombre_eva" id="nombre_eva" placeholder="Ingresa el nombre completo">

                </div>

                <div class="form-group">
                    <label for="edad">Edad:</label>
                    <input type="number" class="form-control" name="edad" id="edad" placeholder="Edad del docente">

                </div>

                <div class="form-group">
                    <label for="curp">CURP:</label>
                    <input type="text" class="form-control" name="curp" id="curp" placeholder="">

                </div>

                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad:</label>
                    <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad del docente">

                </div>

                <div class="form-group">
                    <label for="ciudad">Ciudad:</label>
                    <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad donde radica">

                </div>

                <div class="form-group">
                    <label for="colonia">Colonia</label>
                    <input type="text" class="form-control" name="colonia" id="colonia" placeholder="">
                    <small id="helpId" class="form-text text-muted">Debe coincidir con el comp de domicilio</small>
                </div>

                <div class="form-group">
                    <label for="cp">Codigo Postal</label>
                    <input type="text" class="form-control" name="cp" id="cp" placeholder="">

                </div>

                <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="">
                    <small id="helpId" class="form-text text-muted">Perfil Académico</small>
                </div>

                <div class="form-group">
                    <label for="uni_titulo">Universidad de obtención</label>
                    <input type="text" class="form-control" name="uni_titulo" id="uni_titulo" placeholder="">

                </div>

                <div class="form-group">
                    <label for="fecha_titulo">Fecha de obtención</label>
                    <input type="date" class="form-control" name="fecha_titulo" id="fecha_titulo" placeholder="">
                </div>

                <!-- Duda de como usar el checbox, en caso de que no lo tenga -->
                <div class="form-group">
                    <label for="cedula">Cédula Profesional</label>
                    <input type="text" class="form-control" name="cedula" id="cedula" placeholder="">

                </div>

                <div class="form-group">
                    <label for="periodo_ini">Inicio del periodo laboral</label>
                    <input type="date" class="form-control" name="periodo_ini" id="periodo_ini" placeholder="">

                </div>

                <div class="form-group">
                    <label for="periodo_fin">Fin del periodo laboral</label>
                    <input type="date" class="form-control" name="periodo_fin" id="periodo_fin" placeholder="">

                </div>

                <!-- Duda sobre como utilizar el multi select desde la BD
        <div class="form-group">
            <label for="">Dependencia</label>
            <select multiple class="form-control" name="" id="">
                <option></option>
                <option></option>
                <option></option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Dependencia</label>
            <select multiple class="form-control" name="" id="">
                <option></option>
                <option></option>
                <option></option>
            </select>
        </div>
        -->
                <!--Botones del Formulario -->
                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>
        </div>
    </div>

    </form>

</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Plaza</th>
                <th>Nombre</th>
                <th>Periodo Inicio</th>
                <th>Periodo Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">30001</td>
                <td>Guillermo Matias Pérez Soza</td>
                <td>01/01/2022</td>
                <td>30/07/2022</td>
                <td>Seleccionar | Borrar</td>
            </tr>
            <tr>
                <td scope="row">30002</td>
                <td>Mariam Isabelle Diaz </td>
                <td>17/02/2022</td>
                <td>15/06/2022</td>
                <td>Seleccionar | Borrar</td>
            </tr>
        </tbody>
    </table>
</div>

<?php include("templates/pie.php"); ?>