CREATE database StudentRecord;

CREATE TABLE Student (
StudentID int NOT NULL,
FirstName varchar(255),
LastName varchar(255),
DateOfBirth varchar(50),
Email varchar(255),
Phone int,
PRIMARY KEY (studentID)
);
insert into Student (StudentID, FirsttName, LastName, DateOfBirth, Email, Phone)
value (10, "Jel", "Banaria", "09/29/00", "jelbanaria@gmail.com", 09563468654),
value (11, "Renz", "Desiderio", "06/09/00", "renzlouisd@gmail.com", 09279277234);

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