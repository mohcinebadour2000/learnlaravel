@extends('layouts.master')

@section('pageName')
    Home
@endsection


@section('main')

    <x-users-table :users="$users"/>


@endsection

    {{-- @isset($languages)
       <h1>table existe</h1>
    @endisset --}}



{{-- @switch($color)
    @case('red')
        <h5>this is red</h5>
        @break
    @case('black')
        <h5>this is black</h5>
        @break
    @default
        <h5>no color added</h5>
@endswitch --}}


{{-- 

    @if (count($languages) > 0)
          <table border="1" width="100%">
        <thead>
            <tr>
                <th style="padding: 20px">LANGUAGES</th>
            </tr>
        </thead>
        <tbody>
            

            @foreach($languages as $item)
                <tr>
                    <td style="padding: 10px;">{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>      
    @else
        <h3>no table to show</h3>
    @endif --}}



