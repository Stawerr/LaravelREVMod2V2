@if (session('status'))
    <div class="alert
    @switch(session('type'))
    @case('error')
        alert-danger
@break
    @default
        alert-success
@endswitch
        alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<h1>Cars</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Brand</th>
        <th scope="col">Registration</th>
        <th scope="col">Year of Manufacture</th>
        <th scope="col">Color</th>
        <th scope="col">Owners</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->brand->name}}</td>
            <td>{{$car->registration}}</td>
            <td>{{$car->year_of_manufacture}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->owner->name}}</td>
            <td>{{$car->created_at}}</td>
            <td>{{$car->updated_at}}</td>
            <td><a class="btn btn-success" href="{{url('cars/'.$car->id)}}">Show</a></td>
            <td><a class="btn btn-primary" href="{{url('cars/'.$car->id. '/edit')}}">Edit</a></td>
            <form action="{{url('cars/' . $car->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{$cars->links()}}
</div>
