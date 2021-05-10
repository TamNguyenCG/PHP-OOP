<?php
class Application
{
    private string $name;
    public static int $count = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return "Application name: " . $this->name;
    }
}
    echo "Total objects count: ".Application::$count."<br/>";
    $app1 = new Application('App 1');
    echo "Total objects count: ".Application::$count."<br/>";
    $app2 = new Application('App 2');
    echo "Total objects count: ".Application::$count."<br/>";
    $app3 = new Application("App store 3");
    echo "Total objects count: ".Application::$count."<br/>";
    echo $app1."<br>";
    echo $app2."<br>";
    echo $app3."<br>";