<x-layout>
   
        <div class="mx-4">
            <div
                class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
            >
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Registracija
                    </h2>
                    <p class="mb-4">Susikurk paskyra, kad įkeltum skelbimus</p>
                </header>

                <form method="POST" action="/users">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="inline-block text-lg mb-2">
                            Vardas
                        </label>
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            value="{{old('name')}}"
                        />
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2"
                            >El-paštas</label
                        >
                        <input
                            type="email"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="email"
                            value="{{old('email')}}"
                        />
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                
                    </div>

                    <div class="mb-6">
                        <label
                            for="password"
                            class="inline-block text-lg mb-2"
                        >
                            Slaptažodis
                        </label>
                        <input
                            type="password"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="password"
                        />
                        @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label
                            for="password2"
                            class="inline-block text-lg mb-2"
                        >
                            Patvirtinti slaptažodi
                        </label>
                        <input
                            type="password"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="password_confirmation"
                        />
                        @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button
                            type="submit"
                            class="bg-gray-700 text-white rounded py-2 px-4 hover:bg-black"
                        >
                            Registruokis
                        </button>
                    </div>

                    <div class="mt-8">
                        <p>
                            Turi paskyra?
                            <a href="/login" class="text-laravel"
                                >Prisijunk</a
                            >
                        </p>
                    </div>
                </form>
            </div>
        </div>
    
</x-layout>