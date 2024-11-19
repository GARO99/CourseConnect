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