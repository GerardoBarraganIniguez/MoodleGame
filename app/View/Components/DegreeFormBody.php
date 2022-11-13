<?php

namespace App\View\Components;

use App\Models\Degree;
use Illuminate\View\Component;

class DegreeFormBody extends Component
{
    private $degree;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($degree = null)
    {
        if (is_null($degree)) {
            $degree = Degree::make([

            ]);
        }

        $this->degree = $degree;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'degree' => $this->degree
        ];
        return view('components.degree-form-body', $params);
    }
}
