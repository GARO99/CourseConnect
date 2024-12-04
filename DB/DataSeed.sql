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

-- 10. Insertar usuarios con rol de profesor
INSERT INTO users (role_id, first_name, last_name, email, password) VALUES
(2, 'Eve', 'Anderson', 'eve.anderson@docentes.umb.edu.co', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(2, 'Frank', 'Harris', 'frank.harris@docentes.umb.edu.co', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(2, 'Grace', 'Lee', 'grace.lee@docentes.umb.edu.co', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(2, 'Henry', 'Young', 'henry.young@docentes.umb.edu.co', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f');

-- 12. Insertar asignaturas
INSERT INTO signature (unity_id, signature_name) VALUES
(1, 'Introduction to Software Engineering'),
(1, 'Advanced Programming'),
(2, 'Human-Computer Interaction'),
(2, 'Digital Systems Design');

-- 11. Insertar registros en la tabla instructor
INSERT INTO instructor (id, user_id, signature_id) VALUES
('2000000000', 6, 1), -- Eve enseña la asignatura 1
('2000000001', 7, 2), -- Frank enseña la asignatura 2
('2000000002', 8, 3), -- Grace enseña la asignatura 3
('2000000003', 9, 4); -- Henry enseña la asignatura 4

-- 13. Insertar grupos de asignatura
INSERT INTO signature_group (academic_period_id, instructor_id, signature_id, available_places, group_name) VALUES
(1, '2000000000', 1, 30, 'Group A'), -- Grupo de Introduction to Software Engineering
(1, '2000000000', 1, 25, 'Group B'), -- Otro grupo de la misma asignatura
(1, '2000000001', 2, 20, 'Group C'), -- Grupo de Advanced Programming
(2, '2000000002', 3, 25, 'Group D'), -- Grupo de Human-Computer Interaction
(2, '2000000003', 4, 30, 'Group E'), -- Grupo de Digital Systems Design
(2, '2000000003', 4, 20, 'Group F'), -- Otro grupo de la misma asignatura
(2, '2000000003', 1, 20, 'Group G'), 
(2, '2000000003', 2, 30, 'Group H'), 
(2, '2000000003', 3, 20, 'Group I'), 
(2, '2000000003', 4, 30, 'Group J'), 
(2, '2000000003', 1, 20, 'Group K'), 
(2, '2000000003', 3, 35, 'Group L'), 
(2, '2000000003', 4, 30, 'Group M'); 

-- 14. Insertar horarios para los grupos de asignatura
INSERT INTO signature_group_schedule (signature_group_id, classroom_id, start_hour, end_hour, class_day) VALUES
-- Horarios para Group A
(1, 1, '08:00:00', '10:00:00', 1), -- Lunes
(1, 1, '08:00:00', '10:00:00', 3), -- Miércoles

-- Horarios para Group B
(2, 2, '10:00:00', '12:00:00', 2), -- Martes
(2, 2, '10:00:00', '12:00:00', 4), -- Jueves

-- Horarios para Group C
(3, 3, '14:00:00', '16:00:00', 1), -- Lunes
(3, 3, '14:00:00', '16:00:00', 3), -- Miércoles

-- Horarios para Group D
(4, 4, '16:00:00', '18:00:00', 2), -- Martes
(4, 4, '16:00:00', '18:00:00', 4), -- Jueves

-- Horarios para Group E
(5, 5, '09:00:00', '11:00:00', 5), -- Viernes
(5, 5, '09:00:00', '11:00:00', 6), -- Sábado

-- Horarios para Group F
(6, 6, '11:00:00', '13:00:00', 5), -- Viernes
(6, 6, '11:00:00', '13:00:00', 6); -- Sábado


-- 15. Inscribir estudiantes en grupos de asignatura
INSERT INTO signature_inscribed (studious_id, signature_group_id) VALUES
-- Estudiante Alice inscrito en Group A
('1000000000', 1), 
-- Estudiante Bob inscrito en Group B
('1000000001', 2), 
-- Estudiante Charlie inscrito en Group C
('1000000002', 3), 
-- Estudiante Diana inscrito en Group D
('1000000003', 4), 
-- Inscripciones adicionales para variar
('1000000000', 5), -- Alice también inscrita en Group E
('1000000001', 6), -- Bob también inscrito en Group F
('1000000002', 5), -- Charlie también inscrito en Group E
('1000000003', 6); -- Diana también inscrita en Group F
