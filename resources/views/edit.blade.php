<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Christmas task</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
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
            <h1 class="text-3xl font-bold text-white">Editing 📝</h1>
            <div class="flex items-center justify-center flex-row mt-4">
                <div class="flex flex-row">
                    <form class="flex items-center justify-center flex-col mt-4"
                        action="/updatetodo/{{ $task->id }}" method="POST">
                        @csrf
                        <div>
                            <input type="checkbox" name="completed" id="completed"
                                class="form-checkbox h-5 w-5 mb-2 bg-white bg-opacity-10 border border-white border-opacity-10 rounded-lg text-white text-opacity-25 "
                                {{ $task->completed ? 'checked' : '' }}>
                            <label for="completed" class="text-white mb-2">Completed</label>
                        </div>
                        <input type="text" name="description" value="{{ $task->description }}"
                            class="bg-white bg-opacity-10 mb-2 text-white border border-white border-opacity-10 rounded-lg p-2 w-96">
                        <button type="submit"
                            class="bg-white bg-opacity-10 text-white border border-white border-opacity-10 rounded-lg p-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
