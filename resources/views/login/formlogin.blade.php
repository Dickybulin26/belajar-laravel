<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Persuratan</title>
    <!-- import js dan css bootstrap -->
    @vite(['resources/js/app.js','resources/css/app.css']) 
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-color: #E76F55;
    }

    .container{
        margin-top: 12%;
        display: flex;
        /* flex-direction: column; */
        align-items: center;
        justify-content: center;
    }

    .card{
        /* margin-top: 50%; */
        width: 400px;
        height: 300px;
    }

    .card-header{
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        background-color: pink;
        color: white;
    }

    .card-footer .btn{
        margin-left: 19rem;
    }
</style>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-lg-4">
                <div class="card border-primary mb-3" style="max-width: 70rem;">
                    <div class="card-header">
                        <h1>
                            Form Login
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>username</label>
                            <input type="text" class="form-control" name="username" placeholder="username@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>