
@include('partials.__header',['title'=> "student system"])
    <h1 class="text-3xl font-bold underline">
    Students!
    </h1>
    <form action="/logout" method="post">
        @csrf
        <button
        type="submit"
        class="w-25 text-center py-3 rounded bg-green-600 text-white hover:bg-green-700 focus:outline-none my-1"
    >Logout</button>
    </form>
    <ul>
        @foreach ($students as $student )
            <li>{{$student->first_name}}</li>
        @endforeach
    </ul>
@include('partials.__footer')