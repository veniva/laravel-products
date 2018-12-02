<table class="table display" id="table1">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Qty.</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <th>{{$product['id']}}</th>
            <td>{{$product['name']}}</td>
            <td>{{$product['qty']}}</td>
            <td><a class="btn btn-link" href="{{route('products.edit', $product['id'])}}">Edit</a> |
                <a class="btn btn-link"
                   data-href="{{route('products.destroy', $product['id'])}}"
                   data-toggle="modal"
                   data-target="#confirm_delete_dialog">Delete</a>
        </tr>
    @endforeach
    </tbody>
</table>

<!-- Delete modal dialog -->
<div class="modal fade" id="confirm_delete_dialog" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">MConfirm action</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure that you want to delete this product?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="btn_delete">Delete</button>
            </div>
        </div>
    </div>
</div>