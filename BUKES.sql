CREATE TABLE BUKU  (
	id_buku CHAR(5) NOT NULL,
	namaBuku VARCHAR2(30),
	tahunBuku VARCHAR2(4),
	pengarang VARCHAR2(50),
	hargaBuku NUMBER,
	penerbit VARCHAR2(30),
	synopsis VARCHAR2(300),
);
ALTER TABLE BUKU ADD CONSTRAINT BUKU_PK PRIMARY KEY (id_buku);

CREATE TABLE ADMIN  (
	username VARCHAR(20) NOT NULL,
	password VARCHAR2(30),
);

ALTER TABLE ADMIN ADD CONSTRAINT ADMIN_PK PRIMARY KEY (username);

CREATE TABLE CUSTOMER  (
	id_cust CHAR(10) NOT NULL,
	namaCust VARCHAR2(30),
      	alamat VARCHAR2(50),
	no_Telp VARCHAR2(12),
	email VARCHAR2(30),
	lokasi VARCHAR2(100),
	password VARCHAR2(30),
);

ALTER TABLE CUSTOMER ADD CONSTRAINT CUSTOMER_PK PRIMARY KEY (id_cust);


CREATE TABLE PENJUAL  (
	id_penjual CHAR(10) NOT NULL,
	namaPenjual VARCHAR2(30),
      	alamat VARCHAR2(50),
	no_Telp VARCHAR2(12),
	email VARCHAR2(30),
	lokasi VARCHAR2(100),
	password VARCHAR2(30),
);

ALTER TABLE PENJUAL ADD CONSTRAINT PENJUAL_PK PRIMARY KEY (id_penjual);

CREATE TABLE BANK  (
	noRek VARCHAR(20) NOT NULL,
	namaBank VARCHAR2(30),
	namaRek VARCHAR2(12),
);

ALTER TABLE BANK ADD CONSTRAINT BANK_PK PRIMARY KEY (noRek);

CREATE TABLE PEMESANAN  (
	id_pemesanan CHAR(10) NOT NULL,
	id_penjual CHAR(10),
	id_cust CHAR(10),
	id_Buku CHAR(10),
	id_transaksi CHAR(10),
	username VARCHAR(20),
	tglPemesanan DATE,
	statusPemesanan VARCHAR(10),
	jumlahPemesanan NUMBER,
	totalHarga NUMBER,
);

ALTER TABLE PEMESANAN ADD CONSTRAINT PEMESANAN_PK PRIMARY KEY (id_pemesanan);
ALTER TABLE PEMESAN ADD CONSTRAINT PEMESANAN_FK1 FOREIGN KEY (id_cust) REFERENCE CUSTOMER (id_cust);
ALTER TABLE PEMESAN ADD CONSTRAINT PEMESANAN_FK2 FOREIGN KEY (id_penjual) REFERENCE PENJUAL (id_penjual);
ALTER TABLE PEMESAN ADD CONSTRAINT PEMESANAN_FK3 FOREIGN KEY (username) REFERENCE ADMIN (username);
ALTER TABLE PEMESAN ADD CONSTRAINT PEMESANAN_FK4 FOREIGN KEY (id_buku) REFERENCE BUKU (id_buku);
ALTER TABLE PEMESAN ADD CONSTRAINT PEMESANAN_FK5 FOREIGN KEY (id_transaksi) REFERENCE TRANSAKSI (id_transaksi);

CREATE TABLE TRANSAKSI  (
	id_transaksi CHAR(10) NOT NULL,
	tgl_transaksi VARCHAR (20),
	jenis_transaksi VARCHAR (50),
	status VARCHAR (20),
	batas_transaksi (20),
	id_pemesanan CHAR(10),
	noRek VARCHAR(20),	
);

ALTER TABLE TRANSAKSI ADD CONSTRAINT TRANSAKSI_PK PRIMARY KEY (id_transaksi);
ALTER TABLE TRANSAKSI ADD CONSTRAINT PEMESANAN_FK1 FOREIGN KEY (noRek) REFERENCE BANK (noRek);
ALTER TABLE TRANSAKSI ADD CONSTRAINT PEMESANAN_FK2 FOREIGN KEY (id_pemesanan) REFERENCE PEMESANAN (id_pemesanan);

