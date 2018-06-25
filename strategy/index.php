<?php

// encapsulate and make them interchangeable

interface Logger {
    public function log($data);
}

// Define a family of algorithms
class LogToFile implements Logger{

    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}

class LogToDatabase implements Logger {

    public function log($data)
    {
        var_dump('Log the data to a database');
    }
}

class LogToXWebService implements Logger {

    public function log($data)
    {
        var_dump('Log the data to a web service');
    }
}

class App {
    public function log($data, Logger $logger) {
        $logger->log($data);
    }
}

$app = new App();

$app->log('Some information here', new LogToDatabase);
