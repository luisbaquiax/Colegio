<?php
require_once __DIR__ . "/../model/Estudiante.php";
require_once __DIR__ . "/../model/GestionEstudiante.php";
$method = $_SERVER['REQUEST_METHOD'];
$gestor = new GestionEstudiante();
switch ($method) {
    case 'POST':
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $estudiante = new Estudiante(0, $nombre1, $nombre2, $apellido1, $apellido2, $direccion, $telefono, $correo, true);
        try {
            $gestor->insert($estudiante);
            echo "<script type='text/javascript'>alert('Registro de estudiante exitoso.');</script>";
        } catch (Exception $e) {
            echo "<script type='text/javascript'>console.log(`Error: $e`);</script>";
            echo "<script type='text/javascript'>alert('No se pudo realizar el registro, lo sentimos.');</script>";
        }
        echo "<script type='text/javascript'>window.location.href='../view/home.php';</script>";
        break;
    case 'GET':
        $action = $_GET['action'];
        switch ($action) {
            case 'editStudent':
                $id = $_GET['id'];
                try {
                    $estudiante = $gestor->search($id);
                    if($estudiante){
                       session_start();
                       $_SESSION['student'] = $estudiante;
                        echo "
                        <script src='../assets/js/ControllerPages.js'></script>
                          <script type='text/javascript'>
                            loadPage('../view/edit-student');
                          </script>";
                    }else{
                        echo "<script type='text/javascript'>alert('Estudiante no encontrado.');</script>";
                        echo "<script type='text/javascript'>window.location.href='../view/home.php';</script>";
                    }
                } catch (Exception $e) {
                    echo "<script type='text/javascript'>alert('No se pudo realizar la búsqueda.');</script>";
                }
                break;
            case 'deleteStudent':
                $id = $_GET['id'];
                try {
                    $gestor->delete($id);
                    echo "<script type='text/javascript'>alert('Se ha eliminado exitosamente al estudiante.');</script>";
                } catch (Exception $e) {
                    echo "<script type='text/javascript'>console.log(`Error: $e`);</script>";
                    echo "<script type='text/javascript'>alert('No se pudo eliminar al estudiante, lo sentimos.');</script>";
                }
                echo "<script type='text/javascript'>window.location.href='../view/home.php';</script>";
                break;
        }
}
