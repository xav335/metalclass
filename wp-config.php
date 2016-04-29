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
define('DB_NAME', 'metalclaukuser');


/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'metalclaukuser');


/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Metalclauk33');


/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'metalclaukuser.mysql.db');


/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');


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
define('AUTH_KEY',         ';+>z_:~{+3QC%vNG?<)L#SDb_7uq!=caQ d%H &wPx-|_.K5[{AKs{z<uN^sC-Ra');

define('SECURE_AUTH_KEY',  'f*mZS6I<t6](w@bX{&Zz-!kcajV)!P2KM^$Z@`Ip3jRcC-K~$4+9 {o|jS`~>8Dz');

define('LOGGED_IN_KEY',    '4B5lfwXg.6@71l7H]-_M/NT7zDH#|~<I/VpU83~]o? 2~JEy3EdoM+sp@J/J%_lA');

define('NONCE_KEY',        '_+&r8J`ka`D)c(xWtryr/I#6G1zeY:-~lM?hb2C2l9Qn9qcm`k`[B#id<<(Sh6:_');

define('AUTH_SALT',        'tn4[nWF5bB-w)j`?;G[^vtw+ Ge6N2q(pL[b?X4l:5{BvrL^$/r&1`!5m@#,K,)}');

define('SECURE_AUTH_SALT', 'f|+}z#G$lQAZD$(qFOuLbZF{CN)>dq>+)IN=8iI).|c+t<9=-Q?0G{E2zmB6p-#A');

define('LOGGED_IN_SALT',   'yjvGvM=#)tq_j;y9^K!1($zL|nqf|3;19`D2fRQr}gXBsiDV!.E@B.5UT(0OA}~U');

define('NONCE_SALT',       '7s&%JJ-E0hsrvrb~f})$E&`0w-AIYDqJe+)-w40<bD-&)`*c%z&R>Q]`E;#(V7M6');

/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';


/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
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