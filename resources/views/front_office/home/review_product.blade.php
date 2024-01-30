<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="{{asset('css/review.css')}}" rel="stylesheet"/>

  </head>
  <body>
  
    <div class="container">
    
    
      <div class="post">
        <div class="text">Thanks for your review !</div>
        <div class="edit"></div>
      </div>
      
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5" value="5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4" value="4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3" value="3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2" value="2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1" value="1">
        <label for="rate-1" class="fas fa-star"></label>
        <form  method="post" action="{{route('review_prod_send')}}" >
        @csrf
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="Describe your experience.." name="comment"></textarea>
          </div>
          <input type="hidden" id="rating" name="rate" value="">
          <input type="hidden" value="produit" name="type_evaluation">
          
         @if(Session::has('id_produit')) 
         <input type="hidden" value="{{Session::get('id_produit')}}" name="id_produit">
         @endif
          
          @if(Session::has('consumer'))
      <input type="hidden" value="{{Session::get('consumer')->Id_Consommateur}}" name="id_consumer">
        @endif
          <div class="btn">
            <button type="submit">Share</button>
          </div>
          </form>
      </div>
    
    </div>
    
    
    <script>
      /*
const btn = document.querySelector("button");
const post = document.querySelector(".post"); 
const widget = document.querySelector(".star-widget");

let submitted = false; 

btn.onclick = (e) => {

  e.preventDefault();

  if (!submitted) {
    submitted = true;
    widget.style.display = "none";
    post.style.display = "block";
    setTimeout(function(){
      window.location='{{ route('products') }}';
    }, 3000);

  } else {
    setTimeout(function(){
      window.location='{{ route('products') }}';
    }, 3000);  }

}*/
document.querySelectorAll('.star-widget input[type="radio"]').forEach((radio) => {
        radio.addEventListener('change', function () {
            document.getElementById('rating').value = this.value;
        });
    });

</script>

  </body>
</html>


