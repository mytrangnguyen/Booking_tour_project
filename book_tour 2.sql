drop database book_tour;
create database book_tour;
use book_tour;

create table users(
id int primary key auto_increment,
user_name varchar(255),
password varchar(255),
address varchar(255),
phone_number varchar(255),
email varchar(255),
role varchar(255)
);



create table customers(
id_cus int primary key auto_increment,
id_user int,
name_cus varchar(255),
email varchar(255),
phone_number varchar(255),
address varchar(255),
requirement varchar(255),
FOREIGN KEY (id_user) REFERENCES users(id)
);
 
 CREATE TABLE employees(
    id_emp int primary key auto_increment NOT NULL,
    name_emp varchar(255),
    phone_number varchar(200),
    email varchar(255),
    address varchar(255)
);

CREATE TABLE vehicles(
    id_vehicles  int primary key auto_increment NOT NULL,
    name_vehicles varchar(255),
    details varchar(255)
);

INSERT INTO `vehicles` ( `id_vehicles`, `name_vehicles`, `details`) VALUES
(1,'Máy bay','Hàng không Vietnam Airlines'),
(2,'Máy bay','Hàng không Vietjet Air'),
(3,'Máy bay','Hàng không Jetstar Pacific'),
(4,'Máy bay','Hàng không Air Service'),
(5,'Xe Khách','Hãng Xe Mai Linh'),
(6,'Xe Khách','Hãng Xe Hoàng Long'),
(7,'Xe Khách','Hãng xe Văn Minh'),
(8,'Xe Khách','Hãng xe Phương Trang'),
(9,'Xe Khách','Hãng xe Thuận Thảo'),
(10,'Xe Khách','Hãng xe Thành Bưởi');
CREATE TABLE cities(
   id_city int primary key auto_increment NOT NULL,
   name_city varchar (255)
);
INSERT INTO `cities` ( `name_city`) VALUES
('Đà Nẵng'),
('Nha Trang'),
('Quảng Bình'),
('Tây Nguyên'),
('Phan Thiết'),
('Hạ Long'),
('Sa Pa');
CREATE TABLE places(
   id_place int primary key auto_increment NOT NULL,
   name_place varchar (255),
   description1 varchar (1000),
   image varchar(255),
   id_city int,
   FOREIGN KEY (id_city) REFERENCES cities(id_city)
);

