<x-xguest-layout>
    <h2 class="p-6 pt0 mb-4
        text-green-500 text-3xl dark:text-green-200
        bg-stone-200 dar
        ">Ratings</h2>

    <h3>{{$rating->id}} Details</h3>

    <section class="">
    <p class="text-stone-400 " >Name</p>
    <p class="text-stone-400 ">{{$rating->name}}</p>
    <p class="text-stone-400 ">Stars</p>
    <p class="text-stone-400 ">{{$rating->stars}}</p>
    <p class="w-full text-right ">
        <a href="{{route(ratings.index) }}Back
        Edit
        Delete</p>
    >
    </section>




</x-xguest-layout>
