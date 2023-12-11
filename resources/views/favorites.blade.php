@include('frontend.layout.recipe_header')

  <div class = "container12">
    <div class = "meal-wrapper">
      <div class = "meal-search">
      <h2 class = "title" position="center">Your most favorite ingredients</h2>
<table class="table table-primary display" id="myTable" style="position:center" width="10%">
                <thead>
                    <tr>
                    <th scope="col">Recipe</th>
                    <th scope="col">Ingredients Needed</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach($favs as $fav)
                    
                    <tr class="">
                    <td>
                    {{$fav->recipe_name}} </td>
                    <td>{{Str::limit($fav->ing, 80)}}</td>
                        
                    </tr>   
                    @endforeach 

                </tbody>
            </table>
        <h2 class = "title">Find Meals For Your Ingredients</h2>
        <!-- <blockquote>Real food doesn't have ingredients, real food is ingredients.<br>
          <cite>- Jamie Oliver</cite> -->
        </blockquote>
      </div>
      <div class = "meal-result">
            <div id= "meal">
            @foreach($favs as $fav)
                        
                        <div class="card9">
                            <div class = "meal-img">
                                <a href="{{ route('recipesingle',$fav->id) }}">
                                <img src="{{asset('storage/recipe')}}/{{$fav->image}}"  > 
                            
                                <h3 style="color:black">{{$fav->recipe_name}}</h3> </a>
                                
                            </div>
                        
                        </div>
                        
             @endforeach 
            </div>
    

    </div>
</div>
    <!-- Display other details as needed -->
    
</body>
</html>





