CREATE DATABASE baseAPCR;
USE baseAPCR;

-- -----------------------------------------------------
-- Table tb_administrador
-- -----------------------------------------------------
CREATE TABLE tb_administrador (
    id_admin VARCHAR(45) NOT NULL, 
    nombres_admin VARCHAR(45) NOT NULL, 
    clave VARCHAR(45) NOT NULL,
    PRIMARY KEY (id_admin)
);

-- -----------------------------------------------------
-- Table tb_residente
-- -----------------------------------------------------
CREATE TABLE tb_residente (
    id_residente INT AUTO_INCREMENT NOT NULL,
    identificacion VARCHAR(45) NOT NULL, 
    nombres_usuario VARCHAR(45) NOT NULL,
    correo VARCHAR(45) NOT NULL, 
    torre VARCHAR(45) NOT NULL, 
    apartamento VARCHAR(45) NOT NULL, 
    celular VARCHAR(45) NOT NULL, 
    clave VARCHAR(455) NOT NULL,
    PRIMARY KEY (id_residente)
);
SELECT * FROM tb_residente;


-- -----------------------------------------------------
-- Table tb_admin_porteria
-- -----------------------------------------------------
CREATE TABLE tb_admin_porteria (
    id_admin_porteria VARCHAR(45) NOT NULL, 
    id_admin VARCHAR(45) NOT NULL, 
    nombres_porteria VARCHAR(45) NOT NULL,
    identificacion VARCHAR(45) NOT NULL, 
    clave VARCHAR(455) NOT NULL,
    PRIMARY KEY (id_admin_porteria),
    FOREIGN KEY (id_admin) REFERENCES tb_administrador(id_admin)
);

-- -----------------------------------------------------
-- Table tb_prestamo_zona_comun
-- -----------------------------------------------------
CREATE TABLE tb_prestamo_zona_comun (
    id_prestamo VARCHAR(45) NOT NULL, 
    id_zona_comun VARCHAR(45) NOT NULL, 
    nombre_zona_comun VARCHAR(45) NOT NULL,
    id_admin VARCHAR(45) NOT NULL, 
    id_residente INT NOT NULL, 
    id_admin_porteria VARCHAR(45) NOT NULL, 
    fecha_uso DATE NOT NULL,
    hora_uso VARCHAR(45) NOT NULL, 
    fecha_solicitud DATE NOT NULL, 
    prestamo_zona_comuncol VARCHAR(45) NOT NULL,
    PRIMARY KEY (id_prestamo),
    FOREIGN KEY (id_admin) REFERENCES tb_administrador(id_admin),
    FOREIGN KEY (id_residente) REFERENCES tb_residente(id_residente),
    FOREIGN KEY (id_admin_porteria) REFERENCES tb_admin_porteria(id_admin_porteria)
);

-- -----------------------------------------------------
-- Table tb_estado
-- -----------------------------------------------------
CREATE TABLE tb_estado (
    id_estado VARCHAR(45) NOT NULL,
    id_zona_comun VARCHAR(45) NOT NULL, 
    nombre_zona_comun VARCHAR(45) NOT NULL, 
    id_prestamo VARCHAR(45) NOT NULL,
    estado_solicitud VARCHAR(45) NOT NULL,
    PRIMARY KEY (id_estado),
    FOREIGN KEY (id_prestamo) REFERENCES tb_prestamo_zona_comun(id_prestamo)
);

-- -----------------------------------------------------
-- Table tb_parqueadero
-- -----------------------------------------------------
CREATE TABLE tb_parqueadero (
    id_parqueadero VARCHAR(45) NOT NULL,
    id_ubicacion VARCHAR(45) NOT NULL UNIQUE,
    identificacion VARCHAR(45) NOT NULL,
    tipo_vehiculo VARCHAR(45) NOT NULL,
    estado VARCHAR(45) NOT NULL,
    placa_vehiculo VARCHAR(45) NOT NULL,
    PRIMARY KEY (id_parqueadero)
);

