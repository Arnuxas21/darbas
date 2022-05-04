<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Redaguoti skelbimą
        </h2>
        <p class="mb-4">Redaguoti: {{$listing->title}}</p>
    </header>
    
    <form method="POST"action="/listings/{{$listing->id}}" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-6">
            <label
                for="company"
                class="inline-block text-lg mb-2"
                >Įmonės pavadinimas</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="company"
                value="{{$listing->company}}"
            
            >
            @error('company')
            <p class="text-red-500 text xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"
                >Darbas</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
          
                value="{{$listing->title}}"
            >
            @error('title')
            <p class="text-red-500 text xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="location"
                class="inline-block text-lg mb-2"
                >Darbo vieta</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="location"
               
                value="{{$listing->location}}"
            >
            @error('location')
            <p class="text-red-500 text xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Darbdavio el-paštas</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                value="{{$listing->email}}"
            >
            @error('email')
            <p class="text-red-500 text xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="website"
                class="inline-block text-lg mb-2"
            >
                Svetainė
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="website"
                value="{{$listing->website}}"
            >
            @error('website')
            <p class="text-red-500 text xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Žymės
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
             
                value="{{$listing->tags}}"
            />
            @error('tags')
            <p class="text-red-500 text xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Įmonės logotipas
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="logo">
                <img
                class="w-48 mr-6 mb-6"
                src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')}}"
                alt=""
            />
            @error('logo')
            <p class="text-red-500 text xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                Darbo aprašymas
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
         
    
            >{{$listing->description}}</textarea>
            @error('description')
            <p class="text-red-500 text xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <button
                class="bg-gray-700 text-white rounded py-2 px-4 hover:bg-black"
            >
                Redaguoti skelbimą
            </button>
    
            <a href="/" class="text-black ml-4"> Atgal </a>
        </div>
    </form>
    </div>
    </x-layout>