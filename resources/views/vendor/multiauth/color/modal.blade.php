<!-- Modal -->
<div id="addcolor" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="{{ route('color.add') }}" method="POST" accept-charset="utf-8">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add a Categoty</h4>
                </div>
                <div class="modal-body">
                    
                    <fieldset class="form-group">
                        <label for="name">Color Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Color Name">
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="name">Color Code</label>
                        <input type="text" name="code" class="form-control" placeholder="Color Code">
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
<div class="modal fade" id="editcolor" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <form action="{{ route('color.update') }}" method="post">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Color Name</h4>
                </div>
                <div class="modal-body">
                    
                    <input type="hidden" name="id" id="id" value="" />
                    <fieldset class="form-group">
                        <label>Color Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </fieldset>
                    <fieldset class="form-group">
                        <label>Color Code</label>
                        <input type="text" name="code" class="form-control" id="code">
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