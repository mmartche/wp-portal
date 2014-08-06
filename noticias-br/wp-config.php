<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/mmartche/Sites/carsale/noticias-br/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'carsale');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o FuxGV DmLs)E~oE]zA: J1{(StIN9mUf-Z`!vL1GDhPdAc!lL3QcL:4EGqT(Iq');
define('SECURE_AUTH_KEY',  '17Nqxz86bo=Q=jy74zz>lbS*SG CzgU7${9q}y?tt[QN?a:-vck;2|Dv=/z:Y/{=');
define('LOGGED_IN_KEY',    'GsMe #o.r}=,|<z:E`xG//E.MXw..NjUOWiuc H99q/T_!X!HE(_oVFuMV.]-w*h');
define('NONCE_KEY',        ']t9r^; :a=:<F`>qyZVfRx#WjMAD26l.|qK_[F/Lx} +|zNEJW,9x|74tg9+_bo_');
define('AUTH_SALT',        'L)dmCB9w6RI+&iQMhqblRu-V$MaU[&-wE.fyS(m+15e&m9k6(Nw4oN!g^p#mQq%.');
define('SECURE_AUTH_SALT', '4<eX[jj;|0ii|Pr|/?N28J#G=>uG83/c+nMaH5_L^npM6-E>=Hp%1MRS &I-`9.+');
define('LOGGED_IN_SALT',   'UBM7<GGprcHy-L%|:NQzu.pnHTN2Rf_#:V8aGxlAx<t8KuT~0|8b)]E0( |Mm.7#');
define('NONCE_SALT',       'nO)sq9olvc2Z>?)PX<HeyTqwF:W*6HdA9d!dnyK{0=]lpe+@nGyG^.wXM]G+tE{ ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');