@extends('layouts.master')

@section('content')

<h2>All categories 2</h2>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add New
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Category</h4>
      </div>
      <form action="{{route('category.store')}}" method="POST">
      {{csrf_field()}}
        <div class="modal-body">
             <div class="form-group">
              <label for="title"></label>
              <input type="text" name="title" id="title" class="form-control">
             </div>
             <div class="form-group">
              <label for="description"></label>
              <textarea type="text" name="description" id="description" class="form-control" cols=20 rows=5 >
             </textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
