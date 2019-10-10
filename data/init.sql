CREATE DATABASE aventador;

use aventador;

CREATE TABLE employees
(
    id INT(11)
    UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR
    (30) NOT NULL,
    lastname VARCHAR
    (30) NOT NULL,
    email VARCHAR
    (50) NOT NULL,
    position VARCHAR
    (30) NOT NULL,
    phone VARCHAR
    (30) NOT NULL,
    salary DECIMAL
    (12,2) NOT NULL,
    hiredate DATETIME NOT NULL,
    dateadded DATETIME NOT NULL
  );

    INSERT INTO employees
        (firstname, lastname, email, position, phone, salary, hiredate, dateadded)
    values
        (
            'Lewis', 'Hamilton', 'lham@mercedes.com', 'Yard', '290-578-9024', '1500978', '2012-04-28 00:00:00', '2019-09-27 00:00:00'
    ),
        (
            'Sebastian', 'Vettel', 'svet@ferrari.com', 'Detailing', '417-904-7538', '989762', '2014-02-08 00:00:00', '2019-09-27 00:00:00'
    ),
        (
            'Max', 'Verstappen', 'mverst@redbull.com', 'Detailing', '798-903-3891', '782089', '2013-01-18 00:00:00', '2019-09-27 00:00:00'
    ),
        (
            'Carlos', 'Sainz', 'csainz@mclaren.com', 'Administrator', '190-389-7164', '892308', '2014-10-31 00:00:00', '2019-09-27 00:00:00'
    ),
        (
            'Nico', 'Hulkenberg', 'nhulk@renault.com', 'Manager', '452-671-1789', '989762', '2011-12-25 00:00:00', '2019-09-27 00:00:00'
    ),
        (
            'Daniil', 'Kvyat', 'dkvyat@tororosso.com', 'Supervisor', '998-9052-6783', '1290671', '2018-07-07 00:00:00', '2019-09-27 00:00:00'
    ),
        (
            'Sergio', 'Perez', 'sperez@racing.com', 'Asst Manager', '424-675-8730', '2458904', '2012-08-14 00:00:00', '2019-09-27 00:00:00'
    );