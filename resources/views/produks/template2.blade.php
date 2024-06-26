<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- /Navbar --}}

    {{-- content --}}
    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <center>
                    <h3>List Artikel</h3>
                </center>
            </div>
            <div class="row mt-4">
                @foreach ($produk as $data)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://cdn1-production-images-kly.akamaized.net/wNBEh26xvx03Zg6sX7y6wWr5Zxk=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4359411/original/090967800_1678873863-ZX-4R2.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$data->nama_produk}}</h5>
                                <p>{{ $data->jumlah}}</p>
                                <p>{{ $data->tgl_produksi }}</p>
                                <p>{{ $data->merek->nama_merk }}</p>
                                <a href="template1/{{$data->id}}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- /content --}}

    {{-- footer --}}
    @include('layouts.footer')
    {{-- /footer --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
