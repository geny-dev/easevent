<div style="display: flex; float: right;">
    <div>
        <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
            Edit
            <i class="ki-duotone ki-down fs-5 ms-1"></i>
        </a>    
    </div>
    <div>
        <form action="{{route('admin.env-management.event.destroy', $event)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" type="submit">Delete</button>
        </form>
    </div>
</div>