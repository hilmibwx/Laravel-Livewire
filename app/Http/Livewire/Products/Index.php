<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.products.index', compact('products'))
                ->extends('layouts.app')
                ->section('content');
    }
}
