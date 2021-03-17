
<strong>{{'Qui prendo tutte le macchine'}}</strong>
@foreach ($cars as $car)
 {{$car}};
@endforeach

<br/>
<br/>

<strong>{{'Qui prendo solo la macchina con id 1'}}</strong>
@foreach ($id as $index)
 {{$index}};
@endforeach

<br/>
<br/>

{{-- {{'Qui prendo solo la macchina con id 1'}}
@foreach ($cambioTarga as $element)
 {{$element}};
@endforeach --}}
