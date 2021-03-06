<?php
require_once('abstract_model.php');
class Friend_model extends Abstract_Model{
    public $id;
    public $user;
    public $friend;

    function __construct()
    {
        parent::__construct();
    }
    public function tableName()
    {
        return 'friend';
    }
    /**
     * @param mixed $friend
     */
    public function setFriend($friend)
    {
        $this->friend = $friend;
    }

    /**
     * @return mixed
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }


}