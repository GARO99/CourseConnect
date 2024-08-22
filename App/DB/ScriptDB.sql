CREATE TABLE Faculty (
    FacultyId INT NOT NULL,
    FacultyName VARCHAR(255) NOT NULL,
    PRIMARY KEY (FacultyId)
);

CREATE TABLE Unity (
    UnityId INT NOT NULL,
    FacultyId INT NOT NULL,
    UnityName VARCHAR(255) NOT NULL,
    PRIMARY KEY (UnityId),
    FOREIGN KEY (FacultyId) REFERENCES Faculty(FacultyId)
);

CREATE TABLE AcademicPeriod (
    AcademicPeriodId INT NOT NULL,
    Description VARCHAR(255) NOT NULL,
    StartDate DATE NOT NULL,
    EndDate DATE NOT NULL,
    PRIMARY KEY (AcademicPeriodId)
);

CREATE TABLE AcademicProgram (
    AcademicProgramId INT NOT NULL,
    UnityId INT NOT NULL,
    AcademicProgramName VARCHAR(255) NOT NULL,
    PRIMARY KEY (AcademicProgramId),
    FOREIGN KEY (UnityId) REFERENCES Unity(UnityId)
);

CREATE TABLE Role (
    RoleId INT NOT NULL,
    RoleName VARCHAR(255) NOT NULL,
    PRIMARY KEY (RoleId)
);

CREATE TABLE Users (
    UserId INT NOT NULL,
    RoleId INT NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    UserName VARCHAR(255) NOT NULL,
    UserPassword VARCHAR(255) NOT NULL,
    PRIMARY KEY (UserId),
    FOREIGN KEY (RoleId) REFERENCES Role(RoleId)
);

CREATE TABLE Signature (
    SignatureId INT NOT NULL,
    UnityId INT NOT NULL,
    SignatureName VARCHAR(255) NOT NULL,
    PRIMARY KEY (SignatureId),
    FOREIGN KEY (UnityId) REFERENCES Unity(UnityId)
);

CREATE TABLE Instructor (
    InstructorId INT NOT NULL,
    UserId INT NOT NULL,
    SignatureId INT NOT NULL,
    PRIMARY KEY (InstructorId),
    FOREIGN KEY (UserId) REFERENCES Users(UserId),
    FOREIGN KEY (SignatureId) REFERENCES Signature(SignatureId)
);

CREATE TABLE SignatureGroup (
    SignatureGroupId INT NOT NULL,
    AcademicPeriodId INT NOT NULL,
    InstructorId INT NOT NULL,
    SignatureId INT NOT NULL,
    AvailablePlaces INT NOT NULL,
    GroupName VARCHAR(255) NOT NULL,
    PRIMARY KEY (SignatureGroupId),
    FOREIGN KEY (AcademicPeriodId) REFERENCES AcademicPeriod(AcademicPeriodId),
    FOREIGN KEY (InstructorId) REFERENCES Instructor(InstructorId),
    FOREIGN KEY (SignatureId) REFERENCES Signature(SignatureId)
);

CREATE TABLE SignatureProgram (
    SignatureProgramId INT NOT NULL,
    AcademicProgramId INT NOT NULL,
    SignatureId INT NOT NULL,
    PRIMARY KEY (SignatureProgramId),
    FOREIGN KEY (AcademicProgramId) REFERENCES AcademicProgram(AcademicProgramId),
    FOREIGN KEY (SignatureId) REFERENCES Signature(SignatureId)
);

CREATE TABLE Building (
    BuildingId INT NOT NULL,
    BuildingNumber INT NOT NULL,
    PRIMARY KEY (BuildingId)
);

CREATE TABLE Classroom (
    ClassroomId INT NOT NULL,
    BuildingId INT NOT NULL,
    ClassroomNumber INT NOT NULL,
    PRIMARY KEY (ClassroomId),
    FOREIGN KEY (BuildingId) REFERENCES Building(BuildingId)
);



CREATE TABLE SignatureGroupSchedule (
    SignatureGroupScheduleId INT NOT NULL,
    SignatureGroupId INT NOT NULL,
    ClassroomId INT,
    StartHour VARCHAR(255) NOT NULL,
    EndHour VARCHAR(255) NOT NULL,
    ClassDay VARCHAR(255) NOT NULL,
    PRIMARY KEY (SignatureGroupScheduleId),
    FOREIGN KEY (SignatureGroupId) REFERENCES SignatureGroup(SignatureGroupId),
    FOREIGN KEY (ClassroomId) REFERENCES Classroom(ClassroomId)
);

CREATE TABLE Studious (
    StudiousId INT NOT NULL,
    UserId INT NOT NULL,
    AcademicProgramId INT NOT NULL,
    PRIMARY KEY (StudiousId),
    FOREIGN KEY (UserId) REFERENCES Users(UserId),
    FOREIGN KEY (AcademicProgramId) REFERENCES AcademicProgram(AcademicProgramId)
);

CREATE TABLE SignatureInscribed (
    SignatureGroupAttendanceId INT NOT NULL,
    StudiousId INT NOT NULL,
    SignatureGroupId INT NOT NULL,
    PRIMARY KEY (SignatureGroupAttendanceId, StudiousId, SignatureGroupId),
    FOREIGN KEY (StudiousId) REFERENCES Studious(StudiousId),
    FOREIGN KEY (SignatureGroupId) REFERENCES SignatureGroup(SignatureGroupId)
);