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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 's3cr3t');

/** Nome do host do MySQL */
define('DB_HOST', '172.17.0.2');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'hbjC{CwRSp-Wh6Jd<F;`sRO50f@J@eYM],@STn2EU%?@YIr?I6zm,J[iqVxqL<T1');
define('SECURE_AUTH_KEY',  'cal !3E_I0U|fT]SY*^RTcE0/w` yy5aTNGzZLaI^|#Q864f)iF|MFW,.NSu W2K');
define('LOGGED_IN_KEY',    'NG2cRY,<}@CF/-TwJhOUdB~!nXdyD7APAJ0:/R7S6b]W3I!)m1=tAk?D!]_e,xAc');
define('NONCE_KEY',        ',|$sks}Bg|,^/P@3ES!a,9GL6obqevuI-l?KID[CV,2z(w /SZ3`@6=^K~tL2[{/');
define('AUTH_SALT',        'Ip@cU6b?jUd=>kL0+1x<^amoCkxB;L6C~mX-jgU@vpx4N~]U_yNu!6(<<GnTkk%i');
define('SECURE_AUTH_SALT', 'fzeetvIq]d6yU+aqna,Xt.k-Wr8.$?:CL$,P?/c_q..IqZf8>_yr=Zc)%-%j4eX}');
define('LOGGED_IN_SALT',   'o_`9kJdT<rABkej-TTbrD2gIL,qr}sar~!h2va6j}|  HR_CcN{J:9<QnD7*^Hk4');
define('NONCE_SALT',       '$eN$UZV0+h51N;)t<f/Jf!mFw F]B5a4V}7vx70kEMbEi/eE`<y8dYFHZ]Lgp]!}');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
