<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">{{ config('app.name', 'Laralearn') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">      
          
            <li class="nav-item active">
                <a class="nav-link" href="/test">Test</a>
            </li>
                      
            <li class="nav-item active">
                <a class="nav-link" href="/private/privatezone">Zone privée</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-danger" href="/users/deconnexion">Logout</a>
            </li>
           
           <li class="nav-item active">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/register">Register</a>
            </li>  
    </div>
</nav> 