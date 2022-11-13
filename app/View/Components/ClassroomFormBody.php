<?php

namespace App\View\Components;

use App\Models\Classroom;
use Illuminate\View\Component;

class ClassroomFormBody extends Component
{
    private $classroom;
    private $subjects;
    private $sections;
    private $teachers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subjects = null, $sections = null, $teachers = null, $classroom = null)
    {
        if (is_null($classroom)) {
            $classroom = Classroom::make([

            ]);
        }

        $this->classroom = $classroom;
        $this->subjects = $subjects;
        $this->sections = $sections;
        $this->teachers = $teachers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'classroom' => $this->classroom,
            'subjects' => $this->subjects,
            'sections' => $this->sections,
            'teachers' => $this->teachers
        ];
        return view('components.classroom-form-body', $params);
    }
}
