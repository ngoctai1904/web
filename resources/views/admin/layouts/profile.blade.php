@extends('admin.layouts.base')

@section('content')
    <div class="row mx-0 mt-3">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Profile</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Book information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Book name</label>
                                        <input type="text" id="input-username"
                                            class="form-control form-control-alternative" name="name" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Price</label>
                                        <input type="number" id="input-email" class="form-control form-control-alternative"
                                            name="price">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">Discount</label>
                                        <input type="number" id="input-first-name"
                                            class="form-control form-control-alternative" name="discount"value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Amount</label>
                                        <input type="number" id="input-last-name"
                                            class="form-control form-control-alternative" name="amount" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">Thumbnail</label>
                                        <input type="file" id="input-first-name"
                                            class="form-control form-control-alternative" name="thumbnail">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Since</label>
                                        <input type="number" id="input-last-name" name="since"
                                            class="form-control form-control-alternative" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Author information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">Author</label>
                                        <select class="custom-select" name="author_id">
                                            @foreach ($authors as $author)
                                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">Category</label>
                                        <select class="custom-select" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">Over view</h6>
                        <div class="pl-lg-4">
                            <div class="form-group focused">
                                <textarea rows="4" class="form-control form-control-alternative" name="overview"></textarea>
                            </div>
                        </div>
                        <div class="card-header border-0 d-flex align-items-center justify-content-end">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
