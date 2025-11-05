<?php
// Definición de la clase Router (encargada de analizar la URL y ejecutar el controlador correspondiente)
class Router {

    // Estas propiedades almacenarán el nombre del controlador y del método que se deben ejecutar
    //estas dos propiedades me van a servir para saber que controlador estoy invocando
    // y que metodo estamos invocando dentro de ese controlador 
    private $controller;
    private $method;

    // 🔹 Constructor: se ejecuta automáticamente al crear una instancia de Router
    public function __construct() { 
        $this->matchRoute(); // Llama al método matchRoute() para analizar la URL y determinar el controlador/método, dentro del constructor se invoca el metodo matchRoute
    }

    // 🔹 Método para interpretar la URL y determinar qué controlador y método deben ejecutarse
    public function matchRoute() { 
        // La constante URL se supone definida en otro archivo (por ejemplo, index.php) con la URL solicitada
        // Ejemplo: define('URL', $_GET['url']); 

        $url = explode('/', URL); 
        // Divide la URL en partes usando '/' como separador
        // Ejemplo: "page/home" → ['page', 'home']

        // Asigna el primer segmento como controlador (si no hay nada, usa 'page' por defecto)
        $this->controller = !empty($url[1]) ? $url[1] : 'page'; // se obtiene el controlador desde la url

        // Asigna el segundo segmento como método (si no hay nada, usa 'home' por defecto)
        $this->method = !empty($url[2]) ? $url[2] : 'home'; // se obtiene el metodo desde la url
                                    
        // Añade la palabra 'controller' al nombre del controlador
        // Ejemplo: si $controller = 'page', ahora será 'pagecontroller'
        $this->controller = $this->controller . 'controller';
        
        // Carga el archivo PHP del controlador correspondiente desde la carpeta 'controller'
        // __DIR__ devuelve la ruta del archivo actual (donde está Router.php)
        require_once(__DIR__ . '/controller/' . $this->controller . '.php');
    }

    // 🔹 Método que ejecuta el controlador y su método correspondiente
    public function run() { 
        $controller = new $this->controller(); // Crea una instancia del controlador
        $method = $this->method;               // Asigna el nombre del método que se ejecutará

        $controller->$method(); // Llama dinámicamente al método dentro del controlador
        // Ejemplo: si el controlador es PageController y el método es home(), ejecuta PageController->home();
    }

}
?>
