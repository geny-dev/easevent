@foreach($roles as $role)
    <a href="{{ route('admin.user-management.roles.show', $role) }}" class="badge fs-7 m-1 {{ app(\App\Actions\GetThemeType::class)->handle('badge-light-?', $role->main_thread) }}">
        {{ $role->main_thread }}
    </a>
@endforeach
