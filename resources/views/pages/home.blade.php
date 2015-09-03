@extends('layout.wsapp')

@section('content')
  <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron">
   <h1>Analizza il tuo sito</h1>

   <p>Lorem ipsum dolores.</p>

   <div class="row">
    <div class="col-md-6 col-md-offset-3">
     @include('errors.list')

         {!!  Form::open(['method'=>'GET','action'=> 'ReportsController@scan']) !!}
       <div class="input-group input-group-lg">

           {!! Form::text('scan_url', null, ['class'=>'form-control', 'placeholder'=>'http://']) !!}
            <span class="input-group-btn">
                {!! Form::submit(trans('pages/general.button-analyzer'), ['class' => 'btn btn-success']) !!}
            </span>
       </div><!-- /input-group -->
         {!! Form::close() !!}
    </div><!-- /.col-lg-6 -->

   </div><!-- /.row -->

  </div>
@stop

