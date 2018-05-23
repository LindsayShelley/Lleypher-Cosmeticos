<?php
/** 

 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos */
define('DB_NAME', 'cristopher');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'itseiscisma6');

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
define('AUTH_KEY', '_Z;xf_BqulA`MV%a.Ot)%r|Gq/HMCx,ic9 kS]an.5zP91BZ,SEJsD+Cs+{{.4yd');
define('SECURE_AUTH_KEY', 'y9wI};ymuUbBZKN_||i6{@|WtC_Y@Xup[,r e/D#9DfEA>*[F[I/~C<#48ygI;}T');
define('LOGGED_IN_KEY', '{7=?~$]}f(e)=,evKrLhqvJJQ`1GiL@m`ls@.pCA^|2vZM FAei.*eBD8JAs2SJw');
define('NONCE_KEY', 'l(.^/M Mya=jfzbe= 9`}+z`e>nsEo_tvB,miqBH-(x8)Pln$B1)!Z!.xZdIeRz?');
define('AUTH_SALT', 'S_cyZx=S5-~x]e.vSnrG37;;n__nw]/M3xoq0]TkapuYJl}:c+BL8l3@bjU,+E]-');
define('SECURE_AUTH_SALT', 'hoFjN$~Z|npgP0@eVnjFTo|&U/?8=?CNd|<)K,Em%~*XnIl4a`y?~trGvrtFMstN');
define('LOGGED_IN_SALT', 'acvnB%7Dr_&<%_Wa.Z`q`g.dH(&N;guD]x Tj|;O3lcd_+caQaAR12kIMV>Il;n>');
define('NONCE_SALT', 'i.S-?O*vciZ9H`)Mo)q/#T!B0?Kh1_/S$_DKixoMC9V)k,ECF{HJW(xrTy8V%zt:');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'lc_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

