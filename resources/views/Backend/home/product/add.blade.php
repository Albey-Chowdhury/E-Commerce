@extends('Backend.master')
@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Product Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item">Add Product</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
     <a href="{{url('/product/manage')}}"><button type="submit" class="btn btn-primary mt-4">Manage Product</button></a>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        {{-- Set Errors Masseges --}}
        @include('Backend.home.set.errors')
        {{-- /Set Errors Masseges --}}

        {{-- Set Success Masseges --}}
        @include('Backend.home.set.success')
        {{-- /Set Success Masseges --}}

        <div class="col-lg-2"></div>

        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Product Elements</h5>

              <!-- General Form Elements -->
              <form action="{{url('/product/store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                  <label for="inputText" class="col-form-label">Category</label>
                  <div class="col-sm-12">
                    <select class="form-control" name="category_id">
                        <option selected disabled>Selected A Category</option>
                        @foreach ($categories as $category )
                        <option value="{{$category->id}}" >{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="row mb-3 form  ">
                  <label for="name" class="col-sm-4 col-form-label">name</label>
                  <div>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter You Product Name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputnumber" class="col-sm-3 col-form-label">Price</label>
                  <div >
                    <input type="number" name="Price" class="form-control" placeholder="Enter You Product Price">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Shot Description</label>
                  <div >
                    <textarea class="form-control" name="shot_description" cols="80" rows="10"
                    placeholder="Enter You Shot Description "></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Long Description</label>
                  <div >
                    <textarea class="form-control ckeditor" name="long_description" cols="80" rows="20"
                    placeholder="Enter You Product Long Description"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="type" placeholder="Enter You Type">
                        <option selected disabled>Selected A Type</option>
                        <option value="Top">Top</option>
                        <option value="Hot">Hot</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Qty</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="qty" type="number" placeholder="Enter You QTY">
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

        <div class="col-lg-2"></div>
      </div>
    </section>

  </main>
@endsection

@push('script')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
