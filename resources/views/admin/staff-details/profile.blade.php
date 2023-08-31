@php
use App\Enums\MediaDirectoryNamesEnum;
@endphp

<div class="tab-pane fade show active" id="profile" role="tabpanel">
    <form method="POST" enctype="multipart/form-data" action="{{ Route('admin.staff.update', $user->id) }}">
        @csrf
        <div class="d-flex">
            <div class="d-flex flex-column gap-7 gap-lg-10  mb-7 me-lg-10">
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Profile Picture</h2>
                        </div>
                    </div>
                    <div class="card-body text-center pt-0">
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url('{{ asset('assets/media/svg/avatars/blank.svg') }}')">
                            <!--begin::Preview existing avatar-->
                            @if ($user->getFirstMediaUrl(MediaDirectoryNamesEnum::PROFILE_IMAGES->value))
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url({{ $user->getFirstMediaUrl(MediaDirectoryNamesEnum::PROFILE_IMAGES->value) }})">
                                </div>
                            @else
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url({{ asset('assets/media/svg/avatars/blank.svg') }})">
                                </div>
                            @endif

                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="image" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <div class="text-muted fs-7 pt-2">
                            {{ __('set the thumbnail. Only *.png, *.jpg and *.jpeg image files are accepted') }}
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Update Image</button>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Profile Detail</h2>
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="form-group row">
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <label class="col-lg-12 col-form-label required fw-bold fs-6">First Name</label>
                                <input type="text" name="first_name" class="form-control"
                                    placeholder="Enter First Name" value="{{ old('first_name', $user->first_name) }}">
                                @if ($errors->has('first_name'))
                                    <div class="text-danger">{{ $errors->first('first_name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <label class="col-lg-12 col-form-label required fw-bold fs-6">Last Name</label>
                                <input type="text" name="last_name" class="form-control"
                                    placeholder="Enter Last Name" value="{{ old('last_name', $user->last_name) }}">
                                @if ($errors->has('last_name'))
                                    <div class="text-danger">{{ $errors->first('last_name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                <label class="col-lg-12 col-form-label required fw-bold fs-6">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email"
                                    value="{{ old('email', $user->email) }}">
                                @if ($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                <label class="col-lg-12 col-form-label required fw-bold fs-6">Date Of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control"
                                    value="{{ old('date_of_birth', $user->userProfile->date_of_birth) }}">
                                @if ($errors->has('date_of_birth'))
                                    <div class="text-danger">{{ $errors->first('date_of_birth') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-4 fv-row fv-plugins-icon-container">
                                <label class="col-lg-12 col-form-label required fw-bold fs-6">Telephone</label>
                                <input type="text" name="telephone" class="form-control"
                                    placeholder="Enter Telephone"
                                    value="{{ old('telephone', $user->userProfile->telephone) }}">
                                @if ($errors->has('telephone'))
                                    <div class="text-danger">{{ $errors->first('telephone') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{ url()->previous() }}" class="btn btn-light me-5">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </div>

            </div>
        </div>

    </form>
</div>
