<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.ninjateam.org/html/my-admin/light/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jan 2018 03:48:56 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Testing</title>

  <!-- Main Styles -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/styles/style.min.css">

  <!-- Material Design Icon -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/material-design/css/materialdesignicons.css">

  <!-- mCustomScrollbar -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

  <!-- Waves Effect -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/waves/waves.min.css">

  <!-- Sweet Alert -->
  <style type="text/css">
    .swal-modal .swal-text {
      text-align: center
    }
  </style>
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
</head>

<body>
  <div class="main-menu">
    <header class="header">
      <a href="<?= base_url() ?>" class="logo"><i class="ico mdi mdi-cube-outline"></i>Testing</a>
      <button type="button" class="button-close fa fa-times js__menu_close"></button>
      <div class="user">
        <a href="#" class="avatar"><img src="<?= base_url() ?>logo.png" alt=""></a>
        <h5 class="name"><a href="#">Testing</a></h5>
        <h5 class="position">Testing</h5>
        <!-- /.name -->

        <!-- /.control-wrap -->
      </div>
      <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

      <div class="navigation">
        <h5 class="title">Navigation</h5>
        <!-- /.title -->
        <ul class="menu js__accordion">
          <li class="current active">
            <a class="waves-effect" href="index-2.html"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
          </li>

        </ul>
        <!-- /.menu js__accordion -->

        <!-- /.title -->

        <!-- /.menu js__accordion -->
      </div>
      <!-- /.navigation -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.main-menu -->

  <div class="fixed-navbar">
    <div class="pull-left">
      <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
      <h1 class="page-title">Testing</h1>
      <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">

    </div>
    <!-- /.pull-right -->
  </div>
  <!-- /.fixed-navbar -->




  <!-- /#message-popup -->
  <div id="wrapper">
    <div class="main-content">
      <div class="row small-spacing">
        <div class="col-lg-2 col-md-1"></div>
        <div class="col-lg-8 col-md-10">
          <div class="box-content card white">
            <h4 class="box-title">Form Pegawai</h4>
            <div class="card-content">
              <form class="form-horizontal" onsubmit="return add_pegawai(event)">
                <div class="form-group">
                  <label class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK Pegawai" required minlength="16" maxlength="16" onkeypress="return isNumberKey(event)">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pegawai" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                    <select name="jabatan" id="jabatan" class="form-control" required>
                      <option value="" disabled selected>-Pilih Jabatan</option>
                      <option value="Admin">Admin</option>
                      <option value="Operator">Operator</option>
                      <option value="Jabatan Contoh 1">Jabatan Contoh 1</option>
                      <option value="Jabatan Contoh 2">Jabatan Contoh 2</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kontrak</label>
                  <div class="col-sm-10">
                    <select name="kontrak" id="kontrak" class="form-control" required>
                      <option value="" disabled selected>-Pilih Kontrak</option>
                      <option value="1">1 Tahun</option>
                      <option value="2">2 Tahun</option>
                      <option value="3">3 Tahun</option>
                      <option value="4">4 Tahun</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <center>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </center>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-1"></div>
      </div>

      <div class="row small-spacing">
        <div class="col-xs-12">
          <div class="box-content">
            <h4 class="box-title">List Pegawai</h4>
            <!-- /.box-title -->

            <!-- /.dropdown js__dropdown -->
            <div style="overflow-x: auto;">
              <table id="example" class="table table-striped table-bordered display" style="width:100%"></table>
            </div>

          </div>
          <!-- /.box-content -->
        </div>
      </div>

      <footer class="footer">
        <ul class="list-inline">
          <li>2022 © Testing.</li>

        </ul>
      </footer>
    </div>
    <!-- /.main-content -->
  </div>
  <div class="modal fade" id="boostrapModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
    <div class="modal-dialog" role="document">
      <form class="modal-content" id="form_edit">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel-2">Edit Pegawai</h4>
        </div>
        <div class="modal-body form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nik_edit" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_edit" placeholder="Masukkan Nama Pegawai" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-10">
              <select name="jabatan" id="jabatan_edit" class="form-control" required>
                <option value="" disabled >-Pilih Jabatan</option>
                <option value="Admin">Admin</option>
                <option value="Operator">Operator</option>
                <option value="Jabatan Contoh 1">Jabatan Contoh 1</option>
                <option value="Jabatan Contoh 2">Jabatan Contoh 2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kontrak</label>
            <div class="col-sm-10">
              <select name="kontrak" id="kontrak_edit" class="form-control" required>
                <option value="" disabled >-Pilih Kontrak</option>
                <option value="1">1 Tahun</option>
                <option value="2">2 Tahun</option>
                <option value="3">3 Tahun</option>
                <option value="4">4 Tahun</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm waves-effect waves-light" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Save changes</button>
        </div>
      </form>
    </div>
  </div>
  <!--/#wrapper -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
		<script src="<?= base_url() ?>assets/script/html5shiv.min.js"></script>
		<script src="<?= base_url() ?>assets/script/respond.min.js"></script>
	<![endif]-->
  <!-- 
	================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?= base_url() ?>assets/scripts/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/scripts/modernizr.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/nprogress/nprogress.js"></script>
  <script src="<?= base_url() ?>assets/plugin/waves/waves.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/plugin/toastr/toastr.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugin/toastr/toastr.css">
  <script src="<?= base_url() ?>sweet-alert/block/jquery.blockUI.js"></script>
  <script src="<?php echo base_url() ?>sweet-alert/sweetalert.js"></script>

  <script src="<?= base_url() ?>assets/scripts/main.min.js"></script>

  <script>
    // create datatable id="example
    function datatables() {
      $('#example').DataTable({
        // fetch from ajax
        "ajax": {
          "url": "<?= base_url() ?>api/pegawai",
          "type": "GET"
        },
        // set column definition initialisation properties
        "columnDefs": [{
          "targets": [4], // first column / numbering column
          "orderable": false, // set not orderable
        }, ],
        "order": [
          [0, 'asc']
        ],
        // modify each column
        "aoColumns": [{
            "mData": null,
            "title": "NIK",
            "render": function(data, row, type, meta) {
              return data.nik;
            }
          },


          {
            "mData": null,
            "title": "Nama",
            "render": function(data, row, type, meta) {
              return data.nama;
            }
          },
          {
            "mData": null,
            "title": "Jabatan",
            "render": function(data, row, type, meta) {
              return data.nama_jabatan;
            }
          },
          {
            "mData": null,
            "title": "Kontrak",
            "render": function(data, row, type, meta) {
              return data.kontrak + " Tahun";
            }
          },
          {
            "mData": null,
            "title": "Aksi",
            "render": function(data, row, type, meta) {
              const button = `<button type="button" class="btn btn-primary btn-xs" onclick="toggle_modal(${data.nik},'${data.nama}','${data.nama_jabatan}',${data.kontrak})"><i class="fa fa-pencil"></i></button> &nbsp &nbsp` +
                '<button type="button" class="btn btn-danger btn-xs" onclick="hapus_pegawai(' + data.nik + ')"><i class="fa fa-trash"></i></button>';
              return button;
            }
          },

        ]
      });
    }

    function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

      return true;
    }
    const delay = ms => new Promise(res => setTimeout(res, ms));

    function add_pegawai(e) {
      e.preventDefault();
      const nik = $('#nik').val();
      const nama = $('#nama').val();
      const jabatan = $('#jabatan').val();
      const kontrak = $('#kontrak').val();

      $.ajax({
        url: "<?= base_url() ?>api/pegawai",
        type: "POST",
        data: {
          nik: nik,
          nama: nama,
          jabatan: jabatan,
          kontrak: kontrak
        },
        beforeSend: async function() {
          $.blockUI({
            message: "Loading",
            css: {
              border: 'none',
              padding: '15px',
              backgroundColor: '#000',
              '-webkit-border-radius': '10px',
              '-moz-border-radius': '10px',
              opacity: .5,
              color: '#fff'
            }
          });
        },
        success: function(data) {
          console.log(data)
          toastr.success('Data Berhasil Ditambahkan');
          // destroy datatable
          $('#example').DataTable().destroy();
          // reload datatable
          datatables();
          $.unblockUI();
        },
        error: function(data) {
          let message = data.responseJSON

          swal("Gagal!", (message != undefined) ? data.responseJSON.message : "Jaringan Bermasalah", "error");
          $.unblockUI();
        },

      })
    }

    function toggle_modal(id, nama, jabatan, kontrak) {
      // nik on id="nik_edit"
      $('#nik_edit').val(id);
      $('#nama_edit').val(nama);
      $('#jabatan_edit').val(jabatan);
      $('#kontrak_edit').val(kontrak);

      // change form id="form_edit" onsubmit="return edit_pegawai(event,${nama}, ${jabatan}, ${kontrak})"
      $('#form_edit').attr('onsubmit', `return edit_pegawai(event,${id}, '${nama}', '${jabatan}', '${kontrak}')`);

      // show modal id="boostrapModal-3"
      $('#boostrapModal-3').modal('show');
    }

    function edit_pegawai(e, nik, nama, jabatan, kontrak) {
      e.preventDefault();
      const nama_edit = $('#nama_edit').val();
      const jabatan_edit = $('#jabatan_edit').val();
      const kontrak_edit = $('#kontrak_edit').val();

      if(nama_edit == nama && jabatan_edit == jabatan && kontrak_edit == kontrak) {
        toastr.warning('Tidak ada perubahan data');
        // focus to nik
        $('#nik_edit').focus();
        return false;
      }else{
        $.ajax({
          url: "<?= base_url() ?>api/pegawai/",
          type: "PUT",
          data: {
            nik: nik,
            nama: nama_edit,
            jabatan: jabatan_edit,
            kontrak: kontrak_edit
          },
          beforeSend: async function() {
            $.blockUI({
              message: "Loading",
              css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
              }
            });
          },
          success: function(data) {
            console.log(data)
            toastr.success('Data Berhasil Diubah');
            // destroy datatable
            $('#example').DataTable().destroy();
            // reload datatable
            datatables();
            // close modal
            $('#boostrapModal-3').modal('hide');
            $.unblockUI();
          },
          error: function(data) {
            let message = data.responseJSON

            swal("Gagal!", (message != undefined) ? data.responseJSON.message : "Jaringan Bermasalah", "error");
            $.unblockUI();
          },

        })
      }
      
    }

    function hapus_pegawai(nik){
      // create swal with question
      swal({
        title: "Apakah anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            url: "<?= base_url() ?>api/pegawai" ,
            type: "DELETE",
            data: {
              nik: nik
            },
            beforeSend: async function() {
              $.blockUI({
                message: "Loading",
                css: {
                  border: 'none',
                  padding: '15px',
                  backgroundColor: '#000',
                  '-webkit-border-radius': '10px',
                  '-moz-border-radius': '10px',
                  opacity: .5,
                  color: '#fff'
                }
              });
            },
            success: function(data) {
              console.log(data)
              toastr.success('Data Berhasil Dihapus');
              // destroy datatable
              $('#example').DataTable().destroy();
              // reload datatable
              datatables();
              $.unblockUI();
            },
            error: function(data) {
              let message = data.responseJSON

              swal("Gagal!", (message != undefined) ? data.responseJSON.message : "Jaringan Bermasalah", "error");
              $.unblockUI();
            },

          })
        } 
      });
    }

    datatables()
  </script>
</body>

<!-- Mirrored from demo.ninjateam.org/html/my-admin/light/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jan 2018 03:48:56 GMT -->

</html>