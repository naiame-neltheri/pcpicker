@extends('layouts.back')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4"></h1>
    <div class="card mb-4">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
    </div>
    <div style="height: 100vh;"></div>
</div>
@endsection
