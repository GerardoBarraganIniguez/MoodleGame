<?php

namespace App\View\Components;

use App\Models\Assignment;
use Illuminate\View\Component;

class AssignmentFormBody extends Component
{
    private $assignment;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($assignment = null)
    {
        if (is_null($assignment)) {
            $assignment = Assignment::make([

            ]);
        }

        $this->assignment = $assignment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'assignment' => $this->assignment
        ];

        return view('components.assignment-form-body', $params);
    }
}
