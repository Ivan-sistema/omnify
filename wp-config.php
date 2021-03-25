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
define( 'DB_NAME', 'omnify' );

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
define( 'AUTH_KEY',         '19QJn$X9K&}AUA?``MPi/Vi_4sTsu,:}rAXWH_nr?.cp6JcuNKE{?w/iP$yEQ(@m' );
define( 'SECURE_AUTH_KEY',  'dSVdc$BJSh!$Qv9bf9LgS6|Gn,UJkD5U03a (ODXzGHknBp$fc2Y-iC54KFa4d:M' );
define( 'LOGGED_IN_KEY',    '@S m[k,7RK*M[:0Z])53#Q8WSr3w!m+soEyXYwQQH51gLwTBHx6I|EcByB9_ufqM' );
define( 'NONCE_KEY',        'Vj/6C):H~_FK$ Z;Eo?F&:6:CHMNshb8^u*_Ldr}Vo1B9NDEl;=5#A2$p/r :b}O' );
define( 'AUTH_SALT',        'kMHnallNl9V_)q_z[`}A^&Xry?4G](Icb@J4m)HguzT8fHIj@}|wB36KWrzCkbc+' );
define( 'SECURE_AUTH_SALT', 'brh2{perloC{Z5P7T/?y_])!3.yij+j+YUrzF(K-nj}=xz1RFY&eNp+=XF` !s[c' );
define( 'LOGGED_IN_SALT',   '3l=<a `XJcuY*vHG]:o`{@,x6m04v#y?KZCjcwUqV*{>aUks,_#n_Xh@MPk;ZJ.`' );
define( 'NONCE_SALT',       'VriW^00oU@|)B!O|O,l##KB`K@i>%|$LVIovXTL=O/!80@Ce[6Tn>+e%<|,qS7oL' );

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