SET @id_ubicacion := 0;
INSERT INTO tb_parqueadero (id_parqueadero, id_ubicacion)
SELECT LPAD(@id_ubicacion := @id_ubicacion + 1, 2, '0') AS id_parqueadero, LPAD(@id_ubicacion, 2, '0') AS id_ubicacion
FROM information_schema.columns
LIMIT 30;

-- -----------------------------------------------------
-- Table tb_comunal
-- -----------------------------------------------------
CREATE TABLE tb_comunal (
    id_comunal VARCHAR(45) NOT NULL,
    id_ubicacion VARCHAR(45) NOT NULL, 
    fecha_inicio VARCHAR(45) NOT NULL, 
    fecha_fin DATE NOT NULL, 
    estado VARCHAR(45),
    PRIMARY KEY (id_comunal),
    FOREIGN KEY (id_ubicacion) REFERENCES tb_parqueadero(id_ubicacion)
);

-- -----------------------------------------------------
-- Table tb_visitantes
-- -----------------------------------------------------
CREATE TABLE tb_visitantes (
    id_visitante VARCHAR(45) NOT NULL,
    id_ubicacion VARCHAR(45) NOT NULL, 
    fecha_solicitud DATE NOT NULL, 
    fecha_uso DATE NOT NULL, 
    hora_uso VARCHAR(45) NOT NULL,
    hora_entrega VARCHAR(45) NOT NULL, 
    estado VARCHAR(45),
    PRIMARY KEY (id_visitante),
    FOREIGN KEY (id_ubicacion) REFERENCES tb_parqueadero(id_ubicacion)
);

-- -----------------------------------------------------
-- Table tb_apartamentos
-- -----------------------------------------------------
CREATE TABLE tb_apartamentos (
    id_apartamento VARCHAR(45) NOT NULL,
    nombre_apartamento VARCHAR(45) NOT NULL,
    numero_apartamento VARCHAR(10) NOT NULL,
    PRIMARY KEY (id_apartamento)
);

INSERT INTO tb_apartamentos (id_apartamento, nombre_apartamento, numero_apartamento) VALUES 
('1', 'Apartamento 101', '101'), 
('2', 'Apartamento 102', '102'), 
('3', 'Apartamento 103', '103'), 
('4', 'Apartamento 104', '104'), 
('5', 'Apartamento 105', '105'),
('6', 'Apartamento 201', '201'), 
('7', 'Apartamento 202', '202'), 
('8', 'Apartamento 203', '203'), 
('9', 'Apartamento 204', '204'), 
('10', 'Apartamento 205', '205'),
('11', 'Apartamento 301', '301'), 
('12', 'Apartamento 302', '302'), 
('13', 'Apartamento 303', '303'), 
('14', 'Apartamento 304', '304'), 
('15', 'Apartamento 305', '305'),
('16', 'Apartamento 401', '401'), 
('17', 'Apartamento 402', '402'), 
('18', 'Apartamento 403', '403'), 
('19', 'Apartamento 404', '404'), 
('20', 'Apartamento 405', '405'),
('21', 'Apartamento 501', '501'), 
('22', 'Apartamento 502', '502'), 
('23', 'Apartamento 503', '503'), 
('24', 'Apartamento 504', '504'), 
('25', 'Apartamento 505', '505');

-- -----------------------------------------------------
-- Table tb_torres
-- -----------------------------------------------------
CREATE TABLE tb_torres (
    id_torre VARCHAR(45) NOT NULL,
    nombre_torre VARCHAR(45) NOT NULL,
    numero_torre INT NOT NULL,
    PRIMARY KEY (id_torre)
);

INSERT INTO tb_torres (id_torre, nombre_torre, numero_torre) VALUES 
('1', 'Torre 1', 1), 
('2', 'Torre 2', 2), 
('3', 'Torre 3', 3), 
('4', 'Torre 4', 4), 
('5', 'Torre 5', 5);
