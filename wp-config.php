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
define( 'DB_NAME', 'tp2-leCreuset' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' V{iH&}.;~!Wd#IqY(0GTE9]m#CH^b_qQ%TLM:%~p@:%6.TN(j~5pl.pu5IV}af/' );
define( 'SECURE_AUTH_KEY',  'V}X2TW|29]zRAirH[qgzG57y5u&bzV3<_U K8q~`?~{9IcL$):)BE%f8wc`m+Hmf' );
define( 'LOGGED_IN_KEY',    'kBo,nHDgt=vOZm(<fGQpubPP4=]k_bYZ.(3XXR4kL^#!25xV6:4Ro{u~3BX}#kbw' );
define( 'NONCE_KEY',        '0f&[g4-qy^ye.{YVtr8G(-~C|vH#mXd=,mw#}ftM5{`g%sCP;e;<-Y}~M3<?5!_.' );
define( 'AUTH_SALT',        'M8E)~:aM#BYLj|4jN^,3j%zP(nd+kO}w>(t`C3I$mY[|RY@MsFCbb^H5UIc*t5Xg' );
define( 'SECURE_AUTH_SALT', 'Ye__D^2eDtW%$Ak;,bA36@Uelx~-$a;HxeB%IWXZVk.lW:6s7u,,)Un7:&%l~Of+' );
define( 'LOGGED_IN_SALT',   '&8K?!NVE uAkZ^!j`W0J!wkw1oi? ]l-;SZ&WNh~D4</}5H}#@fz?-@J&}X]&@L!' );
define( 'NONCE_SALT',       'UWc /Y:|^<+3tA5R2eNOb,u_=CrMBeulhM :V-?Zl8E$tLR$4QSXj8Tkm8h*N5*7' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
