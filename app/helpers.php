<?php
define('__ROOT__', dirname(__DIR__) . '/');
define('__CONTROLLER__', __ROOT__ . 'controllers/');
define('__VIEW__', __ROOT__ . 'views/');
define('__SUBVIEW__', __VIEW__ . 'subviews/');
define('__LAYOUT__', __VIEW__ . 'layout/');
define('__MODEL__', __ROOT__ . 'models/');
define('__APP__', __ROOT__ . 'app/');
define('__DB__', __ROOT__ . 'database/');
define('__PUBLIC__', __ROOT__ . 'public/');

function autoload()
{
    $folders = ['database', 'app', 'controllers', 'models',];

    foreach ($folders as $folder) {
        $files = scandir(__ROOT__ . '/' . $folder);
        $excepts = [
            '.', '..', 'load.php', 'migrations', 'helpers.php',
        ];
        foreach ($files as $file) {
            if (in_array($file, $excepts)) {
                continue;
            }

            require_once __ROOT__ . '/' . $folder . '/' . $file;
        }
    }
}

autoload();
