<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Task</a></li>
        <li><a href="{{'/categories'}}">Category</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">
             <form action="{{ route('logout') }}" method="POST">
           
            <span class="glyphicon glyphicon-log-out"></span>
            @csrf
       <button type="submit" style="border: none;background-color:transparent;"> logout</button>
    </form></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>

        
    </div>
  </nav>