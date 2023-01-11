@extends('layouts.backend')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Profile</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Profile</li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier</li>
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
        <form class="js-validation" action="{{ route('profileedit') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Modifier profile</h3>
                    <div class="block-options">

                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Regular -->
                    <h2 class="content-heading">Information</h2>
                    <div class="row items-push">
                        <div class="col-lg-4" style="text-align:center" >
                                <img class="rounded-circle" src="{{ asset('images') }}/{{ $user->picture }}"
                                width="200">
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label" for="val-username">Nom Complet <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="val-username" value="{{ $user->name }}"
                                    name="name" placeholder="Entrer un nom.."required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="val-email"value="{{ $user->email }}"
                                    name="email" placeholder="Un email.."required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="val-cin">CIN <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="val-cin" name="cin"
                                    value="{{ $user->cin }}" placeholder="Entrer a cin.."required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="val-password">Mot de passe <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="val-password" name="password"
                                      placeholder="Entrer a password..">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="val-picture">Photo de profile <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="val-picture" name="picture"
                                      placeholder=" picture.." accept="image/*">
                            </div>

                        </div>

                    </div>

                    <div class="row items-push">
                        <div class="col-lg-7 offset-lg-4">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </div>
                    <!-- END Submit -->
                </div>
            </div>
        </form>
        <!-- jQuery Validation -->


    </div>
@endsection
