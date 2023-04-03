<?php
/*
| include db
*/

require_once __DIR__."/app/include/db/dataBase.php";

/*
| register configs
*/

require_once __DIR__."/app/configs/configs.php";

/*
| register request
*/

require_once __DIR__."/app/http/request.php";

/*
| register response
*/

require_once __DIR__."/app/http/response.php";

/*
| include main controller
*/

require_once __DIR__."/app/controllers/MainController.php";

/*
| include controller
*/

require_once __DIR__."/app/controllers/Controller.php";

/*
| Register routing
*/
require_once "app/routes/router.php";

