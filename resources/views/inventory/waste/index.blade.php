@extends('layouts.app')
@section('title', 'Waste Management')

@section('content')
    <div class="mb-2 d-flex">
        <h4 class="mb-3">Waste Management</h4>
        <div class="ms-auto">
            <a href="{{ route('wastes.create') }}" class="btn btn-primary">
                Add New Waste
            </a>
        </div>
    </div>
    <div class="card w-100">
        <div class="card-body">
            <div class="mb-3">
                <form action="{{ route('wastes.index') }}" role="form">
                    <input type="text" name="search_query" value="{{ Request::get('search_query') }}"
                        class="form-control w-auto" placeholder="Search..." autocomplete="off">
                </form>
            </div>
            <div class=" table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-muted small fw-normal">Item Name</th>
                            <th class="text-muted small fw-normal">Quantity</th>
                            <th class="text-muted small fw-normal">Notes</th>
                            <th class="text-muted small fw-normal">Date</th>
                            <th class="text-muted small fw-normal"></th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0">
                        @foreach ($wastes as $waste)
                            <tr>
                                <td class="align-middle">{{ $waste->master_item_name }} </td>
                                <td class="align-middle">{{ $waste->quantity_view }}</td>
                                <td class="align-middle">{{ $waste->notes }}</td>
                                <td class="align-middle">{{ $waste->created_at_view }}</td>

                                <td class="align-middle">
                                    <div class="dropdown d-flex">
                                        <button class="btn btn-link ms-auto text-black p-0" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical fs-5"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end animate slideIn shadow-sm"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('wastes.destroy', $waste) }}" method="POST"
                                                        id="form-{{ $waste->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="btn btn-link p-0 m-0 w-100 text-start text-decoration-none text-danger"
                                                            onclick="submitDeleteForm('{{ $waste->id }}')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="">
                {{ $wastes->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        function submitDeleteForm(id) {
            const form = document.querySelector(`#form-${id}`);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#6473f4',
                cancelButtonColor: '#d93025',
                confirmButtonText: 'Delete!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                } else {
                    topbar.hide();
                }
            });
        }
    </script>
@endpush