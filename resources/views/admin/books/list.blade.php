@extends('admin.layouts.base')

@section('content')
    <div class="row mx-0 mt-3">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Books</h3>
                    <a href="{{ route('admin.books.create') }}">
                        <button type="button" class="btn btn-primary">Create book</button>
                    </a>
                </div>

                {{-- @if (Session::has('message'))
                <div class="alert alert-success" role="allert">{{Session::get('message')}}</div>
                @endif --}}

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Author</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Since</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img src="{{ $book->thumbnail }}" height="48px">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{ $book->name }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        {{ $book->author->name }}
                                    </td>
                                    <td>
                                        <p class="{{ $book->discount ? 'text-danger' : '' }}">
                                            {{ $book->discount ? $book->discount : $book->price }}$</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <i class="{{ $book->deleted_at ? 'bg-warning' : 'bg-success' }}"></i>
                                            {{ $book->deleted_at ? 'Hide' : 'Show' }}
                                        </span>
                                    </td>
                                    <td>
                                        {{ $book->since }}
                                    </td>
                                    <td>
                                        {{ $book->amount }}
                                    </td>

                                    <td class="td-actions text-right">
                                        <a href="{{ route('admin.books.edit', $book->id) }}">
                                            <button type="submit" rel="tooltip" class="btn btn-success btn-icon btn-sm btn-simple" data-original-title="" title="edit">
                                                <i class="ni ni-settings-gear-65 pt-1"></i>
                                            </button>
                                        </a>
                                        <button type="submit" rel="tooltip"
                                            class="btn btn-danger btn-icon btn-sm btn-simple" data-original-title=""
                                            title="" onClick="deleteRow({{$book->id}})">
                                            <i class="ni ni-fat-remove pt-1"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    {!! $books->links('paginate.default') !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteRow(id) {
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    contentType: "application/json",
                    url: "/admin/books/"+id,
                    data: {id},
                    dataType: 'html',
                    success: function () {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        ).then((res) => {
                            if (res.isConfirmed) {
                                location.reload();
                            }
                        })
                    },
                    error: function (e) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Reloading page!',
                        })
                        setTimeout(function() {location.reload();}, 3000);
                    }
                });
                
            }
            })
        }
    </script>
@endpush