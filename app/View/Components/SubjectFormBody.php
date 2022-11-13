<?php

namespace App\View\Components;

use App\Models\Subject;
use Illuminate\View\Component;

class SubjectFormBody extends Component
{
    private $subject;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subject = null)
    {
        if (is_null($subject)) {
            $subject = Subject::make([

            ]);
        }

        $this->subject = $subject;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'subject' => $this->subject
        ];
        return view('components.subject-form-body', $params);
    }
}
