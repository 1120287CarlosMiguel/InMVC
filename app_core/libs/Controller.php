<?php

/**
 * Class Controller
 *
 * @package InMVC
 */
class Controller
{
    /**
     * The constructor of this class automatically initializes
     * the View and sets the corresponding model path. If the
     * model file exists, it calls it.
     *
     * @param $name
     */
    function __construct($name)
    {
        $this->view = new \View();

        $path = ROOT . 'models/' . $name . '.php';

        if (file_exists($path)) {
            require $path;

            $modelName = "\\Model\\" . $name;
            $this->model = new $modelName();
        }
    }

}