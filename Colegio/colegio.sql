DROP SCHEMA IF EXISTS colegio;
CREATE SCHEMA colegio;
USE colegio;

CREATE TABLE estudiante(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre1 VARCHAR(45),
    nombre2 VARCHAR(45),
    apellido1 VARCHAR(45),
    apellido2 VARCHAR(45),
    direccion VARCHAR(100),
    telefono VARCHAR(8),
    correo VARCHAR(100),
    estado BOOLEAN
);

INSERT INTO estudiante (nombre1, nombre2, apellido1, apellido2, direccion, telefono, correo, estado) VALUES
('Juan', 'Carlos', 'Pérez', 'González', 'Calle 10 #45-32, Bogotá', '32145678', 'juan.carlos@gmail.com', TRUE),
('María', 'Fernanda', 'Gómez', 'López', 'Av. Siempre Viva 742, Lima', '98765432', 'maria.fernanda@hotmail.com', TRUE),
('Luis', 'Fernando', 'Martínez', 'Rodríguez', 'Calle Falsa 123, Quito', '34567890', 'luis.martinez@yahoo.com', FALSE),
('Ana', 'Isabel', 'Ramírez', 'Hernández', 'Calle Principal #34, Medellín', '45678901', 'ana.isabel@gmail.com', TRUE),
('Pedro', 'Alonso', 'Sánchez', 'Morales', 'Av. Central 45, Caracas', '56789012', 'pedro.sanchez@hotmail.com', FALSE),
('Carla', 'Patricia', 'Vargas', 'Núñez', 'Calle Secundaria 78, Montevideo', '67890123', 'carla.vargas@gmail.com', TRUE),
('José', 'María', 'Rojas', 'Ramírez', 'Calle 89 #12-34, Asunción', '78901234', 'jose.rojas@yahoo.com', TRUE),
('Paula', 'Andrea', 'Rivera', 'Castro', 'Av. Libertad 100, Santiago', '89012345', 'paula.rivera@hotmail.com', FALSE),
('Miguel', 'Ángel', 'Ortiz', 'Torres', 'Calle Industrial #56, San José', '90123456', 'miguel.ortiz@gmail.com', TRUE),
('Laura', 'Sofía', 'Mendoza', 'Pérez', 'Av. Colón 12, Panamá', '12345678', 'laura.mendoza@yahoo.com', TRUE),
('Diego', 'Carvalho', 'Silva', 'García', 'Calle Los Olivos 3, Buenos Aires', '23456789', 'diego.silva@hotmail.com', FALSE),
('Isabel', 'Cristina', 'Guerrero', 'Jiménez', 'Av. Los Andes 67, Lima', '34567890', 'isabel.guerrero@gmail.com', TRUE),
('Francisco', 'Javier', 'Cruz', 'Mora', 'Calle La Paz 89, México D.F.', '45678901', 'francisco.cruz@yahoo.com', TRUE),
('Natalia', 'Beatriz', 'Hernández', 'López', 'Calle 4 Norte, Managua', '56789012', 'natalia.hernandez@gmail.com', FALSE),
('Andrés', 'Felipe', 'Romero', 'Martínez', 'Av. Independencia 25, Bogotá', '67890123', 'andres.romero@hotmail.com', TRUE);


