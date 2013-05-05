<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author mackendy
 */
class index extends Controller {
    //put your code here
    
    public function all(){
       
        $d['home'] = $this
            ->getService('db')
            ->getOneRepository('indexManager')
            ->getEvents();
    
        $this->set($d);
        $this->render('home','layout');
        
        //return $this;
    }
}

?>
