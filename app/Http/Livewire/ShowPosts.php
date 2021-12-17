<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    public $search;

    public function render()
    {
        //$posts = Post::all();
        $posts = Post::where('nombre', 'like', '%' . $this->search . '%')
                ->orWhere('apellido', 'like', '%' . $this->search . '%')
                ->get();
        return view('livewire.show-posts', compact('posts'));
    }
}
