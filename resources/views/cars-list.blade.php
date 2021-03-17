
{{'Qui prendo tutte le macchine'}}
@foreach ($cars as $car)
 {{$car}};
@endforeach

<br/>
<br/>

{{'Qui prendo solo la macchina con id 1'}}
@foreach ($id as $index)
 {{$index}};
@endforeach
