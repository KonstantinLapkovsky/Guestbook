@extends ('layouts.master')

    @section ('content')

    <div class="guest-form">

        <div class="col-md-12" id="login">
            
            <h1>Sign in</h1>

            <form method="POST" action="/admin/login">

                {{ csrf_field() }}
                
                <div class="form-group">
                    
                    <label for="email">Email:</label>

                    <input type="email" class="form-control" id="email" name="email" required>

                </div>

                <div class="form-group">
                    
                    <label for="password">Password:</label>

                    <input type="password" class="form-control" id="password" name="password" required>

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Sign in</button>

                    <div class="choose">or</div>

                    <div class="btn btn-link register-btn">Register</div>

                </div>

                @include ('layouts.errors')

            </form>

        </div>

        <div class="col-sm-12" id="register">
            
            <h1>Register</h1>

            <form method="POST" action="/admin/register">

                {{ csrf_field() }}
                
                <div class="form-group">
                    
                    <label for="name">Name:</label>

                    <input type="text" class="form-control" id="name" name="name" required>

                </div>

                <div class="form-group">
                    
                    <label for="email">Email:</label>

                    <input type="email" class="form-control" id="email" name="email" required>

                </div>

                <div class="form-group">
                    
                    <label for="password">Password:</label>

                    <input type="password" class="form-control" id="password" name="password" required>

                </div>

                <div class="form-group">
                    
                    <label for="password_confirmation">Password confirmation:</label>

                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>

                </div>

                <div class="form-group">
                    
                    <button type="submit" class="btn btn-primary">Register</button>   

                    <div class="choose">or</div>

                    <div class="btn btn-link login-btn">Sign in</div>

                </div> 

                @include ('layouts.errors')

            </form>

        </div>

    </div>

    @endsection
