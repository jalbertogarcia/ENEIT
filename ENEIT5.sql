
CREATE TABLE Documentacion (
                id_Documentacion INT AUTO_INCREMENT NOT NULL,
                Documentacion VARCHAR(100) NOT NULL,
                PRIMARY KEY (id_Documentacion)
);


CREATE TABLE Equipo (
                id_Equipo INT AUTO_INCREMENT NOT NULL,
                nombre VARCHAR(85) NOT NULL,
                PRIMARY KEY (id_Equipo)
);


CREATE TABLE EquipoDocumentacion (
                id_EquipoDocumentacion INT AUTO_INCREMENT NOT NULL,
                id_Equipo INT NOT NULL,
                id_Documentacion INT NOT NULL,
                PRIMARY KEY (id_EquipoDocumentacion, id_Equipo)
);


CREATE TABLE Criterios (
                id_Criterio INT AUTO_INCREMENT NOT NULL,
                seccion VARCHAR(80) NOT NULL,
                criterio VARCHAR(50) NOT NULL,
                puntuacion DOUBLE PRECISION NOT NULL,
                PRIMARY KEY (id_Criterio)
);


CREATE TABLE Categoria (
                id_Categoria INT AUTO_INCREMENT NOT NULL,
                categoria VARCHAR(50) NOT NULL,
                PRIMARY KEY (id_Categoria)
);


CREATE TABLE Hoja (
                id_Hoja INT AUTO_INCREMENT NOT NULL,
                id_Categoria INT NOT NULL,
                PRIMARY KEY (id_Hoja)
);


CREATE TABLE CriteriosHoja (
                id_CriterioHoja INT AUTO_INCREMENT NOT NULL,
                id_Criterio INT NOT NULL,
                id_Hoja INT NOT NULL,
                PRIMARY KEY (id_CriterioHoja)
);


CREATE TABLE Asesor (
                id_Asesor INT AUTO_INCREMENT NOT NULL,
                NombreAs VARCHAR(50) NOT NULL,
                ApellidoPaternoAs VARCHAR(50) NOT NULL,
                ApellidoMaternoAs VARCHAR(50) NOT NULL,
                PRIMARY KEY (id_Asesor)
);


CREATE TABLE Integrantes (
                id_Integrante INT AUTO_INCREMENT NOT NULL,
                nombreInt VARCHAR(50) NOT NULL,
                ApellidoPaternoInt VARCHAR(50) NOT NULL,
                ApellidoMaternoInt VARCHAR(50) NOT NULL,
                PRIMARY KEY (id_Integrante)
);


CREATE TABLE Proyecto (
                id_Proyecto INT AUTO_INCREMENT NOT NULL,
                nombrePro VARCHAR(100) NOT NULL,
                fichaTecnica VARCHAR(50) NOT NULL,
                categoria VARCHAR(30) NOT NULL,
                id_Equipo INT NOT NULL,
                PRIMARY KEY (id_Proyecto)
);


CREATE TABLE AsesorProyecto (
                id_asesorProyecto INT AUTO_INCREMENT NOT NULL,
                id_Asesor INT NOT NULL,
                id_Proyecto INT NOT NULL,
                PRIMARY KEY (id_asesorProyecto)
);


CREATE TABLE IntegrantesProyecto (
                id_integrantesProyecto INT AUTO_INCREMENT NOT NULL,
                id_Integrante INT NOT NULL,
                id_Proyecto INT NOT NULL,
                PRIMARY KEY (id_integrantesProyecto)
);


CREATE TABLE Usuario (
                id_Usuario INT AUTO_INCREMENT NOT NULL,
                nombre VARCHAR(50) NOT NULL,
                ApellidoP VARCHAR(50) NOT NULL,
                ApellidoM VARCHAR(50) NOT NULL,
                correo VARCHAR(85) NOT NULL,
                numTelefonico VARCHAR(10),
                especialidad VARCHAR(50),
                titulo VARCHAR(50),
                institucion VARCHAR(100) NOT NULL,
                tipo VARCHAR(50) NOT NULL,
                password1 VARCHAR(13) NOT NULL,
                PRIMARY KEY (id_Usuario)
);


CREATE TABLE Evaluacion (
                id_Evaluacion INT AUTO_INCREMENT NOT NULL,
                calificacion DOUBLE PRECISION NOT NULL,
                id_Usuario INT NOT NULL,
                id_Proyecto INT NOT NULL,
                id_Hoja INT NOT NULL,
                PRIMARY KEY (id_Evaluacion)
);


CREATE TABLE ProyectoEvaluador (
                id_proyectoEvaluador INT AUTO_INCREMENT NOT NULL,
                id_Proyecto INT NOT NULL,
                id_Usuario INT NOT NULL,
                PRIMARY KEY (id_proyectoEvaluador)
);


ALTER TABLE EquipoDocumentacion ADD CONSTRAINT documentacion_equipodocumentacion_fk
FOREIGN KEY (id_Documentacion)
REFERENCES Documentacion (id_Documentacion)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE EquipoDocumentacion ADD CONSTRAINT equipo_equipodocumentacion_fk
FOREIGN KEY (id_Equipo)
REFERENCES Equipo (id_Equipo)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Proyecto ADD CONSTRAINT equipo_proyecto_fk
FOREIGN KEY (id_Equipo)
REFERENCES Equipo (id_Equipo)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE CriteriosHoja ADD CONSTRAINT criterios_criterioshoja_fk
FOREIGN KEY (id_Criterio)
REFERENCES Criterios (id_Criterio)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Hoja ADD CONSTRAINT categoria_hoja_fk
FOREIGN KEY (id_Categoria)
REFERENCES Categoria (id_Categoria)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Evaluacion ADD CONSTRAINT hoja_evaluacion_fk
FOREIGN KEY (id_Hoja)
REFERENCES Hoja (id_Hoja)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE CriteriosHoja ADD CONSTRAINT hoja_criterioshoja_fk
FOREIGN KEY (id_Hoja)
REFERENCES Hoja (id_Hoja)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE AsesorProyecto ADD CONSTRAINT asesor_asesorproyecto_fk
FOREIGN KEY (id_Asesor)
REFERENCES Asesor (id_Asesor)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE IntegrantesProyecto ADD CONSTRAINT integrantes_integrantesproyecto_fk
FOREIGN KEY (id_Integrante)
REFERENCES Integrantes (id_Integrante)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE ProyectoEvaluador ADD CONSTRAINT proyecto_proyectoevaluador_fk
FOREIGN KEY (id_Proyecto)
REFERENCES Proyecto (id_Proyecto)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE IntegrantesProyecto ADD CONSTRAINT proyecto_integrantesproyecto_fk
FOREIGN KEY (id_Proyecto)
REFERENCES Proyecto (id_Proyecto)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE AsesorProyecto ADD CONSTRAINT proyecto_asesorproyecto_fk
FOREIGN KEY (id_Proyecto)
REFERENCES Proyecto (id_Proyecto)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Evaluacion ADD CONSTRAINT proyecto_evaluacion_fk
FOREIGN KEY (id_Proyecto)
REFERENCES Proyecto (id_Proyecto)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE ProyectoEvaluador ADD CONSTRAINT usuario_proyectoevaluador_fk
FOREIGN KEY (id_Usuario)
REFERENCES Usuario (id_Usuario)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Evaluacion ADD CONSTRAINT usuario_evaluacion_fk
FOREIGN KEY (id_Usuario)
REFERENCES Usuario (id_Usuario)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
