<?php
namespace Acme\Observer;

/*
 * В php есть встроенный в язык интерфейс bplfntkz
 *
* @link http://php.net/manual/en/class.splsubject.php
 *
 *     interface SplSubject
 *     {
 *         // Присоединяет наблюдателя к издателю.
 *         public function attach(SplObserver $observer);
 *
 *         // Отсоединяет наблюдателя от издателя.
 *         public function detach(SplObserver $observer);
 *
 *         // Уведомляет всех наблюдателей о событии.
 *         public function notify();
 *     }
 * */

use SplObserver;

class Subject implements \SplSubject {

    private $observers = [];

    public function __construct() {
        $this->observers["*"] = [];
    }

    private function initRubric($rubric) {
        if(!isset($this->observers[$rubric])) {
            $this->observers[$rubric] = [];
        }
    }

    public function attach(SplObserver $observer, $rubric = "*")
    {
        $this->initRubric($rubric);
        $this->observers[$rubric][] = $observer;
    }


    public function detach(SplObserver $observer, $rubric = "*")
    {

        foreach($this->observers[$rubric] as $i => $obs) {
            if($obs == $observer) {
                unset($this->observers[$rubric][$i]);
            }
        }
    }

    public function notify($rubric = "*", $message = null)
    {
        foreach($this->getRubricObservers($rubric) as $observer) {
            $observer->update($this, $message);
        }
    }

    private function getRubricObservers($rubric = "*")
    {
        $this->initRubric($rubric);
        $rubric = $this->observers[$rubric];
        $all = $this->observers["*"];

        return array_merge($rubric, $all);
    }



    // business logic

    public function news($title)
    {
        echo "Создана новая новость <br>";
        $this->notify("news", "новая новость " . $title);
    }

    public function action($title)
    {
        echo "Началась новая акция <br>";
        $this->notify("action", "новая акция " . $title);
    }

}



