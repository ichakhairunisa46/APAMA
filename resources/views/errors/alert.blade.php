@if (Session::has('alerts'))
  @foreach(Session::get('alerts') as $alert)
    @php
        $alert_type = $alert['type'];
        $alert_text = $alert['text'];
    @endphp

    <script>
        var alert_type = {!! json_encode($alert_type) !!},
        alert_text = {!! json_encode($alert_text) !!};

        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: alert_type,
                text: alert_text,
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
            });
        });
    </script>
  @endforeach
@endif
