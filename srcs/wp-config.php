<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');
/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');
/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'co241tii');
/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');
/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'anp3nIg6/(yUMaV_` ~vHap#-gV<M-a?Ali0Lwf6/YCQ^c$&#wl}b[,dyQ^:oe8@');
define('SECURE_AUTH_KEY',  '^*vWgm^YhrOtxmSxT[LDm|K-$-8>Wq|G_P?:V|[E%4xf2f5U7bYGdAL^=6g <T(-');
define('LOGGED_IN_KEY',    '___pFGG[{HJHz=vNKlPiN+n00-eWEr+LRuqVhieHc*xv 5 :}0,]Z2:$Jli=F!Y>');
define('NONCE_KEY',        'G+eARIcaJE:klac$peUPu|i!tgbs?j{ F6M0,qN2B,,*R<P-#]8zOice/aesJ-F[');
define('AUTH_SALT',        't+wW+j[G&*[xYw&~pL?BT()A/b6J#E<*Dv8+4qa[(]3Rl]JB0-.Go|}:Lek^1:+(');
define('SECURE_AUTH_SALT', 'Yxaqk4bfR4~-TQZE1<G8`%c:)D&lj]+-QejFZ@gP&eN?+-f90-c7+#LD:|{~^RM3');
define('LOGGED_IN_SALT',   '*kDam)p31P5U-or!!|CA-!ED2?{fzw!OTm+Xx5Qy ka|%Jl;?fL`-[$tf]-q!/{z');
define('NONCE_SALT',       's#jW|oav S$M8~.E:SAn;/dv0f#8`:Q6}:!Ot7])tq-tuE+@@!oFa0efr^|499BG');
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */
/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
