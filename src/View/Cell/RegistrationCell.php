<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Registration cell
 */
class RegistrationCell extends Cell
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
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
    }

    public function step1()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
        }
        $this->set('user', $user);
    }

    public function step2()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
        }
        $this->set('user', $user);
    }

    public function step3()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
        }

        $this->set('user', $user);
    }

    public function confirm()
    {
        $user = $this->Users->newEntity();
        $this->set('user', $user);
    }

    public function complete()
    {
    }
}
