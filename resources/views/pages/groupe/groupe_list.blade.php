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
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Enseignats</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Enseignants</li>
            <li class="breadcrumb-item active" aria-current="page">Listes</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">


    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Liste des Enseignants </h3>
      </div>
      <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
          <thead>
            <tr>
              <th class="text-center" style="width: 80px;">#</th>
              <th>Filliere</th>
              <th>Enseignant</th>
              <th>Cours</th>
              <th class="d-none d-sm-table-cell" style="width: 30%;">Section</th>
              <th style="width: 15%;">Crée dans</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $groupes as $groupe )

            <tr>
                <td class="text-center"> {{ $groupe->id }} </td>
                <td class="fw-semibold">
                  <a href="javascript:void(0)">{{ $groupe->filiere->nom_filiere }}</a>
                </td>
                <td class="fw-semibold">
                  <a href="javascript:void(0)">{{ $groupe->enseignant->name }}</a>
                </td>
                <td class="fw-semibold">
                  <a href="javascript:void(0)">
                    @if ( $groupe->type==0 )
                        TD
                    @elseif ( $groupe->type==1)
                        TP
                    @else
                        COURS
                    @endif

                 </a>
                </td>
                <td class="d-none d-sm-table-cell">
                   Section {{ $groupe->section }}
                </td>
                <td class="text-muted">
                 {{ $groupe->created_at->diffForHumans() }}
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
  </div>
  <!-- END Page Content -->
@endsection
