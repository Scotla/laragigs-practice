
@if(count($list[0])==0)
<p>No more listings for this session</p>
@else
    @foreach($list['listings'] as $listing)
<h2><a href="{{'/listing/'.$listing['id']}}">{{$listing['title']}}</a></h2>

@endforeach
@endif

    <h2>{{$list['title']}}</h2>
    <p>{{$list['description']}}</p>