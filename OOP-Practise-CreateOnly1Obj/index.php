<?php
class Applications
{
    private static ?Application $instance = null;

    public function __construct()
    {
    }

    public static function getInstance(): ?Application
    {
        if(self::$instance === null){
            self::$instance === new Applications();
            echo "ALO <br>";
        }
        return self::$instance;
    }
}
$app1=Applications::getInstance();
$app2=Applications::getInstance();