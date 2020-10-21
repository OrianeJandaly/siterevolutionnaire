<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']D&~_=6l}t=gO/2*6yY;h)A}2)`c`R8N*qW,U,t;<?((R|k}?ByVmR<Sx^AW^2/B' );
define( 'SECURE_AUTH_KEY',  'WmU:L8jqFZ-x/4#@&BA+G}K+,q<B:4gC!XCmV:CI4JkVK,OMy$U].lnHa`[_l;V/' );
define( 'LOGGED_IN_KEY',    'G4B>7q[$)oC;_,a2O!aVFfa0wxKT:KBrHc{*]YS?W[gpq8=Kd=O]>8o&eBJ{[E|?' );
define( 'NONCE_KEY',        'MOp~H:b#^Hah]$i`P=@Swk9scL-}c)K}|+NupW%%&^cD/n`C5C!)>}{mi!d,*@O(' );
define( 'AUTH_SALT',        ',c|!G;Cj5f~}-#9rq<imseku]N9{71-qnOk2lDR{OC3hMd63Zd(VSefiK.?#V&k_' );
define( 'SECURE_AUTH_SALT', 'N+Giw4 ![QC>_X+t}(yTa<xiWZ~~2=?W0Kx0D?h5+@q66.[CN+R,&fPm%qkbx[N,' );
define( 'LOGGED_IN_SALT',   '_,FXTFY+{s^l7am@05-]61w0h/YM?6.{}LGto|8GX!_G(0a r~XM.R5{.a0<gJ=b' );
define( 'NONCE_SALT',       'PRPcxic@D+K4*/[lp}H`-^rRz/4uT_0t ` *<r@Q,%mq~sp-j5Cmo_^J,v.0bzXv' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
