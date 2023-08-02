<x-guest-layout>

    <h1 class="pt-1 pb-8 px-6 mb-4 text-green-500 text-2xl dark:bg-stone-800 bg-stone-200">
        WordTypes</h1>

    <p> WordTypes</p>

    <table class="table w-full">
        <thead>
        <tr>
            <th Class="text-white-500 bg-black-500 align-left">Name</th>
            <th Class="align-left">Stars</th>
            <th Class="align-left">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($wordtypes as $wordtype)
            <p>{{$wordtype->code}}</p>
            <tr>
                <td class="p-1 px-2 ">{{$wordtype->code}}</td>
                <td class="p-1 px-2 ">{{$wordtype->name}}</td>
                <td class="p-1 ">View Edit Delete</td>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td class="p-1" colspan=""3">
            {{ $wordtypes->links() }}
            </td>
        </tr>
        </tfoot>

        </section>

</x-guest-layout>
