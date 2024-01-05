<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            @if(auth()->user() && auth()->user()->id == 1)
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <!-- Display the store addition form here -->
                        <form action="{{ route('store.add') }}" method="post">
                            @csrf
                            <label for="name">Store Name:</label>
                            <input type="text" name="name" required>
                            
                            <label for="categories">Categories:</label>
                            <input type="text" name="categories" required>

                            <button type="submit">Add Store</button>
                        </form>
                    </div>
                </div>
            @endif

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>