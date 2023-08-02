@php
$menuItems = config('menu');
    
@endphp

<nav>
    <ul  class="d-flex justify-content-center align-items-center h-100">
      @foreach (config('menu') as $menuItems)
         <li class="p-2"><a href="{{ route($menuItems['route']) }}">{{$menuItems['name']}}</a></li> 
      @endforeach  
    </ul>
</nav>


