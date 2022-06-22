<div class="col-4 mx-auto mt-4">
    <h1>Show Brand</h1>
    <div class="form-group">
        <label for="id">Id</label>
        <input
            class="form-control"
            type="text"
            id="id"
            name="id"
            value="{{$brand->id}}"
            required
            disabled
            aria-describedby="nameHelp">

        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

        <label for="name">Name</label>
        <input
            class="form-control"
            type="text"
            id="name"
            name="name"
            value="{{ $brand->name }}"
            required
            disabled
            aria-describedby="nameHelp">
    </div>

    <a class="mt-2 mb-5 btn btn-primary" href="{{url('brands/')}}">Back</a>
</div>
