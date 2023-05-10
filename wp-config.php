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
define( 'DB_NAME', 'shiro' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'itsugaya' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'FANta1234' );

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
define( 'AUTH_KEY',         'FIYvY?*Hg0A {P;?.p;LYKd;>,>BY*56_iF7-rVLpq|,h4Nh?YY8*S0=D Ult9FW' );
define( 'SECURE_AUTH_KEY',  'EoyR+kL X?pJa0tDg*soNUe7)8<s[tI*cq/N!A4=x8yatgY:DP0S%2FJE[8G)&-!' );
define( 'LOGGED_IN_KEY',    'n{y.|xWI%/1w7lDw>iDjjh+i[4T-tKtQc)I`#bc1`69Nn&+mbenrbCdt<!_q[W&B' );
define( 'NONCE_KEY',        'E~eG2rFy6j_/.8nm?cpYhEAig4i!>VKKB;?ZH0ay!U7w^gz=%S&pj9[~2m;At<B{' );
define( 'AUTH_SALT',        '4s_6n70Ge`==TqJ%KP--gj<S3<;J3q.]$|#m]04z6D5[jl^<F%xD#CM(n6cB-D@ ' );
define( 'SECURE_AUTH_SALT', 'ekO?AIUL:nc5IszSO0aAPZf[X: DdMmb;n:S |(OF@xF]FEw#CvVKf8m5Sx9u,J ' );
define( 'LOGGED_IN_SALT',   '=6y)cY8)dH&Shb{4/JBXhC(]I/Y..@rPo__<81n5{F^P%^YoytyTUIj,X?VuxFhZ' );
define( 'NONCE_SALT',       '8jXw[9E;(%r3q*mln*.8(-7,_!Wnk1p9=g&[s,$Dow1?#exF?ItC-SE2[k!.c;wx' );
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

// Active l’enregistrement dans le fichier /wp-content/debug.log
define( 'WP_DEBUG_LOG', true );
 
// Désactive l’affichage des erreurs et des avertissements
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
 
// Utiliser les versions en développement des fichiers JS et CSS de base (seulement nécessaire si vous modifiez ces fichiers de base)
define( 'SCRIPT_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
