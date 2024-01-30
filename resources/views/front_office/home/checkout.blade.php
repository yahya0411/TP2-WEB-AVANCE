

<!DOCTYPE html>
  <head>
    
    <title>Booking History</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="{{asset('css/checkout.css')}}" rel="stylesheet">
    <link href="{{asset('css/order_history.css')}}" rel="stylesheet">

    <style>


:root {
  --color-gray: #737888;
  --color-lighter-gray: #e3e5ed;
  --color-light-gray: #f7f7fa;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}


body {
  margin: 0;
}

h1 ,p {
  margin-bottom: 1rem;
  font-weight: 900;

}

p {
  color: var(--color-gray);
}

hr {
  height: 1px;
  width: 100%;
  background-color: var(--color-light-gray);
  border: 0;
  margin: 2rem 0;
}

.container {
  max-width: 40rem;
  padding: 10vw 2rem 0;
  margin: 0 auto;
  height: 100vh;
}

.form {
  display: grid;
  grid-gap: 1rem;
}

.field {
  width: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid var(--color-lighter-gray);
  padding: .5rem;
  border-radius: .25rem;
}

.field__label {
  color: var(--color-gray);
  font-size: 0.6rem;
  font-weight: 300;
  text-transform: uppercase;
  margin-bottom: 0.25rem
}

.field__input {
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
}
.field:focus-within {
  border-color: #000;
}

.fields {
  display: grid;
  grid-gap: 1rem;
}
.fields--2 {
  grid-template-columns: 1fr 1fr;
}
.fields--3 {
  grid-template-columns: 1fr 1fr 1fr;
}

hr {
  height: 1px;
  width: 90%;
  background-color:#737888;
  border: 0;
margin:2rem 20px  2rem  ;
}

</style>

  </head>
  <body>


    <nav class="nav">
    <a class="logo" href="{{Route('home')}}">Tlemcen Testies</a>

    </nav>
    <div class="container">
    <form action="{{route('send_order')}}" method="POST">
      @csrf
	<h1>Shipping</h1>
	<p>Please enter your shipping details.</p>
  <hr>
	<div class="form">
 
	<label class="field">
	  <span class="field__label" for="address">Address</span>
	  <input class="field__input" type="text" id="address" name="address_livraison" />
    <input type="hidden" value="En Attente" name="etat_commande">
    @if(Session::has('consumer'))
    <input type="hidden" value="{{Session::get('consumer')->Id_Consommateur}}" name="id_consumer">
    @endif
    @foreach($cart as $product)
      <input type="hidden" name="id_produits[]" value="{{ $product[0]['id_produit'] }}">
      <input type="hidden" name="quantities[]" value="{{ $product[0]['quantity'] }}">
    @endforeach
	</label>
	
	</div>
	<hr>
  <div>
<button class="button button--full" type="submit"><svg class="icon">
  <use xlink:href="#icon-shopping-bag" />
</svg>Buy Now</button>
   </div>
   </form>
  </div>


  <script>
  // Get values  
  var price = parseFloat(document.getElementById("price").innerHTML);
  var quantity = parseFloat(document.getElementById("quantity").innerHTML);

  // Calculate & display total
  document.getElementById("total").innerHTML = price * quantity;  
</script>


