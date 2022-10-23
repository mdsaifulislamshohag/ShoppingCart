@extends('multiauth::layouts.app')
@section('content')
<section class="content-header well">
    <h1>
    Dashboard
    <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category List</li>
    </ol>
    <br>
</section>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary well">
        <div class="panel-heading">
            <span class="pull-left">
                Category List
            </span>
            <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#addcategory">Add New</button>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            @include('multiauth::message')
            <table class="table table-hover table-responsive table-striped">
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td width="15px;">
                            {{ $category->id }}
                        </td>
                        <td>
                            {{ $category->name }}
                           
                        </td>
                        <td class="pull-right">
                            <form action="{{ route('category.delete',[Crypt::encrypt($category->id)]) }}" method="POST">
                                @csrf @method('delete')
                                <a href="#" data-target="#editcategory"
                                    data-toggle="modal"
                                    class="edit btn btn-xs btn-default"
                                    data-id="{{ $category->id }}"
                                    data-name="{{ $category->name }}"
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
            
        </div>
        
    </div>
</div>


@include('vendor.multiauth.category.modal')
<script type="text/javascript">
    $(function () {
        $(".edit").click(function () {
            var id = $(this).data('id');
            var name = $(this).data('name');
            $(".modal-body #id").val(id);
            $(".modal-body #name").val(name);
        })
    });
</script>
@endsection