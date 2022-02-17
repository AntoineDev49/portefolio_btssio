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
define( 'DB_NAME', 'portefolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'test' );

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
define( 'AUTH_KEY',         'k$&Fha.[J]`B )G9Qin,=T?CAnw3%w~=xfh?%CwW_84WmiC-2Ln2SzN>{pii9$).' );
define( 'SECURE_AUTH_KEY',  '*W-YvxK fVu~t7S.%)AyG[iNC$9g|nF;/Y}9q1}v9-!J8#C4IN%|,E1W7eHuU4r~' );
define( 'LOGGED_IN_KEY',    'CtpK,U%w8B8&t3gPCY%P=a2nT;W2gOTin,ev*iaZ~?b._!E/PP:`Q^6hUt$z:i@m' );
define( 'NONCE_KEY',        '^yu)8.2>)p)Reg3WG4Y??t e-8c<!OJRigOlShEnr_Fu:>Gp]gBxiwNnC:e0sPkz' );
define( 'AUTH_SALT',        'Sf;Yzom.e[P!m~zuW0b-miLZ)Da|5oDcAE %(Hf~LRH,?%AG:mzX@m)$V<LD]-/?' );
define( 'SECURE_AUTH_SALT', '),49suHCnH((VHBf6U_LEIXN~@S$~Ks*(dFl4vg7swK&k648er=3mtBzIw#{Oa9_' );
define( 'LOGGED_IN_SALT',   'J=~c^/iKy49Ps0gS{KL}~<E)~JN*>U9c--$>0[dX{i~c:AlAO`#Jh|`=1Z.{io1$' );
define( 'NONCE_SALT',       'EIXUm?N(fmq:KxEt4+bJ^xBRzBRV`Xu.X1~AUs;+1PanZZQJDTi$gMfvc~^}+{T.' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_veille_';

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
