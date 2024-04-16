CREATE TABLE projects (
    id INTEGER NOT NULL UNIQUE,
    title TEXT NOT NULL,
    company TEXT,
    time TEXT,
    cover_image TEXT NOT NULL,
    second_image TEXT,
    description TEXT,
    extra_content TEXT,
    PRIMARY KEY(id AUTOINCREMENT)

);

-- Image source: https://www.istockphoto.com/photos/crochet --

INSERT INTO
projects (title, company, time, cover_image, description)
VALUES
('Crochet Machine Learning Model', 'Independant Project', 'Spring 2024', 'crochet.jpeg', 'Coming soon...');

INSERT INTO
projects (title, company, time, cover_image, description)
VALUES
('Turkey Earthquake Project', 'Independant Project', 'Summer 2023', 'earthquake.jpeg', 'example description');










CREATE TABLE experiences (
    id INTEGER NOT NULL UNIQUE,
    title TEXT NOT NULL,
    company TEXT NOT NULL,
    time TEXT,
    cover_image TEXT NOT NULL,
    second_image TEXT,
    description TEXT,
    extra_content TEXT,
    PRIMARY KEY(id AUTOINCREMENT)

);

INSERT INTO
experiences (title, company, time, cover_image, second_image, description)
VALUES
('Business Analyst Intern', 'Cox Automotive', 'Summer 2023', 'cox_logo.png', 'cox_pres.jpeg','example description');

INSERT INTO
experiences (title, company, time, cover_image, second_image, description)
VALUES
('Technology Correspondant RA', 'Health Behaviors Lab', 'Fall 2022 - Spring 2024', 'hbl_logo.png', 'hbl_lab_pic.jpeg',' description');

INSERT INTO
experiences (title, company, time, cover_image, description)
VALUES
('Computer Science RA', 'Dr. Chris Anderson & Level60 Consulting', 'Summer 2022', 'level60_logo.png','description');

INSERT INTO
experiences (title, company, time, cover_image, description)
VALUES
('Data Analytics Research Intern', 'MedStar', 'Summer 2021', 'medstar_logo.png', 'description');
