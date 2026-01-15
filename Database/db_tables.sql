CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT ,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50)NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('condiadte' , 'recruiter')
);