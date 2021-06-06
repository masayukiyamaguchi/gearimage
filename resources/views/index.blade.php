<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toppage</title>
</head>
<body>

    <form action="{{route('gear_search')}}" method="post">
    @csrf
        <select name="select_gear_name" id="select_gear_id">
            <option value="聖府軍ジャケット">聖府軍ジャケット</option>
            <option value="スプリングドレス">スプリングドレス</option>
        </select>

        <input type="submit" value="検索">
    </form>

    @if($get_datas!=NULL)
    <p>
    {{$get_datas->Results[0]->Name}}
    <img src="https://xivapi.com{{$get_datas->Results[0]->Icon}}" alt="">
    </p>
    @endif

</body>
</html>
