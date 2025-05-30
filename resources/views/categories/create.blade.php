@extends('layouts.master')
@section('title')
Add Category
@endsection
@section('main')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
                <li class="breadcrumb-item active">Add Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">General Add Category</h5>

                        <!-- General Add Category -->
                        <form method="POST" action="{{ route('categories.store') }}">
                            @csrf                            
                            <div class="row mb-3">
                                <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="category_name" name="category_name" value="" placeholder="Enter Category Name">
                                </div>
                            </div>                            

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Form</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

@endsection