CREATE TABLE CHATTING (
	id_chatting CHAR(10) NOT NULL,
	id_penjual VARCHAR (10),
	id_cust CHAR (10),
	id_buku VARCHAR(10),
	tanggal_char VARCHAR(10),
	pesan_chat VARCHAR(225),
	status_baca VARCHAR(10),

);

ALTER TABLE CHATTING ADD CONSTRAINT CHATTING_PK PRIMARY KEY (id_chatting);
ALTER TABLE CHATTING ADD CONSTRAINT CHATTING_FK1 FOREIGN KEY (id_cust) REFERENCE CUSTOMER (id_cust);
ALTER TABLE CHATTING ADD CONSTRAINT CHATTING_FK2 FOREIGN KEY (id_penjual) REFERENCE PENJUAL (id_penjual);
ALTER TABLE CHATTING ADD CONSTRAINT CHATTING_FK3 FOREIGN KEY (id_buku) REFERENCE BUKU (id_buku);

CREATE TABLE REVIEW (
	id_review VARCHAR (10) NOT NULL,
	id_cust CHAR(10),
	id_buku CHAR(5)
	id_penjual VARCHAR (10),
	nomor_review VARCHAR (10),
	rating INTEGER(5),
	jumlah_bintang INTEGER(10),
	komentar VARCHAR(225),
);
ALTER TABLE REVIEW ADD CONSTRAINT REVIEW_PK PRIMARY KEY (id_review);
ALTER TABLE REVIEW ADD CONSTRAINT REVIEW_FK1 FOREIGN KEY (id_cust) REFERENCE CUSTOMER (id_cust);
ALTER TABLE REVIEW ADD CONSTRAINT REVIEW_FK2 FOREIGN KEY (id_penjual) REFERENCE PENJUAL (id_penjual);
ALTER TABLE REVIEW ADD CONSTRAINT REVIEW_FK3 FOREIGN KEY (id_buku) REFERENCE BUKU (id_buku);

ALTER SESSION SET nls_date_format = 'dd-MM-yyyy';

