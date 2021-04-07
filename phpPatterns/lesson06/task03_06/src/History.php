<?php


namespace app\src;


class History
{
//    private int $textStart;
//    private string $subString;
//    private string $commandClassName;
    private Command $command;

    public function __construct(Command $command){//string $commandClassName, int $textStart, string $subString){
//        $this->subString = $command->;
//        $this->textStart = $textStart;
//        $this->commandClassName = $commandClassName;
        $this->command = $command;
    }

//    /**
//     * @return string
//     */
//    public function getSubString(): string
//    {
//        return $this->subString;
//    }
//
//    /**
//     * @return int
//     */
//    public function getTextStart(): int
//    {
//        return $this->textStart;
//    }
//
//    /**
//     * @return string
//     */
//    public function getCommandClassName(): string
//    {
//        return $this->commandClassName;
//    }

    /**
     * @return Command
     */
    public function getCommand()
    {
        return $this->command;
    }

}