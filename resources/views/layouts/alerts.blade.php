@if (session('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Swal.fire({
    timer: 1500,
    title: 'Selamat!',
    text: "{{ session('success') }}",
    icon: 'success',
    showConfirmButton: false,
  });
</script>
@endif

@if (session('error'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Swal.fire({
    timer: 1500,
    title: 'Maaf!',
    text: "{{ session('error') }}",
    icon: 'error',
    showConfirmButton: false,
  });
</script>
@endif