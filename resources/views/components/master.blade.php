<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>{{$title}}</title>
</head>
<body>

    @include('partials.nav')


        <main>
            <div class="p-3">
                {{$slot}}
            </div>
        </main>


    @include('partials.footer')

    {{-- NAVIGATION --}}

    {{-- MAIN --}}

    {{-- FOOTER --}}

</body>
</html>