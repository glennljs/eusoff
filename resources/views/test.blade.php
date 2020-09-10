<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
</head>
<body> 
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">Number</th>
                <th class="px-4 py-2">Rank 1</th>
                <th class="px-4 py-2">Rank 2</th>
                <th class="px-4 py-2">Rank 3</th>
                <th class="px-4 py-2">Rank 4</th>
                <th class="px-4 py-2">Rank 5</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($numbers as $number)
                <tr>
                    <td class="border px-4 py-2">
                        {{ $number->id }}
                    </td>
                    <td class="border px-4 py-2">
                        @foreach ($number->rank1users()->orderBy('points', 'desc')->get() as $r1u)
                            {{ $r1u->name }} ({{ $r1u->points }}),
                        @endforeach
                    </td>
                    <td class="border px-4 py-2">
                        @foreach ($number->rank2users()->orderBy('points', 'desc')->get() as $r2u)
                            {{ $r2u->name }} ({{ $r2u->points }}),
                        @endforeach
                    </td>
                    <td class="border px-4 py-2">
                        @foreach ($number->rank3users()->orderBy('points', 'desc')->get() as $r3u)
                            {{ $r3u->name }} ({{ $r3u->points }}),
                        @endforeach
                    </td>
                    <td class="border px-4 py-2">
                        @foreach ($number->rank4users()->orderBy('points', 'desc')->get() as $r4u)
                            {{ $r4u->name }} ({{ $r4u->points }}),
                        @endforeach
                    </td>
                    <td class="border px-4 py-2">
                        @foreach ($number->rank5users()->orderBy('points', 'desc')->get() as $r5u)
                            {{ $r5u->name }} ({{ $r5u->points }}),
                        @endforeach
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>
</body>
</html>