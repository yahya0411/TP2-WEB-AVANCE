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
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="#">
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="Describe your experience.."></textarea>
          </div>
          <div class="btn">
            <button type="submit">Share</button>
          </div>
        </form>
      </div>
    </div>
    <script>
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
      window.location='{{ route('profile') }}';
    }, 3000);

  } else {
    setTimeout(function(){
      window.location='{{ route('profile') }}';
    }, 3000);  }

}
</script>

  </body>
</html>