<?php
// tao ra khuon mau ten la ConNguoi su dung tu khoa class
class ConNguoi
{
    // properties
    public $name;

    // methods
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$binh = new ConNguoi();
echo 21 . "<br>";

echo 23 . "<br>";

$binh->setName('Binh Ngu Gat');
echo $binh->getName();