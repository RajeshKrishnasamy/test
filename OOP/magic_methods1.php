<?php
// Declare a simple class
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
    public function __invoke()
    {
        return $this->foo;
    }

}

$class = new TestClass('Hello');
var_dump(is_callable($class));
echo $class;
