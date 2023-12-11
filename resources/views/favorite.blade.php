@include('frontend.layout.recipe_header')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('assets/api.css')}}">
    <link rel = "stylesheet" href = "assets/api.css">
    <title>Recipe Details</title>
</head>
<body>
<div class="contain">
    <div class = "meal-wrapper">
    
    <h2 style="color: white">{{ $recipe['recipe_name'] }}</h2><br>
            <div class = "recipe-meal-img">
                <img src="{{asset('storage/recipe')}}/{{$recipe->image}}" >
            </div> 
            <br>
           <h3 style="color:white;">Ingredients</h3>
           <small style="color: white">{{ $recipe['ing'] }}</small>
                
            
            <div class = "recipe-instruct">
                <h3 style="color:white;">Instructions</h3>
                <p style="color:white">{{ $recipe['recipe_description'] }}</p>
            </div> <br>
            <div class = "youtube-link">
                <a href="{{ $recipe['video'] }}" target = "_blank">Watch the Video!</a> 
            </div>
</div>
</div>   
</body>
</html>