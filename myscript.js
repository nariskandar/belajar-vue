var latihan1 = new Vue ({
    el: '#biodata',
    data: {
        nama: 'Helo Nama Saya Nandar !',
        hobi: 'Hobi bermain futsal '
    }
})

var latihan2 = new Vue({
    el: '#artikel',
    data: {
      pesan: 'Anda memuat halaman ini pada jam ' + new Date().toLocaleString()
    }
  })