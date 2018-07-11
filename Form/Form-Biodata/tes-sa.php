<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
dwa
<p id="text"></p>
    </body>
</html>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script>
swal({
  title: "Apakah Anda Telah Yakin?",
  text: "Pastikan alamat anda sudah lengkap, sedangkan untuk data elektroniknya nanti bisa kurir yang membantu mengisinya.",
  icon: "info",
  buttons: {
    cancel: true,
    confirm: true,
  },
})
.then((willDelete) => {
  if (willDelete) {
      $('#text').val('awdawd');
    swal("Data Telah Disimpan!", {
      icon: "success",
    });
  }
});
</script>
