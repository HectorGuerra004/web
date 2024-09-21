<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/paginaRegistro.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <?php include_once 'components/navbar.php' ?>
    <!-- final navbar -->

    <h1>¡REGÍSTRATE AHORA Y JUEGA!</h1>
    <div class="container registro">
        <div class="left-image">
            <img src="./assets/img/controlaPlayFc.png" alt="Imagen Izquierda">
        </div>
        <div class="form-container">
            <form>
                <label for="name"><i class="fas fa-user"></i>Nombre y apellido o Usuario</label>
                <input type="text" id="name" name="name">

                <label for="phone"><i class="fas fa-phone"></i>Número de teléfono</label>
                <input type="tel" id="phone" name="phone">
                

                <label for="email"><i class="fas fa-envelope"></i>Email</label>
                <input type="email" id="email" name="email">
                

                <label for="password"><i class="fas fa-key"></i>Contraseña</label>
                <input type="password" id="password" name="password">
                

                <label for="dob"><i class="fas fa-calendar-alt"></i>Fecha de nacimiento</label>
                <input type="date" id="dob" name="dob">
                

                <button type="submit">Regístrate</button>
            </form>
        </div>
        <div class="right-image">
            <img src="./assets/img/controlaPlayFc.png" alt="Imagen Derecha">
        </div>
    </div>


    <!-- footer -->
    <?php include_once 'components/footer.php' ?>
    <!-- final footer -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>