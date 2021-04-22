<?php

namespace app\src;

use app\src\commands\CanceledCommand;
use app\src\commands\Command;

class Editor
{
    /**
     * @var string
     */
    private string $text = '';

<<<<<<< Updated upstream
    /**
     * @var CanceledCommand[]
     */
    private array $history = [];
=======
    public array $history = [];
>>>>>>> Stashed changes

    public function __construct(string $path){
        $this->text = file_get_contents($path);
    }

    public function getText(){
        return $this->text;
    }

    public function edit(Command $command){

        $this->text = $command->execute($this->text);

        if ($command instanceof CanceledCommand) {
            array_push($this->history, $command);
        }
    }

<<<<<<< Updated upstream
    public function undo(){
        if (count($this->history) === 0) return;
=======
        $this->text = $command->execute($this->text);

        if (get_class($command) !== CopyCommand::class) {
            array_push($this->history, $command);
        }
    }

    public function undo(){
>>>>>>> Stashed changes
        $this->text = (array_pop($this->history))->unExecute($this->text);
    }
}