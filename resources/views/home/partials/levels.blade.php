@php
    $items = [['title' => 'Begginers', 'icon' => 'fa-hands-holding-child'], ['title' => 'kindergarten', 'icon' => 'fa-children'], ['title' => 'Grade', 'icon' => 'fa-child']];
@endphp

<section>
    <h1 class="py-6 my-6 text-center text-4xl text-black font-bold">Student Levels</h1>
    <div class="flex flex-col items-center justify-center md:flex-row">
        @foreach ($items as $item)
            @if (isset($item['title']) && isset($item['icon']))
                <div class="p-4 w-full sm:w-1/2 md:w-1/3">
                    <div class="h-full  rounded-lg overflow-hidden">

                        <div class="p-6 flex flex-col items-center">
                            <i class="fa {{ $item['icon'] }} my-4 text-blue-900 text-4xl" aria-hidden="true"></i>
                            <h1 class="title-font text-4xl font-bold text-blue-900 mb-3">{{ $item['title'] }}</h1>

                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

</section>
