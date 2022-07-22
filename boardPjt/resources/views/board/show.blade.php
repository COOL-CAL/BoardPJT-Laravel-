<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data->title }}</title>
</head>
<body>
    {{-- 주석 --}}
    <div id="ldata" data-id="{{ $data->id }}"></div>
    <div>
        <a href="{{ url('/boards') }}">
            <button type="button">Home</button>
        </a>
        <a href="{{ route('boards.edit', ["id" => $data->id]) }}">
            <button type="button">Edit</button>
        </a>
        <button type="button" id="btnDel">Delete</button>
    </div>
    <div>Title : {{ $data->title }}</div>
    <div>Views : {{ $data->hits }}</div>
    <div>Date : {{ $data->created_at }}</div>
    <div>Update : {{ $data->updated_at }}</div>
    <div>Content</div>
    <div>{{ $data->ctnt }}</div>

    <script>
        const ldata = document.querySelector('#ldata');
        const btnDel = document.querySelector('#btnDel');
        if(btnDel) {
            btnDel.addEventListener('click', e => {
                if(!confirm('Delete?')) { return; }
                location.href = `/boards/destroy?id=${ldata.dataset.id}`;
            });
        }
    </script>
</body>
</html>