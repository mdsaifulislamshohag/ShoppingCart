@extends('multiauth::layouts.app')
@section('content')
<style type="text/css" media="screen">
#pic{
display: none;
}

.newbtn{
cursor: pointer;
}
</style>
<section class="content-header well">
    <h1>
    Dashboard
    <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product List</li>
    </ol>
    <br>
</section>
<div class="col-md-12">
    <div class="panel panel-primary well">
        <div class="panel-heading">
            <span class="pull-left">
                Product List
            </span>
            <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#addproduct">Add New</button>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            @include('multiauth::message')
            <table class="table table-hover table-responsive table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cover</th>
                        <th>model</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Sub-Categoty</th>
                        <th>Color</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Released At</th>
                        <th class="pull-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td width="15px;">
                            {{ $product->id }}
                        </td>
                        <td>
                            <form action="{{ route('product.update') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <label class=newbtn>
                                    <img src="{{ asset('images/products/'.$product->cover) }}"  alt="Cover" width="45px" height="30px">
                                    <input name="image" id="pic" type="file" required>
                                </label>
                                &nbsp;
                                <button type="submit" name="img_update"><i class="fa fa-cloud-upload"></i></button>
                            </form>
                        </td>
                        <td>
                            {{ $product->model }}
                        </td>
                        <td>
                            {{ $product->brand }}
                        </td>
                        <td>
                            {{ $product->category->name }}
                        </td>
                        <td>
                            {{ $product->subcategory->name }}
                        </td>
                        <td>
                            {{ $product->color->name }}
                        </td>
                        <td>
                            {{ $product->quantity }}
                        </td>
                        <td>
                            {{ $product->price }}
                        </td>
                        <td>
                            {{ $product->release }}
                        </td>
                        <td class="pull-right">
                            <form action="{{ route('product.delete',[Crypt::encrypt($product->id)]) }}" method="POST">
                                @csrf @method('delete')
                                <a href="#" data-target="#editproduct"
                                    data-toggle="modal"
                                    class="edit btn btn-xs btn-default"
                                    data-id="{{ $product->id }}"
                                    data-model="{{ $product->model }}"
                                    data-brand="{{ $product->brand }}"
                                    data-category_id="{{ $product->category_id }}"
                                    data-subcategory_id="{{ $product->subcategory_id }}"
                                    data-color_id="{{ $product->color_id }}"
                                    data-quantity="{{ $product->quantity }}"
                                    data-price="{{ $product->price }}"
                                    data-release="{{ $product->release }}"
                                    data-details="{{ $product->details }}"
                                    >
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-xs btn-danger" onclick="return deleteconfig()"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pull-left" >
                
                <div class="btn-group" >
                    <span>{{ $products->links() }}</span>
                </div>
                @if($products->total() > $products->perPage())
                <span class="hide-sm">
                    &nbsp; Showing {{ $products->firstItem() }} - {{ $products->lastItem() }}/{{ $products->total() }}
                </span>
                @endif
                <!-- /.btn-group -->
            </div>
            
        </div>
        
    </div>
</div>
@include('vendor.multiauth.products.modal')
<script type="text/javascript">
    $(function () {
        $(".edit").click(function () {
            var id = $(this).data('id');
            var model = $(this).data('model');
            var brand = $(this).data('brand');
            var category_id = $(this).data('category_id');
            var subcategory_id = $(this).data('subcategory_id');
            var color_id = $(this).data('color_id');
            var quantity = $(this).data('quantity');
            var price = $(this).data('price');
            var release = $(this).data('release');
            var details = $(this).data('details');
            $(".modal-body #id").val(id);
            $(".modal-body #model").val(model);
            $(".modal-body #brand").val(brand);
            $(".modal-body #category_id").val(category_id);
            $(".modal-body #subcategory_id").val(subcategory_id);
            $(".modal-body #color_id").val(color_id);
            $(".modal-body #quantity").val(quantity);
            $(".modal-body #price").val(price);
            $(".modal-body #release").val(release);
            $(".modal-body #details").val(details);
        })
    });

     //image update
     $('.newbtn').bind("click" , function () {
            $('#pic').click();
     });
</script>
@endsection