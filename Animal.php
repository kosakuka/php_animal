<?php
class Animal{
    public function __construct(){
        $this->iv = rand(0,4);
        //その動物の個体値（Individual Value）要するに才能　例えば、同じ猫の中でも
        //強い弱いが存在するわけだが、それを5段階の値で表している
        $this->strength = 0;//動物の最終的な攻撃力　とりあえず0で初期化（継承先で設定）
        $this->voice = '';//その動物の鳴き声　とりあえず空の文字列で初期化
        $this->name = '';//その動物の名前
    }
    public function eat($anml){
        echo "こちらの{$this->name}の攻撃力は{$this->strength}\n";
        echo "あいての{$anml->name}の攻撃力は{$anml->strength}\n";
        if($this->strength > $anml->strength){
            echo "相手を捕食した\n";
            // $anml->__destruct();
            $anml->shout();
        }elseif($this->strength == $anml->strength){
            echo "相打ちになった\n";
        }else{
            echo "返り討ちにあった\n";
            // $this->__destruct();
            $this->shout();
        }
    }
    public function shout(){
        echo "{$this->voice}.....";//喰われたときに叫ぶ
    }
    // public function __destruct(){
    //     echo "{$this->voice}...\n";//食べられる際の鳴き声
    // }
}