<?php
require_once __DIR__ . "/../model/GestionEstudiante.php";
require_once __DIR__ . "/../model/Estudiante.php";
$gestorStudents = new GestionEstudiante();
$students = $gestorStudents->listStudents();
?>
<div class="container-fluid mt-3 ">
    <div class="card box-shadow">
        <div class="card-header tabla-personalizado text-white">
            <h1 class="text-center nav-link"><strong>Estudiantes</strong></h1>
        </div>
        <div class="card-body">
            <div style="max-height: calc(100vh - 100px); overflow-y: auto;">
                <table class="table table-striped" style="font-size: 15px">
                    <thead>
                    <tr>
                        <th scope="col" class="tabla-personalizado">Codigo</th>
                        <th scope="col" class="tabla-personalizado">Nombres</th>
                        <th scope="col" class="tabla-personalizado">Apellidos</th>
                        <th scope="col" class="tabla-personalizado">Dirección</th>
                        <th scope="col" class="tabla-personalizado">Teléfono</th>
                        <th scope="col" class="tabla-personalizado">Correo</th>
                        <th scope="col" class="tabla-personalizado">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($students as $student) : ?>
                        <tr>
                            <th><?= $student->getId() ?></th>
                            <th><?= $student->getNombre1() ?> <?= $student->getNombre2() ?></th>
                            <th><?= $student->getApellido1() ?> <?= $student->getApellido2() ?></th>
                            <th><?= $student->getDireccion() ?></th>
                            <th><?= $student->getTelefono() ?></th>
                            <th><?= $student->getCorreo() ?></th>
                            <td>
                                <a
                                        href="view-edit-student.php?id=<?= $student->getId() ?>"
                                        class="btn btn-dark btn-sm"
                                ><i class="fa-regular fa-pen-to-square"></i></a>
                                <a
                                        href="../controller/ControllerStudents.php?action=deleteStudent&&id=<?= $student->getId() ?>"
                                        class="btn btn-dark btn-sm"
                                        onclick="return showConfirm('¿Quiere elimanar al estudiante  <?= $student->getNombre1() ?> <?= $student->getNombre2() ?> ?')"
                                ><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function
</script>