<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="flex justify-center items-center min-h-screen">
        <div class="max-w-[720px] mx-auto">
            <div class="relative flex flex-col mt-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96 hover:border-slate-300 hover:shadow-md rounded-lg transition-all cursor-pointer">
            <div class="p-4">
            <h5 class="mb-2 text-slate-800 text-xl font-semibold">
            Todos
            </h5>
            <p class="text-slate-600 leading-normal font-light">
                <ul class="p-3" >
                    @foreach ($todos as $todo)
                        <li class="mb-3 font-bold" >
                            {{ $todo->titulo }}
                        </li>
                    @endforeach
                </ul>
            </p>
            </div>
        </div>

    </div>
    </div>
</body>
</html>
