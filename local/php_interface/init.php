<?
/**
 * - /local/php_interface/classes/{Path|raw}/{*|raw}.php
 * - /local/php_interface/classes/{Path|ucfirst,lowercase}/{*|ucfirst,lowercase}.php
 */
spl_autoload_register(function($sClassName)
{
    $sClassFile = __DIR__.'/classes';

    if ( file_exists($sClassFile.'/'.str_replace('\\', '/', $sClassName).'.php') )
    {
        require_once($sClassFile.'/'.str_replace('\\', '/', $sClassName).'.php');
        return;
    }

    $arClass = explode('\\', strtolower($sClassName));
    foreach($arClass as $sPath )
    {
        $sClassFile .= '/'.ucfirst($sPath);
    }
    $sClassFile .= '.php';
    if (file_exists($sClassFile))
    {
        require_once($sClassFile);
    }
});

/**
 * Project bootstrap files
 */
foreach( [
    /**
     * File for other kernel data:
     *    Service local integration
     *    Env file with local variables
     *        external service credentials
     *        feature enable flags
     */
    __DIR__.'/kernel.php',

    /**
     * Events subscribe
     */
    __DIR__.'/events.php',

    /**
     * Include composer libraries
     */
    __DIR__.'/vendor/autoload.php',

    /**
     * Include old legacy code
     *   constant initiation etc
     */
    __DIR__.'/legacy.php',
    ]
    as $filePath )
{
    if ( file_exists($filePath) )
    {
        require_once($filePath);
    }
}
unset($filePath);
require_once(__DIR__.'/legacy.php');
?>