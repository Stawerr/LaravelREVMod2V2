<div class="col-4 mx-auto mt-4">
    <h1>Show Car</h1>
    <div class="form-group">
        <label for="id">Id</label>
        <input
            class="form-control"
            type="text"
            id="id"
            name="id"
            value="{{$car->id}}"
            required
            disabled
            aria-describedby="nameHelp">

        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

        <label for="brand">Brand</label>
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            value="{{ $car->brand->name }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="registration">Registration</label>
        <input
            class="form-control"
            type="text"
            id="registration"
            name="registration"
            value="{{ $car->registration }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="year_of_manufacture">Year of Manufacture</label>
        <input
            class="form-control"
            type="text"
            id="year_of_manufacture"
            name="year_of_manufacture"
            value="{{ $car->year_of_manufacture }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="color">color</label>
        <input
            class="form-control"
            type="text"
            id="color"
            name="color"
            value="{{ $car->color }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="owner">Owner</label>
        <input
            class="form-control"
            type="text"
            id="owner"
            name="owner"
            value="{{ $car->owner->name }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="created_at">Created_at</label>
        <input
            class="form-control"
            type="text"
            id="created_at"
            name="created_at"
            value="{{ $car->created_at }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="updated_at">Updated_at</label>
        <input
            class="form-control"
            type="text"
            id="updated_at"
            name="updated_at"
            value="{{ $car->updated_at }}"
            required
            disabled
            aria-describedby="nameHelp">
    </div>

    <a class="mt-2 mb-5 btn btn-primary" href="{{url('cars/')}}">Back</a>
</div>
