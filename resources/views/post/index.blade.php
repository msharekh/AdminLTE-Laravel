@extends('layouts.master')

@section('content')

<h2>All posts</h2>

<table class="table">
  <thead>
    <tr>
      <th>name</th>
       <th>modify</th>
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr>
      <td scope="row">{{$post->name}}</td>
       <td>
        <button type="button" class="btn btn-primary" data-post="{{$post}}" data-toggle="modal" data-target="#editPostModal">
            Edit
        </button>

        <button type="button" class="btn btn-danger" data-post="{{$post}}" data-toggle="modal" data-target="#deletePostModal">
              Delete
        </button>

          <!-- Modal Edit-->
          <div class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Edit post</h4>
                </div>
                <form action="{{route('post.update','test')}}'" method="POST">
                {{method_field('patch')}}
                {{csrf_field()}}
                  <div class="modal-body">
                    <input type="hidden" name="postId" id="postId" value="">
                        @include('post.form')            
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
          <div class="modal modal-danger fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete post</h4>
                  </div>
                  <form action="{{route('post.destroy','test')}}'" method="POST">
                  {{method_field('delete')}}
                  {{csrf_field()}}
                    <div class="modal-body">
                      <input type="hidden" name="postId" id="postId" value="">
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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPostModal">
  Add New
</button>

<!-- Modal New-->
<div class="modal fade" id="newPostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New post</h4>
      </div>
      <form action="{{route('post.store')}}" method="POST">
      {{csrf_field()}}
        <div class="modal-body">
              @include('post.form')
            
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
