@extends('layouts.backend')
@section('css')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
@endsection
@section('js')
    <!-- Page JS Plugins CSS -->
    {{-- <script src={{asset("js/dashmix.app.min.js")}}></script>

    <!-- jQuery (required for Select2 + jQuery Validation plugins) -->
    <script src={{asset("js/lib/jquery.min.js")}}></script>

    <!-- Page JS Plugins -->
    <script src={{asset("js/plugins/select2/js/select2.full.min.js")}}></script>
    <script src={{asset("js/plugins/jquery-validation/jquery.validate.min.js")}}></script>
    <script src={{asset("js/plugins/jquery-validation/additional-methods.js")}}></script>

    <!-- Page JS Helpers (Select2 plugin) -->
    <script>Dashmix.helpersOnLoad(['jq-select2']);</script>

    <!-- Page JS Code -->
    <script src={{asset("js/pages/be_forms_validation.min.js")}}></script> --}}
@endsection

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Filières</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Filières</li>
                        <li class="breadcrumb-item active" aria-current="page">ajouter</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content">
            <!-- jQuery Validation (.js-validation class is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _js/pages/be_forms_validation.js) -->
            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation" action={{ route('filieres.store') }} method="POST">
                @csrf
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Ajouter une filières</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- Regular -->
                        <div class="row items-push justify-content-center align-items-center">

                            <div class="col-lg-8 col-xl-5">
                                <div class="mb-4">
                                    <label class="form-label" for="nom_filiere">Nom de filière<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nom_filiere" name="nom_filiere"
                                        placeholder="Entrerle nom de filière" required>
                                        @if ($errors->any())
                                        <span class="invalid-feedback" role="alert" style="display: block">
                                          <strong>{{ $errors->first() }}</strong>
                                      </span>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="row items-push justify-content-center align-items-center">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </div>
                        <!-- END Submit -->
                    </div>
                </div>
            </form>
            <!-- jQuery Validation -->
        </div>
    </div>
@endsection
