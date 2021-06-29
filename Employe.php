<?php
class Employe{
public $NamaE;
public $title;
public $salary;

    public function setNamaE($NamaE){
        $this->NamaE=$NamaE;
        }
    public function getNamaE()
        {
        return $this->NamaE;
    }

    public function setTitle($title){
        $this->title=$title;
        }
    public function getTitle()
        {
        return $this->title;
        }

    public function setSalary($salary){
            $this->salary=$salary;
            }
    public function getSalary()
            {
            return $this->salary;
    }
}
?>