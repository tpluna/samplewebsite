<x-layout>

    <x-slot:heading>
        Store
    </x-slot:heading>

    <h1 class="font-bold">Categories</h1>

    @foreach ($products as $product)
        <li>
            {{ $product['product_name'] }}
        </li>
    @endforeach

</x-layout>
