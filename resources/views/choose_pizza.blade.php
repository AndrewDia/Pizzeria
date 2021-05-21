<button class="pizza-block" type="submit" name="pizza" value="{{$pizza->id}}">
    <img src="img/pizza/{{ $pizza->img_name }} " alt="pizza-img" class="pizza-img">
    <h2>{{ $pizza->name }}</h2>
    <p>{{ $pizza->description }}</p>
</button>
