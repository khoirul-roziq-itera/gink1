<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Tambah Data</title>

     <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="../node_modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/components.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        
                        <div class="card card-danger">
                            <div class="card-header">
                                <h4>Tambah Data Project</h4>
                            </div>

                            <div class="card-body">
                                 <form method="POST" action="{{ url('projects/create') }}">
                                    @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama Project</label>
                                            <input type="text" id="nama" class="form-control" placeholder="Masukkan nama project">
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan">Kategori</label>
                                            <select id="pekerjaan" class="form-control">
                                                <option value="">- Pilih Kateg</option>
                                                <option value="">Akutansi</option>
                                                <option value="">Administrasi</option>
                                                <option value="">aaaaaa</option>
                                                <option value="">aaaaaa</option>
                                                <option value="">aaaaaa</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Batas Pengerjaan</label>
                                            <input type="date"  name="tanggal"  class="form-control datepicker"  required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="modul">Modul</label>
                                                <select id="pilih-modul" class="form-control" placeholder="Pilih Modul" multiple>
                                                    <option value="HTML">BE</option>
                                                    <option value="Jquery">FE</option>
                                                    <option value="CSS">FS</option>
                                                    <option value="HTML">BE</option>
                                                    <option value="Jquery">FE</option>
                                                    <option value="CSS">FS</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan">Status</label>
                                            <select id="pekerjaan" class="form-control">
                                                <option value="">- Pilih Status</option>
                                                <option value="">Selesai</option>
                                                <option value="">Menunggu</option>
                                                <option value="">Sedang Dikerjakan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <a href="{{ url('dashboard') }}"><button type="button" class="btn btn-danger btn-lg">Kembali</button></a>
                                            <a href="{{ url('#') }}"><button type="button" class="btn btn-primary btn-lg">Simpan</button></a>
                                        </div>
                                </form>   
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; GinkTech 2021
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('stisla/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="../node_modules/cleave.js/dist/cleave.min.js"></script>
    <script src="../node_modules/cleave.js/dist/addons/cleave-phone.us.js"></script>
    <script src="../node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="../node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="../node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="../node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="../node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

    <script src="{{ asset('stisla/assets/js/stisla.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('stisla/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('stisla/assets/js/custom.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var multipleCancelButton = new Choices('#pilih-modul', {
            removeItemButton: true,
            maxItemCount:10,
            searchResultLimit:10,
            renderChoiceLimit:10
                });
            });
    </script>
   
</body>

</html>