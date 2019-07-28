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
define( 'DB_NAME', 'tsg_com_br' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123Mudar' );

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
define( 'AUTH_KEY',         '_DqU AG_ZGeGJ3>A{3K:NAjd<aK_zw~?&X})k2[}O7.yn,j-4iPSc8*(xh)yo^{K' );
define( 'SECURE_AUTH_KEY',  'dE<sq>j6#eNrHYcu%ZeRRa;p{`t##x6dj:&<uoK1J3bjCW`9}%:oby bWd6{ueMR' );
define( 'LOGGED_IN_KEY',    'Pk2ErwM 3+/&i5-)aDDC{5:BAQUHnt##P6;TABPYbdBz9MUekRg! l[=d||#5+if' );
define( 'NONCE_KEY',        'W5vtBPr*~`f7|!6oW|GFH]!2V`3bqhzK#L L!#CZ2tpMfPmcm|:$*HxP;ZZ{x<:O' );
define( 'AUTH_SALT',        'Y@FvH~Jj>s#I6`]xE[j|BC3 %`.ajs2@)3#giLq>ZE`,Q/]ksz<3#T>bk5N+ssdB' );
define( 'SECURE_AUTH_SALT', '+)[d<I4@q5&B;k)oP$~&or968;b-yxEkJ&U>lu+gsu.nlX}nztM>nO+G8tsW}d9,' );
define( 'LOGGED_IN_SALT',   'iiu;GS-6RUrX_M6m!$mm1^b$:XXnJEHSh}@i|(<bBM|k-=qvu$6m+_yQpy)O|.5j' );
define( 'NONCE_SALT',       'kxzBsa;Sj`}dZ?~Krr5Zq8qV<$hN}U<o Cpg@? 8IQnU,S[u|b18Szr(WxE)rO{m' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
