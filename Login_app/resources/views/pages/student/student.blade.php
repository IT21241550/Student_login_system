@extends('layouts\app')

@section('content')
<div class="container">
    <div class="container" style="background-image: url('{{ asset('image/Student.jpg') }}'); background-size: cover;">
    <div class="row">
        <div class="col-lg-18 text-center">
<h1 class="page-title">STUDENT PAGE</h1>
        </div>
        <div class="container">
            <h2>Enter Details</h2>
            <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                @csrf
              {{-- <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" name="id" id="id" placeholder="Enter ID">
              </div> --}}
              <div class="col-lg-12 mt -5">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="image">Image:</label><br>
                <input type="file" class="form-control-file" name="image" id="image">
              </div>
              <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age">
              </div>
              <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" id="status">
                  <option value="active">Active</option>
                  <option value="inactive">Inactive</option>

                </select>
              </div>
              <div class="col-lg-4 ">
              <button type="submit" class="btn btn-primary "  style="background: #0e0563">Submit</button>

            </div>


            </form>
          </div>
        </div>
          <div class="col-lg-12 mt-5">

            <table class="table table-success table-striped-columns">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">AGE</th>
                    <th scope="col">STATUS</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)


                  <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->name}}</td>
                    <td>{{$task->image}}</td>
                    <td>{{$task->age}}</td>
                    {{-- <td>{{$task->status}}</td> --}}
                    <td>
                        @if ($task->status == 'active')
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('student.delete', $task->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('student.delete', $task->id)}}" class="btn btn-danger"><i
                            class="fas fa-trash-alt"></i></a>
                        <a href="javascript:void(0)" class="btn btn-danger"><i
                             class="fas fa-pencile"></i></a>




                    </td>
                  </tr>

                   @endforeach

                </tbody>
              </table>
          </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h1>modal test</h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>


    </div>
  </div>
</div>


@endsection

@push('css')
<style>
    .page-title{
        font-size: 3rem;
        color: blue
        padding-top: vvh;
    }


    .col-lg-4 {
            margin-top: 3vh;
            text-align: center;

        }

.position-relative {
            margin-top: 3vh;
            text-align: :right;

}
/* body {
        background-image: url('Login_app\resources\views\image\Student..jpg');
        background-size: cover;
    } */
</style>
@endpush
