<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <ul>
    @foreach ($errors ->all() as $message)
        <li>{{$message}}</li>
    @endforeach
    </ul>
</div>
