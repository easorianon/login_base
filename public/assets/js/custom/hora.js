// Obtener elementos con ID "tanggal" y "jam"
var tanggalElement = document.getElementById('tanggal');
var jamElement = document.getElementById('jam');

// Función para actualizar el tiempo cada segundo
function updateWaktu() {
    var tanggalSekarang = new Date();
    var hari = tanggalSekarang.getDay();
    var tanggal = tanggalSekarang.getDate();
    var bulan = tanggalSekarang.getMonth() + 1;
    var tahun = tanggalSekarang.getFullYear();
    var jam = padZero(tanggalSekarang.getHours());
    var menit = padZero(tanggalSekarang.getMinutes());
    var detik = padZero(tanggalSekarang.getSeconds());

    var formatHari = getHariIndonesia(hari);
    var formatTanggal = formatHari + ', ' + tanggal + ' ' + getBulanIndonesia(bulan) + ' ' + tahun;
    var formatJam = jam + ':' + menit + ':' + detik;

    tanggalElement.innerHTML = formatTanggal;
    jamElement.innerHTML = formatJam;
}

// Llamar a la función updateWaktu cada segundo
setInterval(updateWaktu, 1000);

// Función para agregar cero al frente de un número individual (por ejemplo, 1 se convierte en 01)
function padZero(angka) {
    return (angka < 10 ? '0' : '') + angka;
}

// Función para obtener el nombre del mes en indonesio según el número del mes
function getBulanIndonesia(bulan) {
    var namaBulan = [
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];

    return namaBulan[bulan - 1];
}

// Función para obtener el nombre del día en indonesio según el número del día
function getHariIndonesia(hari) {
    var namaHari = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];

    return namaHari[hari];
}
