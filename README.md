# xTerbilang

## Intro
xTerbilang adalah sebuah fungsi untuk membaca angka berdasarkan satuan angka seperti :
- Satu
- Belas
- Puluh
- Ratus
- Ribu (Thousand) = 10^3
- Juta (Million) = 10^6
- Milyar (Milliard) = 10^9
- Trilyun / Dwita (Billion) = 10^12
- Dwiyar (Trillion) = 10^15
- Tirta (Quardrillion) = 10^18
- Triyar (Quantillion) = 10^21
- Caturta (Sextillion) = 10^24
- Caturyar (Septillion) = 10^27
- Pancata (Octillion) = 10^30
- Pancayar (Nonillion) = 10^33
- Sadta (Decillion) = 10^36
- Sadyar (Undecillion) = 10^39
- Saptata (Duodecillion) = 10^42
- Saptayar (Tredecilion) = 10^45
- Hastata (Quatturodecillion) = 10^48
- Hastayar = 10^51
- Nawata = 10^54
- Nawayar =10^57
- Dasata = 10^60
- Dasayar = 10^63

## Dukungan
- Satu
- Belas
- Puluh
- Ratus
- Ribu
- Juta
- Miliyar
- Trilyun

## Penggunaan
- Muat terlebih dahulu fungsinya dengan cara ``require('xterbilang.php')``
- Kemudian selanjutnya panggil fungsi ``numbertoword(num, style)``
- Pada parameter pertama berisi angka yang ingin di ubah kedalam bentuk kata, lalu di parameter kedua berisi gaya penulisan terbilang.
- Contohnya seperti ini ``echo numbertoword(5000000);`` maka hasilnya akan muncul tulisan ``Lima juta``.
- Untuk syle atau gaya penulisan terdapat 4 gaya dengan defaultnya bernilai ``4``.
  - 1 adalah gaya penulisan ``strtoupper()`` => ``LIMA JUTA``
  - 2 adalah gaya penulisan ``strtolower()`` => ``lima juta``
  - 3 adalah gaya penulisan ``ucwords()`` => ``Lima Juta``
  - 4 adalah gaya penulisan ``ucfirst()`` => ``Lima juta``
