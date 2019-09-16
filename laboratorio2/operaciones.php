<?php

class operaciones{

    private $n, $cadena, $a, $b, $c;
    function __construct($n, $cadena, $a, $b, $c)
    {
        $this->n = $n;
        $this->cadena=$cadena;
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }

    public function calcularFibonaci()
	{
        if($this->n >=1) echo "0&nbsp;";
        if($this->n >=2) echo "1";

        $x=0;
        $y=1;
        for($i=0 ; $i<$this->n -2 ; $i++){
            $c=$x+$y;
            echo "&nbsp;".$c;
            $x=$y;
            $y=$c;
        }
    }
    public function calcularMenor()
	{
        if($this->a < $this->b and $this->a < $this->c) echo $this->a;
        if($this->b < $this->a and $this->b < $this->c) echo $this->b;
        if($this->c < $this->b and $this->c < $this->a) echo $this->c;
    }
    public function piramide()
	{
        $tam= strlen($this->cadena);
        if($tam%2 == 0) $this->cadena = "_" . $this->cadena ;
        
        $x=1;
        for($i=intdiv($tam,2);$i>=0  ; $i--){
            echo "<h1>";
            for($j=0;$j<=$i;$j++)echo "&nbsp;";
            echo substr($this->cadena,$i, $x);
            echo "</h1>";
            $x+=2;

        }
        
	}
}

