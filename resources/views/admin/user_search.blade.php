@extends('layouts.admin')
@section('content')
<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Users</h3>
     
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>

    <div class="card-header">
      <!-- Search user -->
      <nav class="navbar navbar-light bg-light">
        <form class="form-inline" action="{{route('user.search')}}" method="GET">
          @csrf
          <input class="form-control mr-sm-2" type="search" placeholder="Search User" aria-label="Search" name="user-search" id="user-search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th style="width: 1%">
              #
            </th>
            <th style="width: 20%">
              Fullname
            </th>
            <th style="width: 30%">
              Username
            </th>
            <th>
              Email
            </th>
            <th style="width: 8%" class="text-center">
              Telephone
            </th>
            <th style="width: 20%">
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $key => $user)
          <tr>
            <td>
              {{$users->firstItem() + $key}}
            </td>
            <td>
              <a>
                {{$user->first_name}} {{$user->last_name}}
              </a>
            </td>
            <td>
              <a>
                {{$user->username}}
              </a>
            </td>
            <td>
              <a>
                {{$user->email}}
              </a>
            </td>
            <td class="project-state">
              <a>
                {{$user->phone}}
              </a>
            </td>
            <td class="project-actions text-right">
              <a class="btn btn-primary btn-sm" href="#">
                <i class="fas fa-folder">
                </i>
                View
              </a>
              <a class="btn btn-info btn-sm" href="{{route('user.admin', $user->id)}}">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
              </a>
              <form action="{{route('user.admin', $user->id)}}" method="POST">
                @csrf
                @method('POST')
                <input type="hidden" name="id" id="id" value="{{$user->id}}">
                <input type="submit" class="btn btn-danger btn-sm" value="Make Admin"></input>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
        <p> Page : {{$users->currentPage()}}</p> <br><br>
      </div>
      <div class="d-flex justify-content-center">
        {{$users->links()}}
      </div>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
@stop