<div class="alert alert-{{ $type }} d-flex align-items-center" role="alert">
    <span class="alert-icon text-{{ $type }} me-2">
        @if ($type == 'success')
            <i class="ti ti-check ti-xs"></i>
        @elseif ($type == 'danger')
            <i class="ti ti-ban ti-xs"></i>
        @elseif ($type == 'warning')
            <i class="ti ti-bell ti-xs"></i>
        @endif
    </span>
    {{ $msg }}
</div>
