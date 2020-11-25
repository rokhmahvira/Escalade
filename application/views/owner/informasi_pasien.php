<style type="text/css">
  font {
    font-weight: bold;
    font-size: 20px;
    /*text-transform: uppercase;*/
  }

  .periksa {
    margin-left: 15px;
    text-align: center;
    color: white;
    background-color: #F40049;
    border-radius: 5px;
  }

  .daftar1 {
    text-align: center;
    padding: 9px 6px 9px 6px;
    font-size: 13px;
    margin-left: 15px;
    color: #000;
    background-color: #FFFF00;
    border-radius: 5px;
  }

  .daftar2 {
    text-align: center;
    padding: 9px 6px 9px 6px;
    font-size: 13px;
    margin-left: 15px;
    color: #fff;
    background-color: #00b050;
    border-radius: 5px;
  }

  thead {
    text-align: center;
  }

  /* .filter_tgl {
    background: #f40049;
    color: black;
  }

  .filter_tgl select {
    background-color: #0563af;
    color: white;
    padding: 12px;
    width: 150px;
    border: none;
    font-size: 20px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    -webkit-appearance: button;
    appearance: button;
    outline: none;
  }

  .filter_tgl::before {
    content: "\f13a";
    font-family: FontAwesome;
    position: absolute;
    background-color: #0563af;
    top: 0;
    right: 0;
    width: 20%;
    height: 100%;
    text-align: center;
    font-size: 28px;
    line-height: 45px;
    color: rgba(255, 255, 255, 0.5);
    background-color: #F40049;
    pointer-events: none;
  } */

  .box {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .box select {
    background-color: white;
    color: black;
    width: 195px;
    border: none;
    font-size: 16px;
    -webkit-appearance: button;
    appearance: button;
    outline: none;
  }

  .box::before {
    content: "\f13a";
    font-family: FontAwesome;
    position: absolute;
    background-color: #0563af;
    top: 0;
    right: 0;
    width: 15%;
    height: 100%;
    text-align: center;
    font-size: 23px;
    line-height: 34px;
    color: rgba(255, 255, 255);
    background-color: #F40049;
    pointer-events: none;
    border-radius: 0 15% 15% 0;
  }

  .box:hover::before {
    color: rgba(255, 255, 255, 0.6);
    background-color: #F40049;
  }

  .box select option {
    padding: 30px;
  }

  @media only screen and (max-width: 1024px) {
    .daftar2 {
      margin-left: 8px;
      font-size: 12px;
      padding: 0 10px 0 10px;
    }

    .daftar1 {
      margin-left: 8px;
      font-size: 12px;
      padding: 0 10px 0 10px;
    }

    .periksa {
      margin-left: 15px;
      text-align: center;
      padding-right: 23px;
      font-size: 12px;
    }

    font {
      font-size: 18px;
    }

    table {
      font-size: 13px;
    }
  }

  @media only screen and (max-width: 768px) {
    .daftar2 {
      margin-left: 0px;
      font-size: 12px;
      padding: 0 10px 0 10px;
    }

    .daftar1 {
      margin-left: 0px;
      font-size: 12px;
      padding: 0 10px 0 10px;
    }

    .periksa {
      margin-left: 0px;
      text-align: center;
      padding-right: 10px;
    }
  }

  @media only screen and (max-width: 425px) {
    .col-lg-12 {
      width: 90%;
      top: -44px;
      margin-left: 33px;
    }

    font {
      font-size: 17px;
    }

    table {
      font-size: 12px;
    }
  }

  @media only screen and (max-width: 375px) {
    .col-lg-12 {
      width: 92%;
      top: -44px;
      margin-left: 33px;
    }
  }

  @media only screen and (max-width: 320px) {

    .daftar1,
    .daftar2 {
      font-size: 10px;
      padding: 2px 0 2px 0;
    }

    font {
      font-size: 13px;
    }
  }

  .dis-cur {
    cursor: no-drop;
  }
</style>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="margin-top: 20px;">
  <div class="row">
    <div class="col-lg-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <font>Infromasi Pasien</font><br><br>
          <table id="all_data_json" data-toggle="table" data-url="<?php echo base_url('Resepsionis/data_booking'); ?>" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc" data-toolbar="#toolbar">
            <thead>
              <tr>
                <th data-sortable="true" data-field="" data-formatter="runningFormatter" data-align="center">No.</th>
                <th data-sortable="true" data-align="center">Nama Pasien</th>
                <th data-sortable="true" data-align="center">Tanggal Lahir</th>
                <th data-sortable="true" data-align="center">No Rekam Medis</th>
                <th data-sortable="true" data-align="center">Pemeriksaan Terakhir</th>
                <th data-align="center">Activity</th>
              </tr>
            </thead>


            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($informasi->result() as $result) : ?>
                <?php $tgl_lahir = date('d F Y', strtotime($result->tanggal_lahir)); ?>
                <?php $tgl = date('d F Y', strtotime($result->tanggal_rencana)); ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $result->nama_depan ?> <?php echo $result->nama_belakang ?></td>
                  <td><?php echo $tgl_lahir ?></td>
                  <td><?php echo $result->id_rekam_medis ?></td>
                  <td><?php echo $tgl ?></td>
                  <td>
                    <a href="<?php echo site_url('owner/detail_informasi_pasien/' . $result->id_pasien . '/' . $result->id_booking) ?>" class="btn btn-anim" style="height: 35px; width: 70px; background-color: #f40049; color: white; border-radius: 5px"><span> Lihat</span></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-3" style="background-color:  #f2f2f2; padding:0px;height: auto;">
      <div class="col-md-12" style="padding-right: 0px;">
        <br>
        <div class="row col-md-12">
          <div class="col-md-3" style="padding: 0px;"><b>Filter :</b></div>
          <div class="col-md-9" style="top: -7px; padding: 0">
            <div class="form-group box">
              <select id="filter_t" class="form-control   ">
                <div class="fa fa-calendar"></div>
                <option value="" disabled selected style="display: none;">Pilih Tanggal</option>
                <option value="">Perlihatkan Semua</option>
                <?php foreach ($rencana_sebelum->result() as $result) : ?>
                  <?php $tgl = date('d F Y', strtotime($result->tanggal_rencana)); ?>
                  <option value="<?php echo $result->tanggal_rencana ?>"><?php echo $tgl ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
        <div style="width: 100%; height: 700px; overflow-y: scroll; overflow-x: hidden; margin-top:30px">
          <?php foreach ($laporan->result() as $result) : ?>
            <?php $tgl = date('d F Y', strtotime($result->tanggal_rencana)); ?>
            <h5><b><?php echo $tgl ?> </b></h5>
            <div class="col-md-12 d" style="margin: 2px;">
              <div class="col-md-6" style="text-align: left;">
                <h5 style="font-weight: bold;"><?php echo $result->jam_rencana ?></h5>
                <h6>Drg. <?php echo $result->nama_dokter ?></h6>
                <br>
                <?php if ($result->status == 0) { ?>
                  <font style="background: #FFFF00; color: #000;" class="label label-warning">Menunggu <br> Pendaftaran</font>
                <?php } elseif ($result->status == 1) { ?>
                  <h6 class="label label-success">Sudah Terdaftar</h6>
                <?php } ?>
              </div>
              <div class="col-md-6" style="padding-right: 10px;">
                <h6 style="font-weight: bold ;"><?php echo $result->nama_depan ?> <?php echo $result->nama_belakang ?></h6>
                <p style="font-size: 10px;">No. Rekam Medis <?php echo $result->id_rekam_medis ?></p>
                <p style="font-size: 10px;">
                  <?php
                  if ($result->hubungan == 'Anda') {
                    echo "Atas nama sendiri ";
                  } elseif ($result->hubungan == 'Anak') {
                    echo $result->hubungan . " " . "<span id ='hubung_id'></span>";
                  } elseif ($result->hubungan == 'Ibu') {
                    echo $result->hubungan . " " . "<span id ='hubung_id2'></span>";
                  } elseif ($result->hubungan == 'Ayah') {
                    echo $result->hubungan . " " . "<span id ='hubung_id3'></span>";
                  } elseif ($result->hubungan == 'Istri') {
                    echo $result->hubungan . " " . "<span id ='hubung_id4'></span>";
                  } elseif ($result->hubungan == 'Suami') {
                    echo $result->hubungan . " " . "<span id ='hubung_id5'></span>";
                  } elseif ($result->hubungan == 'Saudara') {
                    echo $result->hubungan . " " . "<span id ='hubung_id6'></span>";
                  }
                  ?>
                </p>
                <select hidden name="id_user" id="id_user">
                  <option value="0" selected></option>
                </select>
                <a href="<?php echo site_url('owner/detail_informasi_pasien/' . $result->id_pasien . '/' . $result->id_booking) ?>" class="btn btn-anim" style="height: 35px; width: 70px; background-color: #f40049; color: white; border-radius: 5px"><span> Lihat</span></a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>


      </div>

    </div>
  </div><!-- /.row -->
</div>

<script>
  function runningFormatter(value, row, index) {
    return index + 1;
  }

  function proses(value) {
    return '<a href="#" onclick="prosesAntri(' + value + ')" class="btn btn-warning">Pilih</a>';
  }

  function prosesAntri(id) {
    $("#formProsesAntri").attr("action", "<?php echo base_url(); ?>antrian/create_action/" + id);
    $('#alertAntri').modal('show');
  }
</script>

<script type="text/javascript">
  //      $('#closemodal').click(function() {
  //     $('#ModalTolak').modal('hide');
  // });
  $(".remove").click(function() {
    var id = $(this).parents("tr").attr("id");

    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
            url: '/item-list/' + id,
            type: 'DELETE',
            error: function() {
              alert('Something is wrong');
            },
            success: function(data) {
              $("#" + id).remove();
              swal("Deleted!", "Your imaginary file has been deleted.", "success");
            }
          });
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });

    // $('#ModalTolak').modal('hide');
  });
