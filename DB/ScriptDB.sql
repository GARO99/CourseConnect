CREATE TABLE Faculty (
    FacultyId BIGSERIAL NOT NULL,
    FacultyName VARCHAR(60) NOT NULL,
    PRIMARY KEY (FacultyId)
);

CREATE TABLE Unity (
    UnityId BIGSERIAL NOT NULL,
    FacultyId BIGSERIAL NOT NULL,
    UnityName VARCHAR(60) NOT NULL,
    PRIMARY KEY (UnityId),
    FOREIGN KEY (FacultyId) REFERENCES Faculty(FacultyId)
);

CREATE TABLE AcademicPeriod (
    AcademicPeriodId SERIAL NOT NULL,
    Description VARCHAR(255) NOT NULL,
    StartDate DATE NOT NULL,
    EndDate DATE NOT NULL,
    PRIMARY KEY (AcademicPeriodId)
);

CREATE TABLE AcademicProgram (
    AcademicProgramId BIGSERIAL NOT NULL,
    UnityId BIGSERIAL NOT NULL,
    AcademicProgramName VARCHAR(100) NOT NULL,
    PRIMARY KEY (AcademicProgramId),
    FOREIGN KEY (UnityId) REFERENCES Unity(UnityId)
);

CREATE TABLE Role (
    RoleId BIGSERIAL NOT NULL,
    RoleName VARCHAR(20) NOT NULL,
    PRIMARY KEY (RoleId)
);

CREATE TABLE Users (
    UserId BIGSERIAL NOT NULL,
    RoleId BIGSERIAL NOT NULL,
    FirstName VARCHAR(60) NOT NULL,
    LastName VARCHAR(60) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Password VARCHAR(64) NOT NULL,
    PRIMARY KEY (UserId),
    FOREIGN KEY (RoleId) REFERENCES Role(RoleId)
);

CREATE TABLE Signature (
    SignatureId BIGSERIAL NOT NULL,
    UnityId BIGSERIAL NOT NULL,
    SignatureName VARCHAR(60) NOT NULL,
    PRIMARY KEY (SignatureId),
    FOREIGN KEY (UnityId) REFERENCES Unity(UnityId)
);

CREATE TABLE Instructor (
    InstructorId VARCHAR(15) NOT NULL,
    UserId BIGSERIAL NOT NULL,
    SignatureId BIGSERIAL NOT NULL,
    PRIMARY KEY (InstructorId),
    FOREIGN KEY (UserId) REFERENCES Users(UserId),
    FOREIGN KEY (SignatureId) REFERENCES Signature(SignatureId)
);

CREATE TABLE SignatureGroup (
    SignatureGroupId BIGSERIAL NOT NULL,
    AcademicPeriodId BIGSERIAL NOT NULL,
    InstructorId VARCHAR(15) NOT NULL,
    SignatureId BIGSERIAL NOT NULL,
    AvailablePlaces INT NOT NULL,
    GroupName VARCHAR(20) NOT NULL,
    PRIMARY KEY (SignatureGroupId),
    FOREIGN KEY (AcademicPeriodId) REFERENCES AcademicPeriod(AcademicPeriodId),
    FOREIGN KEY (InstructorId) REFERENCES Instructor(InstructorId),
    FOREIGN KEY (SignatureId) REFERENCES Signature(SignatureId)
);

CREATE TABLE SignatureProgram (
    SignatureProgramId BIGSERIAL NOT NULL,
    AcademicProgramId BIGSERIAL NOT NULL,
    SignatureId BIGSERIAL NOT NULL,
    PRIMARY KEY (SignatureProgramId),
    FOREIGN KEY (AcademicProgramId) REFERENCES AcademicProgram(AcademicProgramId),
    FOREIGN KEY (SignatureId) REFERENCES Signature(SignatureId)
);

CREATE TABLE Building (
    BuildingId BIGSERIAL NOT NULL,
    BuildingName VARCHAR(60) NOT NULL,
    PRIMARY KEY (BuildingId)
);

CREATE TABLE Classroom (
    ClassroomId BIGSERIAL NOT NULL,
    BuildingId BIGSERIAL NOT NULL,
    ClassroomNumber INT NOT NULL,
    PRIMARY KEY (ClassroomId),
    FOREIGN KEY (BuildingId) REFERENCES Building(BuildingId)
);



CREATE TABLE SignatureGroupSchedule (
    SignatureGroupScheduleId BIGSERIAL NOT NULL,
    SignatureGroupId BIGSERIAL NOT NULL,
    ClassroomId BIGSERIAL,
    StartHour TIME NOT NULL,
    EndHour TIME NOT NULL,
    ClassDay INT CHECK (ClassDay >= 1 AND ClassDay <= 7) NOT NULL,
    PRIMARY KEY (SignatureGroupScheduleId),
    FOREIGN KEY (SignatureGroupId) REFERENCES SignatureGroup(SignatureGroupId),
    FOREIGN KEY (ClassroomId) REFERENCES Classroom(ClassroomId)
);

CREATE TABLE Studious (
    StudiousId VARCHAR(15) NOT NULL,
    UserId BIGSERIAL NOT NULL,
    AcademicProgramId BIGSERIAL NOT NULL,
    PRIMARY KEY (StudiousId),
    FOREIGN KEY (UserId) REFERENCES Users(UserId),
    FOREIGN KEY (AcademicProgramId) REFERENCES AcademicProgram(AcademicProgramId)
);

CREATE TABLE SignatureInscribed (
    SignatureGroupAttendanceId BIGSERIAL NOT NULL,
    StudiousId VARCHAR(15) NOT NULL,
    SignatureGroupId BIGSERIAL NOT NULL,
    PRIMARY KEY (SignatureGroupAttendanceId, StudiousId, SignatureGroupId),
    FOREIGN KEY (StudiousId) REFERENCES Studious(StudiousId),
    FOREIGN KEY (SignatureGroupId) REFERENCES SignatureGroup(SignatureGroupId)
);