<?php
class Facebook
{
    public function checkUserId($userId)
    {
        echo "LogIn Successfull and Your UseId is :" . $userId . "\n";
    }
    public function setStatusUpdate($message)
    {
        echo "Your Status is Updated to : " . $message . "\n";
    }
}
interface StatusUpdate
{
    function getUserId($userId);
    function postUpdate($message);
}
class FacebookAdaptor implements StatusUpdate
{
    protected $facebook;

    public function __construct($facebook)
    {
        $this->facebook = $facebook;
    }
    public function getUserId($userId)
    {
        $this->facebook->checkUserId($userId);
    }
    public function postUpdate($message)
    {
        $this->facebook->setStatusUpdate($message);
    }
}
$statusUpdate = new FacebookAdaptor(new Facebook);
$statusUpdate->getUserId(781807);
$statusUpdate->postUpdate("Hello, I am connecting with peoples");

?>