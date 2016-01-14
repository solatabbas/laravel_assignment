@extends('app')
@section('content')
<h2>Add New Category</h2>
<hr/>
    {!! Form::open(array('url'=>'category/store','files'=>true)) !!}
    <div class="form-group">
         @include('Category._categoryform',['buttonText'=>'Add'])
    </div>
    {!! Form::close() !!}
    @include('errors.list')
@stop