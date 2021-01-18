<?php
namespace uegok\app\controllers;

class CatController {

    public array $pathParameter;

    public function __construct(array $pathParameter) {

        $this->pathParameter = $pathParameter;
    }

    public function foodMethod() {

        echo $this->pathParameter['id'];
    }
}



class IndexController {

    public array $pathParameter;

    public function __construct(array $pathParameter) {

        $this->pathParameter = $pathParameter;
    }

    public function IndexMethod() {

        echo "Hello world!";
    }
}
