<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container col-12 d-flex justify-content-center mt-5">
        <form action='login.php' method='post'>
            <fieldset class="mt-5">
                <legend><i class="bi bi-person"></i>Login</legend>
                <div><span class='error'>
                        <?php echo $error; ?>
                    </span></div>
                <div class=''>
                    <label for='usuario'>Usuario:</label><br />
                    <input type='text' name='inputUsuario' id='usuario' maxlength="50" /><br />
                </div>
                <div class=''>
                    <label for='password'>Contraseña:</label><br />
                    <input type='password' name='inputPassword' id='password' maxlength="50" /><br />
                </div>
                <div class='m-5'>
                    <input class="btn btn-primary" type='submit' name='enviar' value='Enviar' />
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>