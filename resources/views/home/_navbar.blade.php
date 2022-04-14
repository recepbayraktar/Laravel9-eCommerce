
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container-fluid">
         <a class="navbar-brand" href="#">Brand</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
     <div class="collapse navbar-collapse" id="main_nav">
       <ul class="navbar-nav">
           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Mega submenu </a>
               <ul class="dropdown-menu">
                @include('home._category')
               </ul>
           </li>
           <li class="nav-item"> <a class="nav-link" href="#">Menu item </a> </li>
           <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
           <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
       </ul>

     </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
   </nav>
