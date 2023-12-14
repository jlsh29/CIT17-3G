CREATE database Banaria;

CREATE TABLE Student (
StudentID int NOT NULL,
FirstName varchar(255),
LastName varchar(255),
DateOfBirth varchar(50),
Email varchar(255),
Phone int,
PRIMARY KEY (studentID)
);


CREATE TABLE Enrollment (
EnrollmentID int NOT NULL,
studentID int,
CourseID int,
EnrollmentDate varchar(50),
Grade int,
FOREIGN KEY (studentID) references student(StudentID),
FOREIGN KEY (CourseID) references Course(CourseID),
PRIMARY KEY (EnrollmentID)
);
insert into Enrollment (EnrollmentID, StudentID, CourseID, EnrollmentDate, Grade)
value (10, 10, 17, "09/11/24", 97);

CREATE TABLE Course(
CourseID int NOT NULL,
CourseName varchar(255),
Credits varchar(255),
PRIMARY KEY (CourseID)
);


CREATE TABLE Instructor (
InstructorID int NOT NULL,
FirstName varchar(255),
LastName varchar(255),
Email varchar(255),
Phone int,
PRIMARY KEY (InstructorID)
);