@foreach ($all_students as $item)
    Name : {{ $item->rStudent->name }}
    <br />
    Email : {{ $item->rStudent->email }}
    <br />
    Phone : {{ $item->phone }}
    <hr />
@endforeach
