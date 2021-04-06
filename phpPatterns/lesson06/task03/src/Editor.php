<?php

namespace app\src;

//use app\src\ICommand;

class Editor
{
    private string $text;

    public function __construct(string $path){
        $this->text = file_get_contents($path);
    }

    public function getText(){
        return $this->text;
    }

    public function edit(ICommand $command){

    }
}