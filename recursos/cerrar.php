<?php
				session_start(); // Iniciar la sesión
                session_unset();
				// Destruir la sesión
				session_destroy();
				// Redirigir al usuario a la página de inicio de sesión o a cualquier otra página que se desee
				header("Location: ../index.php");
				exit();
				?>