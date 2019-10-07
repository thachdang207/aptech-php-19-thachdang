<?php 
class Person{
    public $name;
    protected $sex;
    private $mat;
    function __construct($n)
    {
        $this->setMat($n);
    }
    function setName($n)
    {
        $this->name=$n;
    }
    protected function setSex($s)
    {
        $this->sex=$s;
    }
    private function setMat($m){
        $this->mat=$m;
    }
}
class Nu extends Person
{
    function __construct(){
        parent::__construct(2);
        $this->setSex('female');

    }
}
class Nam extends Person{
    function __construct(){
        parent::__construct(3);
        $this->setSex('male');
    }
}
$ok=new Nu();
$ok->setName('ok');
var_dump($ok);
echo "<br>";
$thach=new Nam();
$thach->setName('Thach');
var_dump($thach);