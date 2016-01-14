@extends('app')
@section('content')
<h2>Edit New Category</h2>
<hr/>
    {!! Form::model($findData,['method'=>'PATCH','files'=>true,'action'=>['CategoryController@update',$findData->id,]]) !!}

        @include('Category._categoryform',['buttonText' => 'Update'])
    {!! Form::close() !!}
   @include('errors.list')
@stop