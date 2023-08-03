@php
    $items = [['title' => 'We really care for children’s holistic development', 'icon' => 'fa-desktop', 'image' => '/images/why/why-04.jpg'], ['title' => 'We provide high quality service with reasonable price', 'icon' => 'fa-rocket', 'image' => '/images/why/why-02.jpg'], ['title' => 'We arrange convenient modalities of payment for you.', 'icon' => 'fa-fan', 'image' => '/images/why/why-03.jpg']];
@endphp

<section class="w-full flex flex-col">
    <h1 class="py-6 my-6 text-center text-4xl text-black font-bold">Why Meleket School</h1>
    <div class="flex flex-col sm:flex-row">
        @foreach ($items as $item)
            @if (isset($item['title']) && isset($item['icon']) && isset($item['image']))
                <div class="p-4 w-full sm:w-1/2 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ $item['image'] }}"
                            alt="{{ $item['title'] }}">
                        <div class="p-6 flex flex-col items-center">
                            <i class="fa {{ $item['icon'] }} my-4 text-blue-900 text-4xl" aria-hidden="true"></i>
                            <h1 class="title-font text-lg font-medium text-blue-900 mb-3">{{ $item['title'] }}</h1>

                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>
