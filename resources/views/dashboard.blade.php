  



<div class="containa">
            <div class="teksti1">TAITAJA TIETOTESTI</div>
            <div class="teksti2" pr-6>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit">
            Log out
            </button>
        </form>
    </div> 
    
</div>
    
<x-app-layout>
    @foreach ($categories as $category)
        <p>{{ $category->name}}</p>
    @endforeach
   
  
   
   
       

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kategoriat') }}
        </h2>
    </x-slot>


   
   
          
  



</x-app-layout>
