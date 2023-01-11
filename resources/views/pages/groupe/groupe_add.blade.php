@extends('layouts.backend')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Ajouter Groupe</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Groupe</li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- jQuery Validation (.js-validation class is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _js/pages/be_forms_validation.js) -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation" action="{{ route('groupestore') }}" method="POST">
            @csrf
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Ajouter Groupe</h3>
                    <div class="block-options">

                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Regular -->
                    <h2 class="content-heading">Information</h2>
                    <div class="row items-push">
                        <div class="col-lg-4">
                            @if ($errors->any())
                                <span class="invalid-feedback" role="alert" style="display: block">
                                    <strong>{{ $errors->first() }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-8 col-xl-5">

                            <div class="mb-4">
                                <label class="form-label" for="val-skill">Enseignant <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="val-skill" name="en_id" required>
                                    <option value="">Selectionnez</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="val-skill">Filiere <span class="text-danger">*</span></label>
                                <select class="form-select" id="val-skill" name="fi_id" required>
                                    <option value="">Selectionnez</option>
                                    @foreach ($filieres as $filliere)
                                        <option value="{{ $filliere->id }}">{{ $filliere->nom_filiere }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="val-skill">Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="val-skill" name="type" required>
                                    <option value="">Selectionnez</option>

                                    <option value="0">TD</option>
                                    <option value="1">TP</option>
                                    <option value="2">COURS</option>

                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="val-skill">Section <span class="text-danger">*</span></label>
                                <select class="form-select" id="val-skill" name="section" required>
                                    <option value="">Selectionnez</option>
                                    @for ($i = 0; $i < 5; $i++)
                                        <option value="{{ $i }}">Section {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row items-push">
                        <div class="col-lg-7 offset-lg-4">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                    <!-- END Submit -->
                </div>
            </div>
        </form>
        <!-- jQuery Validation -->


    </div>
@endsection
