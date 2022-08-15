<?php
class Route{
    private $route=[];
    public  function addRoute($path,$controller,$method){
        $this->route[$path]=[
            'controller'=>$controller,
            'method'=>$method
        ];
    }
    public function getRoute(){
        return $this->route;
    }
    public function run($path){
        include __DIR__ .(isset($this->route[$path])
        ? "/app/controllers/{$this->route[$path]['controller']}.php"
        : '/app/controllers/404.php');
        $controller = new $this->route[$path]['controller'];
        return $controller->{$this->route[$path]['method']}();
        
    }
}
// if ( include __DIR__.(isset($this->$route[$path]))){
//     echo"z";
//     $this->route[$path]['controller'];
//     $controller = new $this->route[$path]['controller'];
//     return $controller->{$this->route[$path]['method']}();
// }
// else{
//     $this->route[$path]['controller'];}