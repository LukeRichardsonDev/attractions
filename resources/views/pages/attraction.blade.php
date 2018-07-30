@extends('layouts.main-layout')
@section('content')
    <h1>
        <span>Attraction</span>
    </h1>
    <p>
        <a href="/">Home</a>
    </p>
    <table>
        <tr>
            <td>
                {{$data['name']}}
            </td>
        </tr>
        <tr>
            @foreach ($data['images'] as $url)
                <td>
                    <img src="{{$url}}" alt="{{$data['name']}}" height="42" width="42">
                </td>
            @endforeach
        </tr>
        <tr>
            <td>
                {{$data['description']}}
            </td>
        </tr>
    </table>
@endsection