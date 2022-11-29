<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Christmas Todo</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
        type="text/css" />
</head>

<body>
    <ul class="lightrope">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <div class="flex items-center justify-center h-screen">
        <div
            class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-lg shadow-lg p-10 border border-opacity-10 ">
            <h1 class="text-3xl font-bold text-white">🎄🎅 Todos</h1>
            <p class="text-white text-opacity-75">A festive todo app for the holidays</p>
            <div class="flex items-center justify-center mt-4">
                <div>
                    <form action="/addtodo" method="POST">
                        @csrf
                        <input type="text" name="description"
                            class="bg-white bg-opacity-10 text-white text-opacity-75 rounded-lg p-2"
                            placeholder="Add a todo">
                    </form>

                    <ul class="mt-4">
                        @foreach ($tasks as $todo)
                            <li class="flex items-center justify-between">
                                @if ($todo->is_completed)
                                    <p class="text-white text-opacity-50 line-through truncate max-w-1/3">
                                        {{ substr($todo->description, 0, 128) }}</p>
                                @else
                                    <p class="text-white text-opacity-75 truncate max-w-1/3">
                                        {{ substr($todo->description, 0, 128) }}
                                    </p>
                                @endif

                                <div class="flex">
                                    <form action="/todotoggle/{{ $todo->id }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="text-white ml-6 text-opacity-75">
                                            <input type="hidden" name="id" value="{{ $todo->id }}">

                                            @if ($todo->is_completed)
                                                <i class="fa-solid fa-badge-check"></i>
                                            @else
                                                <i class="fa-regular fa-badge-check"></i>
                                            @endif
                                        </button>
                                    </form>

                                    <a class="text-white ml-2 text-opacity-75" href="/edit/{{ $todo->id }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>

                                    <form action="/tododelete/{{ $todo->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $todo->id }}">

                                        <button type="submit" class="text-white ml-2 text-opacity-75"><i
                                                class="fa-duotone fa-trash"></i></button>
                                    </form>
                                </div>
                            </li>
                        @endforeach



                    </ul>
                    {{-- Pagination --}}
                    <div class="mt-4">
                        {{ $tasks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
