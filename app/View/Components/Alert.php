<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $title;
    public $message;
    public $textfirstbutton;
    public $textsecondbutton;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $message, $textfirstbutton, $textsecondbutton)
    {
        $this->title = $title;
        $this->message = $message;
        $this->textfirstbutton = $textfirstbutton;
        $this->textsecondbutton = $textsecondbutton;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
