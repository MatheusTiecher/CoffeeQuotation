<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::paginate(5);

        return view('livewire.product.product-index', compact('products'));
    }

    public function remove(Product $product)
    {
        $product->delete();

        session()->flash('message', 'Product deleted successfully.');
    }
}
