<?php
session_start();
require_once __DIR__ . "/../model/GestionEstudiante.php";
require_once __DIR__ . "/../model/Estudiante.php";
$gestorStudents = new GestionEstudiante();
$students = $gestorStudents->listStudents();

if (isset($_SESSION['student'])) {
    $student = $_SESSION['student'];
} else {
    echo "<h1>Error: No se encontró información del estudiante.</h1>";
}
?>
<div class="container-fluid mt-3 ">
    <div class="card box-shadow">
        <div class="card-header tabla-personalizado text-white p-4">
            <h1 class="text-center nav-link"><strong>Editar estudiante</strong></h1>
        </div>
        <div class="card-body">
            <form class="validate-form" action="#" method="get">
                <div class="row">
                    <div class="col">
                        <div
                                class="wrap-input100 validate-input"
                        >
                            <input
                                    class="input100"
                                    type="text"
                                    name="name1"
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
                                    name="name2"
                                    id="name2"
                                    placeholder="Segundo nombre"
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

<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
