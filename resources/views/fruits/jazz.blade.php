@extends ('layouts.master')

@section('content')


    <p id="text">

        HELLO MY NAME IS BRANDON

    </p>


    <script type="text/javascript">

        document.write("<h1>Hello World!</h1>");

        window.alert("Hello World!");

        document.getElementById('text').innerHTML = "The current time is " + Date();

    </script>

@endsection