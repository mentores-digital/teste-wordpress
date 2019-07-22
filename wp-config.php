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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'mentores-teste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'jd/ksBC#`$(s)5ub8/kdM+=Bv&fn TeSq|9cZ:$=ENfOaky6Z9y(9SSu(9BNq@9b' );
define( 'SECURE_AUTH_KEY',  'T]zHMaPaA&Ki*DQLa4rVdNVmA]1sXVsBT_UfC1h.3uY-:.;a^%3ows_%sMd8C0#z' );
define( 'LOGGED_IN_KEY',    '} 8XhnO_JBAo%|P%u|=%uX6LR,jrle&2tyz6HB[q;0K9_]9&dk&@2h pGmwO|(Ko' );
define( 'NONCE_KEY',        '@=hIh8^D!1d8k$H-eSzP- RI*XjK#=n3<kL&tQy3qL&1=/7SK{Vl[*|g[DZ)O[C1' );
define( 'AUTH_SALT',        'q)CQl,<0Vja2eLg*:(!XtX2cr UDCr0xLVLyj-$G5U0;$Y*66v;K_DL*?BAKN:+8' );
define( 'SECURE_AUTH_SALT', 'jEc$2}C)ASzv>3ODA{(H~lLYd|U6SIa5+i5_}j=Z)e=7 vU_m|Ay]xWu.# Vp:Ot' );
define( 'LOGGED_IN_SALT',   'KOU8TxOHaa){2}{L+UM%E:S4):W~j2kydXfp}7m b)9!V5Tp9-}x}A#VBiSZ&?wU' );
define( 'NONCE_SALT',       'O_ub&y2[=o(=PVZuD[,$N6zoe?qtM.oZWFFq:4^c!u3|zaF!fTGg_]Iv(u,`$JOF' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'mts_';

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
