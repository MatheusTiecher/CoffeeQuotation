<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductEdit extends Component
{
    use WithFileUploads;

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
        'hash_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
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

        if($this->hash_image) {
            if(Storage::disk('public')->exists($this->product->hash_image)) {
                Storage::disk('public')->delete($this->product->hash_image);
            }

            $this->hash_image = $this->hash_image->store('products', 'public');
        }

        $this->product->update([
            'description' => $this->description,
            'observation' => $this->observation,
            'price_default' => $this->price_default,
            'quantity_per_box' => $this->quantity_per_box,
            'yield_per_box' => $this->yield_per_box,
            'hash_image' => $this->hash_image ?? $this->product->hash_image,
        ]);

        session()->flash('message', 'Product updated successfully.');
    }

    public function render()
    {
        return view('livewire.product.product-edit');
    }
}
