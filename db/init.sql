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

INSERT INTO
projects (title, company, time, cover_image, description)
VALUES
('Turkey Earthquake Project', 'Independant Project', 'Summer 2023', 'cox_logo.png', 'example description');

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
