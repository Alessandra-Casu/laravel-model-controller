@php
$menuItems = config('menu');
    
@endphp

<nav>
    <ul>
      @foreach (config('menu') as $menuItems)
         <li><a href="{{ route($menuItems['route']) }}">{{$menuItems['name']}}</a></li> 
      @endforeach
        
        
    </ul>
</nav>


