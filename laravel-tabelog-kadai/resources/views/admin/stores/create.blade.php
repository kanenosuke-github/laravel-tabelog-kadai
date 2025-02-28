<div>
    <h2>Add New Store</h2>
</div>
<div>
    <a href="{{route('stores.index')}}">Back</a>
</div>

<form action="{{route('stores.store')}}" method="POST">
    @csrf

    <div>
        <strong>Name:</strong>
        <input type="text" name="name" placeholder="Name">
    </div>
    <div>
        <strong>Image:</strong>
        <input type="file" name="image" placeholder="Image">
    </div>
    <div>
        <strong>Description:</strong>
        <textarea name="description" placeholder="Description"></textarea>
    </div>
    <div>
        <strong>Business Hours:</strong>
        <input type="text" name="business_hours" placeholder="Business Hours">
    </div>
    <div>
        <strong>Price:</strong>
        <input type="number" name="price" placeholder="Price">
    </div>
    <div>
        <strong>Postal Code:</strong>
        <input type="text" name="postal_code" placeholder="Postal Code">
    </div>
    <div>
        <strong>Address:</strong>
        <input type="text" name="address" placeholder="Address">
    </div>
    <div>
        <strong>Phone Number:</strong>
        <input type="tel" name="phone_number" placeholder="Phone Number">
    </div>
    <div>
        <strong>Regular Holiday:</strong>
        <input type="text" name="regular_holiday" placeholder="Regular Holiday">
    </div>
    <div>
        <strong>Category:</strong>
        <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>