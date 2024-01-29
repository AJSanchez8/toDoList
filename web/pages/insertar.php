<?php
include 'conexion.php';

if($_SERVER["REQUEST_METHOD"] =="POST"){

$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$fecha = $_POST["fecha"];
$realizado = $_POST["realizado"];

$sql = "INSERT INTO `tareas`(`titulo`, `descripcion`, `fecha`, `realizado`) VALUES ('$titulo','$descripcion','$fecha','$realizado')";

$conexion->query($sql);

header("Location: ../index.php");

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href=".././style/compilado.css">
    <link rel="icon" href=".././src/icons/icono2.png" type="image/x-icon">

</head>
<body>
<header>
    <h1 class="text-5xl font-mono font-bold w-full sticky p-2 bg-yellow-500 text-center "> Agenda </h1>

    <div class="bg-yellow-500 shadow-md">

        <ul class="flex flex-row place-content-center space-arround justify-around">
    <?php

    echo("
    <a  href='../index.php'><li class='p-1 rounded hover:bg-yellow-600 duration-300 font-bold' ><svg xmlns='http://www.w3.org/2000/svg' x='0px' y='0px' width='25' height='25' viewBox='0 0 50 50'>
    <path d='M 24.962891 1.0546875 A 1.0001 1.0001 0 0 0 24.384766 1.2636719 L 1.3847656 19.210938 A 1.0005659 1.0005659 0 0 0 2.6152344 20.789062 L 4 19.708984 L 4 46 A 1.0001 1.0001 0 0 0 5 47 L 18.832031 47 A 1.0001 1.0001 0 0 0 19.158203 47 L 30.832031 47 A 1.0001 1.0001 0 0 0 31.158203 47 L 45 47 A 1.0001 1.0001 0 0 0 46 46 L 46 19.708984 L 47.384766 20.789062 A 1.0005657 1.0005657 0 1 0 48.615234 19.210938 L 41 13.269531 L 41 6 L 35 6 L 35 8.5859375 L 25.615234 1.2636719 A 1.0001 1.0001 0 0 0 24.962891 1.0546875 z M 25 3.3222656 L 44 18.148438 L 44 45 L 32 45 L 32 26 L 18 26 L 18 45 L 6 45 L 6 18.148438 L 25 3.3222656 z M 37 8 L 39 8 L 39 11.708984 L 37 10.146484 L 37 8 z M 20 28 L 30 28 L 30 45 L 20 45 L 20 28 z'></path>
    </svg></li></a>
    ");
    ?>
        </ul>
    </div>
    </header>
    <div class='flex flex-col items-center'>
    <div class='m-10 w-2/4 bg-yellow-200 outline outline-slate-600 rounded p-3'>
    <h2 class='font-bold text-center '>INSERTAR<h2>

    </div>
    <form action="insertar.php" method="post" class='m-10 w-2/4 outline outline-slate-600 rounded p-3'>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900">Título</label>
          <div class="mt-2">
            <input type="text" name="titulo" id="titulo" class="block w-full rounded-md border-0 p-2 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300  sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="descripcion" class="block text-sm font-medium leading-6 text-gray-900">Descripción</label>
          <div class="mt-2">
            <input type="text" name="descripcion" id="descripcion" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300  sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="fecha" class="block text-sm font-medium leading-6 text-gray-900">Fecha</label>
          <div class="mt-2">
            <input id="fecha" name="fecha" type="date" autocomplete="email" class="block w-full rounded-md border-0 p-2 text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300  sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
          <div class="mt-2">
            <select id="country" name="realizado" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset sm:max-w-xs sm:text-sm sm:leading-6">
              <option value="1">Finalizado</option>
              <option value="0">No finalizado</option>
            </select>
          </div>
        </div>

  <div >
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">ENVIAR</button>
  </div>
</form>
</div>
</body>
</html>