@extends('layouts.backend')
@section('css')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
@endsection
@section('js')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    @vite(['resources/js/pages/datatables.js'])
@endsection

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Modules</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Modules</li>
                        <li class="breadcrumb-item active" aria-current="page">lister</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- Info -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Lister les Modules</h3>
            </div>
        </div>
        <!-- END Info -->

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        <!-- END Dynamic Table Full -->

        <!-- Dynamic Table with Export Buttons -->
        <div class="block block-rounded">

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="d-none d-sm-table-cell">Nom de module</th>
                            <th class="d-none d-sm-table-cell col-2">Nom du module</th>
                            <th class="d-none col-2">Nom d'enseignant</th>
                            <th class="d-none d-sm-table-cell">Filiere</th>
                            <th class="d-none d-sm-table-cell col-2">Salle</th>
                            <th class="d-none d-sm-table-cell col-2">Nb heure</th>
                            <th class="d-none d-sm-table-cell col-3">Date de creation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modules as $module)
                            <tr>
                                <td class="text-center">{{ $module->id }}</td>
                                <td class="fw-semibold col-2">
                                    <a href="javascript:void(0)">{{ $module->nom_module }}</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $module->nom_module }}
                                </td>
                                <td class="d-none col-2">
                                    {{ $module->user->name }}
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $module->filiere->nom_filiere }}
                                <td class="d-none d-sm-table-cell">
                                    {{ $module->salle->nom}}
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $module->nb_heure}}
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $module->created_at }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table with Export Buttons -->
    </div>
@endsection