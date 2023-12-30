
<!DOCTYPE html>


<head>


    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formcss.css">

    <link href="{{asset('css/update_data.css')}}" rel="stylesheet">

</head>


<body>

<nav class="nav">
        <a class="logo" href="{{Route('home')}}">Tlemcen Testies</a>

    </nav>


 <form method="POST" action="{{route('consommateur.update', ['consommateur' => $consumer->Id_Consommateur])}}" >
        @csrf
        @method("PUT")
        <fieldset>
            
            <legend>
   
               Modify Your Account
            </legend>
            
            <br>
            <h2>
                <legend>
                        <p>Personal Info</p>
                </legend>
            </h2>

            <br>
            <label for="Name">Email</label>
            <br>
            <input type="text"  value="{{$consumer->Email}}" disabled >
            <br><br>
            <label for="Name">First Name</label>
            <br>
            <input type="text" id="Name" name="fn" value="{{$consumer->nom_consommateur}}"  >
            <br><br>
            <label for="prenom">Last Name</label>
            <br>
            <input type="text" id="prenom" name="ln" value="{{$consumer->prénom_consommateur}}" >
            <br><br><label for="etb">Phone</label>
            <br>
            <input id="phone" type="tel"  name="ph" value="{{$consumer->téléphone}}" >
            <br> <br>
            <label for="etb">Password</label>
            <br>
            <input id="password" type="password"  name="pass" value="{{Session::get('password')}}" >
            <br> <br>
             






            

 

            <input class="btn" type="submit" name="sbb" value="Update Account">




        </fieldset>
    </form>















</body>

























</html>