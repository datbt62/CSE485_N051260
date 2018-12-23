
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
`id_user`  int(11) NOT NULL AUTO_INCREMENT ,
`username`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`password`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`quyen_truy_cap`  int(1) NOT NULL ,
`hoten`  varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`gioitinh` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL ,
`sdt`  int(11) NOT NULL ,
`ngaysinh` date,
`email`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
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
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', '1', 'Thành Đạt','Nam', '84985918798','1998/11/18', 'datbt62@wru.vn');
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
`MaNV`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
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
`maloaisp`  int(1) NOT NULL ,
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
`MaNCC`  int(11) NOT NULL ,
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
-- Table structure for quyen
-- ----------------------------
DROP TABLE IF EXISTS `quyen`;
CREATE TABLE `quyen` (
`quyen_truy_cap`  int(1) NULL DEFAULT NULL ,
`KichHoat`  varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`tenquyen`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of quyen
-- ----------------------------
BEGIN;
INSERT INTO `quyen` VALUES ('1', 'Active', 'Quản lý'), ('2', 'Active', 'Nhân viên');
COMMIT;

-- ----------------------------
-- Table structure for sp
-- ----------------------------
DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham` (
`masp`  varchar(10) NOT NULL ,
`tensp`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`maloaisp`  int(1) ,
`Mancc`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`HinhAnh`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`MoTa`  text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`DonGia`  int(11) NOT NULL ,
`SoLuongTon`  bigint(20) NOT NULL ,
PRIMARY KEY (`masp`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of sp
-- ----------------------------
BEGIN;
INSERT INTO `sanpham` VALUES ('1', 'Áo hoodie', '1', '1', 'http://cdn.nhanh.vn/cdn/store/7136/ps/20181220/hoodie_nam_2__2__500x750.jpg', 'Màu đen,túi nối liền 2 tay,kẻ trắng vàng ở cánh tay ', '250000', '5');
COMMIT;

