@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h4>All Users</h4>
    </div>
    <div class="row" style="margin-top: 10px">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <th>{{ $user['cn'][0] }}</th>
                <th>{{ $user['mail'][0] }}</th>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
