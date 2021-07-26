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
define( 'DB_NAME', 'm1-hackathon' );

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
define( 'AUTH_KEY',         '@g3zzuj)pMmzq-g=W8e!L&=j$D-S56@l{Ca%^=ercc6IkLRXXfIYug`]qSvr`{X6' );
define( 'SECURE_AUTH_KEY',  '_`Lz}aW3uf+w<*(/0f>xsn&M8J;4 Z(v2mU-A1!FC,.}K N+WKT#e8aIwzE;xK2/' );
define( 'LOGGED_IN_KEY',    '`y=Bb9P3td3$4)um%!rUKYYuW}{6+/l^jJuoQY]r9Z2q~Z3}mK7 5yxCO(V0Y=wl' );
define( 'NONCE_KEY',        'd6iWQgtM;}Z+<#%3Tpp2Yzo@g^4&]`~` Q(3FMslCDn&6!Gk<`E{`z^8}U.Vy5Np' );
define( 'AUTH_SALT',        'nGG${ogRD11EbU]l @?t)15?@u4PzvkmNt9HWQ8r^XrN_I0h.~0Ax4&ZXdgF7K`(' );
define( 'SECURE_AUTH_SALT', '*a,fRzf-}dPJC}GY`iE^$-Olyt<|k1Y{Hm4ID-VR2FS41<GS$LHK8qn,rmlz%!zn' );
define( 'LOGGED_IN_SALT',   'nA(,#Fv0<,h4M5@&Av|^!Fwt=$_5lK^h7=izlv7^}sNc,f9Dka(5}$8%3A^1+e,}' );
define( 'NONCE_SALT',       'gRNUNgG3`;Ib=*!yh%(R ~L4Cb:17C/t_<<jhyvkvttoO~gV^#o>4|*]uByjYrn7' );
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
