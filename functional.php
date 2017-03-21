<?php

class LinkedList
{

    private $val,
            $ref;

    public function __construct($val=[])
    {
        $this->val = $val;
    }

    public function cons($val, $ref)
    {
        $this->val = $val;
        $this->ref = $ref;
        return $this;
    }

    public function hd()
    {
        return $this->val;
    }

    public function tl()
    {
        return $this->ref;
    }   

    public function match()
    {
        if ($this->ref instanceof LinkedList)
        {
            return 2;
        }
        if ($this->val == [])
        {
            return 0;
        }
        return 1;
    } 

}

function nil() 
{
    return (new LinkedList());
}

function cons($val, $ref) 
{
    return (new LinkedList())->cons($val, $ref);
}

function hd($x)
{
    return $x->hd();
}

function tl($x)
{
    return $x->tl();
}

function match($x)
{
    return $x->match();
}

function not_nil($x)
{
    return ($x->match() > 0);
}

function pp($x)
{
    if (not_nil($x))
    {
        $h = hd($x);
        $t = tl($x);
        echo "{$h}::";
        return pp($t);
    }
    else
    {
        echo "[]\n";
    }
}

function iter($f, $x)
{
    if (not_nil($x))
    {
        call_user_func($f, hd($x));
        iter($f, tl($x));
    }
}

function map($f, $x)
{
    if (not_nil($x))
    {
        $v = call_user_func($f, hd($x));
        return cons($v, map($f, tl($x)));
    }
    else
    {
        return nil();
    }
}

function map_tr($f, $x, $z)
{
    if (not_nil($x))
    {
        $v = call_user_func($f, hd($x));
        return map_tr($f, tl($x), cons($v, $z));
    }
    else
    {
        return $z;
    }
}

function fold($f, $x, $a)
{
    if (not_nil($x))
    {
        $a = call_user_func($f, hd($x), $a);
        return fold($f, tl($x), $a);
    }
    else
    {
        return $a;
    }
}