</script>

<script>
  $(document).ready(function() {
    hubungan_pasien();
    $('#id_user').change(function() {
      // let a = $(this).val();
      // console.log(a);
    });
  });

  function hubungan_pasien() {
    var id = $('#id_user').val();
    $.ajax({
      url: "<?= base_url('owner/get_hubungan_pasien/' . $result->id_user) ?>",
      data: {
        id: id
      },
      success: function(data) {
        // console.log(data);
        $('#hubung_id').html(data);
      }
    })
    $.ajax({
      url: "<?= base_url('owner/get_hubungan_pasien/' . $result->id_user) ?>",
      data: {
        id: id
      },
      success: function(data) {
        // console.log(data);
        $('#hubung_id2').html(data);
      }
    })
    $.ajax({
      url: "<?= base_url('owner/get_hubungan_pasien/' . $result->id_user) ?>",
      data: {
        id: id
      },
      success: function(data) {
        // console.log(data);
        $('#hubung_id3').html(data);
      }
    })
    $.ajax({
      url: "<?= base_url('owner/get_hubungan_pasien/' . $result->id_user) ?>",
      data: {
        id: id
      },
      success: function(data) {
        // console.log(data);
        $('#hubung_id4').html(data);
      }
    })
    $.ajax({
      url: "<?= base_url('owner/get_hubungan_pasien/' . $result->id_user) ?>",
      data: {
        id: id
      },
      success: function(data) {
        // console.log(data);
        $('#hubung_id5').html(data);
      }
    })
    $.ajax({
      url: "<?= base_url('owner/get_hubungan_pasien/' . $result->id_user) ?>",
      data: {
        id: id
      },
      success: function(data) {
        // console.log(data);
        $('#hubung_id6').html(data);
      }
    });
  }
</script>
<!-- <script>
      var tm = new Date();
      var timst = tm.toLocaleTimeString();
      $.ajax({
          url : "<?= base_url('owner/get_periksa') ?>",
          data : {jam_mulai:timst},
          success:function(data){
            // console.log(data);
            $('#txtgrand').html(data);
          }
        });
    </script> -->