<?php

Class simpleUnzip
{
    const WRONG_PARAM = 1;
    const UNZIPED     = 2;
    const NO_ERROR    = 3;
    const ERROR       = 4;
    const NOT_EXIST   = 5;

    protected $resultStatus;
    protected $zipFile;
    protected $resultMessages = array(
        self::WRONG_PARAM => 'Wrong params',
        self::UNZIPED     => 'Unziped!',
        self::ERROR       => 'Error during unziping',
        self::NOT_EXIST   => 'File do not exist',
        self::NO_ERROR    => 'OK'
    );

    public function __construct()
    {
        $this->paramInitialize();
        if ($this->resultStatus == self::NO_ERROR) {
            $this->unzip();
        }
        $this->printResult();
    }

    /**
     *
     */
    protected function paramInitialize()
    {
        if(count($_SERVER['argv']) == 2){
            if(file_exists($_SERVER['argv'][1])){
                $this->zipFile = $_SERVER['argv'][1];
                $this->resultStatus = self::NO_ERROR;
            } else {
                $this->resultStatus = self::NOT_EXIST;
            }
        } else {
            $this->resultStatus = self::WRONG_PARAM;
        }
    }

    /**
     *
     */
    protected function unzip()
    {
        if($zip = zip_open($this->zipFile))
        {
            while ($zip_entry = zip_read($zip))
            {
                if (zip_entry_open($zip,$zip_entry,"r"))
                {
                    $file_name = getcwd().'/'.zip_entry_name($zip_entry);
                    $fstream = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

                    file_put_contents($file_name, $fstream );
                }
                zip_entry_close($zip_entry);
            }
            zip_close($zip);
            $this->resultStatus = self::UNZIPED;
        } else
        {
            $this->resultStatus = self::ERROR;
        }
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
new simpleUnzip();