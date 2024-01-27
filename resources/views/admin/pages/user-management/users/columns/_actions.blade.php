<div style="display: flex; float: right;">
    <div >
        <a href="{{ route('admin.user-management.users.show', $user) }}" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm px-3">
            View
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-user-id="{{ $user->id }}" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user" data-kt-action="update_row">
            Edit
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <form action="{{ route('admin.user-management.users.destroy', $user) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" type="submit">Delete</button>
    </form>
</div>
<!--end::Menu-->

