<?php

namespace App\View\Components;

use Closure;
use App\Models\Discipline;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class Skills extends Component
{
    public array $content;
    public Collection $disciplines;

    /**
     * Create a new component instance.
     */
    public function __construct(array $content = [])
    {
        $this->content = $content;
        $this->disciplines = Discipline::whereHas('technologies', function ($query) {
            $query->ordered()->featured();
        })
            ->ordered()
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.skills');
    }
}
