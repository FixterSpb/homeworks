<?php


namespace app\src;
/**
 * @static
 */
final class Clipboard
{
    private ?Clipboard $instance= null;
    private string $text = '';

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public function getInstance() :Clipboard{
        if (!$this->instance) {
            $this->instance = new static();
        }
        return $this->instance;
    }

    public function set(string $text){
        $this->text = $text;
    }

    public function get(){
        return $this->text;
    }
}