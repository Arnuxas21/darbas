<x-layout>
   
    <div class="mx-4">
        <div
            class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Prisijungimas
                </h2>
             
            </header>

            <form method="POST" action="/users/authenticate">
                @csrf
              

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
                    <button
                        type="submit"
                        class="bg-gray-700 text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Prisijungti
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Neturi paskyros?
                        <a href="/register" class="text-laravel"
                            >Registruokis</a
                        >
                    </p>
                </div>
            </form>
        </div>
    </div>

</x-layout>