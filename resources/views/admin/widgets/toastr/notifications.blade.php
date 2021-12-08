@if(Session::has('toastr.success'))
    <script>
        $(document).ready(function () {
            toastr.success("{{ session('toastr.success') }}");
        })
    </script>
    @php
    Session::forget('toastr.success');
    @endphp
@endif

@if(Session::has('toastr.error'))
    <script>
        $(document).ready(function () {
            toastr.error("{{ session('toastr.error') }}");
        })
    </script>
    @php
    Session::forget('toastr.error');
    @endphp
@endif

@if(Session::has('toastr.info'))
    <script>
        $(document).ready(function () {
            toastr.info("{{ session('toastr.info') }}");
        })
    </script>
    @php
    Session::forget('toastr.info');
    @endphp
@endif

@if(Session::has('toastr.warning'))
    <script>
        $(document).ready(function () {
            toastr.warning("{{ session('toastr.warning') }}");
        })
    </script>
    @php
    Session::forget('toastr.warning');
    @endphp
@endif