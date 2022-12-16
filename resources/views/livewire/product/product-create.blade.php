<div class="max-w-7xl mx-auto py-15 px-4">

    <x-slot name="header">
        Criar Registro
    </x-slot>

    @include('includes.message')

    <form action="" wire:submit.prevent="createProduct" class="w-full max-w-7xl mx-auto">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descrição</label>
                <input type="text" name="description" wire:model="description"
                    class="block appearance-none w-full bg-gray-200 border @error('description') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @error('description')
                    <h5 class="text-red-500 text-xs italic">{{ $message }}</h5>
                @enderror
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Obeservação</label>
                <input type="text" name="observation" wire:model="observation"
                    class="block appearance-none w-full bg-gray-200 border @error('observation') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @error('observation')
                    <h5 class="text-red-500 text-xs italic">{{ $message }}</h5>
                @enderror
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Valor Padrão</label>
                <input type="text" name="price_default" wire:model="price_default"
                    class="block appearance-none w-full bg-gray-200 border @error('price_default') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @error('price_default')
                    <h5 class="text-red-500 text-xs italic">{{ $message }}</h5>
                @enderror
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Valor Padrão</label>
                <input type="text" name="quantity_per_box" wire:model="quantity_per_box"
                    class="block appearance-none w-full bg-gray-200 border @error('quantity_per_box') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @error('quantity_per_box')
                    <h5 class="text-red-500 text-xs italic">{{ $message }}</h5>
                @enderror
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Valor Padrão</label>
                <input type="text" name="yield_per_box" wire:model="yield_per_box"
                    class="block appearance-none w-full bg-gray-200 border @error('yield_per_box') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                @error('yield_per_box')
                    <h5 class="text-red-500 text-xs italic">{{ $message }}</h5>
                @enderror
            </div>
        </div>
        <div class="w-full py-4 px-3 mb-6 md:mb-0">

            <button type="submit"
                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">Criar
                Registro</button>
        </div>
    </form>
</div>
