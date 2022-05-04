<x-layout>
   <div class="relative h-72 bg-gray-700 flex flex-col justify-center align-center text-center space-y-4 mb-4"
    >
    <div
        class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
  
    ></div>
    
    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Work<span class="text-black">Space</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Rask ir kelk darbų skelbimus
        </p>
    
    </div>
   </div>
   <form action="">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i
                class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
            ></i>
        </div>
        <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Ieškoti skelbimų..."
        />
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-white rounded-lg bg-gray-400 hover:bg-gray-600"
            >
                Ieškoti
            </button>
        </div>
    </div>
</form>

<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>
@if (count($listings)==0)
    <p>Nėra skelbimų</p>

@endif

@foreach ($listings as $listing) 
<x-listing-card :listing="$listing" />
@endforeach
</div>
<div>{{$listings->links()}}</div>
</x-layout>