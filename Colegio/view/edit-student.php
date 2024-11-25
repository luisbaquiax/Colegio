<?php
require_once '../model/Estudiante.php';
require_once '../model/GestionEstudiante.php';
$gestor = new GestionEstudiante();
$id = $_GET['id'];
$student = $gestor->search($id);
?>
<div class="container-fluid mt-3 ">
    <div class="card box-shadow">
        <div class="card-header tabla-personalizado text-white p-4">
            <h1 class="text-center nav-link"><strong>Editar estudiante</strong></h1>
        </div>
        <div class="card-body">
            <form class="validate-form"
                  action="../controller/ControllerStudents.php?action=update"
                  method="post"
                  onclick="return showConfirm('¿Desea guardar los cambios?')">
                <div class="row">
                    <input type="hidden" value="<?= $student->getId() ?>" name="id">
                    <div class="col">
                        <div
                                class="wrap-input100 validate-input"
                        >
                            <input
                                    class="input100"
                                    type="text"
                                    name="nombre1"
                                    id="name1"
                                    placeholder="Primer nombre"
                                    value="<?= $student->getNombre1() ?>"
                            />
                            <span class="focus-input100"></span>
                        </div>

                        <div
                                class="wrap-input100 validate-input"
                        >
                            <input
                                    class="input100"
                                    type="text"
                                    name="nombre2"
                                    id="name2"
                                    placeholder="Segundo nombre"
                                    value="<?= $student->getNombre2() ?>"
                            />
                            <span class="focus-input100"></span>
                        </div>

                        <div
                                class="wrap-input100 validate-input"
                        >
                            <input
                                    class="input100"
                                    type="text"
                                    name="apellido1"
                                    id="apellido1"
                                    placeholder="Primer apellido"
                                    value="<?= $student->getApellido1() ?>"
                            />
                            <span class="focus-input100"></span>
                        </div>
                        <div
                                class="wrap-input100 validate-input"
                        >
                            <input
                                    class="input100"
                                    type="text"
                                    name="apellido2"
                                    id="apellido2"
                                    placeholder="Segundo apellido"
                                    value="<?= $student->getApellido2() ?>"
                            />
                            <span class="focus-input100"></span>
                        </div>
                    </div>

                    <div class="col">
                        <div
                                class="wrap-input100 validate-input"
                        >
                            <input
                                    class="input100"
                                    type="text"
                                    name="direccion"
                                    id="direccion"
                                    placeholder="direccion"
                                    value="<?= $student->getDireccion() ?>"
                            />
                            <span class="focus-input100"></span>
                        </div>

                        <div
                                class="wrap-input100 validate-input"
                        >
                            <input
                                    class="input100"
                                    type="text"
                                    name="telefono"
                                    id="telefono"
                                    minlength="8"
                                    maxlength="8"
                                    placeholder="teléfono"
                                    value="<?= $student->getTelefono() ?>"
                            />
                            <span class="focus-input100"></span>
                        </div>

                        <div
                                class="wrap-input100 validate-input"
                                data-validate="Correo valido, ejemplo: ex@abc.xyz"
                        >
                            <input
                                    class="input100"
                                    type="text"
                                    name="correo"
                                    id="correo"
                                    placeholder="Correo electrónico"
                                    value="<?= $student->getCorreo() ?>"
                            />
                            <span class="focus-input100"></span>
                        </div>

                    </div>
                </div>

                <div class="container-login100-form-btn mb-3">
                    <button
                            class="login100-form-btn"
                            style="font-size: 25px"
                    >
                        Guardar cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
