@extends('layout.wsapp')

@section('content')

<div class="jumbotron">
    <h1 class="page-heading">Hello wrord</h1>
    <span class="section-heading-divider"></span>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! $request['scan_url'] !!}
        </div>
    </div>
</div>



    @stop