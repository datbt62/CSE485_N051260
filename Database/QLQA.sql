
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
`id_user`  int(11) NOT NULL AUTO_INCREMENT ,
`username`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`password`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,

`hoten`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`gioitinh` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`sdt`  int(11) NOT NULL ,
`ngaysinh` date,
`email`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`isactive` tinyint(1) not null,
PRIMARY KEY (`id_user`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of admin
-- ----------------------------
BEGIN;
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', 'Thành Đạt','Nam', '84985918798','1998/11/18', 'datbt62@wru.vn','0');
COMMIT;

-- ----------------------------
-- Table structure for cthd
-- ----------------------------
DROP TABLE IF EXISTS `cthd`;
CREATE TABLE `cthd` (
`mahd`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`masp`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`SoLuong`  int(10) NULL DEFAULT NULL ,
`DonGia`  int(11) NULL DEFAULT NULL ,
`GiamGia`  int(11) NULL DEFAULT NULL ,
PRIMARY KEY (`MaHD`, `Masp`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of cthd
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for hoadon
-- ----------------------------
DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE `hoadon` (
`mahd`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`DaThanhToan`  tinyint(2) NULL DEFAULT NULL ,
`TinhTrangGiaoHang`  tinyint(2) NULL DEFAULT NULL ,
`NgayDat`  date NULL DEFAULT NULL ,
`NgayGiao`  date NULL DEFAULT NULL ,
`MaKH`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`Tongtien`  int(20) NULL DEFAULT NULL ,
PRIMARY KEY (`MaHD`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of hoadon
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for khachhang
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang` (
`MaKH`  INT(6) UNSIGNED AUTO_INCREMENT NOT NULL ,
`TenKhachHang`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`gioitinh` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`ngaysinh` date,
`Email`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`SDT`  char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`duongxa`  varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`quanhuyen`  varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`tinh`  varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`MaKH`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of khachhang
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for loaisach
-- ----------------------------
DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE `loaisp` (
`maloaisp`  int(1) NOT NULL UNSIGNED AUTO_INCREMENT,
`tenloaisp`  varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`MaLoaisp`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of loaisp
-- ----------------------------
BEGIN;
insert into `loaisp` values ('1','Nam'),('2','Nữ');
COMMIT;

-- ----------------------------
-- Table structure for nhacc
-- ----------------------------
DROP TABLE IF EXISTS `nhacc`;
CREATE TABLE `nhacc` (
`MaNCC`  int(11) NOT NULL UNSIGNED AUTO_INCREMENT,
`TenNCC`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`SDT`  char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`Email`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`DiaChi`  varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`MaNCC`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of nhacc
-- ----------------------------
BEGIN;
INSERT INTO `nhacc` VALUES ('1', 'Shop đẹp', '(043) 8515380', 'shopdep@yahoo.com', '18 Chùa Bộc, Đống Đa, Hà Nội');
COMMIT;

-- ----------------------------
-- Table structure for sp
-- ----------------------------
DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham` (
`masp`  varchar(10) NOT NULL UNSIGNED AUTO_INCREMENT ,
`tensp`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`maloaisp`  int(1) null default null ,
`Mancc`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`HinhAnh`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`DonGia`  int(11) NOT NULL ,
`khuyenmai` int,
`SoLuongTon`  tinyint(20) NOT NULL ,
PRIMARY KEY (`masp`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of sp
-- ----------------------------
BEGIN;
INSERT INTO `sanpham` VALUES ('1', 'Áo hoodie', '1', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181220/hoodie_nam_2__2__500x750.jpg', '250000','10', '5')
, ('2', 'Áo hoodie', '1', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181220/hoodie_nam_4__2__500x750.jpg', '250000','20', '5')
,('3', 'Áo thun', '1', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181222/thun_nam_12__1__500x750.jpg', '100000','30', '5')
,('4', 'Quần kaki', '1', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181011/quan_tay_nam_13__1__500x750.jpg', '250000', '20','5')
,('5', 'Quần jeans', '1', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181213/jean_nam_22__1__500x750.jpg',  '300000','15', '5')
,('6', 'Áo thun', '2', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181222/ao_thun_nu_5__1__500x750.jpg',  '150000', '20','5')
,('7', 'Áo sơ mi', '2', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181108/somi_nu_9__1__thumb_400x600.jpg', '150000','15', '4')
,('8', 'Áo sơ mi', '1', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181222/somi_nam_20__1__500x750.jpg', '150000', '30','4')
,('9', 'Áo khoác', '1', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181222/khoac_doi_32__1__500x750.jpg', '250000', '0.1','4')
,('10', 'Áo dạ', '1', '1', 'https://media3.scdn.vn/img2/2017/11_28/ao-khoac-da-nam-1m4G3-SosHr4_simg_ab1f47_350x350_maxb.png',  '500000','10', '3')
,('11', 'Áo cadigan', '2', '1', 'https://img.zanado.com/media/catalog/product/cache/all/thumbnail/360x420/7b8fef0172c2eb72dd8fd366c999954c/2/_/ao_khoac_cardigan_nu_viet_thy_115d.jpg',  '300000','20', '3')
, ('12', 'Áo phao', '1', '1', 'https://vn-live-01.slatic.net/original/a5ee5a7a1f7dbb54fc8f32d9e76a027b.jpg', '400000','10', '3')
,('13', 'Áo hoodie', '2', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181115/ao_khoac_nu_3__1__500x750.jpg', '250000','5', '3');
COMMIT;
-- ----------------------------
-- Table structure for slide
-- ----------------------------

DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide` (
`Maslide` int(5) UNSIGNED AUTO_INCREMENT NOT NULL,
`Anhslide` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`Tieude` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`Noidung` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    PRIMARY KEY (`Maslide`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of slide
-- ----------------------------
BEGIN; 
insert into `slide` values ('1','http://cdn.nhanh.vn/cdn/store/7136/bn/sb_1545992988_88.jpg','TOTO Shop mừng năm mới - Ưu đãi khủng','Toto shop gửi lời chúc mừng năm mới tới khách hàng. Chúc quý khách có một năm mới an khang thịnh vượng . Để tri ân quý khách đã ủng hộ shop, Shop mở khuyến mãi lên tới 30% cho một số mặt hàng Áo nam, Áo nữ . Shop sẽ đặt khuyến mãi ở phần hot item');
COMMIT;