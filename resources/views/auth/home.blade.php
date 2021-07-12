@extends('layouts/app')

@section('content')
    <div>
        <p>Home Page {{ $user->first_name }}</p>
    </div>
@endsection