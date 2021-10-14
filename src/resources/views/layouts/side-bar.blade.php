
<nav class="navbar navbar-expand-lg py-3 shadow-sm">
    <div class="container">
        <a ref="{{ route('index')}}" class="navbar-brand">
            <!-- Logo Image -->
            <img src="./logo.png" style="margin-top:-15px;margin-bottom:-15px;" width="120" height="70" alt="" class="d-inline-block align-middle mr-2">
            <!-- Logo Text -->
        </a>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index')}}">
                        <i class="material-icons">dashboard</i>
                        Acceuil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('regions')}}">
                        <i class="material-icons">flag</i>
                        Cas par région <br>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('days')}}">
                        <i class="material-icons">timer</i>
                        Cas par jour <br>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cities')}}">
                        <i class="material-icons">location_city</i>
                        Cas par ville
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<header class="py-5">
    <div class="container-fluidd">
        <div class="secondflex">
            <h1 style="font-size: 110px;">COVID-19</h1>
            <h2 style="margin-left:130px;">Morocco Today</h2>
        </div>

        <img src="illu.png">


    </div>
</header>
