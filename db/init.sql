CREATE TABLE projects (
    id INTEGER NOT NULL UNIQUE,
    title TEXT NOT NULL,
    company TEXT NOT NULL,
    time TEXT,
    cover_image TEXT NOT NULL,
    second_image TEXT,
    description TEXT,
    extra_content TEXT,
    PRIMARY KEY(id AUTOINCREMENT)

)

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

)

CREATE TABLE posts (
 	id INTEGER NOT NULL UNIQUE,
 	name TEXT NOT NULL,
    time INTEGER,
    difficulty INTEGER NOT NULL,
    ingredients TEXT,
    social_media TEXT,
    file_name TEXT NOT NULL,
    file_ext TEXT NOT NULL,
    source TEXT,

 );
