<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public Product $product;

    public $description;
    public $observation;
    public $price_default;
    public $quantity_per_box;
    public $yield_per_box;
    public $hash_image;

    protected $rules = [
        'description' => 'required',
        'observation' => 'required',
        'price_default' => 'required',
        'quantity_per_box' => 'required',
        'yield_per_box' => 'required',
    ];

    public function mount()
    {
        $this->description = $this->product->description;
        $this->observation = $this->product->observation;
        $this->price_default = $this->product->price_default;
        $this->quantity_per_box = $this->product->quantity_per_box;
        $this->yield_per_box = $this->product->yield_per_box;
        $this->hash_image = $this->product->hash_image;
    }

    public function updateProduct()
    {
        $this->validate();

        $this->product->update([
            'description' => $this->description,
            'observation' => $this->observation,
            'price_default' => $this->price_default,
            'quantity_per_box' => $this->quantity_per_box,
            'yield_per_box' => $this->yield_per_box,
            'hash_image' => $this->hash_image,
        ]);

        session()->flash('message', 'Product updated successfully.');
    }

    public function render()
    {
        return view('livewire.product.product-edit');
    }
}
