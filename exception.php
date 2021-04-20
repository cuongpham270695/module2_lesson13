<?php

//class divideByZeroException extends Exception
//{
//    public function __toString()
//    {
//        return "Can't divide by Zero";
//    }
//}
function divide($numerator, $denominator)
{
    if ($denominator == 0) {
//        throw new divideByZeroException();
        $exception = new Exception("Can't divide by zero");
        throw $exception;
    } else {
        return $numerator / $denominator;
    }
}

try{
    $result = divide(100,5);
    echo $result . "<br>";
    $result = divide(100,0);
    echo $result;
}
//catch (divideByZeroException $e){
catch (Exception $e){
    echo "Error: " . $e->getMessage();
}