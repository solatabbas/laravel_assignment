@extends('app')
@section('content')
<h2>Add Product</h2>
<hr/>
    {!! Form::open(array('url'=>'products/store','files'=>true)) !!}
    <div class="form-group">
         @include('Products._productform',['buttonText'=>'Add'])
    </div>
    @stop
