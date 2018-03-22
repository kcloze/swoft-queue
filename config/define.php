<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
! defined('DS') && define('DS', DIRECTORY_SEPARATOR);
// App name
! defined('APP_NAME') && define('APP_NAME', 'swoft');
// Project base path
! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));
// Register alias
$aliases = [
    '@root'       => BASE_PATH,
    '@env'        => '@root',
    '@app'        => '@root/src',
    '@runtime'    => '@root/runtime',
    '@configs'    => '@root/config',
    '@properties' => '@configs/properties',
    '@console'    => '@beans/console.php',
    '@commands'   => '@app/command',
];
\Swoft\App::setAliases($aliases);