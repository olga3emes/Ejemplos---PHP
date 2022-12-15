<?php
include __DIR__ ."/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("MiLogger");
$log->pushHandler(new StreamHandler("logs/milog.log", Logger::DEBUG));

$log->debug("Esto es un mensaje de DEBUG");
$log->info("Esto es un mensaje de INFO");
$log->warning("Esto es un mensaje de WARNING");
$log->error("Esto es un mensaje de ERROR");
$log->critical("Esto es un mensaje de CRITICAL");
$log->alert("Esto es un mensaje de ALERT");
?>
<?php
$log->warning("Producto no encontrado", [$producto]);
$log->warning("Producto no encontrado", ["datos" => $producto]);
?>
<?php
// error.log
$log->pushHandler(new StreamHandler("php://stderr", Logger::DEBUG));
?>
<?php
$this->log = new Logger("MiApp");
$this->log->pushHandler(new StreamHandler("logs/milog.log", Logger::DEBUG));
$this->log->pushHandler(new FirePHPHandler(Logger::DEBUG));
?>
<?php
$this->log->warning("Producto no encontrado", [$producto]);
?>
<?php
$log = new Logger("MiLogger");
$log->pushHandler(new RotatingFileHandler("logs/milog.log", 0, Logger::DEBUG));
$log->pushProcessor(new IntrospectionProcessor());
$log->pushHandler(new StreamHandler("php://stderr", Logger::WARNING));
// no usa Introspection pq lo hemos apilado después, le asigno otro
$log->pushProcessor(new WebProcessor());
?>
<?php
$log = new Logger("MiLogger");
$rfh = new RotatingFileHandler("logs/milog.log", Logger::DEBUG);
$rfh->setFormatter(new JsonFormatter());
$log->pushHandler($rfh);
?>
<?php
namespace Dwes\Ejemplos\Util
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LogFactory {

    public static function getLogger(string $canal = "miApp") : Logger {
        $log = new Logger($canal);
        $log->pushHandler(new StreamHandler("logs/miApp.log", Logger::DEBUG));

        return $log;
    }
}
?>

<?php
namespace Dwes\Ejemplos\Util

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class LogFactory {

    public static function getLogger(string $canal = "miApp") : LoggerInterface {
        $log = new Logger($canal);
        $log->pushHandler(new StreamHandler("log/miApp.log", Logger::DEBUG));

        return $log;
    }
}
?>
<?php

namespace Dwes\Ejemplos\Model;

use Dwes\Ejemplos\Util\LogFactory;
use Monolog\Logger;

class Cliente {

    private $codigo; 

    private Logger $log;

    function __construct($codigo){ 
        $this->codigo=$codigo; 

        $this->log = LogFactory::getLogger();
    }

    /// ... resto del código
}
