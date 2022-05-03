@if ($errors->any())
<ul class="pl-3 error-message bg-danger rounded p-1">
    @foreach ($errors->all() as $error)
        <li class="text-white" style="list-style: none; font-weight:bold;">{{ $error }}
        </li>
    @endforeach
</ul>
@endif