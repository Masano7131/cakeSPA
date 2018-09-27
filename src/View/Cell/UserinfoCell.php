<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Userinfo cell
 */
class UserinfoCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize()
    {
      $this->loadModel('Users');
       $this->loadModel('UserInformations');
       $this->loadModel('UserHobbies');
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->getData());
        }
        $this->set(compact('user'));
    }
    public function information()
    {
      $user = $this->Users->newEntity();
      if ($this->request->is('post')){
          $user = $this->Users->patchEntity($user, $this->request->getData());
      }
      $this->set(compact('user'));
    }
    public function hobby()
    {
      $user = $this->Users->newEntity();
      if ($this->request->is('post')){
          $user = $this->Users->patchEntity($user, $this->request->getData());
      }
      $this->set(compact('user'));
    }
    public function confirm()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($applicant, $this->request->getData(),['associated' => ['Users']]);
            if ($this->Users->save($User)) {
                return $this->redirect(['controller' => 'Users','action' => 'complete']);
            }
        }
    }
}
