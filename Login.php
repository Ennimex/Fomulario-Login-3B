<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user =$_POST['user'];
    $password =$_POST['password'];
    $edad =$_POST['edad'];
    $errors =[];

    if (empty($user)|| empty($password)|| empty($edad)) 
    {
        $errors[] = "Todos los campos son obligatorios.";
    }

    if (!is_numeric($edad) || $edad< 18) 
    {
        $errors[] = "La edad debe ser un número válido y mayor o igual a 18.";
    }

    if ($user !== 'luis' || $password !== 'mendoza') 
    {
        $errors[] = "Usuario o contraseña incorrectos.";
    }

    if (empty($errors)) 
    {
        echo "Login exitoso.";
    }
}


?>