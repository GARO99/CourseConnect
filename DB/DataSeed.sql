-- Roles por defecto
INSERT INTO role(role_name)
VALUES
    ('Administrador'),
    ('Profesor'),
    ('Estudiante');

-- Admin por defecto
INSERT INTO users (
    role_id,
    first_name,
    last_name,
    email,
    password
)
VALUES (
    1,
    'Gustavo',
    'Romero', 
    'gustavoromero.ao@academia.umb.edu.co', 
    '0cf4917916c793f78bba462b5ca8b2450afc1a97caf0df6ef7f49e18a0869876'
);

-- 1. Insertar edificios
INSERT INTO building (building_name) VALUES
('Building A'),
('Building B'),
('Building C');

-- 2. Insertar aulas (3 por edificio)
INSERT INTO classroom (building_id, classroom_number) VALUES
(1, 101), (1, 102), (1, 103), -- Building A
(2, 201), (2, 202), (2, 203), -- Building B
(3, 301), (3, 302), (3, 303); -- Building C

-- 3. Insertar facultades
INSERT INTO faculty (faculty_name) VALUES
('Faculty of Engineering'),
('Faculty of Health');

-- 4. Insertar unidades académicas (2 por facultad)
INSERT INTO unity (faculty_id, unity_name) VALUES
(1, 'Software Engineering and ICT Unit'), (1, 'Electronic and Mechatronic Engineering Unit'), -- Faculty of Engineering
(2, 'Unit of Human Occupation'), (2, 'Speech Therapy Unit'); -- Faculty of Economic and Administrative Sciences

-- 5. Insertar periodos académicos
INSERT INTO academic_period (description, start_date, end_date) VALUES
('2024 Spring Semester', '2024-01-15', '2024-05-30'),
('2024 Fall Semester', '2024-08-15', '2024-12-20');

-- 6. Insertar programas académicos (1 por unidad)
INSERT INTO academic_program (unity_id, academic_program_name) VALUES
(1, 'software engineering'),
(2, 'mechatronic engineering'),
(3, 'occupational therapy'),
(4, 'speech therapy');

-- 8. Insertar usuarios con rol de estudiante
INSERT INTO users (role_id, first_name, last_name, email, password) VALUES
(3, 'Alice', 'Smith', 'alice@academia.umb.edu.co', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(3, 'Bob', 'Brown', 'bob@academia.umb.edu.co', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(3, 'Charlie', 'Johnson', 'charlie@academia.umb.edu.co', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(3, 'Diana', 'Taylor', 'diana@academia.umb.edu.co', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f');

-- 9. Insertar estudiantes (1 por usuario creado)
INSERT INTO studious (id, user_id, academic_program_id) VALUES
('1000000000', 2, 1), -- Alice in Biology Program
('1000000001', 3, 2), -- Bob in Chemistry Program
('1000000002', 4, 3), -- Charlie in History Program
('1000000003', 5, 4); -- Diana in Literature Program
