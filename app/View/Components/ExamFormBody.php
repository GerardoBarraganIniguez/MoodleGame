<?php

namespace App\View\Components;

use App\Models\Exam;
use Illuminate\View\Component;

class ExamFormBody extends Component
{
    private $exam;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($exam = null)
    {
        if (is_null($exam)) {
            $exam = Exam::make([

            ]);
        }
        $this->exam = $exam;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'exam' => $this->exam
        ];

        return view('components.exam-form-body', $params);
    }
}
