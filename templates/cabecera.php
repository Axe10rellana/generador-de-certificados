<?php

session_start();
if(!isset($_SESSION['usuario'])){
  header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#b5dff0" />
    <meta name="description" content="Generador de certificados" />
    <link rel="icon" href="../src/assets/icons/favicon.png" />
    <link rel="favicon" href="../src/assets/icons/favicon.png" />
    <link rel="apple-touch-icon" href="../src/assets/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
	  <link rel="stylesheet" type="text/css" href="../src/styles/index.css" />
    <title>Generador de certificados</title>
  </head>
  <body class="select-none bg-light">
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vista_alumnos.php">Alumnos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vista_cursos.php">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cerrar.php">Cerrar sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4">