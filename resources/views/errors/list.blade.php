@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $errorInfo)
            <li>{{$errorInfo}}</li>
        @endforeach
    </ul>
@endif