INSERT INTO `places` (  `name_place`,`description1`, `image`,`id_city`) VALUES

 ('Bà Nà-Cầu Rồng','Lên Bà Nà bằng cáp treo, ngắm toàn cảnh núi non hùng vỹ và 
  tận hưởng khí hậu trong lành. Dạo bước trên Cầu Vàng tọa lạc tại Vườn Thiên Thai, 
  với thiết kế độc đáo và ấn tượng, đầy mềm mại tựa một dải lụa, được nâng đỡ bởi đôi bàn tay
  khổng lồ loang lổ rêu phong giữa cảnh sắc nên thơ tuyệt diệu của Bà Nà – Núi Chúa.', 'bana1.jpg',1),

  ('Non Nước-Hội An','ĐN là một trong những thành phố nổi tiếng đối với người Việt lẫn người 
  nước ngoài. ĐN bao gồm biển, bán đảo Sơn Trà, núi và nhiều cảnh đẹp.','nonnuoc1.jpg',1),
  
  ('Bãi Rạn-Chùa Linh Ứng','ĐN bao gồm biển, bán đảo Sơn Trà, núi và nhiều cảnh đẹp.','pqa.jpg',1),
  
  ('Biển Mỹ Khê  -Non Nước','ĐN là một trong những thành phố nổi tiếng đối với người Việt lẫn người 
  nước ngoài. ĐN bao gồm biển, bán đảo Sơn Trà, núi và nhiều cảnh đẹp.','mykhe1.jpg',1),
  
  ('Chùa Linh Ứng-Vòng Quay Mặt Trời','ĐN là một trong những thành phố nổi tiếng đối với người Việt lẫn người 
  nước ngoài. ĐN bao gồm biển, bán đảo Sơn Trà, núi và nhiều cảnh đẹp.','linhung1.jpg',1),
  

 
 ('Biển Nha Trang-Bảo Tàng','Nha Trang là một thành phố ven biển và là trung tâm chính trị,
   kinh tế, văn hóa, khoa học kỹ thuật và du lịch của tỉnh Khánh Hòa, Việt Nam. 
   Trước khi trở thành phần đất của Việt Nam, Nha Trang thuộc về Chiêm Thành. 
   Các di tích của người Chăm vẫn còn tại nhiều nơi ở Nha Trang. Nha Trang 
   được Thủ tướng chính phủ Việt Nam công nhận là đô thị loại 1 vào ngày 22 tháng 4 năm 2009.
   Đây là một trong các đô thị loại 1 trực thuộc tỉnh của Việt Nam.
   Nha Trang được mệnh danh là hòn ngọc của biển Đông, Viên ngọc xanh vì giá trị thiên nhiên,
   vẻ đẹp cũng như khí hậu của nó.','bien1nt.jpg',2),
   
   ('Hòn Lao-Dốc Lết','Nằm giữa đầm Nha Phu thuộc xã Lương Sơn (Nha Trang - Khánh Hoà),
   Hòn Lao là nơi nổi tiếng có nhiều hải sản, nước trong xanh, quanh năm biển lặng, 
   cảnh trí hữu tình... Nơi đây đã được đầu tư, tôn tạo thành khu giải trí dã ngoại
   với nhiều dịch vụ phục vụ khách du lịch','honlao.jpg',2),
   
   ('VinPear-Biển','Nằm giữa đầm Nha Phu thuộc xã Lương Sơn (Nha Trang - Khánh Hoà),
   Hòn Lao là nơi nổi tiếng có nhiều hải sản, nước trong xanh, quanh năm biển lặng, 
   cảnh trí hữu tình... Nơi đây đã được đầu tư, tôn tạo thành khu giải trí dã ngoại
   với nhiều dịch vụ phục vụ khách du lịch','vpnt.jpg',2),
   
   ('Dốc Lết-Hòn La','Bạn đã bao giờ tự hỏi, cùng một địa điểm, liệu rằng ngược đường, 
   ngược chiều đi về người ta có cảm thấy những cảnh vật khác nhau mà vô tình bỏ lỡ. 
   Một thoáng ngẩn ngơ hóa ra mình đã lướt qua một điều đẹp đẽ trong buổi chiều tháng 9
   hanh hao ấy. Ở Nha Trang, có một nơi bé xíu đáng yêu, làm người ta có hơn một thoáng
   ngẩn ngơ trước khung cảnh dốc lết trong ánh nắng hoàng hôn rất đỗi dịu dàng ấy.','doclet.jpg',2),

   ('Động Thiên Đường-Suối Nước Mọoc','Quảng Bình là tỉnh lỵ, trung tâm chính trị, kinh tế, 
   văn hóa và khoa học kỹ thuật của tỉnh Bình Thuận. Phan Thiết nằm trên quốc lộ 1A
   (chiều dài quốc lộ 1A đi qua là 7 km), trung tâm hành chính Thành phố Phan Thiết cách trung
   tâm hành chính Thành phố Hồ Chí Minh 183 km về hướng đông bắc. 
   Phan Thiết là đô thị Duyên Hải Cực Nam Trung Bộ, thuộc khu vực Nam Trung Bộ.
   Diện tích tự nhiên là 206,45 km², bờ biển trải dài 57,40 km.','tduong.jpg',3),
   
   ('Động Phong Nha-Thiên Đường-HAng Tối','','phongnha.jpg',3),
   ('Hang Sơn Đoong','','sondong.jpg',3),
   
   ('Làng Nỗi Tân Lập-Măng Đen','Vùng Tây Nguyên, một thời gọi là Cao nguyên Trung phần Việt Nam, 
   là khu vực với địa hình cao nguyên bao gồm nhiều tỉnh, xếp theo thứ tự vị trí địa lý từ đầu
   xuống cuối gồm Kon Tum, Gia Lai, Đắk Lắk, Đắk Nông và Lâm Đồng. Tây Nguyên là một trong 3 
   tiểu vùng của miền Trung. Tây Nguyên cùng với Bắc Trung Bộ và Nam Trung Bộ hợp thành 
   miền Trung Việt Nam.Và vùng này là vùng mà không giáp biển và khá gần xích đạo nên vừa nắng
   vừa hạn hán.','tanlap.jpg',4),
   ('Nhà Thờ Gỗ-Làng lập Nổi','Vùng Tây Nguyên, một thời gọi là Cao nguyên Trung phần Việt Nam, 
   là khu vực với địa hình cao nguyên bao gồm nhiều tỉnh, xếp theo thứ tự vị trí địa lý từ đầu
   xuống cuối gồm Kon Tum, Gia Lai, Đắk Lắk, Đắk Nông và Lâm Đồng. Tây Nguyên là một trong 3 
   tiểu vùng của miền Trung. Tây Nguyên cùng với Bắc Trung Bộ và Nam Trung Bộ hợp thành 
   miền Trung Việt Nam.Và vùng này là vùng mà không giáp biển và khá gần xích đạo nên vừa nắng
   vừa hạn hán.','nhatho.jpg',4),
   ('Măng Đen-Nhà Thờ Gỗ','Vùng Tây Nguyên, một thời gọi là Cao nguyên Trung phần Việt Nam, 
   là khu vực với địa hình cao nguyên bao gồm nhiều tỉnh, xếp theo thứ tự vị trí địa lý từ đầu
   xuống cuối gồm Kon Tum, Gia Lai, Đắk Lắk, Đắk Nông và Lâm Đồng. Tây Nguyên là một trong 3 
   tiểu vùng của miền Trung. Tây Nguyên cùng với Bắc Trung Bộ và Nam Trung Bộ hợp thành 
   miền Trung Việt Nam.Và vùng này là vùng mà không giáp biển và khá gần xích đạo nên vừa nắng
   vừa hạn hán.','mangden.jpg',4),
   
   ('Hồ Lak-Nhà Thờ Gỗ','Tà Đùng là một khu bảo tồn có diện tích 22.103 ha, thuộc xã Đắc P’lao và xã Đắk Som,
   huyện Đắk Glong tỉnh Đắc Nông, cách thị xã Gia Nghĩa khoảng 45 km. Hồ Tà Đùng được dân du lịch 
   hay ví von là vịnh Hạ Long của Tây Nguyên, với khung cảnh nên thơ, làm xao xuyến lòng người
   .','holak.jpg',4),
   ('Ninh Bình - Vịnh Hạ Long','Hạ Long là thành phố tỉnh lỵ, trung tâm văn hóa, kinh tế, chính trị của tỉnh Quảng Ninh,
   thuộc vùng duyên hải Bắc Bộ. Thành phố Hạ Long được thành lập ngày 27 tháng 12 năm 1993, trên cơ sở toàn bộ 
   diện tích và dân số của thị xã Hồng Gai[5]. Ngày 10/10/2013, Chính phủ ban hành quyết định số 1838/QĐ-TTg 
   công nhận thành phố Hạ Long là đô thị loại I.','halong.jpg',6),
   ('Hạ Long - Sân bay','','halong.jpg',6),
   ('Phan Thiết - Mũi Né','','phanthiet.jpg',5),
   ('Phan Thiết - Tà Cú – Cần Thơ','','phanthiet2.jpg',5),
    (' ĐÀ NẴNG - HÀ NỘI - LÀO CAI - SAPA ','','sapa.jpg',7),
   ('THAM QUAN HÀ NỘI – TIỄN SÂN BAY','','sapa1.jpg',7);
   /*22*/
   

CREATE TABLE tours(
    id int auto_increment NOT NULL PRIMARY KEY,
    name_tour varchar(100),
    price_tour Decimal (18,2),
	price_promotion Decimal (18,2),
    start_date date,
    end_date date,
    start_place varchar(100), 
    id_vehicles int,
    quantity_people int,
    status int,
    image_tour varchar(255),
    id_city int,
    FOREIGN KEY (id_vehicles) REFERENCES vehicles(id_vehicles),
    FOREIGN KEY (id_city) REFERENCES cities(id_city)
);

INSERT INTO `tours`(`name_tour`,`price_tour`, `price_promotion`,`start_date`, `end_date`,
`start_place`,`id_vehicles`,`quantity_people`,`status`,`image_tour`,`id_city`) VALUES
('Đà Nẵng - Cầu Rồng - Non Nước - Hội An',1235000,0,'2019-7-2','2019-7-4','Đà Nẵng',1,16,1 ,'danang1.jpg',1),
('Bãi Rạn-Chùa Linh Ứng - Biển Mỹ Khê  -Non Nước - Chùa Linh Ứng-Vòng Quay Mặt Trời',1235000,0,'2019-8-2','2019-8-4','Đà Nẵng',1,16,1 ,'danang2.jpg',1),
('Động Thiên Đường-Suối Nước Mọoc - Động Phong Nha-Thiên Đường-Hang Tối',1322000,5,'2019-7-2','2019-7-4','Nha Trang', 2,16,0,'qb.jpg',3),
('Phan Thiết - Mũi Né',1415000,0,'2019-7-2','2019-7-4','Phan Thiết',3,18,1,'phanthiet.jpg',5),
('Làng Nỗi Tân Lập-Măng Đen - Nhà Thờ Gỗ-Làng lập Nổi',1237000,10,'2019-6-5','2019-6-7','Nha Trang',4,2,1,'taynguyen.jpg',4),
('Ninh Bình - Hạ Long',1200000, 5,'2019-8-12','2019-8-14','Quảng Bình',5, 2,0,'halong.jpg',6),
('Biển Nha Trang - Bảo Tàng - Hòn Lao - Dốc Lết - VinPear',1200000, 5,'2019-4-12','2019-4-14','Quảng Bình',5, 2,0,'nhatrang.jpg',2),
('ĐÀ NẴNG - HÀ NỘI - LÀO CAI - SAPA ',1403000,10,'2019-7-12','2019-7-13','Hải Phòng', 6,16,0,'sapa1.jpg',7),
('HÀ NỘI - YÊN TỬ - HẠ LONG',1200000, 5,'2019-8-12','2019-8-14','Quảng Bình',5, 2,0,'halong1.jpg',2),
('HẢI PHÒNG - HÀ NỘI - NINH BÌNH - HẠ LONG',1200000, 5,'2019-12-12','2019-12-14','Quảng Bình',5, 2,0,'halong3.jpg',2),
('Hà Nộ - Ninh Bình - Hạ Long',1200000, 5,'2019-6-12','2019-6-14','Quảng Bình',5, 2,0,'halong4.jpg',2);
   
CREATE TABLE journeys(
	id_journey int NOT NULL,
	days int,
    description varchar (1000),
	id_place int NOT NULL,    
	id int NOT NULL, -- id tour
    Primary key (id_journey,days),
	FOREIGN KEY (id) REFERENCES tours(id),
	FOREIGN KEY (id_place) REFERENCES places(id_place)
);

INSERT INTO `journeys` ( `id_journey`, `days`, `description`,`id_place`, `id`) VALUES
( 1,1,'Xe đưa quý khách đến Ga cáp treo của KDL Bà Nà Hills. Viếng chùa Linh Ứng, khám phá Fantasy Park - khu vui chơi giải trí trong nhà đẳng
 cấp quốc tế (miễn phí 105 trò chơi) và trò chơi Hiệp sĩ Thần thoại (Máng trượt). Dạo bộ giữa 
 Khu làng Pháp một không gian kiến trúc tái hiện sinh động nước Pháp thời cận đại đầy lãng mạn,
 rọng và lịch lãm. Trải nghiệm Tàu hỏa leo núi, tham quan 9 vườn hoa, Hầm rượu cổ Debay
 (không bao gồm thưởng thức rượu vang) .Tự túc chi phí khám phá Khu trưng bày tượng sáp - 
 duy nhất tại Việt Nam. Xe đưa quý khách về lại TP.Đà Nẵng.', 1,1),
 
 (1,2,'quý khách tập trung tại Cổng D4, Ga đi trong nước, sân bay Tân Sơn Nhất. 
 Khởi hành ra Đà Nẵng trên chuyến bay VJ646 lúc 07: 55 hoặc 08:05, 08:55 (tùy ngày).
 Đến Đà Nẵng, quý khách nhận phòng. Đến Đà Nẵng, tham quan bán đảo Sơn Trà, ngắm cảng Tiên Sa, 
 viếng chùa Linh Ứng Bãi Bụt - ngôi chùa lớn nhất ở thành phố Đà Nẵng, chiêm bái tượng Phật
 Quan Thế Âm cao nhất Việt Nam, thắng cảnh Ngũ Hành Sơn và làng nghề điêu khắc đá Hoà Hải.
 Buổi chiều, đoàn khởi hành tham quan Phố cổ Hội An (với các công trình tiêu biểu:
 Chùa Cầu Nhật Bản, chùa Ông, hội quán Phúc Kiến, phố đèn lồng). 
 Trở ra và nghỉ đêm tại Đà Nẵng',2,1),
 
 (2,1,'Đón khách tại văn phòng Saigontourist (lúc 06h00 sáng tại 1 Nguyễn Chí Thanh,
 F9, Q5  hoặc lúc 06h30 sáng tại 102 Nguyễn Huệ, Quận 1) khởi hành đi Nha Trang.
 Trên đường đi, chiêm ngưỡng vẻ đẹp của Bãi biển cát trắng Cà Ná, 
 tham quan Khu tưởng niệm chiến sĩ Gạc Ma. du khách nhận phòng. Nghỉ đêm tại Nha Trang.',6,2),
 
 (2,2,'Buổi sáng, lên thuyền tới khu du lịch Hòn Lao - đảo Khỉ, tắm biển, thư giãn, 
 xem xiếc khỉ, xiếc chó, dê, đua chó hoặc thử các môn thể thao bãi biển canô kéo dù,
 môtô nước... (chi phí tự túc). Về lại đất liền, tham quan Trung tâm suối khoáng nóng Iresort 
 Nha Trang. Du khách tự do thư giãn và tắm khoáng. Nghỉ đêm tại Nha Trang',5,2),
 
 (2,3,'Khởi hành đi Dốc Lết. Tự do tham quan và tắm biển. Chiều khách đi tham quan 
 các thắng cảnh nổi tiếng hòn Chồng, ngắm cảnh núi Cô Tiên. Viếng tháp Bà Ponagar,
 tham quan và mua sắm tại chợ Đầm. Tự túc ăn tối. Nghỉ đêm tại Nha Trang.',7,2),
 
 (3,1,'Đón quý khách tại văn phòng Saigontourist (lúc 06h00 sáng tại 01 Nguyễn Chí Thanh, 
 F9, Q5 hoặc 06h30 sáng tại 102 Nguyễn Huệ, Q1), khởi hành đi Bình Thuận. Đến Phan Thiết,
 vào khu resort Hàm Tiến - Mũi Né nhận phòng. Buổi chiều, quý khách đi vào Hòn Rơm
 tham quan đồi cát vàng dưới tác động của gió biển đã tạo nên những hình dạng rất tuyệt vời. 
 Nghỉ đêm tại Mũi Né.',8,3),
 
 (3,2,'Toàn bộ khu trưng bày có diện tích 1.600m². Đây là không gian trưng bày nghệ thuật 
 và là bảo tàng thu nhỏ, tái hiện lại một phần làng chài xưa của Phan Thiết - Mũi Né cách đây 
 hơn 300 năm. Du khách đến đây sẽ được tham quan làng chài dưới rặng dừa; phố cổ
 ven sông Cà Ty; nhà ở và nơi sản xuất nước mắm của hàm hộ Phan Thiết; 
 con đường Phan Thiết - Mũi Né xưa; đắm mình vào biển Mũi Né 3D và mua sắm trong không gian chợ
 quê làng xưa… tận mắt được chứng kiến một làng chài xưa của xứ biển Phan Thiết được tái hiện
 một cách công phu. Nghỉ đêm tại Mũi Né.',9,3),
 
 (4,1,'khởi hành theo quốc lộ 13 đến thị xã Đồng Xoài, theo quốc lộ 14 qua các địa danh 
 nổi tiếng như Sóc Bom Bo, Bù Đăng và quang cảnh núi rừng hùng vĩ hai bên đường.
 Đến Thị Xã Gia Nghĩa, Đắk Nông, dùng cơm trưa tại nhà hàng.
Xe đưa đoàn  đi Khu Bảo Tồn Thiên Nhiên Tà Đùng, qua con đường đèo dài, 
khung cảnh núi rừng hoang vu hiện ra với những đồi café, tiêu bạt ngàn phủ xanh núi đồi 
Tây Nguyên dọc 2 bên đường mang đến cho Quý khách trải nghiệm khó quên.',10,4),

(4,2,'được ví von là Vịnh Hạ Long của Tây Nguyên, với khung cảnh nên thơ, 
bởi vẻ đẹp của thiên nhiên với hơn 36 hòn đảo lớn nhỏ, nhấp nhô trên mặt hồ. 
Quý khách xuống thuyền dạo một vòng quanh hồ, đắm mình trong cảnh đẹp lung linh của
 mặt nước hồ màu ngọc bích và những hòn đảo nhỏ xanh ngắt.',2,4),
 
(6,1,'Tham quan Khu du lịch Tràng An - nơi có cảnh quan ngoạn mục với hệ thống sông, 
suối đan xen nối dài chảy tràn trong các thung lũng, các hang xuyên thủy động và các dãy núi
 đá vôi trùng điệp. Đặc biệt, KDL nằm trong quần thể danh thắng Tràng An đã được UNESCO công nhận
 di sản hỗn hợp đầu tiên của Việt Nam và khu vực Đông Nam Á (đạt cả hai tiêu chí về văn hóa và thiên nhiên) 
 vào ngày 25/6/2014 vừa qua.  Dùng cơm trưa tại nhà hàng.Viếng chùa Bái Đính - ngôi chùa của những kỷ lục như: 
 Khu chùa rộng nhất Việt Nam, thờ Tượng Phật bằng đồng lớn nhất Đông Nam Á v.v….  Khởi hành đi Hạ Long. 
 Dùng cơm tối tại nhà hàng. Nghỉ đêm tại Hạ Long.',16,6),
 (6,2,'Buổi sáng, quý khách lên thuyền du ngoạn vịnh Hạ Long - một trong 7 kỳ quan thiên nhiên mới của thế giới.
 Chiêm ngưỡng động Thiên Cung, các hòn Đỉnh Hương - Trống Mái (Gà Chọi)- Chó Đá.  Dùng cơm trưa. Xe đưa đoàn ra 
 sân bay Cát Bi đón chuyến bay chiều về lại Đà Nẵng – VN1673 – 14:00 – 15:15.  Đến sân bay Đà Nẵng. Kết thúc chương 
 trình (Quý khách tự túc phương tiện từ sân bay về nhà).',17,6),
 (5,1,'Sáng: Quý khách tham quan Lâu Đài Rượu Vang – Nơi trưng bày hàng trăm loại rượu vang dưới lòng đất.
Chiều: đoàn tham quan Forgotten Land - Công viên Tượng cát đầu tiên tại Việt Nam. Tại đây, dưới bàn tay tài hoa
 của những nghệ nhân điêu khắc nổi tiếng thế giới, những khối cát khổng lồ đã trở thành các tác phẩm nghệ thuật vô cùng sống động.
Tối: Nghỉ đêm tại Mũi Né. Quý khách có thể tự túc đến xem nhạc kịch nước Huyền Thoại Làng Chài - show giải
 trí đặc sắc và đậm nét văn hóa làng chài của Phan Thiết - Bình Thuận.',18,5),
 (5,2,'Sáng: Quý khách tham quan Lâu Đài Rượu Vang – Nơi trưng bày hàng trăm loại rượu vang dưới lòng đất.
Chiều: đoàn tham quan Forgotten Land - Công viên Tượng cát đầu tiên tại Việt Nam. Tại đây, dưới bàn tay tài hoa
 của những nghệ nhân điêu khắc nổi tiếng thế giới, những khối cát khổng lồ đã trở thành các tác phẩm nghệ thuật vô cùng sống động.
Tối: Nghỉ đêm tại Mũi Né. Quý khách có thể tự túc đến xem nhạc kịch nước Huyền Thoại Làng Chài - show giải
 trí đặc sắc và đậm nét văn hóa làng chài của Phan Thiết - Bình Thuận.',19,5),
 (7,1,'05:00  Buổi sáng, quý khách tự túc phương tiện ra sân bay Đà Nẵng bay đi Hà Nội trên chuyến bay sáng – VN154-06:00 – 07:30. 
 Xe và HDV của Saigontourist đón quý khách tại sân bay Nội Bài.Từ sân bay Nội Bài, khởi hành đến Lào Cai theo tuyến đường cao tốc 
 Nội Bài - Lào Cai hiện đại và dài nhất Việt Nam. Ngang qua các tỉnh Vĩnh Phúc, Phú Thọ, Yên Bái, đến Lào Cai tiếp tục lên Sapa. 
 Chiêm ngưỡng dãy Hoàng Liên Sơn trên đường đi. Dùng cơm trưa tại Phú Thọ.  Đến Sapa tham quan bản Cát Cát lâu đời của người Mông, 
 nơi còn lưu giữ nhiều phong tục và nghề thủ công truyền thống độc đáo. Nghỉ đêm tại Sapa.',20,7),
 (7,2,'Sau bữa sáng, đến viếng lăng Chủ tịch Hồ Chí Minh (*), khu di tích Phủ Chủ tịch. Ngắm hồ Tây, hồ Trúc Bạch, viếng chùa Trấn Quốc
 - danh lam cổ tự được xây dựng từ thế kỷ VI; Tham quan Văn Miếu, Quốc Tử Giám - từng là trung tâm thờ tự và giáo dục Nho học lớn nhất, 
 đã từng đào tạo hàng nghìn hiền tài cho đất nước. Dùng cơm trưa tại nhà hàng.Quý khách tham quan một vòng Hà Nội, với các điểm: hồ Tây, 
 hồ Trúc Bạch, chùa Trấn Quốc - danh lam cổ nhất Việt Nam, được xây dựng từ thế kỷ VI,  Dùng cơm tối.Xe đưa ra sân bay Nội Bài, về Đà Nẵng 
 trên chuyến bay tối – VN197 – 21:00 – 22:20 . Kết thúc chương trình (Quý khách tự túc phương tiện từ sân bay về nhà).',21,7)
 ;

create table detail_book_tours(
	id_detail int auto_increment not null PRIMARY KEY,
	id_tour int ,
	adult int,
	child int,
	baby int,
	amount float,
	id_cus int,
    negotiated_price Decimal (18,2),
    payment varchar(255),
	FOREIGN KEY (id_tour) REFERENCES tours(id),
	FOREIGN KEY (id_cus) REFERENCES customers(id_cus)
);

create table comments(
id_cmt int auto_increment,
id_user int,
id_tour int,
detail varchar(255),
primary key(id_cmt),
FOREIGN KEY (id_user) REFERENCES users(id),
FOREIGN KEY (id_tour) REFERENCES tours(id)
);
CREATE TABLE slides(
    id_slide int primary key auto_increment NOT NULL,
    name varchar(150),
    images varchar(150)
); 
INSERT INTO slides(name,images) VALUES('LOVE THE PLACE','sl1.jpg'),
('I LOVE FAMILY','sl3.jpg'),
('NEVER STOP EXPLOYING ','sl2.jpg');



CREATE TABLE restaurants(
    id_res int primary key auto_increment NOT NULL,
    name_restaurant varchar(255),
    city varchar(200),
    details varchar(255),
    status int
); 

CREATE TABLE hotels(
    id_hotel int primary key auto_increment NOT NULL,
    hotel_name varchar(255),
    city varchar(200),
    hotel varchar(255),
    status int
);
CREATE TABLE manage(
    id_manage int NOT NULL,
    id_detail int,
    id_journey int,
    id_res int,
    id_hotel int,
    id_cus int,
    id_emp int,
    primary key(id_manage, id_journey),
    FOREIGN KEY (id_detail) REFERENCES detail_book_tours(id_detail),
    FOREIGN KEY (id_journey) REFERENCES journeys(id_journey),
    FOREIGN KEY (id_res) REFERENCES restaurants(id_res),
    FOREIGN KEY (id_hotel) REFERENCES hotels(id_hotel),
    FOREIGN KEY (id_cus) REFERENCES customers(id_cus),
    FOREIGN KEY (id_emp) REFERENCES employees(id_emp)
);

