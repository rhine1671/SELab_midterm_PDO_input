CREATE TABLE pilot_records (
    pilot_id int auto_increment primary key,
    first_name varchar(50),
    last_name varchar(50),
    gender varchar(50),
    nationality varchar(50),
    date_of_birth date,
    contact_number varchar(20),
    license_number varchar(50),
    flight_hours int,
    experience_years int,
    date_added timestamp default current_timestamp
);
