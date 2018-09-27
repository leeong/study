<?php

namespace oop\FactoryMethodPattern;

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo "Asking about design patterns!\n";
    }
}
