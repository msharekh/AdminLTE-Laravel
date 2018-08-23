@extends('layouts.master')

@section('content')

<h2>All categories</h2>

<table class="table">
  <thead>
    <tr>
      <th>title</th>
      <th>description</th>
      <th>modify</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $category)
    <tr>
      <td scope="row">{{$category->title}}</td>
      <td>{{$category->description}}</td>
      <td>
        <button type="button" class="btn btn-primary" data-category="{{$category}}" data-toggle="modal" data-target="#editCategoryModal">
            Edit
        </button>

        <button type="button" class="btn btn-danger" data-category="{{$category}}" data-toggle="modal" data-target="#deleteCategoryModal">
              Delete
        </button>

          <!-- Modal Edit-->
          <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                </div>
                <form action="{{route('category.update','test')}}'" method="POST">
                {{method_field('patch')}}
                {{csrf_field()}}
                  <div class="modal-body">
                    <input type="hidden" name="categoryId" id="categoryId" value="">
                        @include('category.form')            
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          
          <!-- Modal Delete-->
          <div class="modal modal-danger fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Category</h4>
                  </div>
                  <form action="{{route('category.destroy','test')}}'" method="POST">
                  {{method_field('delete')}}
                  {{csrf_field()}}
                    <div class="modal-body">
                      <input type="hidden" name="categoryId" id="categoryId" value="">
                     </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
  
      </td>
    </tr>
    
  @endforeach
  </tbody>
</table>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newCategoryModal">
  Add New
</button>

<!-- Modal New-->
<div class="modal fade" id="newCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Category</h4>
      </div>
      <form action="{{route('category.store')}}" method="POST">
      {{csrf_field()}}
        <div class="modal-body">
              @include('category.form')
            
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
