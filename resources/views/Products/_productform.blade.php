<div class="form-group">

  {!! Form::label('name', 'Category') !!}
  {!! Form::text('category_id', null ,['class'=>'form-control']) !!}

  {!! Form::label('name', 'Title') !!}
  {!! Form::text('title', null ,['class'=>'form-control']) !!}

  {!! Form::label('Description', 'Description') !!}
  {!! Form::textarea('description', null,['class'=>'form-control']) !!}

  {!! Form::label('name', 'Price') !!}
  {!! Form::text('price', null ,['class'=>'form-control']) !!}

  {!! Form::label('Product Image') !!}
  {!! Form::file('image', null) !!}

</div>
