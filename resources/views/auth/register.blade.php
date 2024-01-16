<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('名前')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!--age-->
        <div>
            <x-input-label for="age" :value="__('年齢')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required  />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>
        <!--gender-->
        <div>
            <x-input-label for="gender" :value="__('性別')" />
            <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required   />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
        <!--current_byte-->
        <div>
            <x-input-label for="current_job" :value="__('現在のバイト先')" />
            <x-text-input id="current_job" class="block mt-1 w-full" type="text" name="current_job" :value="old('current_job')" required autofocus  />
            <x-input-error :messages="$errors->get('current_job')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('パスワード')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワードの確認')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('すでに登録済みの方') }}
            </a>
            
       <x-primary-button class="ml-3">
        {{ __('登録') }}
    </x-primary-button>


            
        </div>
    </form>
</x-guest-layout>
