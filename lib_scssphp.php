<?php
namespace LIB;
class lib_scssphp extends \LIB\lib_php{
    public static function get_class(){
        return self::class;}
    public static function php_autoload(){
        //require_once dirname(__FILE__).'/lib/scss.inc.php';
        require_once dirname(__FILE__).'/lib/src/Logger/LoggerInterface.php';
        require_once dirname(__FILE__).'/lib/src/Logger/StreamLogger.php';
        require_once dirname(__FILE__).'/lib/src/Type.php';
        require_once dirname(__FILE__).'/lib/src/OutputStyle.php';
        require_once dirname(__FILE__).'/lib/src/Compiler.php';
        return true;}
    public static function version(){
        return 'https://github.com/scssphp/scssphp';}
}