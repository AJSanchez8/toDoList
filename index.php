<?php
include './pages/conexion.php';

$sql = "SELECT * FROM `tareas` ORDER BY fecha ASC";

$noRealizado = $conexion->query($sql);
$realizado = $conexion->query($sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="./style/compilado.css">
    <link rel="icon" href="./src/icons/icono2.png" type="image/x-icon">

</head>
<body class="bg-slate-300">
    <header>
    <h1 class="text-5xl font-mono font-bold w-full sticky p-2 bg-yellow-500 text-center "> Agenda </h1>
    <div class="bg-yellow-500 shadow-md">
        <ul class="flex flex-row place-content-center space-arround justify-around">
    <?php
    echo("
    
    <a  href='./pages/insertar.php'><li class='p-1 rounded hover:bg-yellow-600 duration-300 font-bold ' >INSERTAR</li></a>

    ");
    ?>
    <li id="darkMode"><button><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
<path d="M 24.90625 3.96875 C 24.863281 3.976563 24.820313 3.988281 24.78125 4 C 24.316406 4.105469 23.988281 4.523438 24 5 L 24 11 C 23.996094 11.359375 24.183594 11.695313 24.496094 11.878906 C 24.808594 12.058594 25.191406 12.058594 25.503906 11.878906 C 25.816406 11.695313 26.003906 11.359375 26 11 L 26 5 C 26.011719 4.710938 25.894531 4.433594 25.6875 4.238281 C 25.476563 4.039063 25.191406 3.941406 24.90625 3.96875 Z M 10.65625 9.84375 C 10.28125 9.910156 9.980469 10.183594 9.875 10.546875 C 9.769531 10.914063 9.878906 11.304688 10.15625 11.5625 L 14.40625 15.8125 C 14.648438 16.109375 15.035156 16.246094 15.410156 16.160156 C 15.78125 16.074219 16.074219 15.78125 16.160156 15.410156 C 16.246094 15.035156 16.109375 14.648438 15.8125 14.40625 L 11.5625 10.15625 C 11.355469 9.933594 11.054688 9.820313 10.75 9.84375 C 10.71875 9.84375 10.6875 9.84375 10.65625 9.84375 Z M 39.03125 9.84375 C 38.804688 9.875 38.59375 9.988281 38.4375 10.15625 L 34.1875 14.40625 C 33.890625 14.648438 33.753906 15.035156 33.839844 15.410156 C 33.925781 15.78125 34.21875 16.074219 34.589844 16.160156 C 34.964844 16.246094 35.351563 16.109375 35.59375 15.8125 L 39.84375 11.5625 C 40.15625 11.265625 40.246094 10.800781 40.0625 10.410156 C 39.875 10.015625 39.460938 9.789063 39.03125 9.84375 Z M 25 15 C 19.484375 15 15 19.484375 15 25 C 15 30.515625 19.484375 35 25 35 C 30.515625 35 35 30.515625 35 25 C 35 19.484375 30.515625 15 25 15 Z M 4.71875 24 C 4.167969 24.078125 3.78125 24.589844 3.859375 25.140625 C 3.9375 25.691406 4.449219 26.078125 5 26 L 11 26 C 11.359375 26.003906 11.695313 25.816406 11.878906 25.503906 C 12.058594 25.191406 12.058594 24.808594 11.878906 24.496094 C 11.695313 24.183594 11.359375 23.996094 11 24 L 5 24 C 4.96875 24 4.9375 24 4.90625 24 C 4.875 24 4.84375 24 4.8125 24 C 4.78125 24 4.75 24 4.71875 24 Z M 38.71875 24 C 38.167969 24.078125 37.78125 24.589844 37.859375 25.140625 C 37.9375 25.691406 38.449219 26.078125 39 26 L 45 26 C 45.359375 26.003906 45.695313 25.816406 45.878906 25.503906 C 46.058594 25.191406 46.058594 24.808594 45.878906 24.496094 C 45.695313 24.183594 45.359375 23.996094 45 24 L 39 24 C 38.96875 24 38.9375 24 38.90625 24 C 38.875 24 38.84375 24 38.8125 24 C 38.78125 24 38.75 24 38.71875 24 Z M 15 33.875 C 14.773438 33.90625 14.5625 34.019531 14.40625 34.1875 L 10.15625 38.4375 C 9.859375 38.679688 9.722656 39.066406 9.808594 39.441406 C 9.894531 39.8125 10.1875 40.105469 10.558594 40.191406 C 10.933594 40.277344 11.320313 40.140625 11.5625 39.84375 L 15.8125 35.59375 C 16.109375 35.308594 16.199219 34.867188 16.039063 34.488281 C 15.882813 34.109375 15.503906 33.867188 15.09375 33.875 C 15.0625 33.875 15.03125 33.875 15 33.875 Z M 34.6875 33.875 C 34.3125 33.941406 34.011719 34.214844 33.90625 34.578125 C 33.800781 34.945313 33.910156 35.335938 34.1875 35.59375 L 38.4375 39.84375 C 38.679688 40.140625 39.066406 40.277344 39.441406 40.191406 C 39.8125 40.105469 40.105469 39.8125 40.191406 39.441406 C 40.277344 39.066406 40.140625 38.679688 39.84375 38.4375 L 35.59375 34.1875 C 35.40625 33.988281 35.148438 33.878906 34.875 33.875 C 34.84375 33.875 34.8125 33.875 34.78125 33.875 C 34.75 33.875 34.71875 33.875 34.6875 33.875 Z M 24.90625 37.96875 C 24.863281 37.976563 24.820313 37.988281 24.78125 38 C 24.316406 38.105469 23.988281 38.523438 24 39 L 24 45 C 23.996094 45.359375 24.183594 45.695313 24.496094 45.878906 C 24.808594 46.058594 25.191406 46.058594 25.503906 45.878906 C 25.816406 45.695313 26.003906 45.359375 26 45 L 26 39 C 26.011719 38.710938 25.894531 38.433594 25.6875 38.238281 C 25.476563 38.039063 25.191406 37.941406 24.90625 37.96875 Z"></path>
</svg></button></li>
        </ul>
    </div>
    </header>

<h1 class="text-center font-xl font-bold">Tareas NO realizadas</h1>
<div class='m-5 grid xl:grid-cols-4 sm:grid-cols-2 gap-5'>

    <?php
    while($row = $noRealizado->fetch_assoc()){
        if($row['realizado']==0){
            echo("
            <a href='#' class=' grid grid-cols-2 grid-flow-row-3 gap-4 max-w-sm p-6 bg-red-200 border border-red-500 rounded-lg shadow dark:shadow-white hover:bg-red-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700'>
        
            <h5 class='col-span-2 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white'>$row[titulo]</h5>

            <p class='font-normal text-gray-700 dark:text-gray-400'>$row[descripcion]</p>

           
            <form action='./pages/realizar.php' method='get' class='flex items-center justify-center'>
            <input type='hidden' name='id' value='$row[id]'>
            <button class='hover:scale-105' type='submit'><svg class='fill-red-500' xmlns='http://www.w3.org/2000/svg' x='0px' y='0px' width='50' height='50' viewBox='0 0 50 50'>
            <path d='M 41.9375 8.625 C 41.273438 8.648438 40.664063 9 40.3125 9.5625 L 21.5 38.34375 L 9.3125 27.8125 C 8.789063 27.269531 8.003906 27.066406 7.28125 27.292969 C 6.5625 27.515625 6.027344 28.125 5.902344 28.867188 C 5.777344 29.613281 6.078125 30.363281 6.6875 30.8125 L 20.625 42.875 C 21.0625 43.246094 21.640625 43.410156 22.207031 43.328125 C 22.777344 43.242188 23.28125 42.917969 23.59375 42.4375 L 43.6875 11.75 C 44.117188 11.121094 44.152344 10.308594 43.78125 9.644531 C 43.410156 8.984375 42.695313 8.589844 41.9375 8.625 Z'></path>
            </svg></button>
            </form>
            
            <p class='font-normal text-gray-700 dark:text-gray-400'>$row[fecha]</p>



            </a>");            
        }

    }
    ?>


</div>
<hr class="bg-yellow-500 border-yellow-500">
<h1 class="text-center font-xl font-bold">Tareas realizadas</h1>

<div class='m-5 grid xl:grid-cols-4 sm:grid-cols-2 gap-5'>

<?php
    while($row = $realizado->fetch_assoc()){
        if($row['realizado']==1){
            echo("
            <a href='#' class='grid grid-cols-2 gap-4  max-w-sm p-6 bg-green-200 border border-green-500 rounded-lg shadow hover:bg-green-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700'>
        
            <h5 class='col-span-2 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white'>$row[titulo]</h5>
            <p class='font-normal text-gray-700 dark:text-gray-400 '>$row[descripcion]</p>

            <form action='./pages/noRealizar.php' method='get' class='row-span-2 flex items-center justify-center'>
            <input type='hidden' name='id' value='$row[id]'>
            <button class='hover:scale-105' type='submit'><svg class='fill-green-500' xmlns='http://www.w3.org/2000/svg' x='0px' y='0px' width='50' height='50' viewBox='0 0 50 50'>
            <path d='M 41.9375 8.625 C 41.273438 8.648438 40.664063 9 40.3125 9.5625 L 21.5 38.34375 L 9.3125 27.8125 C 8.789063 27.269531 8.003906 27.066406 7.28125 27.292969 C 6.5625 27.515625 6.027344 28.125 5.902344 28.867188 C 5.777344 29.613281 6.078125 30.363281 6.6875 30.8125 L 20.625 42.875 C 21.0625 43.246094 21.640625 43.410156 22.207031 43.328125 C 22.777344 43.242188 23.28125 42.917969 23.59375 42.4375 L 43.6875 11.75 C 44.117188 11.121094 44.152344 10.308594 43.78125 9.644531 C 43.410156 8.984375 42.695313 8.589844 41.9375 8.625 Z'></path>
            </svg></button>
            </form> 
        
            <p class='font-normal text-gray-700 dark:text-gray-400 '>$row[fecha]</p>
            </a>");            
        }

    }
    ?>

</div>

<script>

var boton = document.getElementById("darkMode");
var html = document.querySelector("html");

boton.addEventListener('click',()=>{
    html.classList.toggle("dark");
})

</script>
</body>
</html>