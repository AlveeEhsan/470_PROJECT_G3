@include('frontend.layout.recipe_header')
<form method="GET" action="{{url('/explore_recipes')}}">
        <button class="btn btn-warning" type="submit">Back</button>
    </form>

<div class="contain">
    <div class = "meal-wrapper">
        
    <h1 style="color: white">{{ $mealDetail['strMeal'] }} ( {{ $mealDetail['strArea'] }} )</h1>
            <div class = "recipe-meal-img">
                <img src="{{ $mealDetail['strMealThumb'] }}" alt="{{ $mealDetail['strMeal'] }}">
            </div>
            <h2 style="color:white;">Ingredients</h2>
            
                @foreach ($mealIngredients as $ingredient)
                <small style="color:white">
                    {{ $ingredient }} , </small>
                @endforeach
            
            <div class = "recipe-instruct">
                <h2 style="color:white;">Instructions</h2>
                <p style="color:white">{{ $mealDetail['strInstructions'] }}</p>
            </div>
            <div class = "youtube-link">
                <a href="{{ $mealDetail['strYoutube'] }}" target = "_blank">Watch the Video</a> 
            </div>
</div>
</div>   
</body>
</html>