<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author mackendyjeudy
 */
class test extends Controller {
    //put your code here
    public function add()
    {
        $d = [];
        $d['test'] = [
            'titre'=>'Salut',
            'description'=>'Exemple de description'
        ];
        
        $this->set($d);
        
        $this->render('test','layout');
        //return $this;
    }
}

?>
