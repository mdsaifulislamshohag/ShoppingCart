<!-- Modal -->
<div id="addoffer" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{ route('offer.add') }}" method="POST" accept-charset="utf-8">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Make an Offer</h4>
                </div>
                <div class="modal-body">
                    
                    <fieldset class="form-group  col-md-12">
                        <label for="title">Offer Title</label>
                        <input type="text" name="title" class="form-control">
                    </fieldset>

                    <fieldset class="form-group col-md-6">
                        <label>Offered Product</label>
                        <select name="product_id" class="selectpicker form-control" data-live-search="true">
                            <option  selected="true" disabled="disabled">Select One</option>
                            @foreach($products as $product)
                            <option value="{{ $product->id }}" data-tokens="{{ $product->model }}">{{ $product->model }}</option>
                            @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="form-group col-md-6">
                        <label>Discount (%)</label>
                        <input type="number" min="0.00" step="0.01" name="discount" class="form-control">
                    </fieldset>

                    <fieldset class="form-group col-md-12">
                        <label>Offer Details</label>
                        <textarea class="form-control" name="details" rows="5"></textarea>
                    </fieldset>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Modal for Edit --}}
<div class="modal fade" id="editoffer" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <form action="{{ route('offer.update') }}" method="post">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Category Name</h4>
                </div>
                <div class="modal-body">
                    
                    <input type="hidden" name="id" id="id" value="" />
                    <fieldset class="form-group">
                        <input type="text" name="name" class="form-control" id="name">
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>