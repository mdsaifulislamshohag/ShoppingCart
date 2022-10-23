<!-- Modal -->
<div id="addproduct" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{ route('product.add') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add a Product</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-4">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input name="image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" required/>
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url('{{ asset('images/profile.jpg') }}');"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <fieldset class="form-group col-md-6">
                            <label>Product model</label>
                            <input type="text" name="model" class="form-control">
                        </fieldset>
                        <fieldset class="form-group col-md-6">
                            <label>Product Brand</label>
                            <input type="text" name="brand" class="form-control">
                        </fieldset>
                        <fieldset class="form-group col-md-4">
                            <label>Product category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        
                        <fieldset class="form-group col-md-4">
                            <label>Product Sub-Category</label>
                            <select name="subcategory_id" class="form-control">
                                @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="form-group col-md-4">
                            <label>Product Color</label>
                            <select name="color_id" class="form-control">
                                <option selected>Select One</option>}
                                @foreach($colors as $color)
                                    <option value="{{ $color->id }}">
                                        {{ $color->name }}
                                    </option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="form-group col-md-4">
                            <label>Product Quantity</label>
                            <input type="number" min="1" name="quantity" class="form-control">
                        </fieldset>
                        <fieldset class="form-group col-md-4">
                            <label>Product Price $</label>
                            <input type="number" min="0.00" step="0.01" name="price" class="form-control">
                        </fieldset>
                        <fieldset class="form-group col-md-4">
                            <label>Released Date</label>
                            <input type="date" name="release" class="form-control">
                        </fieldset>
                        <fieldset class="form-group col-md-12">
                            <label>Product Details</label>
                            <textarea class="form-control" name="details" rows="5"></textarea>
                        </fieldset>
                    </div>
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
<div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <form action="{{ route('product.update') }}" method="post">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Product</h4>
                </div>
                <div class="modal-body">
                    
                    <input type="hidden" name="id" id="id" value="" />
                    <fieldset class="form-group col-md-6">
                        <label>Product model</label>
                        <input type="text" name="model" class="form-control" id="model">
                    </fieldset>
                    <fieldset class="form-group col-md-6">
                        <label>Product Brand</label>
                        <input type="text" name="brand" class="form-control" id="brand">
                    </fieldset>
                    <fieldset class="form-group col-md-4">
                        <label>Product category</label>
                        <select name="category_id" class="form-control" id="category_id">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </fieldset>
                    
                    <fieldset class="form-group col-md-4">
                        <label>Product Sub-Category</label>
                        <select name="subcategory_id" class="form-control"  id="subcategory_id">
                            @foreach($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                    </fieldset>
                    <fieldset class="form-group col-md-4">
                        <label>Product Color</label>
                        <select name="color_id" class="form-control"  id="color_id">
                            @foreach($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                            @endforeach
                        </select>
                    </fieldset>
                    <fieldset class="form-group col-md-4">
                        <label>Product Quantity</label>
                        <input type="number" min="1" name="quantity" class="form-control" id="quantity">
                    </fieldset>
                    <fieldset class="form-group col-md-4">
                        <label>Product Price $</label>
                        <input type="number" min="0.00" step="0.01" name="price" class="form-control" id="price">
                    </fieldset>
                    <fieldset class="form-group col-md-4">
                        <label>Released Date</label>
                        <input type="date" name="release" class="form-control" id="release">
                    </fieldset>
                    <fieldset class="form-group col-md-12">
                        <label>Product Details</label>
                        <textarea class="form-control" name="details" rows="5" id="details"></textarea>
                    </fieldset>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>