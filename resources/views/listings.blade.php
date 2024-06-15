
<h1>Listings</h1>
<p>{{$list[0]['title'];}}</p>
<?php
// echo json_encode($list[0]);
?>


<p>No more listings for this session</p>
<?php
 $id=0; 
?>
@foreach($list as $listing)
<h2><a href="{{'/listing/'.$listing['id']}}">{{$listing['title']}}</a></h2>
<?php $id+=1; ?>
@endforeach