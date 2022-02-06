<?php


namespace App\classes;


class Operator
{
//    =====Operator====

//    public $firstNumber;
//    public $lastNumber;

    /*
     * Arithmatic operator
            * Binary operator (+,-,*,/,%)
            * unary operator (++,--,(-))

     * Assignment Operator (=,+=,-=,*=,%=,.=)
     * Conditional Operator(>,>=,<,<=,==,!=,===,!==)
     * logical Operator (&&,||,!)
     */

    public $x;
    public $y;
    protected $z;


    public function index()
    {
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;


//        echo $this->x + $this->y; //30
//        echo '<br/>';
//        echo $this->x - $this->y; //-10
//        echo '<br/>';
//        echo $this->x * $this->y; //200
//        echo '<br/>';
//        echo $this->x / $this->y; // 0.5
//        echo '<br/>';
//        echo $this->x % $this->y; //10

//        echo $this->x++; //10
//        echo '<br/>';
//        echo $this->x--; //11
//        echo '<br/>';
//        echo ++$this->x;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';

//        echo -$this->x;
//        echo '<br/>';

//        echo $this->x =$this->y;
//        echo '<br/>';

//        echo $this->x += $this->y;      //$x = $x+$y =30
//        echo '<br/>';
//        echo $this->x -= $this->y;      //$x = $x-$y =10
//        echo '<br/>';
//        echo $this->x *= $this->y;      //$x = $x*$y =200
//        echo '<br/>';
//        echo $this->x /= $this->y;      //$x = $x/$y =10
//        echo '<br/>';
//        echo $this->x %= $this->y;       //$x = $x%$y =10
//        echo '<br/>';
//        echo $this->x .= $this->y;      //$x = $x.$y =1020
//        echo '<br/>';

//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>.....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>.....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>.....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>.....<br/>';

//        =======statement======
            /*
             * single Line Statement
             * conditional Statement
                 * if
                 * if else
                 * if else if
                 * switch
             * Repeated Statement
                 * For
                 * WHILE
                 * DO WHILE
                 * FOREACH
             *  Arry
             */
//        echo 'hello world';
//        if ($this->x > $this->y)
//        {
//            echo 'Its true';
//        }
//        else{
//            echo 'False';
//        }

//        if ($this->x > $this->y)
//        {
//            echo 'savar';
//        }
//        elseif($this->y > $this->z)
//        {
//            echo 'Barishal';
//        }
//        elseif($this->z > $this->x)
//        {
//            echo 'Dhaka';
//        }


        switch ( $this->y)
        {
            case 10:
                echo "Hello world";
                break;
            case 20:
                echo "Hello BITM";
                break;
            case 30:
                echo "Hello Bangladesh";
                break;
            default:
                echo 'Bye';
        }

    }


}