<nav class="navbar bg-light">
    <div class="container-fluid">
       <a href=" {{ url('/admin')}} "><span class="navbar-brand mb-0 h1">Eddy</span></a> 
        <ul class="d-flex admin-nav">
            <li><a href="{{ url('/admin') }}">Dashboard</a></li>
            <li><a href="{{ url('/admin/login') }}"> Login</a></li>
            <li><a href="{{ url('/admin/register') }}"> Register</a></li>
        </ul>
    </div>
</nav>