<?php

//演習問題1


$kid = new Kid();

$kid->setShowName();

class  Kid{
    //プロパティ
    private $name;
    // private $sex;

    function __construct(){
        $this->name = 'Seed';
        // $this->sex = 'boy'
    }
    //メソッド
    function setShowName($aaa){
        $this->name = $aaa;
        // $this->sex = $aaa
    }

    function getShowName(){
        return $this->name;
        // return $this->sex;
    }
}