<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component {
    public $text;
    public $status;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $status) {
        $this->text = $text;
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render() {
        return view('components.alert');
    }
}
