<?php

namespace App\View\Components;

use App\Models\Teacher;
use Illuminate\View\Component;

class TeacherFormBody extends Component
{
    private $teacher;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($teacher = null)
    {
        if (is_null($teacher)) {
            $teacher = Teacher::make([

            ]);
        }

        $this->teacher = $teacher;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'teacher' => $this->teacher
        ];
        return view('components.teacher-form-body', $params);
    }
}
