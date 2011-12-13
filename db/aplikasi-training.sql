DROP TABLE IF EXISTS Paket_Training;
create table Paket_Training
(
id int(5) not null primary key auto_increment,
kode_paket_training int(5) not null,
nama_paket_training varchar(50) not null
)ENGINE=INNODB;

DROP TABLE IF EXISTS Konfirmasi_Pembayaran;
create table Konfirmasi_Pembayaran
(
id int(5) not null primary key auto_increment,
no_pendaftaran int(5) not null,
nama_peserta varchar(30) not null,
paket_training varchar(5) not null,
tanggal_pembayaran date not null,
nominal varchar(255) not null,
pembayaran varchar(50) not null,
dari_rekening varchar(50) not null,
keterangan text not null
)ENGINE=INNODB;

DROP TABLE IF EXISTS Jadwal_Training;
create table Jadwal_Training
(
id int(5) not null primary key auto_increment,
kode_paket_training int(5) not null,
tanggal_mulai date not null,
tanggal_selesai date not null,
durasi_jam varchar(50) not null,
durasi_hari varchar(50) not null,
waktu_training varchar(50) not null,
maksimal_peserta varchar(50) not null,
harga_training double not null,
lokasi_training varchar(255) not null,
silabus longtext not null,
fasilitas text not null,
aktif boolean not null,
FOREIGN KEY(kode_paket_training)
REFERENCES Paket_Training(id)
ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=INNODB;

DROP TABLE IF EXISTS Pendaftaran_Training;
create table Pendaftaran_Training
(
id int(5) not null primary key auto_increment,
nama varchar(50) not null,
alamat text not null,
tanggal_lahir date not null,
pekerjaan varchar(50) not null,
email varchar(50) not null,
no_telpon varchar(50) not null,
paket_training int(5) not null,
id_jadwal int(5) not null,
pembayaran_dp varchar(50) not null,
keterangan text not null,
FOREIGN KEY(paket_training)
REFERENCES Paket_Training(id)
ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(id_jadwal)
REFERENCES Jadwal_Training(id)
ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=INNODB;
