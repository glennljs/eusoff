<x-jet-form-section submit="submit">

    <x-slot name="title">
        Ranked bidding
    </x-slot>

    <x-slot name="description">
        Key in your preferred numbers (0 - 99) by rank.
    </x-slot>

    <x-slot name="form">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rank1">
                Rank 1
            </label>
            <input wire:model="rank.1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rank[1]" type="number" min="0" max="99">
            @error('rank.1') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rank2">
                Rank 2
            </label>
            <input wire:model="rank.2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rank[2]" type="number" min="0" max="99">
            @error('rank.2') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rank3">
                Rank 3
            </label>
            <input wire:model="rank.3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rank[3]" type="number" min="0" max="99">
            @error('rank.3') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rank4">
                Rank 4
            </label>
            <input wire:model="rank.4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rank[4]" type="number" min="0" max="99">
            @error('rank.4') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rank5">
                Rank 5
            </label>
            <input wire:model="rank.5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="rank[5]" type="number" min="0" max="99">
            @error('rank.5') <span class="error">{{ $message }}</span> @enderror
        </div>
    </x-slot>

    
    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Your bids have been submitted!
        </x-jet-action-message>

        <x-jet-action-message class="mr-3" on="duplicate">
            <p class="text-red-600">Please key in unique numbers!!</p>
        </x-jet-action-message>

        <x-jet-button>
            Submit
        </x-jet-button>
    </x-slot>

</x-jet-form-section>