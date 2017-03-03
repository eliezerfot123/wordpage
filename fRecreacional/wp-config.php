<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'frecreacional');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '1234');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'V;4tFX!CMHF2s GTqfG=U1-<Ty>u C,qMy#/x}l?U*;}hBRIp&p}<TaM7?N[S|3R');
define('SECURE_AUTH_KEY', '.Zw$]Ml}C~[Ov=?YhHrH#+piqH]@)*EgADKu&l0Ktsz -Z(nW#78k8%JJ]I(%hHG');
define('LOGGED_IN_KEY', 'N_Z%CyrYj 5(AIZ$i|>) ,4ry{{BOyz]I&LHBegW)|jl>&y3KJE#3gU/@6_@e!W_');
define('NONCE_KEY', 'VX%=_{cXb|9?~%BVQQy&RHH[{77chX^dY~%^K6UNwTJfIX(!N#n`>N{N RZT@]SK');
define('AUTH_SALT', '6}Z-jTspRe=!XfYP-kLO|^#$>r&HB}so=k#^xGl#nZp,OzZbL&rtgI{]t9Y@05Jy');
define('SECURE_AUTH_SALT', '+$KWZg&.5<Wlu=g/;oK5O)F8.P_GmW^uDD/@xbMQq63XRiSS74#+rfGv}v-JET^^');
define('LOGGED_IN_SALT', '!vZHA90)u9^L-{y7*Pcikz;@NDfYryfH926R*W:vQKhvO<0]+gQ$JDETco9E,BUq');
define('NONCE_SALT', '$7JyUQwX%wr$sNnAvz~gE#3VtQ6*QhM ddE6QQd33`878tr[ldDNvqt,CXLJb;`A');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'fr_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

