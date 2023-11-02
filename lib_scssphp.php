<?php
namespace LIB;
class lib_scssphp extends \LIB\lib_php{
    public static function get_class(){
        return self::class;}
    public static function php_autoload(){
        require_once dirname(__FILE__).'/lib/src/CompilationResult.php';
        require_once dirname(__FILE__).'/lib/src/Colors.php';
        require_once dirname(__FILE__).'/lib/src/Base/Range.php';
        require_once dirname(__FILE__).'/lib/src/Util.php';
        require_once dirname(__FILE__).'/lib/src/Formatter/OutputBlock.php';
        require_once dirname(__FILE__).'/lib/src/Warn.php';
        require_once dirname(__FILE__).'/lib/src/Compiler/Environment.php';
        require_once dirname(__FILE__).'/lib/src/Formatter.php';
        require_once dirname(__FILE__).'/lib/src/Formatter/Expanded.php';
        require_once dirname(__FILE__).'/lib/src/Block.php';
        require_once dirname(__FILE__).'/lib/src/Block/CallableBlock.php';
        require_once dirname(__FILE__).'/lib/src/Node.php';
        require_once dirname(__FILE__).'/lib/src/Node/Number.php';
        require_once dirname(__FILE__).'/lib/src/Parser.php';
        require_once dirname(__FILE__).'/lib/src/Logger/LoggerInterface.php';
        require_once dirname(__FILE__).'/lib/src/Logger/StreamLogger.php';
        require_once dirname(__FILE__).'/lib/src/Type.php';
        require_once dirname(__FILE__).'/lib/src/OutputStyle.php';
        require_once dirname(__FILE__).'/lib/src/Compiler.php';
        return true;}
    public static function version(){
        return 'https://github.com/leafo/scssphp/';}
}