<?php

namespace app\src;

//use app\src\ICommand;

class Editor
{
    /**
     * @var string
     */
    private string $text = '';

    public array $history = [];

    public function __construct(string $path){
        $this->text = file_get_contents($path);
    }

    public function getText(){
        return $this->text;
    }

    public function edit(ICommand $command){

        $this->text = $command->execute($this->text);

        if (get_class($command) !== CopyCommand::class) {
            array_push($this->history, $command);
        }
    }

    public function undo(){
        $this->text = (array_pop($this->history))->unExecute($this->text);
    }
}