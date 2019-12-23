create table comment1 (
    id int (50) PRIMARY KEY AUTO_INCREMENT,
    name varchar(100),
    telephone varchar(100),
    comment text,
    time varchar(256),
    to_id varchar(256),
    allow varchar(256),
    notify varchar(256)
);

create table feedback (
    id int(50) PRIMARY KEY AUTO_INCREMENT,
    comment varchar(256),
    time varchar(256)
);
-- (The two below are important)

-- For the table to accept emoji's
-- NOTE:
ALTER TABLE comment1 CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_bin
ALTER TABLE feedback CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_bin

--For the database to accept empji's in total