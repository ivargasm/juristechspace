<?php

namespace App\Http\Controllers;
use App\Models\Question;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($degree, $topic, $partner, $partial = null)
    {
        $data = [
            'degree' => $degree,
            'topic' => $topic,
            'user' => $partner,
            'partial' => $partial
        ];
        

        $questions = $this->getQuestions($data);

        return response()->json($questions);

    }

    private function getQuestions(array $data)
    {
        $degree = $data["degree"];
        $topic = $data["topic"];
        $user = $data["user"];
        $partial = $data["partial"] ?? null;

        $questions = Question::with('answers')
            ->where('degree_id', $degree)
            ->where('topic_id', $topic)
            ->where('partner_id', $user);

        if ($partial) {
            $questions->where('partial', $partial);
        }

        $questions = $questions->get()->map(function ($question) {
            // Obtiene todas las respuestas y mézclalas
            $shuffledAnswers = $question->answers->shuffle();
            
            // Encuentra el índice de la respuesta correcta después de haberlas mezclado
            $correctAnswerIndex = $shuffledAnswers->search(function ($answer) {
                return $answer->correct_answer == 1;
            });
        
            return [
                'id' => $question->id,
                'question' => $question->description,
                'code' => $question->code,
                'answers' => $shuffledAnswers->pluck('answer')->toArray(),
                'correctAnswer' => $correctAnswerIndex,
            ];
        });

        return $questions;
    }
}
