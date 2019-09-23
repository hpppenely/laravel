@foreach($data as $value)
id&nbsp;&nbsp;{{$value->id}}&nbsp;&nbsp;title&nbsp;&nbsp;{{$value->title}}<br>
@endforeach
{{ $data->onEachSide(1)->links() }}