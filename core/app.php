<?php

class app
{
    protected $controler = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->perseUrel();

        if (isset($url[0]) && file_exists('../app/controler/' . $url[0] . 'controler.php')) {
            $this->controler = $url[0];
            
            unset($url[0]);
        }

        require_once '../app/controler/' . $this->controler . 'controler.php';

        $controlerClass = $this->controler . 'controler';
        $this->controler = new $controlerClass;


        if (isset($url[1]) && method_exists($this->controler, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controler, $this->method], $this->params);
    }

    private function perseUrel()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
