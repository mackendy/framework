<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * controller principal de mon api mvc
 *
 * @author mackendyjeudy
 */
abstract class Controller {
    //put your code here
    protected $layout;
    protected  $vars = [] ;
    protected $serviceManager;




    public function __construct(ServiceManager $serviceManager) {
        $this->serviceManager = $serviceManager;
    }
    
    public function getService($serviceName){
        return $this
                ->serviceManager
                ->getService($serviceName);
    }

    
    /**
     * tableau de variables demandé par le controller principal
     * @param type $d
     */
    public function set($d){
        $this->vars = array_merge($this->vars , $d);
        
    }
    /**
     * @descption retourne la vue demandé
     * @param type $filename
     */
    public function render($filename,$layout='')
    {   
        $this->layout = $layout;
        //var_dump($this->vars['home']->fetchAll());
        //$this->vars =  $this->vars->fetchAll(PDO::FETCH_ASSOC);
        extract($this->vars);
        
       
        ob_start();
        require APPLICATION_PATH.'views/'.  get_class($this).'/'.$filename.'.php';
        
        $content_for_layout = ob_get_clean();
        
        if($this->layout==FALSE){
            echo $content_for_layout;
        }else{
            require APPLICATION_PATH.'views/layout/'.$this->layout.'.php'; 
        }
        //return $this->vars;
    }
    
    
}

?>
