<?php

//演習問題1

//インストラクタ
$kid = new Kid();

//個別に出力する
$kid->setName('武田鉄矢');
$kid->setSex('girl');
// 問２
$kid->setAge(6);


class  Kid{
    //プロパティ
    private $name;
    private $sex;
    //問２
    private $age;

    // 初期値設定(コンストラクタ)
    function __construct(){
        $this->name = 'Seed';
        $this->sex = 'boy';
        //問２
        $this->age = 10;
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

    // 問２
    public function setAge($ccc){
        $this->age = $ccc;
    }
    public function getAge(){
        return $this->age;
    }


    // 性別に応じて出力を変えるメソッド
    // 問２　12歳以上なら「○○君／○○さん」と出力
    public function showName(){
        if($this->sex == 'boy' && $this->age >= 12){
            return $this->name .' 君';
        } elseif($this->sex == 'girl' && $this->age >= 12) {
            return $this->name . ' さん';
        } elseif($this->sex == 'boy' && $this->age <= 11) {
            return $this->name . ' くん';
        } elseif($this->sex == 'girl' && $this->age <= 11 ){
            return $this->name .' ちゃん';
        } else {
            return $this->name .' 不明';
        }
    }
}

echo $kid->showName();