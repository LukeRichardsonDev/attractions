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
@endsection