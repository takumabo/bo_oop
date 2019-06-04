<?php

//演習問題1

//インストラクタ
$kid = new Kid();

//個別に出力する
// $kid->setName('');
// $kid->setSex('');


class  Kid{
    //プロパティ
    private $name;
    private $sex;

    // 初期値設定(コンストラクタ)
    function __construct(){
        $this->name = 'Seed';
        $this->sex = 'boy';
    }


    //メソッド(name)
    public function setName($aaa){
    $this->name = $aaa;
  }
    public function getName(){
        return $this->name;
    }

    //メソッド(sex)
    public function setSex($bbb){
        $this->sex = $bbb;
    }
    public function getSax(){
        return $this->sex;
    }


    //性別に応じて出力を変えるメソッド
    public function showName(){
        if($this->sex == 'boy'){
            return $this->name .' くん';
        } elseif($this->sex == 'girl') {
            return $this->name . ' ちゃん';
        } else {
            return $this->name .'不明';
        }
    }
}

//最終出力部分
echo $kid->showName();