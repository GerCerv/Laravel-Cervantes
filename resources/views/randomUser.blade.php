<!-- TUTORIAL 11 -->
<h1> THIS IS TUTORIAL FOR NUMBER 11 </h1>
<h1>{{$Ruser}}</h1>
<h1>{{rand()}}</h1>
<h1>{{$Rusers[3]}}</h1>

<div>
    @if($Ruser=='Gerryson')
    <h2> THIS IS MY ACCOUNT </h2>
    @elseif ($Ruser=='Irvin')
    <h2> THIS IS MY TEAM </h2>
    @else
    <h1>Other user</h1>
    @endif
</div>
<!-- FOR LOOP -->
 <h1>   </h1>
<div>
    @for($i=0;$i<=3;$i++)
        <h3>{{$i}}</h3>
    @endfor
</div>
<div>
    @foreach($Rusers as $gagawa)
    <h3>{{$gagawa}}</h3>
    @endforeach
</div>
