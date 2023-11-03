
@include('partials.header')

@include('partials.sidebar')

@section('content')
@show

@include('partials.footer')


<!-- JS here -->
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
