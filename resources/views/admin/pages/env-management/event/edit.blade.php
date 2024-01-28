@extends('admin.layouts.section')
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Edit User</h2>
                    <!--end::Modal title-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_add_user_form" class="form" method="POST" action="{{ route('admin.env-management.event.update', $event) }}">
                        @csrf
                        @method('PUT')
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" style="display: flex;">
                            <!--begin::Input group-->
                            <div>
                                
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">Event Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="event_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="{{ $event->name }}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                
                            </div>
                            <!--end::Input group-->
                            
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <a type="reset" class="btn btn-light me-3" href="{{route('admin.env-management.event.index')}}">Discard</a>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Update</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
    </div>
    <!--end::Container-->
    
@endsection
