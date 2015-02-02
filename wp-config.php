<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lione536830');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'lione536830');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wBUzc38B');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', '91.216.107.161');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lez/|*i/~&/S||*?(ahF<)HSJ6)]P-O3x,BxD$g6PZfW=wQzu!x`!Z75U]Udjx55');
define('SECURE_AUTH_KEY',  '+e/AJ$~fb$/Q22oa/}aRc%19G;y$4`|7G]VSF@9 )J>p)|~)31WYW,7:!XxyK=<:');
define('LOGGED_IN_KEY',    ',F[Kng)kIWs.= >r^aHYMn5w;&%-.N!j#XJvpk?:9.-!>BF7Umj!@B<1?;*-F>j%');
define('NONCE_KEY',        ';j1cn<}9WCy5*D|I?4boKuQ8^Y&>M+t KiV zYvyXe<c@n|]62T.~Slo|oFL:2S^');
define('AUTH_SALT',        '!0PU%z0~NQ>mYo=t-MRxs&-n|gl$8O&J[=n{.Ig*3|I,7NzYj$QRVH6&-/kcpL+r');
define('SECURE_AUTH_SALT', '$O(XAV&fPgND_g23Gx./6OIf~Ek||jSv+S< lzkts`:l{N&{99aBD/eSZl`~hA{/');
define('LOGGED_IN_SALT',   '3Y_4|PgP=N^6i2M&jwKDrr,RP_J$s+$$eE>$)TQZNO69U`<%H*xWpauRbsbA^q3*');
define('NONCE_SALT',       'q(Ao<H;-7[iWByndu#8}/gfmmUug;eb7q4,qK+O`1gjVvk-`-!Ai@IS%4?Z+tr$t');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp2_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');