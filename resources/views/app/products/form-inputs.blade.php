@php $editing = isset($product) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $product->name : '')) }}"
            maxlength="255"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="descripton"
            label="Descripton"
            value="{{ old('descripton', ($editing ? $product->descripton : '')) }}"
            maxlength="255"
            placeholder="Descripton"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="product_code"
            label="Product Code"
            value="{{ old('product_code', ($editing ? $product->product_code : '')) }}"
            maxlength="255"
            placeholder="Product Code"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.number
            name="qty"
            label="Qty"
            value="{{ old('qty', ($editing ? $product->qty : '')) }}"
            max="255"
            placeholder="Qty"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.number
            name="product_price"
            label="Product Price"
            value="{{ old('product_price', ($editing ? $product->product_price : '')) }}"
            max="255"
            step="0.01"
            placeholder="Product Price"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="product_image"
            label="Product Image"
            value="{{ old('product_image', ($editing ? $product->product_image : '')) }}"
            maxlength="255"
            placeholder="Product Image"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.date
            name="product_year"
            label="Product Year"
            value="{{ old('product_year', ($editing ? optional($product->product_year)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.number
            name="status"
            label="Status"
            value="{{ old('status', ($editing ? $product->status : '')) }}"
            max="255"
            placeholder="Status"
            required
        ></x-inputs.number>
    </x-inputs.group>
</div>
