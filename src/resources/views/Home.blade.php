@include('layouts.head')
<body style="height:100vh;">

<nav class="menu">
    <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
    <label class="menu-open-button" for="menu-open">
        <img class="img"  src="https://cdn.iconscout.com/icon/premium/png-256-thumb/coronavirus-2759109-2290740.png" />
    </label>

    <a href="{{ route('cities')}}" class="menu-item blue"><i class="fas fa-city"></i></a>
    <a href="{{ route('days')}}" class="menu-item green"><i class="fas fa-chart-line"></i></a>
    <a href="{{ route('regions')}}" class="menu-item red"><i class="fas fa-flag"></i></a>
    <a href="{{ route('index')}}" class="menu-item purple"><i class="fas fa-tachometer-alt"></i></a>
    <a href="#" class="menu-item orange"><i class="fas fa-phone"></i> </a>
    <a href="#" class="menu-item lightblue"><i class="fas fa-address-card"></i></a>
</nav>

</body>
