<?php
echo "teste";
$b = true;
$num = 1;
$text = "desgraça";
$fracao = 3.5;

$array1 = ["lepo", "torna", "vapo"];

$array2 = [
    ["lepo" => "nossa"],
    ["torna" => "chaves"],
    ["vapo" => "douglas"]
];

echo "inteiro: ($num)/n";

var_dump($b, $num, $text, $fracao, $array1, $array2);

class Nome
{
    public $nome;

    function nome()
    {
        $this->nome = "lepo";
        return $this->nome;
    }
}
$obj = new Nome();
var_dump($obj->nome());
