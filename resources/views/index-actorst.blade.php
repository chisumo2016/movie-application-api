@extends('layouts.main')

@section('content')
 <div class="container mx-auto px-4 pt-16">
     <div class="popular-actors">
         <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Actors</h2>
            {{--   CARDS   --}}
         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

            <div class="actor mt-8">
                <a href="#">
                    <img src="/img/actorben.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg hover:text-gray-300">Robert Chisumo Jr</a>
                    <div class="text-sm truncate text-gray-400">Iron Man, Avengers, Avengers: Infinity</div>
                </div>
            </div> <!-- End of actor mt-8-->
             <div class="actor mt-8">
                 <a href="#">
                     <img src="/img/actorben.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                 </a>
                 <div class="mt-2">
                     <a href="#" class="text-lg hover:text-gray-300">Robert Chisumo Jr</a>
                     <div class="text-sm truncate text-gray-400">Iron Man, Avengers, Avengers: Infinity</div>
                 </div>
             </div> <!-- End of actor mt-8-->
             <div class="actor mt-8">
                 <a href="#">
                     <img src="/img/actorben.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                 </a>
                 <div class="mt-2">
                     <a href="#" class="text-lg hover:text-gray-300">Robert Chisumo Jr</a>
                     <div class="text-sm truncate text-gray-400">Iron Man, Avengers, Avengers: Infinity</div>
                 </div>
             </div> <!-- End of actor mt-8-->
             <div class="actor mt-8">
                 <a href="#">
                     <img src="/img/actorben.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                 </a>
                 <div class="mt-2">
                     <a href="#" class="text-lg hover:text-gray-300">Robert Chisumo Jr</a>
                     <div class="text-sm truncate text-gray-400">Iron Man, Avengers, Avengers: Infinity</div>
                 </div>
             </div> <!-- End of actor mt-8-->
             <div class="actor mt-8">
                 <a href="#">
                     <img src="/img/actorben.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                 </a>
                 <div class="mt-2">
                     <a href="#" class="text-lg hover:text-gray-300">Robert Chisumo Jr</a>
                     <div class="text-sm truncate text-gray-400">Iron Man, Avengers, Avengers: Infinity</div>
                 </div>
             </div> <!-- End of actor mt-8-->
             <div class="actor mt-8">
                 <a href="#">
                     <img src="/img/actorben.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                 </a>
                 <div class="mt-2">
                     <a href="#" class="text-lg hover:text-gray-300">Robert Chisumo Jr</a>
                     <div class="text-sm truncate text-gray-400">Iron Man, Avengers, Avengers: Infinity</div>
                 </div>
             </div> <!-- End of actor mt-8-->
         </div>
     </div> <!-- End of Popular Actors-->
 </div>
@endsection
