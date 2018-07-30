@extends('layouts.main-layout')
@section('content')
    <h1>
        <span>Attractions</span> in the uk
    </h1>
    <p>
        Here are some attractions that just so happen to be on the same 
        island as you but are still several hours drive away.
    </p>

    @foreach ($attractions as $key => $data)
        <table id="{{$key}}">
            <tr>
                <td class="name">
                    {{$data['name']}}
                </td>
            </tr>
            <tr>
                <td class="images">
                    @foreach ($data['images'] as $url)
                        <img src="{{$url}}" alt="{{$data['name']}}" height="200" width="200">
                    @endforeach
                </td>
            </tr>
            <tr>
                <td class="description">
                    {{$data['description']}}
                </td>
            </tr>
        </table>
    @endforeach
@endsection
