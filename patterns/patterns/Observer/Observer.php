<?php
namespace Acme\Observer;

/*
 *
 * В php есть встроенный в язык интерфейс наблюдателя
 *
* @link http://php.net/manual/en/class.splobserver.php
 *
 *     interface SplObserver
 *     {
 *         public function update(SplSubject $subject);
 *     }
 * */




class Observer implements \SplObserver
{
    private $login;

    public function __construct($login)
    {
        $this->login = $login;
    }

    public function update(\SplSubject $repository, $message = null)
    {
        echo "Пользователь $this->login оповещен - " . $message . "<br>";
    }
}