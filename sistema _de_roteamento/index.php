<?php

class Route{
    /*
    2 paremetros
    route: endereço da rota
    arquivo: arquivo que será carregado
    */
    public function add($route, $file)
    {
        // subistitui o primeiro e ultimo
        // $_REQUEST['uri'] será vazia se a requisição for na /

        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri = preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        if($reqUri == $route){
            include($file);
            exit;
        }

        
    }
}


    // Intancia de rotas
    $route = new Route();

    // Adicionando rotas
    $route->add('/home', 'home.php');