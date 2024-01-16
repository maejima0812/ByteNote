<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6"> <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶アカウント情報</p>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
<p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶パスワードのリセット</p>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            @if(auth()->user() && auth()->user()->id == 1)
            <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶店舗の追加</p>
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
<p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶アカウントの削除</p>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>