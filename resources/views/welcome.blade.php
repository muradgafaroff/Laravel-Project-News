{{--
<form action="{{route('store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <select name="category_id">
        @foreach($category as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach
    </select><br>
    <button type="submit">Yaddasa vur</button>

</form>
<br>
<hr>


Categories :<br><br>


@foreach($category as $cat)
    Name:
    {{$cat->name}} <br><br>
    <br>

    @forelse($cat->news as $new)

        ad: {{$new->name}}<br>
        basliq: {{$new->title}}<br>
        baxis sayi: {{$new->view_count}}<br>

        tarix: {{$new->date}}

    @empty
        <strong>Yoxdur</strong>
    @endforelse
    <hr>
@endforeach
<hr>
<br>
<hr>



@foreach($news as $new)
    name:
    {{$new->name}}<br>
    cat:
    {{$new->category->name}}<br>

@endforeach
--}}
