<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
          integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous"/>

</head>
<body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

@include('core.navbar')

<div class="card">
    <div class="card-header" style="width: 1500px">
        <h2>Add Customer</h2>
    </div>
    <div class="card-body">
        <form method="post" action="{{route('customer.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name Customer</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name Customer">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Phone select</label>
                <select class="form-control mb-2" id="exampleFormControlSelect1" style="width: 100px">
                    <option>+84</option>
                    <option>+1</option>
                    <option>+61</option>
                    <option>+81</option>
                    <option>+7</option>
                </select>
                <input type="number" placeholder="phone number" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>

</div>
</div>
</body>
</html>
