<button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-surrounding-id="{{ $surrounding->name }}" data-bs-toggle="modal" data-bs-target="#kt_modal_update_surrounding">
    {!! getIcon('setting-3','fs-3') !!}
</button>
<button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-surrounding-id="{{ $surrounding->name }}" data-kt-action="delete_row">
    {!! getIcon('trash','fs-3') !!}
</button>
