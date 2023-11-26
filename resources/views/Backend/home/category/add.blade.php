@extends('Backend.master')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Category Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item">Add Category</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
     <a href="{{url('/category/manage')}}"><button type="submit" class="btn btn-primary mt-4">Manage Category</button></a>
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
              <h5 class="card-title">Add Category Elements</h5>

              <!-- General Form Elements -->
              <form action="{{url('/catagory/store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">name</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="image" type="file" id="formFile" accept="image/*">
                  </div>
                </div>

                <div class="ro mb-3">
                  <div class="col-sm-12 ">
                    <button type="submit" class="btn btn-primary mt-4">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        <div class="col-lg-3"></div>
      </div>
    </section>

  </main>
@endsection
