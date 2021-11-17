<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | JuanBarangay</title>
</head>
<body>


    <div class="content">
            <form class="" action="{{URL::to('/store')}}" method="POST">

                <label>UserName:</label>
                <input type= "text" name="name" placeholder="Enter Name" value=""></input>
                <br>
                <br>

                <label>Email:</label>
                <input type= "text" name="email" placeholder="Enter Email"value=""></input>
                <br>
                <br>

                <label>Password</label>
                <input type= "password" name="password"  placeholder="Enter Password" value=""></input>
                <br>
                <br>

                <input type= "hidden" name="_token" value="{{csrf_token()}}"></input>

                <button type="submit" name="button">Register Account</button>
            </form>
    </div>

</body>
</html>