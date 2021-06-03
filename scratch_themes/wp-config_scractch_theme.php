<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

 //** PHPMailer */
define('SMTP_LOGIN', 'marcosXsco@gmail.com');
define('SMTP_PASSWORD', 'malvitima97');

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_wp_teste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/m#06=,(`zp:G0&m_J=[7%alk BBJcMgnW$J=48kvQ8RFqus`g0D#`8m w,s{qLj' );
define( 'SECURE_AUTH_KEY',  'mL$AKJX[[BaG6 oJD1&bEQUk| $Ep9f~~rs&C4uBcX,^KSHoA=6)-*T}4grbnF9}' );
define( 'LOGGED_IN_KEY',    'l$e]!Dt9-n;! AE}uB,L.o8Ju}x`-fsm`?H2X*UBke0^VH.[V=+LgF?g_#b7|q*a' );
define( 'NONCE_KEY',        'lJt6#]I1yr~h62raa1*$V~g+%@awC;{8q8XW](O)Ph=rVT1i/.kwZT>!h+pyD{a6' );
define( 'AUTH_SALT',        'etKj6vomV Wmn0j+LPH&k*H1f<d4PXrtrE?:KK?Fxax)m_+7Nke7[Y@!^7mi}xll' );
define( 'SECURE_AUTH_SALT', 'N&}oT3(Nbwf3{QVRm)BG!w_iU*S~qd]+j~ADGT%:s],10Lp-v4S~5p~zkXk8&s+k' );
define( 'LOGGED_IN_SALT',   'N)cq{Mjlxuz#c1/^0Mw(()-V7PzhU-4CJjbMJ)qDV|b+Cgg6z5v,+;}u,C9Y!?B{' );
define( 'NONCE_SALT',       'J3DbrDYfv5_32[It_LGEv<+cd7;zMNLkC-;cH}d2}}ZEND^5u{RQcCWG6a0pa9!G' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
