<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function calculate($operation, $num1, $num2, $operation2, $num3, $num4)
    {
        function performOperation($operation, $num1, $num2)
        {
            switch ($operation) {
                case 'add': return $num1 + $num2;
                case 'subtract': return $num1 - $num2;
                case 'multiply': return $num1 * $num2;
                case 'divide': return $num2 != 0 ? $num1 / $num2 : 'Error: Cannot divide by zero';
                default: return 'Invalid Operation';
            }
        }

        $result1 = performOperation($operation, $num1, $num2);
        $result2 = performOperation($operation2, $num3, $num4);

        $bgColor1 = (is_numeric($result1) && $result1 % 2 == 0) ? 'green' : 'blue';
        $bgColor2 = (is_numeric($result2) && $result2 % 2 == 0) ? 'green' : 'blue';

        $textColor1 = ($num1 % 2 != 0) ? 'blue' : 'orange';
        $textColor2 = ($num2 % 2 != 0) ? 'blue' : 'orange';
        $textColor3 = ($num3 % 2 != 0) ? 'blue' : 'orange';
        $textColor4 = ($num4 % 2 != 0) ? 'blue' : 'orange';

        return view('result', compact('num1', 'num2', 'operation', 'result1', 'bgColor1', 'textColor1', 'textColor2', 'num3', 'num4', 'operation2', 'result2', 'bgColor2', 'textColor3', 'textColor4'));
    }
}
