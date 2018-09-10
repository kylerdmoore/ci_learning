<html>

<head>
    <title>CI Learning</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div class="container text-center">
        <h1 class="display-1">Kyler Learning CI/CD</h1>
        <form class="form-inline justify-content-center" action="/calc" method="post">
            {{ csrf_field() }}
            <div class="form-group mr-3">
                <input class="form-control" placeholder="A" value="{{ $a }}" name="a">
            </div>
            <div class="form-group mr-3">
                <select class="form-control" name="action">
                <option @if ($action == '+') selected="selected" @endif>+</option>
                <option @if ($action == '-') selected="selected" @endif>-</option>
                <option @if ($action == '*') selected="selected" @endif>*</option>
                <option @if ($action == '/') selected="selected" @endif>/</option>
            </select>
            </div>
            <div class="form-group mr-3">
                <input class="form-control" placeholder="B" value="{{ $b }}" name="b">
            </div>
            <button class="btn btn-primary">Execute</button>
        </form>

        @if (isset($result))
        <strong>Result</strong> = {{ $result }}
        @endif
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>