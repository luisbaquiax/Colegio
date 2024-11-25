<?php
require_once 'Estudiante.php';
require_once 'Coneccion.php';
class GestionEstudiante{
    const INSERT = 'INSERT INTO estudiante (
                      nombre1, 
                      nombre2,
                      apellido1, 
                      apellido2, 
                      direccion,
                      telefono,
                      correo,
                      estado) 
                VALUES (?,?,?,?,?,?,?,?)';

    const UPDATE = '
                    UPDATE estudiante
                    SET
                        nombre1 = ?,
                        nombre2 = ?,
                        apellido1 = ?,
                        apellido2 = ?,
                        direccion = ?,
                        telefono = ?,
                        correo = ?,
                        estado = ?
                    WHERE id = ?;
                ';

    const DELETE = 'DELETE FROM estudiante WHERE id = ?;';
    const SELECT = 'SELECT * FROM estudiante';

    const SEARCH = 'SELECT * FROM estudiante WHERE  id = ?';

    private $conn;
    private $coneccion;

    public function __construct(){
        $this->coneccion = new Coneccion();
        $this->conn = $this->coneccion->getconexion();
    }

    /**
     * @throws Exception
     */
    public function insert($estudiante)
    {
        $stm = $this->conn->prepare(self::INSERT);
        if($stm){
            $nombre1 = $estudiante->getnombre1();
            $nombre2 = $estudiante->getnombre2();
            $apellido1 = $estudiante->getapellido1();
            $apellido2 = $estudiante->getapellido2();
            $direccion = $estudiante->getdireccion();
            $telefono = $estudiante->gettelefono();
            $correo = $estudiante->getcorreo();
            $estado = $estudiante->getestado();
            $stm->bind_param('sssssssi',
                $nombre1, $nombre2, $apellido1, $apellido2, $direccion, $telefono, $correo, $estado);

            $success = $stm->execute();
            $stm->close();
            if($success){
                return 'Se ha guardado los datos del estudiante correctamente.';
            }else{
                throw new Exception('No se pudo guaradar los datos del estudiante');
            }
        }else{
            throw new Exception('Hubo un error en el servidor '.$stm->error);
        }
    }

    /**
     * @throws Exception
     */
    public function update($estudiante)
    {
        $stm = $this->conn->prepare(self::UPDATE);
        if($stm){
            $nombre1 = $estudiante->getnombre1();
            $nombre2 = $estudiante->getnombre2();
            $apellido1 = $estudiante->getapellido1();
            $apellido2 = $estudiante->getapellido2();
            $direccion = $estudiante->getdireccion();
            $telefono = $estudiante->gettelefono();
            $correo = $estudiante->getcorreo();
            $estado = $estudiante->getestado();
            $id = $estudiante->getId();
            $stm->bind_param('sssssssii',
                $nombre1, $nombre2, $apellido1, $apellido2, $direccion, $telefono, $correo, $estado, $id);

            $success = $stm->execute();
            $stm->close();
            if($success){
                return 'Se ha guardado los datos del estudiante correctamente.';
            }else{
                throw new Exception('No se pudo guardar los datos del estudiante');
            }
        }else{
            throw new Exception('Hubo un error en el servidor '.$stm->error);
        }
    }

    /**
     * @throws Exception
     */
    public function search($id)
    {
        $stmt = $this->conn->prepare(self::SEARCH);
        if($stmt){
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($row = $result->fetch_assoc()) {
                return new Estudiante(
                    $row['id'],
                    $row['nombre1'],
                    $row['nombre2'],
                    $row['apellido1'],
                    $row['apellido2'],
                    $row['direccion'],
                    $row['telefono'],
                    $row['correo'],
                    $row['estado']
                );
            } else {
                return null;
            }
        }else{
            throw new Exception('Hubo un error en el servidor');
        }
    }

    /**
     * @throws Exception
     */
    public function delete($id)
    {
        $stmt = $this->conn->prepare(self::DELETE);
        if($stmt){
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }else{
            throw new Exception('Hubo un error en el servidor');
        }
    }

    /**
     * @throws Exception
     */
    public function listStudents()
    {
        $list = Array();
        try {
            $stmt = $this->conn->prepare(self::SELECT);
            $stmt -> execute();
            $result = $stmt->get_result();

            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {
                    $estudiante = new Estudiante(
                        $row['id'],
                        $row['nombre1'],
                        $row['nombre2'],
                        $row['apellido1'],
                        $row['apellido2'],
                        $row['direccion'],
                        $row['telefono'],
                        $row['correo'],
                        $row['estado']
                    );
                    $list[] = $estudiante;
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            throw new Exception($e->getMessage());
        }
        return $list;
    }
}