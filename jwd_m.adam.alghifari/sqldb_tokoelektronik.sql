-- Gunakan basis data yang benar
USE db_tokoelektronik;

-- Buat tabel supplier terlebih dahulu
CREATE TABLE `tabel_supplier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `supplier_id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(20) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Masukkan data ke tabel supplier
INSERT INTO `tabel_supplier` (`supplier_id`, `nama`, `alamat`, `kota`, `telepon`) VALUES
('SUP01', 'ElectroMart', 'Jl. Elektronik No. 45', 'Jakarta', '021-12345678'),
('SUP02', 'TechHub', 'Jl. Teknologi No. 78', 'Bandung', '022-23456789'),
('SUP03', 'GadgetWorld', 'Jl. Gadget No. 34', 'Surabaya', '031-34567890'),
('SUP04', 'VR Center', 'Jl. VR No. 56', 'Medan', '061-45678901'),
('SUP05', 'PrintShop', 'Jl. Printing No. 89', 'Bali', '0361-56789012'),
('SUP06', 'CameraPlus', 'Jl. Kamera No. 12', 'Yogyakarta', '0274-67890123');

-- Buat tabel elektronik
CREATE TABLE `tabel_elektronik` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_elektronik` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama_elektronik` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(100) NOT NULL,
  `warranty_period` int(11) NOT NULL,
  `supplier_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `supplier_id` (`supplier_id`),
  CONSTRAINT `tabel_elektronik_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `tabel_supplier` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
);

-- Masukkan data ke tabel elektronik
INSERT INTO `tabel_elektronik` (`id_elektronik`, `kategori`, `nama_elektronik`, `harga`, `stok`, `brand`, `model`, `warranty_period`, `supplier_id`) VALUES
('E1001', 'Laptop', 'MacBook Air', 15000000, 5, 'Apple', 'MacBook Air M1', 24, 1),
('E1002', 'Tablet', 'iPad Pro', 12000000, 10, 'Apple', 'iPad Pro 12.9"', 24, 1),
('E1003', 'Smartwatch', 'Apple Watch', 8000000, 20, 'Apple', 'Apple Watch Series 6', 12, 2),
('E1004', 'Smart Speaker', 'Amazon Echo', 3000000, 25, 'Amazon', 'Echo Dot 4th Gen', 12, 3),
('E1005', 'VR Headset', 'Oculus Rift', 10000000, 8, 'Oculus', 'Rift S', 24, 4),
('E1006', 'Printer', 'Canon PIXMA', 2000000, 15, 'Canon', 'PIXMA MG3620', 12, 5),
('E1007', 'Smartphone', 'iPhone 13', 17000000, 12, 'Apple', 'iPhone 13 Pro', 24, 1),
('E1008', 'Camera', 'Nikon D3500', 7500000, 10, 'Nikon', 'D3500', 12, 6);

-- Buat tabel karyawan
CREATE TABLE `tabel_karyawan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_karyawan` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(20) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Masukkan data ke tabel karyawan
INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama`, `alamat`, `kota`, `telepon`) VALUES
('K001', 'John Doe', 'Jl. Karyawan No. 10', 'Jakarta', '021-98765432'),
('K002', 'Jane Smith', 'Jl. Karyawan No. 11', 'Bandung', '022-87654321'),
('K003', 'Michael Johnson', 'Jl. Karyawan No. 12', 'Surabaya', '031-76543210'),
('K004', 'Emily Davis', 'Jl. Karyawan No. 13', 'Medan', '061-65432109'),
('K005', 'Sarah Wilson', 'Jl. Karyawan No. 14', 'Bali', '0361-54321098');

-- Buat tabel cabang
CREATE TABLE `tabel_cabang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cabang` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Masukkan data ke tabel cabang
INSERT INTO `tabel_cabang` (`id_cabang`, `nama`, `alamat`, `kota`) VALUES
('CB001', 'Cabang Utama Jakarta', 'Jl. Utama No. 1', 'Jakarta'),
('CB002', 'Cabang Bandung', 'Jl. Bandung No. 2', 'Bandung'),
('CB003', 'Cabang Surabaya', 'Jl. Surabaya No. 3', 'Surabaya'),
('CB004', 'Cabang Medan', 'Jl. Medan No. 4', 'Medan'),
('CB005', 'Cabang Bali', 'Jl. Bali No. 5', 'Bali');
