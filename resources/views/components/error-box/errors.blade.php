@if ($errors->any())
    <ul class="pl-3 error-message">
        @foreach ($errors->all() as $error)
            <li class="text-danger" style="list-style: none; font-weight:bold;">{{ $error }}</li>
        @endforeach
    </ul>
@endif
