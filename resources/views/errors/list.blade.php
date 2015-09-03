@if ($errors->any())
    <ul class="list alert-danger list-group-item-danger ">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif