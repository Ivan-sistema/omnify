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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ominif' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'master' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '1qwe2asd3zxc' );

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
define( 'AUTH_KEY',         'G:jbk kg^P/dsVx,3y 6|7NQ)VyQ<h,.!)L: w0of</*DK9JPlj;Ri{R`>&+j]`B' );
define( 'SECURE_AUTH_KEY',  '~Rx:BA(`QlGK-DkIToKTUun.kFq]L5EH)]Mda3?8LjLU2B]45PvAU@@?Sp,9n|H[' );
define( 'LOGGED_IN_KEY',    '2%mqLS_ :[Fgu(bi/)cTM[LPo[57q*lM<j,x_Q%!]L-k,TxHSz!kwp7c[G#4Gj/4' );
define( 'NONCE_KEY',        'UQwInQ#>B|0bqB8~h2C;:cn Y6No]|b@.Ez?^@!a91MzmB}[65G89]`cxPv X;(I' );
define( 'AUTH_SALT',        '&cG)k12pOkzhkYB`-EQ*6UsSm(itA;-%ebDtv{6W4|{Y<G}H}y|Vi7rCuoXu<{02' );
define( 'SECURE_AUTH_SALT', 'k.#MK[jfV(/bSy_j_{T7Mh+wsGn#5Q0OnuH tOQ=_Pp1PB_KTs`=`[E`1O.&Z;p-' );
define( 'LOGGED_IN_SALT',   '?c4MvAMR!hBb`^c$*V=A:kDOm}HYMlep*ic{%=q>R0rXQ(}`RedZw2FMMr629X-L' );
define( 'NONCE_SALT',       '.[`@Mpu|,Atg0G.xYrac@WYRd&oM3s{sp`JXl9i +u$]0qM :5T5h]+9_eTwyZ_t' );

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
