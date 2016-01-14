<div class="form-group">

        {!! Form::label('name', 'Publish Date') !!}
        {!! Form::input('date','created_at', null ,['class'=>'form-control']) !!}

        {!! Form::label('name', 'Title') !!}
        {!! Form::text('title', null ,['class'=>'form-control']) !!}

        {!! Form::label('Description', 'Description') !!}
        {!! Form::textarea('description', null,['class'=>'form-control']) !!}

        {!! Form::label('Product Image') !!}
        {!! Form::file('image', null) !!}

        <br>
        {!! Form::submit($buttonText, ['class'=>'btn btn-primary form-control']) !!}
    </div>