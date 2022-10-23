<!-- Modal -->
<div id="addcategory" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{ route('subcategory.add') }}" method="POST" accept-charset="utf-8">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add a Sub-Categoty</h4>
                </div>
                <div class="modal-body">
                    
                    <fieldset class="form-group">
                        <label for="name">Sub-Category Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Sub-Category Name">
                    </fieldset>
                    
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
<div class="modal fade" id="editcategory" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <form action="{{ route('subcategory.update') }}" method="post">
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