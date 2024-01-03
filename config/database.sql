CREATE DATABASE youevent_bref;
CREATE TABLE Eventment(
    id_event INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(225),
    location varchar(225),
    date TIME,
    description TEXT,
    image blob,
    video blob,
    category varchar(225)
);

CREATE TABLE role(
    id_role INT PRIMARY KEY AUTO_INCREMENT,
    role_type varchar(225)
);

CREATE TABLE blackList(
    id_blackList INT PRIMARY KEY AUTO_INCREMENT,
    email varchar(225)
);

CREATE TABLE users(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    fullName varchar(225),
    email varchar(225),
    phone varchar(225),
    password varchar(225),
    id_blackList INT,
    id_role INT,
    FOREIGN KEY (id_role) REFERENCES role (id_role),
    FOREIGN KEY (id_blackList) REFERENCES blackList (id_blackList)  
);

CREATE TABLE reservation(
    id_reservation INT PRIMARY KEY AUTO_INCREMENT,
    event_name varchar(225),
    reservationStart TIMESTAMP,
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES users (id_user)
);

CREATE TABLE typeTickets(
    id_typeTickets INT PRIMARY KEY AUTO_INCREMENT,
    ticket_type varchar(225),
    prix FLOAT,
    id_event INT,
    FOREIGN KEY (id_event) REFERENCES Eventment (id_event)
);

CREATE TABLE items(
    id_item INT PRIMARY KEY AUTO_INCREMENT,
    id_res INT,
    quantity int,
    id_ticket INT,
    FOREIGN KEY (id_res) REFERENCES reservation (id_reservation),
    FOREIGN KEY (id_ticket) REFERENCES typeTickets (id_typeTickets)
);




