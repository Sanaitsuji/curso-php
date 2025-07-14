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

if($create_users_table){
    echo "<h2>Tabla de usuarios creada correctamente.</h2>";
} else {
    echo "<h2>Error al crear la tabla de usuarios: " . mysqli_error($database) . "</h2>";
}

?>