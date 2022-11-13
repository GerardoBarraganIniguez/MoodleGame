<?php

namespace App\View\Components;

use App\Models\Section;
use Illuminate\View\Component;

class SectionFormBody extends Component
{
    private $section;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($section = null)
    {
        if (is_null($section)) {
            $section = Section::make([

            ]);
        }

        $this->section = $section;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'section' => $this->section
        ];

        return view('components.section-form-body', $params);
    }
}
