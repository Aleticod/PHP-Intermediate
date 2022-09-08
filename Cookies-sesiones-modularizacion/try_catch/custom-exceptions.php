<?php 

class MyException extends Exception {
    // public function __construct($message, $code = 0, Throwable $previous = null) {
    //     parent::__construct($message, $code, $previous);
    // }

    // public function __toString() {
    //     return __CLASS__ . ": [{$this->code}]: {$this->message}";

    public function getMyException() {
        return "Mi excepcion personalizada: ". $this->getMessage();
    }

}

class YourException extends Exception {
    public function getYourException() {
        return "Tu excepcion personalizada: " . $this->getMessage();
    }
}

try {
    $exception = readline("¿Que excepcion quieres? ");
    if ($exception == "my")
        throw new MyException("Mi excepcion heredada de Exception");
    else if ($exception == "your")
        throw new YourException("Tu excepcion");
    else
        echo "No hay excepcion";
} catch (MyException $e) {
    echo $e->getMessage() . "\n";
    echo $e->getMyException();
} catch (YourException $e) {
    echo $e->getMessage() . "\n";
    echo $e->getYourException();
} catch (Throwable $e) {
    echo "Ups! Algo salio mal: " . $e->getMessage();
} finally {
    echo "Esto se ejecuta siempre";
}