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
define( 'DB_NAME', 'wordcommerce' );

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
define( 'AUTH_KEY',         'zPF `:dn@M;*XcOm$7O1}WMx,.N&1RTS%VJC1puw;u_^ly)&C]573N4*89PGr1QQ' );
define( 'SECURE_AUTH_KEY',  'xL^e *9f^(G05)kfDsMrI`e)AhF=0U|Y1X+?p{BQW*?=SRPVHcLR`J726|FbsjF1' );
define( 'LOGGED_IN_KEY',    '{}Qh*fLQlkD,sqGQcvjutU7~Kv3@z}r:77H|}.69UCm$NF9:7x?p9K25HJ@7sA:Y' );
define( 'NONCE_KEY',        ':^y`M0hFVXuO@V^nW:LE,]q|R`4RxPuO 7X ^e9EbtUD~,})pSY[k-ZBM5(K(1nV' );
define( 'AUTH_SALT',        'w%*!CEhmZ$%Gecd,P/,EAz[{#4,AX$]Bf?pH>FhdIGjp= + }{Tu0tv5f,~X>^He' );
define( 'SECURE_AUTH_SALT', '&6fPRl #4sx;zy7>8JMA8<h5t6FtWr<5!@97okc]S>2OyXJDik}eF-Dmz[Rbz;xu' );
define( 'LOGGED_IN_SALT',   'MIm=%uHY}H4TtD^Z8:y%s-_Bi[xY>xIxD|m|b{$5=qheJp*3Seq#9JirWk*6aoz5' );
define( 'NONCE_SALT',       '`^{+R4 ~m@L #Dd..eG1X7fIIP`Q7+dsR$;`t!~ku]Byk){Lo&=6VRXf@Q,Q?|i]' );
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
