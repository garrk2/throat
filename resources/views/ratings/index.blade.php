<x-guest-layout>

    <h1 class="pt-1 pb-8 px-6 mb-4 text-green-500 text-2xl dark:bg-stone-800 bg-stone-200">
        Ratings</h1>

    <p> Ratings</p>

    <table class="table w-full">
        <thead>
        <tr>
            <th Class="text-white-500 bg-black-500 align-left">Name</th>
            <th Class="align-left">Stars</th>
            <th Class="align-left">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ratings as $rating)
            <p>{{$rating->name}}</p>
        <tr>
            <td class="p-1 px-2 ">{{$rating->name}}</td>
            <td class="p-1 px-2 ">{{$rating->stars}}</td>
            <td class="p-1 flex flex-row gap-2">
{{--                <a href=""{{ route('ratings.show',['id'=>$rating->id]) }}--}}
{{--                class="p-1 py-0 b-1 rounded-md--}}
{{--                    border-green-700--}}
{{--                    hover:border-green-100 hover:bg-green-700 hover:text-white--}}
{{--                    transition ease-in-out duration-350 ">--}}
                    View
                </a>
                Edit

                Delete

            </td>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td class="p-1" colspan=""3">
                {{ $ratings->links() }}
                </td>
            </tr>
        </tfoot>

    </section>

</x-guest-layout>
