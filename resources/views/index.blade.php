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
        <input name="search_gear_text" value="" type="text">
        <!-- <select name="select_gear_name" id="select_gear_id">
            <option value="聖府軍ジャケット">聖府軍ジャケット</option>
            <option value="スプリングドレス">スプリングドレス</option>
        </select> -->

        <input type="submit" value="検索">
    </form>

    
    <form action="{{route('gear_preview')}}" method="post">
    @csrf
        @if($get_datas!=NULL)
            @foreach($get_datas->Results as $get_data)
                <p>
                {{$get_data->Name}}
                <img src="https://xivapi.com{{$get_data->Icon}}" alt="">
                <input type="checkbox" name="select_gear_checkbox" value="{{$get_data->ID}}">
                </p>            
            @endforeach

            <input type="submit" value="画像を表示">

        @endif
    </form>        

</body>
</html>

