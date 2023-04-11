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
define( 'DB_NAME', 'alpinawp' );

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
define( 'AUTH_KEY',         '%Uatn&X~kIC62=s.zJ7md6|W)=.we^${jD<}rtF7&-Ne 2ma7 $p:J0?FnB=nUNW' );
define( 'SECURE_AUTH_KEY',  'T}?7%&!vI}oXp(U?C2IwWyj=Nuf1MEHcP#F;}Kn^ve7%ZKafy9;YEEl/3#ji]f>$' );
define( 'LOGGED_IN_KEY',    'V[eQ^GskAN44O~_F! 1#9or]xSeU1p~OAD_>V]%p]l)oXpmql7(.2sr1W=9<Vaih' );
define( 'NONCE_KEY',        'pY?<fFip]C@77Azj0gm9Ra$&s|7@ARsr6s3St`TNRCJ<0/E 1`Y;/m]rJ(tC>*%s' );
define( 'AUTH_SALT',        'RMY&1;4ovj.RLj}JVP;]Ta+g`X<o9).-42wt3~8I.[sR93}bWNq?45GgrtM7Pme]' );
define( 'SECURE_AUTH_SALT', 'W5vh!_^Co@XY|G1TI*LUEb({#XPr-0-DZ6k=O#+Folr/*LD^v&Q1>1(M9:9JyX|q' );
define( 'LOGGED_IN_SALT',   'H>yd[HjxsV{#[n!?9]G<u-J2V~v-hwS!MB.?*q!Z4x9#}V%e>#vfEWhDcU0n6~7d' );
define( 'NONCE_SALT',       'N%dm;$) [TwSJv9*3vCt.B$n}c&|OdA*FPQg38UkqKO{DaE:S@>/ ?q-oPWhaAdd' );

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
