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
define( 'DB_NAME', 'covidproject_db' );

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
define( 'AUTH_KEY',         'Mrd9o.iQCb!yg[$}=~M,YL=3L1-Uts<EmnNOt]r4Jfbzio;ank+:5x=BE00s^bFM' );
define( 'SECURE_AUTH_KEY',  '^aBhabQkMdu2yO]wlvCvu43^0{X-Hd&s^UqP*>e`|Yq0)4:fM,q~,<1iU)HwHpO6' );
define( 'LOGGED_IN_KEY',    '/6Ve=QgwX2B1l-`3@pdq;=zD+&PJ|;!=`1O5DI-.4.v>L;*0D.wY4>27E&}c/V@F' );
define( 'NONCE_KEY',        '&xcYv5.YSe10Y.p%PJZOo|Zw2]YKZ>BJ<U%xQS3FRz_P%5MEYSpGo~y`T$;R=2^t' );
define( 'AUTH_SALT',        'b@iuM!v%b_U#kU$8tdY^`SZ6V2%u;sT}ej}DwC2%7tMj.w[,$d.3#1ZNmw[VD&a_' );
define( 'SECURE_AUTH_SALT', '9ZC /m`>E4s7PUp~k+a>j?*C^v.QjNELFJz${L;gO8.~A<d8e_VGjVqc)rO2!nS$' );
define( 'LOGGED_IN_SALT',   '8OF0Vgm{irc1n9/Lm[QtS.An{d]7Z156``ZS|;Z9+M0*a0~KoU@rtD/e`f~b|VZ)' );
define( 'NONCE_SALT',       '7j6#[o*u}Nx1xLhLDmz;/szgB]*fWczgE6Sh#|=/[?]wz]Z5Q);6~ ^UE7#3f]E=' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'test';

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
