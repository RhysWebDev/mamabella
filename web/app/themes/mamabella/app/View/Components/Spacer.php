<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Spacer extends Component
{
    /**
     * The spacer size.
     *
     * @var string
     */
    public $size;

    /**
     * The spacer sizes.
     *
     * @var array
     */
    public $sizes = [
        'small' => 'py-2',
        'medium' => 'py-4',
        'large' => 'py-8',
    ];

    /**
     * The spacer title.
     *
     * @var string
     */
    public $title;

    /**
     * The spacer subtitle.
     *
     * @var string
     */
    public $subtitle;

    /**
     * Create a new component instance.
     *
     * @param  string  $size
     * @param  string  $title
     * @param  string  $subtitle
     * @return void
     */
    public function __construct($size = 'medium', $title = '', $subtitle = '')
    {
        $this->size = $this->sizes[$size] ?? $this->sizes['medium'];
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.spacer');
    }
}
