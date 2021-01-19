<?php

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define('DB_NAME', 'bootcamp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'KBU8lbX!d}aM35<fCmi4/d>+r@`:u^.<(Bx1#+@N`[aQljtmYfQ(%b.58~};(;)S');
define('SECURE_AUTH_KEY',  'v#t0a(?9N>?5B]kBf?%|*~lpj2Ago?oql9z&JpD6nQTj@ZYbR.EqU[/n DUQ;j*6');
define('LOGGED_IN_KEY',    'dO$Ad}(:Zuu>n^F(4l or4WJEYf(l5QPI{{o~hiXIj3_7}!#~Zj@}?P|EWBUy-x0');
define('NONCE_KEY',        '6)kT~oc$WW0t09<${*@dhoN3JTvIIVchX2fWfiOi;k=:z?LarU4q`uO_rdO/~AU=');
define('AUTH_SALT',        'ZfL+R7QMb!SxU7( Mw3?S;ftQY&S VrY#0N`5U(g-R-4ve+-vphc{H#IGBM|td9x');
define('SECURE_AUTH_SALT', '9cp:g[i<5uLW<PIMvc(nFo$c4E.x10>,UH,_:R0xfJ>@~w:/w:xvdG#[1|cg_{>x');
define('LOGGED_IN_SALT',   'oiQDm(@h,TbM::cXZVOPL3%d&.*)f}+a^DuijAl7,N,p@HY~7am*UbBSU_2[V l5');
define('NONCE_SALT',       '86,x%`7!5oss8O{3Si}d5#Jz4BR.Y$#09}rqvY>4cQl|h{(9j4|8Dyf2B%+@N:13');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');
