<?php
require_once 'includes/connect.php';

mysqli_query($database, 'SET NAMES "utf8"');

$query_sql = 'CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(50),
    surname VARCHAR(100),
    bio TEXT,
    email VARCHAR(100),
    password VARCHAR(255),
    role ENUM("user", "admin") DEFAULT "user",
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);';

$create_users_table = mysqli_query($database, $query_sql);

$query_insert_user1 = 'INSERT INTO users (name, surname, bio, email, password, role)
VALUES ("Usuario", "Prueba 1", "Usuario de prueba número 1 - Admin", "usuario@prueba.com", "'.sha1("123456").'", "admin");';
mysqli_query($database, $query_insert_user1);

$query_insert_user2 = 'INSERT INTO users (name, surname, bio, email, password, role)
VALUES ("Usuario", "Prueba 2", "Usuario de prueba número 2 - User", "usuario@prueba.com", "'.sha1("123456").'", "user");';
mysqli_query($database, $query_insert_user2);

$query_insert_user3 = 'INSERT INTO users (name, surname, bio, email, password, role)
VALUES ("Usuario", "Prueba 3", "Usuario de prueba número 3 - User", "usuario@prueba.com", "'.sha1("133456").'", "user");';
mysqli_query($database, $query_insert_user3);

$query_insert_user4 = 'INSERT INTO users (name, surname, bio, email, password, role)
VALUES ("Usuario", "Prueba 4", "Usuario de prueba número 4 - User", "usuario@prueba.com", "'.sha1("143456").'", "user");';
mysqli_query($database, $query_insert_user4);

if (mysqli_error($database)) {
    echo "<h2>Error al insertar registros de prueba: " . mysqli_error($database) . "</h2>";
}

if($create_users_table){
    echo "<h2>Tabla de usuarios creada correctamente.</h2>";
} else {
    echo "<h2>Error al crear la tabla de usuarios: " . mysqli_error($database) . "</h2>";
}

?>