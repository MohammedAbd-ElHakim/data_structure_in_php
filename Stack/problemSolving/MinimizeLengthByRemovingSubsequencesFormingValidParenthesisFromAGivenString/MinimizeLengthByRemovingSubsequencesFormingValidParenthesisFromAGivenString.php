<?php
include_once 'Autoload.php';

class MinimizeLengthByRemovingSubsequencesFormingValidParenthesisFromAGivenString
{
    public static function start(string $str, LinkedList $roundStack, LinkedList $squareStack)
    {
        #'[]])(['
        #roundStack -> store the opening prentheses (
        #squareStack -> store the opening prentheses [

        #countOfRoundOpening Pranthes
        $countOfRoundOpeningPrenthes = 0;

        #countOfSquareOpening Prentheses
        $countOfSquareOpeningPrenthes = 0;

        for ($i = 0; $i < strlen($str); $i++) {
            $currChar = $str[$i];
            if ($currChar == '(') {
                Push::push($roundStack, new Node($currChar));
            } elseif ($currChar == '[') {
                push::push($squareStack, new Node($currChar));
            } elseif ($currChar == ")" && peek::peek($roundStack) == '(') {
                pop::pop($roundStack);
                $countOfRoundOpeningPrenthes++;

            } elseif ($currChar == ']' && peek::peek($squareStack) == '[') {
                pop::pop($squareStack);
                $countOfSquareOpeningPrenthes++;
            }

        }
        return strlen($str) - ((2 * $countOfSquareOpeningPrenthes) + (2 * $countOfRoundOpeningPrenthes));
        ;
    }

    public static function getSize(LinkedList $stack)
    {
        $count = 0;
        $curr = $stack->head;
        while ($curr != null) {
            $count++;
            $curr = $curr->next;
        }
        return $count;
    }
}

?>