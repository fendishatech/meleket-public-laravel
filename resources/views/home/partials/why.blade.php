@php
    $items = [['title' => 'We really care for children’s holistic development', 'icon' => 'fa-desktop', 'image' => 'image-1.jpg'], ['title' => 'We provide high quality service with reasonable price', 'icon' => 'fa-rocket', 'image' => 'image-2.jpg'], ['title' => 'We arrange convenient modalities of payment for you.', 'icon' => 'fa-fan', 'image' => 'image-3.jpg']];
@endphp


<section class="px-6">
    <h1 class="py-6 my-6 text-center text-4xl text-black font-bold">Why Meleket school</h1>
    <div class="container my-12 mx-auto px-4 md:px-12 text-blue-900">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            @foreach ($items as $item)
                @if (isset($item['title']) && isset($item['icon']) && isset($item['image']))
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="#">
                                <img alt="{{ $item['title'] }}" class="block h-auto w-full" src="{{ $item['image'] }}">
                            </a>
                            <header class="flex flex-col items-center justify-between leading-tight p-2 md:p-4">
                                {{-- Logo --}}
                                <i class="fa {{ $item['icon'] }} my-4 text-4xl" aria-hidden="true"></i>
                                <h1 class="text-lg">
                                    <a class="no-underline hover:underline " href="#">
                                        {{ $item['title'] }}
                                    </a>
                                </h1>
                            </header>
                        </article>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</section>
