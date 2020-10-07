@extends('layouts.back')

@section('css')
    <link rel="stylesheet" type="text/css" href="/lib/datatable/datatables.min.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/back/css/pfp.css">
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mt-4"></h1>
    <h1 class="mt-4">CPU</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
        <li class="breadcrumb-item active">CPU</li>
    </ol>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <table id="table_cpu" class="table table-striped table-bordered hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Core Count</th>
                        <th>Core Clock</th>
                        <th>Boost Clock</th>
                        <th>TDP</th>
                        <th>Integrated Graphics</th>
                        <th>SMT</th>
                        <th>Used</th>
                        <th>Price</th>
                        <th>Sold</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('back.pfp.cpu_modal')
@endsection

@section('js')
    <script type="text/javascript" src="/lib/datatable/datatables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="/back/js/pfp_cpu.js"></script>
@endsection