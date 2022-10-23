@extends('multiauth::layouts.app')
@section('content')
<section class="content-header well">
    <h1>
    Dashboard
    <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Color List</li>
    </ol>
    <br>
</section>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary well">
        <div class="panel-heading">
            <span class="pull-left">
                Color List
            </span>
            <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#addcolor">Add New</button>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            @include('multiauth::message')
            <table class="table table-hover table-responsive table-striped">
                <tbody>
                    @foreach($colors as $color)
                    <tr>
                        <td width="15px;">
                            {{ $color->id }}
                        </td>
                        <td>
                            {{ $color->name }}
                        </td>
                        <td>
                            <span class="btn btn-xs" style="background-color: #{{ $color->code }};box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);">
                                <i style="background-color: #fff;color:000;padding: 1px;border-radius: 3px;">
                                    {{ $color->code }}
                                </i>
                            </span>
                        </td>
                        <td class="pull-right">
                            <form action="{{ route('color.delete',[Crypt::encrypt($color->id)]) }}" method="POST">
                                @csrf @method('delete')
                                <a href="#" data-target="#editcolor"
                                    data-toggle="modal"
                                    class="edit btn btn-xs btn-default"
                                    data-id="{{ $color->id }}"
                                    data-name="{{ $color->name }}"
                                    data-code="{{ $color->code }}"
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


@include('vendor.multiauth.color.modal')
<script type="text/javascript">
    $(function () {
        $(".edit").click(function () {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var code = $(this).data('code');
            $(".modal-body #id").val(id);
            $(".modal-body #name").val(name);
            $(".modal-body #code").val(code);
        })
    });
</script>
@endsection