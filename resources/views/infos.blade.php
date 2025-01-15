<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/info.css') }}">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>age_actuel</th>
            <th>salaire_actuel</th>
            <th>annees_cotisation</th>
            <th>age_retraite</th>
            <th>operation</th>
        </tr>
        @foreach ($infos as $info)
            <tr>
                <td>{{$info->id}}</td>
                <td>{{$info->age_actuel}}</td>
                <td>{{$info->salaire_actuel}}</td>
                <td>{{$info->annees_cotisation}}</td>
                <td>{{$info->age_retraite}}</td>
                <td>
                    <form method="POST" action="{{route('infos.destroy',$info->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>