INSERT INTO BUKU (id_buku,namaBuku,tahunBuku,pengarang,hargaBuku,penerbit,synopsis) VALUES ('R0101',' Cinta Brontosaurus',’2006’,’ Raditya Dika’,’Rp, 65,000’,’ Gagas Media’,’ Dika adalah seorang penulis yang sangat terkenal akan humorisnya. Dika baru saja mengalami putus cinta dengan pacarnya yang bernama Nina. Semenjak Dika putus cinta, dia mulai percaya bahwa tidak ada yang abadi, bahkan cinta juga mempunyai kadaluarsa. Kosasih, agen naskah Dika, mencoba untuk memberi semangat Dika agar lebih yakin bahwa cinta akan kembali. Seperti Kosasih yakin kepada Wanda istrinya. Usaha yang dilakukan Kokasih ini, membawa Dika ke dalam serangkaian perkenalan dengan orang-orang baru.Tetapi, yang namanya cinta datang tanpa adanya persiapan. Seperti halnya ketika Dika bertemu dengan Jessica. Jessica adalah seorang perempuan yang memiliki jalan pikiran yang aneh sama dengan Dika. pertanyaan  tentang “apa benar cinta bisa kadaluarsa?” kembali hadir dalam fikirannya ketika semakin jauh mengenal jessica. Di sisi lain, Mr. Soe Lim menawarkan untuk pembuatan film dari buku Cinta Brontosaurus karyanya.Dika merasa tertarik akan tawaran tersebut dan memutuskan untuk menulis skrip film tersebut. Berbagai masalah mulai timbul di tengah jalan. Mr. Soe Lim mencoba untuk mengubah naskah asli yang telah Dika buat. Naskah Dika diubah menjadi film horror yang sedang laku pada saat itu. Buku yang berjudul “Cinta Brontosaurus” merupakan perjalanan Dika dalam memahami cinta, yang Dia dapatkan dari pengalamannya bersama Jessica, teman, dan juga dari keluarganya sendiri.
INSERT INTO BUKU (id_buku,namaBuku,tahunBuku,pengarang,hargaBuku,penerbit,synopsis) VALUES ('R0102','Memahami Film',’2008’,’ Himawan Prastists’,’Rp, 100,000’,’Homerian Pustaka’,’ Mayoritas orang masih melihat film adalah sesuatu yang mustahil dilakukan, padahal film bisa dibuat oleh siapa pun. Walaupun minat belajar tentang film sangat tinggi, kenyataannya dalam memahami seni film masih sangat terbatas. Pengetahuan orang tentang film sama sekali belum bisa mempengaruhi tentang daya paham seseorang.Ilmu tentang film sebagai buah karya seni hanya dijadikan mata kuliah semata, padahal seni ini bukan hanya milik akademisi saja. Film adalah milik semua pecintanya baik pelakon mau pun penonton. Buku ini mencoba membantu semua penonton film memahami film sebagai sebuah karya seni.Buku ini pembaca bisa belajar tentang motif atas pilihan teknik yang dipilih sutradara baik sisi naratifnya maupun sistematiknya. Membaca buku ini akan dengan mudah memahaminya karena dilengkapi dengan gambar-gambar penunjang sebagai peraga.’)
INSERT INTO BUKU (id_buku,namaBuku,tahunBuku,pengarang,hargaBuku,penerbit,synopsis) VALUES ('R0103',’ Metodologi Penelitian Dan Teknik Penyusunan Skripsi.’,’2006’,’ H Abdurrahmat Fathoni’,’Rp, 100,000’,’ PT Rineka Cipta’,’ Resensi Buku Metodologi Penelitian Dan Teknik Penyusunan Skripsi. Buku ini disusun berdasarkan pandangan dan pemikiran para ahli. Sejumlah pakar dan peneliti dalam bidang metodologi penelitian membuat buku ini untuk membantu pembaca memahami metodologi penelitian. Berisi tentang seluk beluk metodologi penelitian, prosedur penelitian secara mum yang bisa digunakan dalam penelitian ilmu sosial.’)
INSERT INTO BUKU (id_buku,namaBuku,tahunBuku,pengarang,hargaBuku,penerbit,synopsis) VALUES ('R0104',’ Algoritma dan Pemrograman dalam Bahasa Pascal dan C,’2011’,’ Rinaldi Munir,’Rp, 80,000’,’ INFORMATIKA’,’ Buku Algoritma dan Pemrograman dalam Bahasa Pascal dan C merupakan penggabungan dari dua buah buku sebelumnya, yaitu Algoritma dan Pemrograman dalam Bahasa Pascal dan C (Buku 1) dan Algoritma dan Pemrograman dalam Bahasa Pascal dan C (Buku 2. Setiap materi diperkaya dengan banyak contoh pemecahan masalah. Diharapkan buku ini dapat mengajarkan pembacanya menjadi seorang pemrogram yang dapat memprogram dengan kaidah yang benar.Notasi algoritmik yang digunakan adalah notasi abstrak berupa pseudo-code. Notasi pseudo-code dibuat sedemikian sehingga ia mudah diterjemahkan (translasi) ke dalam notasi bahasa pemrograman. Bahasa pemrograman yang digunakan di dalam buku ini adalah Bahasa Pascal dan Bahasa C. Kedua bahasa ini dipilih karena populer, banyak digunakan, dan menjadi dasar pengembangan bahasa-bahasa yang lebih baru seperti Object Pascal, Java, C++, dan lain-lain. Kompilator (compiler) Bahasa Pascal/C yang digunakan boleh sembarang, namun buku ini menggunakan kompilator yang free dan dapat di-download dari internet, yaitu Free Pascal dan GCC (GNU C Compiler’)
INSERT INTO BUKU (id_buku,namaBuku,tahunBuku,pengarang,hargaBuku,penerbit,synopsis) VALUES ('R0105',’ Penerapan Data Maining Dengan Matlab’,’2013’,’ Prabowo Pudjo Widodo’,’Rp, 75,000’,’ INFORMATIKA’,’ Buku Penerapan Data Maining Dengan Matlab ini merupakan kelanjutan dari buku sebelumnya tentang Soft Computing. Banyaknya pembaca yang berminat membuat sistem berbasis mesin pembelajaran (machine learning) membuat kami membuat buku yang kebanyakan diambil dari kasus-kasus yang telah dibuat oleh mahasiswa-mahasiswa tingkat sarjana dan pascasarjana.
Data Mining mengharuskan tersedianya data yang akan digali dan dicari informasi-informasi tersembunyi yang bermanfaat bagi pengambil keputusan. Namun untuk mempermudah proses belajar, dalam buku ini kami hanya menyediakan data-data sederhana yang sengaja dirancang mirip dengan data-data yang jumlahnya banyak yang diperoleh lewat riset di institusi tertentu. Akan tetapi, walaupun sederhana, prinsipnya dapat diterapkan langsung dengan data riil.’)

SELECT * FROM BUKU;

INSERT INTO CUSTOMER (id_cust,namaCust,alamat,no_telp,email,lokasi,password) VALUES ('S0101','Alfin ahsani',' Jl.pahlawan No.01','alfin123@gmail.com',’Sidoarjo’,’08138428897’'alfin12345'); 
INSERT INTO CUSTOMER (id_cust,namaCust,alamat,no_telp,email,lokasi,password) VALUES ('S0102','Anisa pratiwi',' Jl.Melati No.02','anisa123@gmail.com',’Medan ’,’082237858498’'anisa123');
INSERT INTO CUSTOMER (id_cust,namaCust,alamat,no_telp,email,lokasi,password) VALUES ('S0103','Mila putri',' Jl.Mawar No.03','mila123@gmail.com',’Madiun ’,’082231889746’'mila12345');
INSERT INTO CUSTOMER (id_cust,namaCust,alamat,no_telp,email,lokasi,password) VALUES ('S0104','Putri kartika',' Jl.Kemuning No.04','putri123@gmail.com',’padang ’,’081275828649’'putri12345'); 
INSERT INTO CUSTOMER (id_cust,namaCust,alamat,no_telp,email,lokasi,password) VALUES ('S0105','Andi pratama',' Jl.Panglima sudirman No.05','andi123@gmail.com',Jakarta ’,’082231438698’'andi12345'); 

SELECT * FROM CUSTOMER;

INSERT INTO PENJUAL (id_penjual,namaPenjual,alamat,no_telp,email,lokasi,password) VALUES ('E0101','Ratih kusuma','Jl.Rajawali No.01','ratih321@gmail.com',’Batam’,’083472745277’,ratih321);
INSERT INTO PENJUAL (id_penjual,namaPenjual,alamat,no_telp,email,lokasi,password) VALUES ('E0102','Wawan hendrawan','Jl.Merak No.02','wawan321@gmail.com',’Surabaya’,’083472745277’,wawan321);
INSERT INTO PENJUAL (id_penjual,namaPenjual,alamat,no_telp,email,lokasi,password) VALUES ('E0103','Fitri wulandari','Jl. Anggrek No.03','fitri321@gmail.com',’Semarang’,’085488740972’,fitri321);
INSERT INTO PENJUAL (id_penjual,namaPenjual,alamat,no_telp,email,lokasi,password) VALUES ('E0104','Stevanus Dio','Jl. Tersusan buah batu No.04','dio4321@gmail.com',’Bandung’,’085423712288’,dio4321);
INSERT INTO PENJUAL (id_penjual,namaPenjual,alamat,no_telp,email,lokasi,password) VALUES ('E0105','Rina dwi aria','Jl. Bojongsoang No.05','rina321@gmail.com',’Bandung’,’081423790244’,rina321);

SELECT * FROM PENJUAL;

INSERT INTO PEMESANAN (id_pemesanan,id_penjual,id_customer,id_buku, id_transaksi,tglPemesanan, statusPemesanan,jumlahPemesanan,totalHarga) VALUES ('T0101','E0105',’S0103’,’R0102’,'001123456','21-08-2019',’sudah bayar’,'1','Rp.100,000');
INSERT INTO PEMESANAN (id_pemesanan,id_penjual,id_customer,id_buku, id_transaksi,tglPemesanan, statusPemesanan,jumlahPemesanan,totalHarga) VALUES ('T0102','E0104',’S0102’,’R0103’,'001123457','14-07-2019',’sudah bayar’,'1','Rp.100,000');
INSERT INTO PEMESANAN (id_pemesanan,id_penjual,id_customer,id_buku, id_transaksi,tglPemesanan, statusPemesanan,jumlahPemesanan,totalHarga) VALUES ('T0103','E0103',’S0101’,’R0104’,'001123458','10-08-2019',’sudah bayar’,'1','Rp.80,000');
INSERT INTO PEMESANAN (id_pemesanan,id_penjual,id_customer,id_buku, id_transaksi,tglPemesanan, statusPemesanan,jumlahPemesanan,totalHarga) VALUES ('T0104','E0102',’S0104’,’R0105’,'001123459','21-03-2019',’sudah bayar’,'1','Rp. 75,000');
INSERT INTO PEMESANAN (id_pemesanan,id_penjual,id_customer,id_buku, id_transaksi,tglPemesanan, statusPemesanan,jumlahPemesanan,totalHarga) VALUES ('T0105','E0101',’S0105’,’R0101’,'001123460','09-02-2019',’sudah bayar’,'2','Rp.130.000');

SELECT * FROM PEMESANAN;

INSERT INTO ADMIN (username,password) VALUES ('S0101','E0001','Oliver','21-08-1999','08632485723156','Jl.Bandung No.01');

SELECT * FROM ADMIN;

INSERT INTO BANK (noRek,namaBank,namaRek) VALUES (‘33583623420747’,’BRI’,’Ratih Kusuma’);
INSERT INTO BANK (noRek,namaBank,namaRek) VALUES (‘98761624862364’,’MANDIRI’,’Wawan hendrawan’);
INSERT INTO BANK (noRek,namaBank,namaRek) VALUES (‘72127381641479’,’BNI’,’Fitri wulandari’);
INSERT INTO BANK (noRek,namaBank,namaRek) VALUES (‘02839178167472’,’BCA’,’stevanus Dio’);
INSERT INTO BANK (noRek,namaBank,namaRek) VALUES (‘335808734208297’,’BRI’,’Rina dwi aria’);

SELECT * FROM BANK;

INSERT INTO TRANSAKSI (id_transaksi,tgl_transaksi,jenis_transaksi,status,batas_transaksi,id_pemesanan) VALUES ('001123456','21-08-2019'','ATM',’ sudah dibayar’,'22-08-2019',' T0101’);
INSERT INTO TRANSAKSI (id_transaksi,tgl_transaksi,jenis_transaksi,status,batas_transaksi,id_pemesanan) VALUES ('001123457','14-07-2019'','ATM',’ sudah dibayar’,'15-07-2019',' T0102’);
INSERT INTO TRANSAKSI (id_transaksi,tgl_transaksi,jenis_transaksi,status,batas_transaksi,id_pemesanan) VALUES ('001123458','10-08-2019'','ATM',’ sudah dibayar’,'11-08-2019',' T0103’);
INSERT INTO TRANSAKSI (id_transaksi,tgl_transaksi,jenis_transaksi,status,batas_transaksi,id_pemesanan) VALUES ('001123459','21-03-2019'','ATM',’ sudah dibayar’,'22-03-2019',' T0104’);
INSERT INTO TRANSAKSI (id_transaksi,tgl_transaksi,jenis_transaksi,status,batas_transaksi,id_pemesanan) VALUES ('001123460','09-02-2019'','ATM',’ sudah dibayar’,'10-02-1999',' T0105’);

SELECT * FROM TRANSAKSI;

INSERT INTO REVIEW (id_review, id_penjual, nomor_review,rating, jumlah_bintang,komentar) VALUES ('Q0101','E0101','10001','*****',’5’,'Barang masih bagus dan mulus');
INSERT INTO REVIEW (id_review, id_penjual, nomor_review,rating, jumlah_bintang,komentar) VALUES ('Q0102','E0102','10002','****',’4’,'sampul masih bagus namun kertas pada halaman belakang sobek');
INSERT INTO REVIEW (id_review, id_penjual, nomor_review,rating, jumlah_bintang,komentar) VALUES ('Q0103','E0103','10003','*****',’5’,'Barang masih bagus dan sampai dengan cepat');
INSERT INTO REVIEW (id_review, id_penjual, nomor_review,rating, jumlah_bintang,komentar) VALUES ('Q0104','E0104','10004','***',’3,'ada beberapa halaman yang hilang, sehingga kualitas buku jelek’);
INSERT INTO REVIEW (id_review, id_penjual, nomor_review,rating, jumlah_bintang,komentar) VALUES ('Q0105','E0105','10005','****',’4’,'Barang masih bagus dan mulus namun terdapat banyak coretan dibuku');

SELECT * FROM REVIEW;

SELECT id_cust, tgl_transaksi FROM TRANSAKSI JOIN CUSTOMER using (id_cust) (WHERE status = 'LUNAS');

SELECT id_cust, totalHarga FROM PEMESANAN WHERE totalHarga BETWEEN 25000 AND 100000;  

SELECT max(avg(totalHarga)) from PEMESANAN group by id_cust;