<x-layout>
    <div class="flex flex-col items-center justify-center gap-4 p-6">
        <section class="text-center">
            <h1 class="text-3xl font-bold text-blue-600">Products</h1>
            <p>Your Product Sales</p>
        </section>

        <section class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @php
                $categories = [
                    ['name' => 'Food & Beverage', 'sales' => 1200],
                    ['name' => 'Beauty & Health', 'sales' => 950],
                    ['name' => 'Home Care', 'sales' => 700],
                    ['name' => 'Baby & Kid', 'sales' => 850],
                ];
            @endphp

            @foreach ($categories as $category)
                <div class="p-8 bg-white shadow-lg rounded-xl flex flex-col items-center text-center transition transform hover:scale-105 hover:shadow-2xl">
                    <h2 class="text-lg font-semibold">{{ $category['name'] }}</h2>
                    <p class="text-gray-500">Sales: {{ number_format($category['sales']) }}</p>
                </div>
            @endforeach
        </section>
    </div>
</x-layout>
