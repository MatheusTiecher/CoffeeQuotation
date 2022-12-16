<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ProductCreate extends Component
{
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

    public function createProduct()
    {
        $this->validate();

        Product::create([
            'description' => $this->description,
            'observation' => $this->observation,
            'price_default' => $this->price_default,
            'quantity_per_box' => $this->quantity_per_box,
            'yield_per_box' => $this->yield_per_box,
            'hash_image' => $this->hash_image,
        ]);

        session()->flash('message', 'Product created successfully.');
    }

    public function render()
    {
        return view('livewire.product.product-create');
    }
}
