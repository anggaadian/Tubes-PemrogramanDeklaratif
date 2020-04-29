init:-
      write('PROGRAM SISTEM PAKAR HAMA PADI'),nl,
      judul(Judul),write(Judul),nl,nl,
      tulis_pesan,nl,
      mulai.
mulai:-
      data_pengamatan,
      aturan(Nomor,Alasan),
      jawaban(Alasan),
%      write(Jawab),nl,
      write('Aturan yang dipakai adalah '),
      write(Nomor),nl,nl,
      retractall(observation(_)).
 mulai:-
      write('Maaf, Hama Tersebut Belum Terdeteksi.'),nl,nl,
      retractall(observation(_)).
 tulis_pesan:-
      pesan(Pesan),
   write(Pesan),nl,fail.
 tulis_pesan:-nl.

 data_pengamatan:-
   pertanyaan(Tanya,Obs),
   write(Tanya),nl,
   read(Yatidak),
   Yatidak=y,
   assert(observation(Obs)),
   fail.
 data_pengamatan.

 judul('MENGANALISA HAMA PADI...').
 pesan('Jawab pertanyaan berikut dengan y atau t').
 pertanyaan('adanya ngengat penggerek batang padi atau kupu-kupu
?', ada_ngengat).
 pertanyaan('ngengat penggerek batang padi berwarna kuning kecokelatan?', ngengat_kuningCoklat).
 pertanyaan('ngengat penggerek batang padi berwarna putih?',ngengat_putih ).
 pertanyaan('ngengat penggerek batang padi berwarna kecokelatan?',ngengat_coklat ).
 pertanyaan('adanya titik hitam dibagian belakang sayap depan?',sayap_titikHitam).
 pertanyaan('adanya ulat?', ulat).
 pertanyaan('pada ulat (larva) terdapat 2 garis memanjang?', ulat_bergaris).
 pertanyaan('pangkal batang tanaman terpotong (sundep)?', sundep).
 pertanyaan('matinya tunas-tunas padi?',tunas_mati ).
 pertanyaan('matinya malai (daun padi)?',daun_mati ).
 pertanyaan('daun-daun menguning ?',daun_menguning).
 pertanyaan('daun yang terhisap hanya bagian pinggir?',daun_pinggir ).
 pertanyaan('daun menguning hingga jingga?',daun_kuningJingga).
pertanyaan('daun menguning hingga kemerahan?',daun_kuningMerah ).
 pertanyaan('pertumbuhan daun menjadi kerdil?',daun_kerdil).
 pertanyaan('jumlah anakan menurun?',jumlah_anakanTurun ).
 pertanyaan('pertumbuhan terhambat(batang padi memendek)?',batang_pendek).
 pertanyaan('gabah hampa(kosong)?',gabah_kosong).


 aturan(1,pengerek_kuning):-
      not(observation(ngengat_putih)),
      not(observation(ngengat_coklat)),
      not(observation(ulat_bergaris)),
      observation(ada_ngengat),
      observation(ngengat_kuningCoklat),
      observation(sayap_titikHitam),
      observation(ulat),
      observation(sundep),
      observation(tunas_mati),
      observation(daun_mati).
 aturan(2,pengerek_putih):-
      not(observation(ngengat_kuningCoklat)),
      not(observation(ngengat_coklat)),
      not(observation(sayap_titikHitam)),
      observation(ada_ngengat),
      observation(ngengat_putih),
      observation(ulat),
      observation(sundep),
      observation(tunas_mati),
      observation(daun_mati).
aturan(3,pengerek_bergaris):-
      observation(ada_ngengat),
      not(observation(ngengat_kuningCoklat)),
      not(observation(ngengat_putih)),
      not(observation(sayap_titikHitam)),
      observation(ada_ngengat),
      observation(ngengat_coklat),
      observation(ulat_bergaris),
      observation(ulat),
      observation(sundep),
      observation(tunas_mati),
      observation(daun_mati).
aturan(4,wereng_hijau):-
      not(observation(daun_mengering)),
      not(observation(daun_terbakar)),
      not(observation(gabah_kosong)),
      not(observation(daun_kuningMerah)),
      observation(daun_menguning),
      observation(daun_pinggir),
      observation(daun_kuningJingga),
      observation(jumlah_anakanTurun),
      observation(batang_pendek),
      observation(daun_kerdil).
aturan(5,kepindih_tanah):-
      not(observation(daun_mengering)),
      not(observation(daun_terbakar)),
      observation(daun_menguning),
      observation(jumlah_anakanTurun),
      observation(batang_pendek),
      observation(daun_kerdil),
      observation(gabah_kosong),
      observation(daun_kuningMerah).

jawaban(pengerek_kuning):-
      nl,write('DIAGNOSA : penggerek batang padi kuning(scirpophaga_incertulas)'),nl,
      write('SOLUSI : - insektisida, berbahan aktif : Karbonfuran, bensultap, karbosulfan, dimenhipo,amitraz & fipronil.'),nl,
      write('- Kecuali,kupu-kupu, jangan memakai pestisida semprot untuk sundep dan beluk.').
jawaban(pengerek_putih):-
      nl,write('DIAGNOSA : penggerek batang padi putih(scirpophaga_innota)'),nl,
      write('SOLUSI : - insektisida, berbahan aktif : Karbonfuran, bensultap,
      karbosulfan, dimenhipo,amitraz & fipronil.'),
      write('- Kecuali,kupu-kupu, jangan memakai pestisida semprot untuk sundep dan beluk.').
jawaban(pengerek_bergaris):-
      nl,write('DIAGNOSA : penggerek batang padi bergaris(chilo_suppressalis)'),nl,
      write('SOLUSI : -insektisida, berbahan aktif : Karbonfuran, bensultap,
      karbosulfan, dimenhipo,amitraz & fipronil.'),
      write('- Kecuali,kupu-kupu, jangan memakai pestisida semprot untuk sundep dan beluk.').
jawaban(wereng_hijau):-
      nl,write('DIAGNOSA : Wereng hijau(siphanta_acuta)'),nl,
      write('SOLUSI : - Mengurangi pemupukkan unsur nitrogen (memperlambat perkembangbiakkan WH)'),nl,
      write('- -dianjurkan menanam varietas tahan tungro seperti tukad petani , kalimas dan bondoyudo'),nl,
      write('- Insektisida berbahan aktif :BPMC,bufrezin, imidkloprid, karbonfuran, MIPC atau tiametoksan'),nl.
jawaban(kepindih_tanah):-
      nl,write('DIAGNOSA :Kepinding tanah(scotinophara_coarctata)'),nl,
      write('SOLUSI: -membersihkan lahan dari berbagai gulma agar sinar matahari dapat mencapai dasar kanopi tanaman padi'),nl,
      write(' -menanam varietas padi berumur genjah, untuk menghambat peningkatan populasi kepinding tanah'),nl.
