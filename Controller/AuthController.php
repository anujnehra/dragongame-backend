<?php

App::uses('AppController', 'Controller');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

/**
 * Auth Controller
 */
class AuthController extends AppController
{

    /**
     * Scaffold
     *
     * @var mixed
     */
    public $scaffold;
    public $components = array('RequestHandler');
    public $uses = array('User');

    public function index()
    {
        $users = $this->User->find('all');
        $this->set(array(
                'users' => $users,
                '_serialize' => array('users')
        ));
    }

    public function view($id)
    {
        $user = $this->User->findById($id);
        $this->set(array(
                'user' => $user,
                '_serialize' => array('user')
        ));
    }

    public function register()
    {
        if ($this->request->is('post')) {
            $this->User->set($this->request->data);

            if ($this->User->validates()) {
                try {
                    $this->User->create();

                    if ($this->User->save($this->request->data)) {
                        $response = array("statusCode" => 200, "status" => "Success", "success" => array('user' => array('id' => $this->User->id, 'name' => $this->request->data['name'], 'email' => $this->request->data['email'])), "message" => array("Registered"));
                    } else {
                        $response = array("statusCode" => 200, "status" => "Error", "success" => false, "message" => array("Error in registering."));
                    }
                } catch (Exception $e) {
                    $response = array("statusCode" => 200, "status" => "Error", "success" => false, "message" => array("Error in registering.", $e->getMessage()));
                }
            } else {
                $errors = $this->User->validationErrors;
                $response = array("statusCode" => 400, "status" => "Error", "success" => false, "message" => array_values($errors));
            }

            $this->set(array(
                    'response' => $response,
                    '_serialize' => array('response')
            ));
        }
    }

    public function login()
    {
        if ($this->request->is('post') || $this->request->is('get')) {
            $userArray = array();
            $data = $this->request->data;

            if (!empty($data['username']) && !empty($data['password'])) {
                $userArray = $this->User->find('first', array(
                        'fields' => array('id', 'name', 'email'),
                        'conditions' => array('User.email' => $data['username'], 'User.password' => md5($data['password'])
                        )
                ));
            } else {
                $response = array("statusCode" => 400, "status" => "Error", "success" => false, "message" => array("Please enter email and password to login"));
            }


            if (!empty($userArray)) {
                $response = array("statusCode" => 200, "status" => "Success", "success" => $userArray, "message" => "Logged in Successfully");
            } else {
                $response = array("statusCode" => 400, "status" => "Error", "success" => false, "message" => array("Invalid Credentials!"));
            }

            $this->set(array(
                    'response' => $response,
                    '_serialize' => array('response')
            ));
        }
    }

    public function edit($id)
    {
        $this->User->id = $id;
        if ($this->User->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
                'message' => $message,
                '_serialize' => array('message')
        ));
    }

    public function delete($id)
    {
        if ($this->User->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
                'message' => $message,
                '_serialize' => array('message')
        ));
    }

    public function getuser()
    {
        if ($this->request->is('post') || $this->request->is('get')) {
            $user = $this->User->findById($this->request->data['id']);

            if (!empty($user)) {
                unset($user['User']['password']);
                $response = array("statusCode" => 200, "status" => "Success", "success" => $user, "message" => array("User found"));
            } else {
                $response = array("statusCode" => 400, "status" => "Error", "success" => false, "message" => array("User not found"));
            }
            $this->set(array(
                    'response' => $response,
                    '_serialize' => array('response')
            ));
        }
    }

    public function games()
    {
        if ($this->request->is('post') || $this->request->is('get')) {
            $user = $this->User->findById($this->request->data['id']);
            unset($user['User']['password']);

            if (!empty($user)) {
                $response = array("statusCode" => 200, "status" => "Success", "success" => $user, "message" => array("User found"));
            } else {
                $response = array("statusCode" => 400, "status" => "Error", "success" => false, "message" => array("User not found"));
            }


            $this->set(array(
                    'response' => $response,
                    '_serialize' => array('response')
            ));
        }
    }

}
