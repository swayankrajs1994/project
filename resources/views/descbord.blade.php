@if(session('message'))

<p class ="alert alert-success">
    {{session('message')}}
</p>

@endif
<h1>descbord</h1>

<h2>{{Auth::user()->name}}</h2>
