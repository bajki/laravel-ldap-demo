@extends('layouts.app')

@section('content')
<script type="text/javascript" src="{!! asset('js/search.js') !!}"></script>
<div class="container">
    <div class="row">
        <h4>User look up</h4>
    </div>
    <div class="row form-group">
        <label for="username" style="margin-right: 20px;">Username: </label>
        <input class="form-control" id="username" type="text" name="username" style="margin-right: 50px;width: 200px">

        <button type="button">Submit</button>
    </div>
    <div class="row">
        <span class="uname-title" style="margin-right: 20px">User Detail: </span>
        <span class="uname" style="font-weight: bold"></span>
    </div>
    <div class="row">
        <table class="detail-container">
            <thead>
                <tr>
                    <th>Column</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection
