<?php

namespace App\View\Components;

use App\Models\Student;
use Illuminate\View\Component;

class StudentFormBody extends Component
{
    private $student;
    private $degrees;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($student = null, $degrees = null)
    {
        if (is_null($student)) {
            $student = Student::make([

            ]);
        }

        $this->student = $student;
        $this->degrees = $degrees;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'student' => $this->student,
            'degrees' => $this->degrees
        ];
        return view('components.student-form-body', $params);
    }
}
