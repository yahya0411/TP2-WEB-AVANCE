

<!DOCTYPE html>
  <head>
    
    <title>Booking History</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="{{asset('css/checkout.css')}}" rel="stylesheet">
    <link href="{{asset('css/order_history.css')}}" rel="stylesheet">

  </head>
  <body>


    <nav class="nav">
    <a class="logo" href="{{Route('index')}}">Tlemcen Testies</a>

    </nav>






<br>

<div class="all">
    <header class="header">
      


<br>


  
    <form action="{{Route('index')}}" class="form" method="">

      <div>
      <fieldset>       <h1 style="text-align:center;">Checkout</h1>
</fieldset>
        <h2>Address</h2>
  
        <div class="card">
          <address>
            Mohammed Smail<br />
            Street: 01 Nov 1954 Ave. <br>
            City: Tlemcen, 13000.<br />
            Algeria
          </address>
        </div>
      </div>
  
      <fieldset>
        <legend>Payment Method</legend>
  
        <div class="form__radios">

        <div class="form__radio">
            <label for="edahabia"><img class="icon" src="img/edahabia.png"/>
                EDAHABIA Card</label>
            <input id="edahabia" name="payment-method" type="radio" />
          </div>
  

          <div class="form__radio">
            <label for="CIB"><img class="icon" src="img/cib.png"/>
              CIB Card</label>
            <input checked id="CIB" name="payment-method" type="radio" />
          </div>
  
       

        </div>
      </fieldset>
  
      <div>
        <h2>Shopping Bill</h2>
  
        <table>
  <tbody>
    <td>Price Total</td>
    <td align="right"><span id="price">13.50</span> Da</td>  
  </tr>
  <tr>
    <td>Quantity</td> 
    <td align="right"><span id="quantity">1</span></td>
  </tr>
  
  </tbody>

  <tfoot>
    <tr>
      <td>Total</td>
      <td align="right"><span id="total"></span></td>
    </tr>
  </tfoot>
</table>
      </div>
  
      <div>
<button class="button button--full" type="submit" onclick="window.location='{{ route('index') }}'" ><svg class="icon">
  <use xlink:href="#icon-shopping-bag" />
</svg>Buy Now</button>
      </div>
    </form>
  </div>
  
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
  
    <symbol id="icon-shopping-bag" viewBox="0 0 24 24">
      <path d="M20 7h-4v-3c0-2.209-1.791-4-4-4s-4 1.791-4 4v3h-4l-2 17h20l-2-17zm-11-3c0-1.654 1.346-3 3-3s3 1.346 3 3v3h-6v-3zm-4.751 18l1.529-13h2.222v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h2.222l1.529 13h-15.502z" />
    </symbol>
  

  </svg>

  <script>
  // Get values  
  var price = parseFloat(document.getElementById("price").innerHTML);
  var quantity = parseFloat(document.getElementById("quantity").innerHTML);

  // Calculate & display total
  document.getElementById("total").innerHTML = price * quantity;  
</script>





</body>
