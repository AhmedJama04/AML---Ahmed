<x-base>
    <x-slot:content>
        <div class=" grid grid-cols-2 gap-4"></div>
        <x-page-title title="AML Media Profile"></x-page-title>
        <div class="flex items-center justify-center h-screen ">
            <div class="text-center">
                <h1 class="text-4xl font-bold">Successful Verification</h1>
                <p class="text-xl mt-2">Your reservation was successful</p>
                <a href="{{ route('mediaprofile') }}" class="text-xl mt-2">Click here to return</a>
            </div>
        </div>
    </x-slot:content>
</x-base>
