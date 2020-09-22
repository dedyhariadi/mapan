$(document).ready(function () {
  $(".menupilih").select2({
    placeholder: "pilih jenis pesanan",
    width: "80%",
  });

  $(".tglpicker").datepicker({
    dateFormat: "dd MM yy",
    changeMonth: true,
    changeYear: true,
    monthNames: [
      "Januari",
      "Februari",
      "Maret",
      "April",
      "Mei",
      "Juni",
      "Juli",
      "Agustus",
      "September",
      "Oktober",
      "November",
      "Desember",
    ],
  });

  $("#tabelku").DataTable({
    dom: "Bfrtip",
    buttons: [
      {
        extend: "excel",
        // setting warna button pertama kali di load
        init: function (api, node, config) {
          $(node).removeClass("btn-secondary");
        },
        className: "btn-success",
      },
      // "excel",
      {
        extend: "pdf",
        // setting warna button pertama kali di load
        init: function (api, node, config) {
          $(node).removeClass("btn-secondary");
        },
        className: "btn-warning",
      },
    ],
    paging: false,
    scrollY: 400,
  });

  const flashData = $(".flash-data").data("flashdata");

  if (flashData) {
    Swal({
      title: "Data ",
      text: "Berhasil " + flashData,
      type: "success",
    });
  }

  $(document).on("click", ".tombol-hapus", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");

    Swal({
      title: "Apakah anda yakin",
      text: "data akan dihapus",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Hapus Data!",
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    });
  });
});
