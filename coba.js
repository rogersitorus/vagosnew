var tanya = true;
while (tanya) {
    var p = prompt('Pilih: GAJAH, SEMUT, ORANG');
    var random = Math.random();
    if (random < 0.34) {
        random = 'GAJAH';
    } else if (random >= 0.34 && random < 0.66) {
            random = 'ORANG';
        } else {
            random = 'SEMUT';
        }
console.log(random);
        var hasil = '';
        if (p == random) {
            hasil = 'SERI';
        } else if (p == 'GAJAH') {
            hasil = (random == 'ORANG') ? 'MENANG' : 'KALAH';
        } else if (p == 'ORANG') {
            hasil = (random == 'SEMUT') ? 'MENANG' : 'KALAH';
        } 
        else if(p == 'SEMUT'){
            hasil = (random == 'GAJAH') ? 'MENANG' : 'KALAH';
        }
        else {
            hasil = 'MASUKKAN PILIHAN YG SESUAI';
        }
        console.log(hasil);
        alert('KAMU MEMILIH ' + p + ' DAN KOMPUTER MEMILIH ' + random +'\n MAKA HASILNYA ' + hasil);
        tanya = confirm('COBA LAGI?');
    }