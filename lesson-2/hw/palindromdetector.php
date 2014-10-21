<?php


Class PalindromDetector {
    const IS_PALINDROM     = 0;
    const NOT_PALINDROM    = 1;
    const WRONG_SYMBOLS    = 2;
    const WRONG_PARAMS_NUM = 3;
    const NO_ERROR         = 4;

    /**
     * @var string
     */
    protected $stringToCheck;
    /**
     * @var int
     */
    protected $resultStatus;


    /**
     * @var array
     */
    protected $resultMessages = array(
        self::WRONG_SYMBOLS    => 'Only A-Z symbols allowed',
        self::IS_PALINDROM     => 'Great! You entered palindrom string',
        self::NOT_PALINDROM    => 'Sorry! This is no polindrom string',
        self::WRONG_PARAMS_NUM => 'Please enter ONE string allowed',
        self::NO_ERROR         => 'OK',
    );

    /**
     *
     */
    public function __construct()
    {
        $this->stringInitialize();
        if ($this->resultStatus == self::NO_ERROR) {
            $this->palindromChecker();
        }
        $this->printResult();
    }

    /**
     * @return bool
     */
    protected function palindromChecker()
    {
        $error = false;
        $stack = new SplStack();
        $queue = new SplQueue();
        $stringArray = str_split($this->stringToCheck);
        foreach($stringArray as $value) {
            $stack->push($value);
            $queue->enqueue($value);
        }
        foreach($stringArray as $value) {
            if($queue->dequeue() != $stack->pop()) {
                $error = true;
            }
        }
        $this->resultStatus = $error ? self::NOT_PALINDROM : self::IS_PALINDROM;
        return !$error;
    }

    /**
     * @return bool
     */
    protected function stringInitialize()
    {
        $error = false;
        if(count($_SERVER['argv']) == 2){
            if((preg_match("/^[a-zA-Z]+$/", $_SERVER['argv'][1]))) {
                $this->stringToCheck = $_SERVER['argv'][1];
                $this->resultStatus = self::NO_ERROR;
            } else {
                $error = true;
                $this->resultStatus = self::WRONG_SYMBOLS;
            }
        } else {
            $error = true;
            $this->resultStatus = self::WRONG_PARAMS_NUM;
        }
        return !$error;
    }

    /**
     *
     */
    protected function printResult()
    {
        if ($this->resultStatus != self::NO_ERROR) {
            echo $this->resultMessages[$this->resultStatus] . PHP_EOL;
        } else {
            echo $this->resultMessages[self::NO_ERROR] .  PHP_EOL;
        }
    }
}
new PalindromDetector();