<?php

namespace App\View\Components;

use App\Models\Work;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FeaturedWorks extends Component
{
    public array $works;
    public Collection $featured;

    /**
     * Create a new component instance.
     */
    public function __construct(array $works = [])
    {
        $this->works = $works;
        $this->featured = Work::where('featured', true)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featured-works');
    }
}
