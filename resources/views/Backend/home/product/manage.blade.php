@extends('Backend.master')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Product Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
        <a href="{{url('/product/add')}}"><button type="submit" class="btn btn-primary mt-4">Add Product</button></a>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
         {{-- Set Errors Masseges --}}
        @include('Backend.home.set.errors')
        {{-- /Set Errors Masseges --}}

        {{-- Set Success Masseges --}}
        @include('Backend.home.set.success')
        {{-- /Set Success Masseges --}}
        <div class="col-lg-1"></div>

        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Product Elements</h5>

            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach ($products as $product )
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->Price}}</td>
                    <td>
                        <img src="{{asset('images/'.$product->image)}}" height="150" width="200"/>
                    </td>
                    <td>
                        <a href="{{url('/product/edit/'.$product->id)}}" class="btn btn-sm  btn-info " >Edit</a>
                        <a href="{{url('/product/delete/'.$product->id)}}" class="btn btn-sm  btn-danger " >Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>

            </div>
          </div>

        </div>

        <div class="col-lg-1"></div>
      </div>
    </section>

  </main>
@endsection
