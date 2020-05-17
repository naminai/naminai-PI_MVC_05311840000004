<?php
 
namespace App\Core;
 
class Router {

    protected $controller = '\\App\\Controllers\\HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        
    }

    public function parseUrl($url) {
        // Bersihkan URL dari trailing '/' di belakang
        $url = rtrim($url, '/');
 
        // Bersihkan URL dari karakter-karakter aneh
        $url = filter_var($url, FILTER_SANITIZE_URL);
 
        // Explode url-nya dengan membaca pemisah '/' menjadi array
        $url = explode('/', $url);
 
        // return URL yang telah dipecah
        return $url;
    }
 
    public function dispatch($url) {
        $url = $this->parseUrl($url);

        // Cek apakah file kelas Controller ada.
        if(file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
           
            // Jika ada, set controller sesuai yang diminta
            //$this->controller = '\\App\\Controllers\\' . ucfirst($url[0]) . 'Controller';
            $this->controller = '\\App\\Controllers\\' . ucfirst($url[0]) . 'Controller';
            // Hapus item pertama dari array $url
            unset($url[0]);
            //echo $this->controller;
        }

        // Inisialisasi objek dari kelas Controller
        $this->controller = new $this->controller;

         // Parsing method yang harus dipanggil
        if(isset($url[1])) {
        // Cek apakah methodnya ada di dalam kelas controller
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
                //echo $this->method;
            }
        }

        // Params
        if(!empty($url)) {
            $this->params = array_values($url);
        }

        // Panggil method dari controller yang diminta serta kirimkan parameternya
        call_user_func([$this->controller, $this->method], $this->params);


    }

}
