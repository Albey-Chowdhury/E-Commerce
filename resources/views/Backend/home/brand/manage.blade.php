@extends('Backend.master')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Brand Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Brand</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
        <a href="{{url('/brand/add')}}"><button type="submit" class="btn btn-primary mt-4">Add Brand</button></a>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
         {{-- Set Errors Masseges --}}
        @include('Backend.home.set.errors')
        {{-- /Set Errors Masseges --}}

        {{-- Set Success Masseges --}}
        @include('Backend.home.set.success')
        {{-- /Set Success Masseges --}}
        <div class="col-lg-3"></div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Brand Elements</h5>

            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach ($brands as $brand )
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$brand->name}}</td>
                    <td>
                        <img src="{{asset('images/'.$brand->image)}}" height="150" width="200"/>
                    </td>
                    <td>
                        <a href="{{url('/brand/edit/'.$brand->id)}}" class="btn btn-sm  btn-info " >Edit</a>
                        <a href="{{url('/brand/delete/'.$brand->id)}}" onclick=" return confirm('Are you sure delete this Brand')" class="btn btn-sm  btn-danger " >Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>

            </div>
          </div>

        </div>

        <div class="col-lg-3"></div>
      </div>
    </section>

  </main>
@endsection
