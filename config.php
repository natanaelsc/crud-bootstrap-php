<?php //Configurações

/** O nome do banco de dados*/
define('DB_NAME', 'db_crud');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/crud-bootstrap-php/');
	
/** CSS Local **/
if ( !defined('BASEURL_CSS') )
	define('BASEURL_CSS', 'css/style.css/');

/** Bootstrap CSS **/
if ( !defined('BASEURL_BOOTSTRAP') )
	define('BASEURL_BOOTSTRAP', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');	

/** JavaScript Bundle with Popper **/
if ( !defined('BASEURL_SCRIPT') )
	define('BASEURL_SCRIPT', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js');	

/** jQuery **/
if ( !defined('BASEURL_JQUERY') )
	define('BASEURL_JQUERY', 'http://code.jquery.com/jquery-3.6.0.min.js');	

/** AJAX **/
if ( !defined('BASEURL_AJAX') )
	define('BASEURL_AJAX', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');	

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

