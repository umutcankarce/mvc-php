<?php

declare (strict_types=1);
define("AUTHOR_META","INNOVACRAFT");
define("DESCRIPTION_META","MVC PROJECT");

define("DEFAULT_LANG","tr");
define('BASE_URL','http://mvcapp.test');
define('APP_PATH',"app/");
define("LANG_PATH","app/Languages/");
define('HELPERS_PATH','app/Helpers/');
define('CORE_PATH','app/Core/');
define('CONFIG_PATH','app/Config/');
define('VIEWS_PATH','resources/views/');
define('ROUTES_PATH','routes/');
define('PUBLIC_CSS_PATH',BASE_URL.'/public/assets/css/');
define('PUBLIC_JS_PATH',BASE_URL.'/public/assets/js/');



// HTTP STATUS CODE
define("STATUS_CODE_404",404);
define("STATUS_CODE_201",201);


require_once CONFIG_PATH."config.php";
require_once CONFIG_PATH."db.php";
require_once HELPERS_PATH."helpers.php";
require_once CORE_PATH."Route.php";
require_once ROUTES_PATH."web.php";
require_once ROUTES_PATH."api.php";

