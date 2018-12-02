<table class="table display" id="table1">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Qty.</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <th scope="row">{{$product['id']}}</th>
            <td>{{$product['name']}}</td>
            <td>{{$product['qty']}}</td>
            <td><a class="btn btn-link" href="/{{$product['id']}}/edit">Edit</a> | <a class="btn btn-link">Delete</a>
        </tr>
    @endforeach
    </tbody>
</table>