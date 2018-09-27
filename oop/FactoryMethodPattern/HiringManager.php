<?php

namespace oop\FactoryMethodPattern;

abstract class HiringManager
{
// Factory method
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}
