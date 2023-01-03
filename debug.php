<?php

class Debug {
    protected $_global_timer_flag = 0;

    public function initiate() {
        ini_set('display_errors', 'Off');

        error_reporting(E_ERROR | E_PARSE);
        set_error_handler(array($this, 'errorHandler'), E_ERROR | E_PARSE);
        set_exception_handler(array($this, 'exceptionHandler'));

            if (!ini_get('log_errors')) {
                ini_set('log_errors', true);
            }

            if (!ini_get('error_log')) {
                ini_set('error_log', true);
            }

        $this->_global_timer_flag = microtime(true);
    }

    public function exceptionHandler($exception)
    {
        if(isset($_GET['show_debug_info']) && $_GET['show_debug_info'] == 1) {
            echo $this->_renderErrorHTML($exception);
        }
    }

    function errorHandler($errno, $errstr, $errfile, $errline) {
        $this->exceptionHandler(new Exception('Error'));
    }

    public function _renderErrorHTML(Exception $exception)
    {
        return "<h1><b>Custom error:</b> [{$exception->getCode()}] {$exception->getMessage()}<br> Error on line {$exception->getLine()} in {$exception->getFile()}<br></h1>";
    }

    public function triggerError($error_message, $error_code = 500) {
        $debug = debug_backtrace();
        $this->exceptionHandler(new ErrorException($error_message, $error_code, E_ERROR, $debug[0]['file'], $debug[0]['line']));
    }
}