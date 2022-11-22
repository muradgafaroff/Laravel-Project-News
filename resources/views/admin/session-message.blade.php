
@if ($errors->any())
    <ul class="alert bg-danger text-white alert-styled-left alert-dismissible">
        @foreach ($errors->all() as $error)
            <li>
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif
