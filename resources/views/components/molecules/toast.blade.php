@php
    $toastTypes = ['success', 'error', 'info', 'warning'];
@endphp

@foreach ($toastTypes as $toastType)
    @if (Session::has($toastType))
        @php
            $toastMessage = Session::get($toastType);
        @endphp

        <script>
            Swal.fire({
                icon: "{{ $toastType }}",
                title: "{!! addslashes($toastMessage) !!}",
                toast: true,
                showConfirmButton: false,
                timer: 2000,
                position: "bottom-end",
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
            });
        </script>
    @endif
@endforeach
