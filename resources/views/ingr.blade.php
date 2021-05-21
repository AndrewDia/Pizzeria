<div class="ingredient-block">
    <img src="/img/ingr/{{$ingr->img_name}}" alt="ingredient">
    <h1>{{$ingr->name}}</h1>
    <h2>{{$ingr->price}} грн / {{$ingr->weight}} г</h2>
    <div class="ingredient_counter">
        <p class="increase">+</p>
        <input form="create_form" id="ingr_{{$ingr->id}}" name="ingr_{{$ingr->id}}" class="black_square"
               value="{{$add[$ingr->id] ?? 0}}" type="text" readonly>
        <p class="decrease">&ndash;</p>
    </div>
</div>
