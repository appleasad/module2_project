<?php

//Example of questions.
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
    ];

//Collect answers from user. 
$answers = [];
foreach($questions as $index => $query) {
    echo ($index + 1) . ". " . $query['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));

} 

//Function to evaluate quiz.
function evaluateQuiz(array $questions , array $answers) :int {
    $score = 0;
    foreach($questions as $index=> $query) {
        if ($answers [$index] === $query ['correct']) {
            $score++;
        }
    }
    return $score;
}

//Calculate score and provide feedback.
$score = evaluateQuiz($questions , $answers);
    echo "\nYou scored $score out of " . count($questions) . ".\n";
    if($score === count(($questions))) {
        echo "Excellent job!";
    }elseif($score > 1) {
        echo "Good effort!";
    }else{
        echo "Better luck next time!";
    }
