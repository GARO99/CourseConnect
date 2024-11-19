CREATE TABLE faculty (
    id BIGSERIAL NOT NULL,
    faculty_name VARCHAR(60) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE unity (
    id BIGSERIAL NOT NULL,
    faculty_id BIGSERIAL NOT NULL,
    unity_name VARCHAR(60) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (faculty_id) REFERENCES faculty(id)
);

CREATE TABLE academic_period (
    id SERIAL NOT NULL,
    description VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE academic_program (
    id BIGSERIAL NOT NULL,
    unity_id BIGSERIAL NOT NULL,
    academic_program_name VARCHAR(100) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (unity_id) REFERENCES unity(id)
);

CREATE TABLE role (
    id BIGSERIAL NOT NULL,
    role_name VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE users (
    id BIGSERIAL NOT NULL,
    role_id BIGSERIAL NOT NULL,
    first_name VARCHAR(60) NOT NULL,
    last_name VARCHAR(60) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(64) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (role_id) REFERENCES role(id)
);

CREATE TABLE signature (
    id BIGSERIAL NOT NULL,
    unity_id BIGSERIAL NOT NULL,
    signature_name VARCHAR(60) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (unity_id) REFERENCES unity(id)
);

CREATE TABLE instructor (
    id VARCHAR(15) NOT NULL,
    user_id BIGSERIAL NOT NULL,
    signature_id BIGSERIAL NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (signature_id) REFERENCES signature(id)
);

CREATE TABLE signature_group (
    id BIGSERIAL NOT NULL,
    academic_period_id BIGSERIAL NOT NULL,
    instructor_id VARCHAR(15) NOT NULL,
    signature_id BIGSERIAL NOT NULL,
    available_places INT NOT NULL,
    group_name VARCHAR(20) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (academic_period_id) REFERENCES academic_period(id),
    FOREIGN KEY (instructor_id) REFERENCES instructor(id),
    FOREIGN KEY (signature_id) REFERENCES signature(id)
);

CREATE TABLE signature_program (
    id BIGSERIAL NOT NULL,
    academic_program_id BIGSERIAL NOT NULL,
    signature_id BIGSERIAL NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (academic_program_id) REFERENCES academic_program(id),
    FOREIGN KEY (signature_id) REFERENCES signature(id)
);

CREATE TABLE building (
    id BIGSERIAL NOT NULL,
    building_name VARCHAR(60) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE classroom (
    id BIGSERIAL NOT NULL,
    building_id BIGSERIAL NOT NULL,
    classroom_number INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (building_id) REFERENCES building(id)
);

CREATE TABLE signature_group_schedule (
    id BIGSERIAL NOT NULL,
    signature_group_id BIGSERIAL NOT NULL,
    classroom_id BIGSERIAL,
    start_hour TIME NOT NULL,
    end_hour TIME NOT NULL,
    class_day INT CHECK (class_day >= 1 AND class_day <= 7) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (signature_group_id) REFERENCES signature_group(id),
    FOREIGN KEY (classroom_id) REFERENCES classroom(id)
);

CREATE TABLE studious (
    id VARCHAR(15) NOT NULL,
    user_id BIGSERIAL NOT NULL,
    academic_program_id BIGSERIAL NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (academic_program_id) REFERENCES academic_program(id)
);

CREATE TABLE signature_inscribed (
    id BIGSERIAL NOT NULL,
    studious_id VARCHAR(15) NOT NULL,
    signature_group_id BIGSERIAL NOT NULL,
    PRIMARY KEY (id, studious_id, signature_group_id),
    FOREIGN KEY (studious_id) REFERENCES studious(id),
    FOREIGN KEY (signature_group_id) REFERENCES signature_group(id)
);