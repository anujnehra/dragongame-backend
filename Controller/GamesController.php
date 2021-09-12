<?php

App::uses('AppController', 'Controller');

/**
 * Games Controller
 */
class GamesController extends AppController
{

    public $scaffold;
    public $components = array('RequestHandler');
    public $uses = array('Game');

    public function add()
    {
        $this->Game->create();
        if ($this->Game->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
                'response' => $message,
                '_serialize' => array('response')
        ));
    }

}
