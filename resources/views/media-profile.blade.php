<x-base>
    <x-slot:content>
        <div class=" grid grid-cols-2 gap-4"></div>
        <x-page-title title="AML Media Profile"></x-page-title>
        <div class="flex items-center space-x-8 p-8">
            <div class=" flex-shrink-0">
                <img src="{{ asset('assets/harry_potter_cursed_child.jpg') }}" alt="Harry Potter"
                    class="max-w-full h-auto rounded shadow-lg">
            </div>
            <div class="flex flex-col">
                <p class="text-white-500 text-lg hover:bg-green-700 w-[4vw]]">Status Available</p>
                <h1 class="text-6xl font-bold mb-4 text-black">Harry Potter</h1>
                <h3 class="text-2xl font-bold mb-5 text-black">Author: J.K Rowling</h3>
                <p class="text-gray-600 text-lg mb-4">This book is among one our best sellers it is a book full of
                    fantasy and adventure ready to take you along the wildest of journeys throughout. Diving into a
                    unbelivable world of magic, danger and undocumented adventure. The fantasy novel is full of
                    righteous characters, unpredictable world and forbidden quests. This story is full of different
                    plots and twists leaving the reader will breathtaken by th end of it</p>
                <a href="{{ route('userverification') }}"
                    class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Reserve Now</a>
            </div>
        </div>
    </x-slot:content>
</x-base>
