@include('frontend.layout.recipe_header')

    <form method="GET" action="{{ route('back') }}">
        <button class="btn btn-warning" type="submit">Back</button>
    </form>
  <div class = "container12">
    <div class = "meal-wrapper">
      <div class = "meal-search">
        <h2 class = "title">Find Meals For Your Ingredients</h2>

        <form method="GET" action="{{ route('request') }}" style="width:100%">
            <div class = "meal-search-box">
                    <input type="text" class="search-control" name="query" placeholder="Search for a recipe">
                    <button type="submit" class="search-btn btn"><i class = "fas fa-search"></i></button>
                
            </div>
        </form>
      </div>
      @if(Session('message'))
        <div class="error-message">
            <p>{{ Session('message') }}</p>
        </div>
      @endif
      @if($errors->any())
        <div class="alert alert-danger">
            @error('error')
                {{ $message }}
            @enderror
        </div>
    @endif
    <div class = "meal-result">
            <h2 class = "title">Your Search Results:</h2>
            <h1 class="text-center">{{Session::get('message')}}</h1>
            <div id= "meal">
    @if(isset($mealDetails))
    
       
                    <!-- <div class = "meal-item"> -->
                        @foreach ($mealDetails as $result)
                        
                        <div class="card9">
                            <div class = "meal-img">
                            <a href="{{ route('show', $result['idMeal']) }}">
                                <img src="{{ $result['strMealThumb'] }}" alt="{{ $result['strMeal'] }}"> 
                            
                                <h4 style="color:black">{{ $result['strMeal'] }}</h4></a>
                                <!-- <h3><a href="{{ route('show', $result['idMeal']) }}">Get Recipe</a></h3>  -->
                            
                            </div>
                        
                        </div>
                        
                        @endforeach 
            </div>
        </div>

    </div>
</div>
    @endif
    <!-- Display other details as needed -->
</body>
</html>