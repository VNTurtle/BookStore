
INSERT INTO `OrderStatus` (`Id`, `Name`, `Status`) 
VALUES (1, 'Chờ xác nhận', b'1'), 
		(2, 'Chờ lấy hàng', b'1'),
		(3, 'Đang giao hàng', b'1'),
		(4, 'Đã nhận hàng', b'1'), 
		(5, 'Đã Hủy', b'1');

INSERT INTO `Role` (`Id`, `Name`, `Status`) 
VALUES (1, 'Admin', b'1'), 
		(2, 'User', b'1');


INSERT INTO `Paymethod` (`Id`, `Name`, `Status`) 
VALUES (1, 'Tiền mặt', b'1'), 
		(2, 'VNPAY', b'1'),
		(3, 'MOMO', b'1');

INSERT INTO `CoverType` (`Id`, `Name`, `Status`) 
VALUES (1, 'Bìa mềm', b'1'), 
		(2, 'Bìa cứng', b'1'),
		(3, 'Bìa gập', b'1');

INSERT INTO `combobook` (`Id`, `Name`, `Status`) 
VALUES (1, 'Thiên Sứ Nhà Bên', b'1'), 
		(2, 'Vợ Trong Game Của Tôi Là Idol Nổi Tiếng Ngoài Đời', b'1'),
		(3, 'Chúa tể bóng tối', b'1'),
		(4, 'Lớp học mật ngữ', b'1'),
		(5, 'Sói Già Phố Wall', b'1'), 
		(6, 'Doraemon', b'1');
INSERT INTO `Type` (`Id`, `Name`, `Banner`, `Status`) 
VALUES 
    (1, 'Giáo Khoa - Tham Khảo', null, b'1'), 
    (2, 'Sách học ngoại Ngữ', null, b'1'),
    (3, 'Nuôi dạy con', null, b'1'),
    (4, 'Tâm lý - Kỹ năng sống', null, b'1'),
    (5, 'Kinh tế', null, b'1'),
    (6, 'Văn học', null, b'1'),
    (7, 'Sách thiếu nhi', null, b'1'),
    (8, 'Tiểu sử - Hồi ký', null, b'1'),
    (9, 'Mẫu giáo', null, b'1'),
    (10, 'Sách giáo khoa', null, b'1'),
    (11, 'Sách giáo viên', null, b'1'),
    (12, 'Đại học', null, b'1'),
    (13, 'Tiếng Anh', null, b'1'),
    (14, 'Tiếng Hoa', null, b'1'),
    (15, 'Tiếng Nhật', null, b'1'),
    (16, 'Tiếng Hàn', null, b'1'),
    (17, 'Tiếng Pháp', null, b'1'),
    (18, 'Tiếng Việt cho người nước ngoài', null, b'1'),
    (19, 'Ngoại ngữ khác', null, b'1'),
    (20, 'Tiếng Đức', null, b'1'),
    (21, 'Cẩm nang làm cha mẹ', null, b'1'),
    (22, 'Phát triển kỹ năng - Trí tuệ cho trẻ', null, b'1'),
    (23, 'Phương pháp giáo dục các nước', null, b'1'),
    (24, 'Dinh dưỡng - Sức khỏe cho trẻ', null, b'1'),
    (25, 'Giáo dục trẻ tuổi teen', null, b'1'),
    (26, 'Dành cho mẹ bầu', null, b'1'),
    (27, 'Kỹ năng sống', null, b'1'),
    (28, 'Tâm lý', null, b'1'),
    (29, 'Sách cho tuổi mới', null, b'1'),
    (30, 'Chicken Soup - Hạt Giống Tâm Hồn', null, b'1'),
    (31, 'Rèn Luyện Nhân Cách', null, b'1'),
    (32, 'Quản Trị - Lãnh Đạo', null, b'1'),
    (33, 'Nhân Vật - Bài Học Kinh Doanh', null, b'1'),
    (34, 'Marketing - Bán Hàng', null, b'1'),
    (35, 'Khởi Nghiệp - Làm Giàu', null, b'1'),
    (36, 'Phân Tích Kinh Tế', null, b'1'),
    (37, 'Chứng Khoán - Bất Động Sản - Đầu Tư', null, b'1'),
    (38, 'Tài Chính - Ngân Hàng', null, b'1'),
    (39, 'Nhân Sự - Việc Làm', null, b'1'),
    (40, 'Kế Toán - Kiểm Toán - Thuế', null, b'1'),
    (41, 'Tiểu Thuyết', null, b'1'),
    (42, 'Truyện Ngắn - Tản Văn', null, b'1'),
    (43, 'Light Novel', null, b'1'),
    (44, 'Truyện Trinh Thám - Kiếm Hiệp', null, b'1'),
    (45, 'Huyền Bí - Giả Tưởng - Kinh Dị', null, b'1'),
    (46, 'Tác Phẩm Kinh Điển', null, b'1'),
    (47, 'Ngôn Tình', null, b'1'),
    (48, 'Phóng Sự - Ký Sự - Phê Bình Văn Học', null, b'1'),
    (49, 'Thơ Ca, Tục Ngữ, Ca Dao, Thành Ngữ', null, b'1'),
    (50, 'Du Ký', null, b'1'),
    (51, 'Tác Giả - Tác Phẩm', null, b'1'),
    (52, '12 Cung Hoàng Đạo', null, b'1'),
    (53, 'Sách Tô Màu Dành Cho Người Lớn', null, b'1'),
    (54, 'Tuổi Teen', null, b'1'),
    (55, 'Hài Hước - Truyện Cười', null, b'1'),
    (56, 'Sách Ảnh', null, b'1'),
    (57, 'Combo Văn Học', null, b'1'),
    (58, 'Truyện Tranh', null, b'1'),
    (59, 'Thể Loại Khác', null, b'1'),
    (60, 'Truyện Thiếu Nhi', null, b'1'),
    (61, 'Kiến Thức - Kỹ Năng Sống Cho Trẻ', null, b'1'),
    (62, 'Kiến Thức Bách Khoa', null, b'1'),
    (63, 'Tô Màu, Luyện Chữ', null, b'1'),
    (64, 'Từ Điển Thiếu Nhi', null, b'1'),
    (65, 'Flashcard - Thẻ Học Thông Minh', null, b'1'),
    (66, 'Sách Nói', null, b'1'),
    (67, 'Câu Chuyện Cuộc Đời', null, b'1'),
    (68, 'Lịch Sử', null, b'1'),
    (69, 'Nghệ Thuật - Giải Trí', null, b'1'),
    (70, 'Chính Trị', null, b'1'),
    (71, 'Thể Thao', null, b'1');




INSERT INTO `publisher` (`Id`, `Name`, `Status`)
VALUES (1, 'Nhà xuất bản Kim Đồng', b'1'), 
	(2, 'Nhà Xuất Bản Đại Học Quốc Gia Hà Nội', b'1'),
	(3, 'Nhà Xuất Bản Giáo Dục Việt Nam', b'1'),
	(4, 'Nhà Xuất Bản Thông Tấn', b'1'),
	(5, 'Nhà Xuất Bản Thanh Niên', b'1'),
	(6, 'Nhà Xuất Bản Dân Trí', b'1'),
	(7, 'Báo Sinh Viên Việt Nam - Hoa Học Trò', b'1'),
	(8, 'Nhà Xuất Bản Lao Động', b'1'),
	(9, 'Nhà Xuất Bản Thế Giới',b'1'),
	(10, 'Nhà Xuất Bản Tài Chính',b'1'),
	(11, 'Nhà Xuất Bản Văn Học',b'1'),
	(12, 'Nhà Xuất Bản Tổng Hợp TPHCM',b'1'),
	(13, 'Nhà Xuất Bản Hồng Đức',b'1'),
	(14, 'Nhà Xuất Bản Đà Nẵng',b'1'),
	(15, 'Nhà Xuất Bản Khoa Học Xã Hội',b'1'),
	(16, 'Nhà Xuất Bản Đại Học Quốc Gia Tp.HCM',b'1'),
	(17, 'Nhà Xuất Bản Đại Học Sư Phạm',b'1'),
	(18, 'Nhà Xuất Bản Phụ Nữ Việt Nam',b'1'),
	(19, 'Nhà Xuất Bản Thanh Hóa',b'1'),
	(20, 'Nhà Xuất Bản Công thương',b'1');

INSERT INTO `size` (`Id`, `Name`, `Status`) 
VALUES (1, '11 x17', b'1'), 
		(2, '13 x 18', b'1'),
		(3, '13 x 19', b'1'),
		(4, '15 x 20', b'1'),
		(5, '16 x 24', b'1'),
		(6, '14 x 20', b'1'),
		(7, '20.5 x 15 x 1.3', b'1'),
		(8, '21 x 14.5 x 1.7', b'1'),
		(9, '20.5 x 15 x 1.8', b'1'),
		(10, '14 x 21.5', b'1'),
		(11, '20 x 14.5 x 1', b'1'),
		(12, '14.5 x 20.5 x 1.4', b'1'),
		(13, '24 x 16 x 2.1', b'1'),
		(14, '20.5 x 13 x 1.7', b'1'),
		(15, '24 x 17 x 0.7', b'1'),
		(16, '22 x 16 x 1.3', b'1'),
		(17, '24 x 17 x 2.5', b'1'),
		(18, '28.5 x 21 x 0.9', b'1'),
		(19, '25 x 18', b'1'),
		(20, '17.8 x 10 x 5.7', b'1'),
		(21, '18.5 x 15 x 0.8', b'1'),
		(22, '23.5 x 21', b'1');		



INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`,`Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`) 
VALUES (1, '1', 'WT3GYIZ5BT12', 'Thiên Sứ Nhà Bên - Tập 1','Saekisan, Hanekoto', 'Hàng xóm kế bên căn hộ của Fujimiya Amane chính là nữ sinh xinh đẹp nhất trường cậu, Shiina Mahiru.\r\n\r\nHọ vốn chẳng có mối liên hệ nào cho đến một ngày mưa tầm tã, Amane tình nguyện đưa chiếc ô của mình cho cô bạn hàng xóm xinh đẹp tựa thiên thần, cả hai đã bắt đầu tương tác với nhau theo một cách kì quặc.\r\n\r\nChẳng thể chịu được lối sinh hoạt cẩu thả khi sống một mình của Amane, Mahiru đã quyết định sẽ chăm sóc cậu từ những điều nhỏ nhất.\r\n\r\nMột Mahiru thiếu thốn sự gắn kết với gia đình đang dần mở lòng hơn, cùng một Amane hay tự ti đang ngày một đổi thay theo chiều hướng tích cực. Khoảng cách giữa hai con người không chút thành thật ấy đang từng bước thu hẹp lạ\r\n\r\nĐây là câu chuyện tình ngọt ngào với cô gái nhà bên tuy lạnh lùng nhưng thật đáng yêu đã được ủng hộ nhiệt tình trên trang Shousetsuka ni Narou.',
'43', '328', '13 x 18 ', '40', '78', '2024-05-20 12:20:43.000000', '1', '1', b'1'), 
	(2, '1', 'POYT3IZ5BT12', 'Thiên Sứ Nhà Bên – Tập 2','Saekisan, Hanekoto', 'Amane là một nam sinh khá cẩu thả, còn Mahiru là nữ sinh xinh xắn nhất trường với biệt danh\r\n“thiên sứ”. Cả hai vốn chẳng có mối liên hệ nào với nhau, thế nhưng sau một dịp tình cờ, họ đã\r\nbắt đầu qua lại và ăn cơm chung một nhà.\r\nCùng nhau đón năm mới, đi chùa đầu năm, tránh khỏi những rắc rối của ngày V Nhờ\r\nnhững hành động tuy vụng về nhưng ấm áp của Amane, sự gặp gỡ với bố mẹ và bạn bè của\r\nAmane, trái tim băng giá của Mahiru dần tan chả\r\nĐây là câu chuyện tình ngọt ngào với cô gái nhà bên tuy lạnh lùng nhưng thật đáng yêu đã được\r\nủng hộ nhiệt tình trên trang Shousetsuka ni Narou.',
'43', '332', '2', '40', '80', '2024-02-20 12:20:43.000000', '1', '1', b'1'),
(3, '1', 'PLJR6VZ5BT12', 'Thiên Sứ Nhà Bên – Tập 3', 'Saekisan, Hanekoto', '“Mọi người đều thân thiết với Amane, chỉ có tôi như bị cho ra rìa vậy đó.”\r\n\r\nMahiru và Amane đã lên lớp 11, họ trở thành bạn cùng lớp với nhau! Trái với Mahiru luôn cố gắng thu hẹp khoảng cách kể cả khi ở trường, Amane vẫn giữ ý với “thiên sứ” và không tiến thêm một bước nào.\r\n\r\nNhờ có Chitose mà Mahiru dần xóa bỏ bức tường ngăn cách với các bạn cùng lớp, trong khi Amane lại nhớ đến vết thương cũ vừa lành trong\r\n\r\nĐây là câu chuyện tình ngọt ngào với cô gái nhà bên tuy lạnh lùng nhưng thật đáng yêu đã được ủng hộ nhiệt tình trên trang Shousetsuka ni Narou.',
'43', '324', '3', '25', '73', '2022-09-30 00:00:00.0000000', '1', '1', b'1'),
(4, '1', 'PL76AAN27T12', 'Thiên Sứ Nhà Bên – Tập 4', 'Saekisan, Hanekoto', '“Đối với tôi cậu ấy là người quan trọng nhất.”\r\n\r\nTrong khi cả lớp náo loạn vì phát ngôn gây sốc ấy của Mahiru thì Amane - người không thể đoán định được suy nghĩ của cô - đã quyết tâm trở thành chàng trai xứng đáng ở bên cạnh cô ấy.\r\n\r\nĐể theo kịp Mahiru, cô gái xinh đẹp, thông minh, hoàn hảo và luôn dành sự tin tưởng cho cậu, Amane đang rất phấn đấu trong cả chuyện học hành lẫn rèn luyện thể thao. Chẳng rõ Mahiru có hiểu cho tâm ý của Amane hay không, nhưng chính Mahiru cũng đang cố gắng tiến thêm một bước để xoay chuyển trạng thái mơ hồ trong mối quan hệ của hai người.\r\n\r\nĐây là câu chuyện tình ngọt ngào với cô gái nhà bên tuy lạnh lùng nhưng thật đáng yêu đã được ủng hộ nhiệt tình trên trang Shousetsuka ni Narou.', 
'43', '324', '3', '25', '73', '2022-09-30 00:00:00.0000000', '1', '1', b'1'),
(5, '1', 'PL76YG25BT12', 'Thiên Sứ Nhà Bên – Tập 5', 'Saekisan, Hanekoto', 'Fujimiya Amane - học sinh cấp ba sống tự lập với lối sinh hoạt cẩu thả, và Shiina Mahiru – hoa khôi của trường với biệt danh “thiên sứ”, dù học cùng trường, đồng thời là hàng xóm cạnh nhà nhau, nhưng giữa họ lại chẳng hề có sự kết nối nào. Cho đến một ngày, cuộc gặp gỡ tình cờ của số phận đã thay đổi cuộc sống của họ mãi mãi. Để ngày hôm nay, Mahiru và Amane được ăn cơm chung một nhà.\r\n\r\nĐây là tập truyện ngắn khắc họa những khoảnh khắc ngọt ngào trong chuyện tình của chàng trai nhà bên với nàng thiên sứ tuy lạnh lùng nhưng thật đáng yêu, về quá khứ và hiện tại của hai con người đã âm thầm thu hút lẫn nhau ấy.\r\n\r\nĐó là một chuyện tình êm đềm và chậm rãi…',
'43', '308', '3', '40', '72', '2023-01-01 00:00:00.0000000', '1', '1', b'1'), 
(6, '1', 'PL76PO92AT12', 'Thiên Sứ Nhà Bên – Tập 6', 'Saekisan, Hanekoto', 'Nhờ có Mahiru luôn ở bên, Amane đã dũng cảm đối diện với những hồi ức đau khổ trong quá khứ. Trong chuyến về thăm nhà bố mẹ Amane, khi cảm nhận được sự chăm sóc, quan tâm và tình cảm ấm áp từ gia đình, Mahiru thấy rất hạnh phúc. Ngắm nhìn cô với nụ cười chan chứa yêu thương, Amane một lần nữa củng cố quyết tâm sẽ luôn ở bên chăm sóc cô.\r\n\r\nVào những ngày cuối mùa hè, cả hai đã cùng mặc yukata đến lễ hội pháo hoa. Dù thật chậm rãi, nhưng cả Amane và Mahiru đều dần biết cách thể hiện cảm xúc của mình một cách thẳng thắn hơn, khiến những kí ức mùa hè của họ càng trở nên sâu sắc.\r\n\r\nĐây là câu chuyện tình ngọt ngào với cô gái nhà bên tuy lạnh lùng nhưng thật đáng yêu đã được ủng hộ nhiệt tình trên trang Shousetsuka ni Narou.',
'43', '336', '3', '30', '75', '2023-06-26 00:00:00.0000000', '1', '1', b'1'), 
(7, '1', 'PL76YG2TYU21', 'Thiên Sứ Nhà Bên – Tập 7', 'Saekisan, Hanekoto', 'Kết thúc kì nghỉ hè, khắp trường bắt đầu nhộn nhịp chuẩn bị cho lễ hội văn hóa. Các bạn cùng lớp dường như đã quen với sự thân mật của cặp đôi Amane và Mahiru, mỗi ngày họ đều dõi theo cả hai bằng ánh mắt thích thú.\r\n\r\nTrong lễ hội văn hóa, lớp Amane quyết định mở quán giải khát quản gia - hầu gái. Thấy các bạn cùng lớp đều phấn khích khi nhìn “thiên sứ” trong bộ trang phục hầu gái, Amane không khỏi khó chịu khi nghĩ đến việc Mahiru sẽ bị nhiều ánh mắt dòm ngó. Mặt khác, Mahiru cũng cảm thấy lo lắng khi Amane dần cởi mở với mọi người xung quanh và ngày càng được các cô gái chú ý tớ\r\n\r\nĐây là câu chuyện tình ngọt ngào với cô gái nhà bên tuy lạnh lùng nhưng thật đáng yêu đã được ủng hộ nhiệt tình trên trang Shousetsuka ni Narou.',
'43', '312', '1', '40', '95', '2023-10-26 00:00:00.0000000', '1', '1', b'1'),
(8, '1', 'KHY67G2TYU21', 'Thiên Sứ Nhà Bên – Tập 8',' Saekisan, Hanekoto', '“Hôm nay… mình không về… có được không…?”

Lễ hội trường nhộn nhịp đã trôi qua, mọi người lại quay về với cuộc sống thường nhật. Amane một lần nữa truyền đạt cảm xúc của cậu đến Mahiru bằng lời nói, đồng thời hứa hẹn về một tương lai bên nhau. Vì muốn tặng Mahiru một món quà bảo chứng cho lời hứa đó, Amane quyết định đi làm thêm. Mặt khác, Mahiru trong lúc cô đơn chờ đợi Amane đi làm về, đã bí mật làm một thứ để bày tỏ tình cảm của mình với cậu…

Đây là câu chuyện tình ngọt ngào với cô gái nhà bên tuy lạnh lùng nhưng thật đáng yêu đã được ủng hộ nhiệt tình trên trang Shousetsuka ni Narou.',
'43', '348', '1', '40', '81', '2024-05-17 00:00:00', '1', '1', b'1');

/* Insert Image */
INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '1', 'ThienSuNhabenTap1_1.jpg', b'1'), (NULL, '1', 'ThienSuNhabenTap1_2.jpg', b'1'), (NULL, '1', 'ThienSuNhabenTap1_3.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '2', 'ThienSuNhabenTap2_1.jpg', b'1'), (NULL, '2', 'ThienSuNhabenTap2_2.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '3', 'ThienSuNhabenTap3_1.jpg', b'1'), (NULL, '3', 'ThienSuNhabenTap3_2.jpg', b'1'), (NULL, '3', 'ThienSuNhabenTap3_2.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '4', 'ThienSuNhabenTap4_1.jpg', b'1'), (NULL, '4', 'ThienSuNhabenTap4_2.jpg', b'1'), (NULL, '4', 'ThienSuNhabenTap4_3.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '5', 'ThienSuNhabenTap5_1.jpg', b'1'), (NULL, '5', 'ThienSuNhabenTap5_2.jpg', b'1'), (NULL, '5', 'ThienSuNhabenTap5_3.jpg', b'1'), (NULL, '5', 'ThienSuNhabenTap5_4.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '6', 'ThienSuNhabenTap6_1.jpg', b'1'), (NULL, '6', 'ThienSuNhabenTap6_2.jpg', b'1'), (NULL, '6', 'ThienSuNhabenTap6_3.jpg', b'1'), (NULL, '6', 'ThienSuNhabenTap6_4.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '7', 'ThienSuNhabenTap7_1.jpg', b'1'), (NULL, '7', 'ThienSuNhabenTap7_2.jpg', b'1'), (NULL, '7', 'ThienSuNhabenTap7_3.jpg', b'1'), (NULL, '7', 'ThienSuNhabenTap7_4.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '8', 'ThienSuNhabenTap8_1.jpg', b'1'), (NULL, '8', 'ThienSuNhabenTap8_2.jpg', b'1'), (NULL, '8', 'ThienSuNhabenTap8_3.jpg', b'1'), (NULL, '8', 'ThienSuNhabenTap8_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (9, '2', 'WT3WPGZ9BT55', 'Vợ Trong Game Của Tôi Là Idol Nổi Tiếng Ngoài Đời (Tập 1)', 'Tsukasa', '\"Vợ Trong Game Của Tôi Là Idol Nổi Tiếng Ngoài Đời (Tập 1)\r\n\r\n“Chúng ta không phải người yêu, chúng ta là vợ chồng mà.”\r\n\r\n“Hả?”\r\n\r\nNữ idol nổi tiếng lại là vợ trong game của tôi ư!!!\r\n\r\nTôi là Ayanokouji Kazuto, một nam sinh cấp ba vô cùng bình thường đã có vợ, nhưng là vợ trong game thôi. Hôm nay, khi đang chơi game với “vợ”, tôi tình cờ biết được cô ấy chính là Mizuki Rinka, idol mà tôi hâm mộ, cũng là bạn cùng lớp của tôi.\r\n\r\nTuy nhiên, trước giờ cô bạn này luôn bị đồn là “ghét con trai”, thế mà…\r\n\r\n“Từ giờ bọn mình có thể ở bên nhau cả ngoài đời thực rồi.”\r\n\r\n“Chúng ta là bạn trong game và đã kết hôn ở đó rồi, vậy nên hiện tại chúng ta là vợ chồng.”\r\n\r\n“Gì cơ?” Cô ấy muốn làm vợ tôi ở ngoài đời thực luôn sao!?\r\n\r\nCâu chuyện tình thanh xuân hài hước của tôi và “người vợ” idol lạnh lùng nhưng đầy cuồng nhiệt khi yêu sẽ diễn biến thế nào đây…\"',
'43', '324', '2', '40', '91', '2022-12-12 00:00:00.0000000', '6', '1', b'1'), 
(10, '2', 'WT3WPGZ5BT12', 'Vợ Trong Game Của Tôi Là Idol Nổi Tiếng Ngoài Đời (Tập 2)', 'Tsukasa', 'Để đáp lại tình cảm toàn tâm toàn ý của Mizuki Rinka, tôi, Ayanokouji Kazuto, đã trở thành người yêu của cô ấy. Tuy nhiên, là một idol nổi tiếng, cô ấy vô cùng bận rộn. Khi những ngày mà chúng tôi chỉ có thể gặp nhau trên mạng tiếp tục kéo dài, Rinka đột nhiên đến ngủ lại nhà tôi!?\r\n\r\nSau đó, những hành động và suy nghĩ như một người vợ của Rinka vẫn không dừng lại.\r\n\r\n“Kazuto, hay cậu đến nhà tớ ở đi! Để cậu sống thế này tớ thấy không yên tâm.”\r\n\r\nVì lý do nào đó, tôi sẽ sống ở nhà Rinka trong suốt kỳ nghỉ hè!?\r\n\r\nHơn nữa, Rinka còn đang cố chiều chuộng tôi bằng mọi cách…\r\n\r\nTập thứ hai được mong chờ của câu chuyện tình thanh xuân hài hước sẽ khiến bạn bất ngờ và thích thú!\"',
'43', '316', '2', '30', '92', '2023-03-01 00:00:00.0000000', '6', '1', b'1'), 
(11, '2', 'WT3WPHG1BT31', 'Vợ Trong Game Của Tôi Là Idol Nổi Tiếng Ngoài Đời (Tập 3)', 'Tsukasa', '\"Tôi, Ayanokouji Kazuto khi đang trải qua kỳ nghỉ hè ở nhà của Mizuki Rinka thì nhận được tin nhắn của bố yêu cầu tôi hãy về nhà một chuyến. Nhưng lúc tôi về thì không thấy bố ở nhà, thay vào đó là một cô bé trùm chăn kín người dù đang là mùa hè.\r\n\r\nSau khi hỏi chuyện, tôi kinh ngạc phát hiện cô bé đó lại chính là em gái mình!?\r\n\r\nRồi tôi quyết định sẽ giới thiệu em ấy với Rinka và nhận được tin sốc…\r\n\r\n“Đây là Komori Risuzu, cũng là thành viên của Star☆Mines giống tớ đó.”\r\n\r\nTuy vậy nhưng Risuzu lại xảy ra mâu thuẫn với Rinka vì không thể chấp nhận được quan điểm “Kết hôn trong game cũng đồng nghĩa là vợ chồng ngoài đời thực” của cô ấy.\r\n\r\n“Dù sao đó cũng chỉ là trò chơi thôi.”\r\n\r\n“Chị không cho phép em phủ nhận thế giới game của bọn chị!”\r\n\r\nLiệu cuối cùng cô em gái này có thể công nhận mối quan hệ vợ chồng (giả) này của chúng tôi không đây…?\"',
'43', '360', '2', '42', '125', '2023-09-20 00:00:00.0000000', '6', '1', b'1');

/* Insert Image */
INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '9', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap1_1.jpg', b'1'), (NULL, '9', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap1_2.jpg',b'1'), (NULL, '9', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap1_3.jpg', b'1'), (NULL, '9', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap1_4.jpg', b'1'), (NULL, '9', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap1_5.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '10', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap2_1.jpg', b'1'), (NULL, '10', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap2_2.jpg', b'1'), (NULL, '10', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap2_3.jpg', b'1'), (NULL, '10', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap2_4.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '11', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap3_1.jpg', b'1'), (NULL, '11', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap3_2.jpg', b'1'), (NULL, '11', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap3_3.jpg', b'1'), (NULL, '11', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap3_4.jpg', b'1'), (NULL, '11', 'VoTrongGameCuaToiLaIDolNoiTiengNgoaiDoiTap3_5.jpg', b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (12, '3', 'WKI7H2Z9BT55', 'Chúa Tể Bóng Tối - Tập 1', 'Daisuke Aizawa, Touzai', 'Chúa Tể Bóng Tối - Tập 1

Bộ truyện với nhân vật chính siêu mạnh được chuyển sinh sang thế giới khác, chứa đầy hiểu nhầm hài hước đã chính thức ra mắt!!

“Tên ta là Shadow. Ta ẩn mình trong bóng tối để săn lùng bóng tối…”

Không phải nhân vật chính, cũng chẳng phải trùm cuối. Ấy là những Chúa tể Bóng tối, bình thường thì che giấu thực lực, giả làm người thường, nhưng trong bóng tối lại thể hiện sức mạnh thực sự của mình để bí mật can thiệp vào câu chuyện. Cậu thiếu niên ngưỡng mộ Chúa tể Bóng tối của chúng ta ngày ngày rèn luyện trau dồi sức mạnh, đồng thời vẫn đóng vai một nhân vật quần chúng mờ nhạt trước mặt người đời, cho đến khi gặp tai nạn và được chuyển sinh sang một thế giới khác.

Vui sướng trước tình cảnh này, cậu thiếu niên, giờ mang tên Cid, đã quyết định “tưởng tượng” ra một “Giáo phái bóng tối” để (giả vờ) bí mật lật đổ, thoả mãn mong muốn đóng vai Chúa tể Bóng tối ở thế giới mới. Thế nhưng không ngờ “Giáo phái bóng tối” ấy lại có thật…?

Do không ít hiểu lầm mà những cô gái trở thành thuộc hạ của Cid đều sùng bái cậu, và chính bản thân Cid cũng không biết cậu đã trở thành một Chúa tể Bóng tối thực sự, tổ chức bóng đêm Shadow Garden do cậu đứng đầu đang dần tiêu diệt màn đêm che phủ thế giới…

* CHÚA TỂ BÓNG TỐI là series light-novel ăn khách tại Nhật Bản, đã được chuyển thể thành manga, anime, chibi manga và cả game mobile với hơn 4 triệu bản sách đã bán ra! Phiên bản manga chuyển thể đã được mua bản quyền và sẽ phát hành trong thời gian tới!',
'43', '422', '3', '40', '96', '2023-12-12 00:00:00.0000000', '1', '1', b'1'), 

(13, '3', 'WKI7HKT76K15', 'Chúa Tể Bóng Tối - Tập 2', 'Daisuke Aizawa, Touzai', 'Theo lời mời của Alpha, Cid quyết định ghé thăm Thánh địa Lindwurm.

Tại đó, trong khi tham gia Thử thách của Nữ thần, “Phù Thủy Tai Ương” Aurora bỗng xuất hiện trước mắt cậu. Đây chính là người từng đưa cả thế giới vào hỗn loạn và diệt vong năm xưa…

Và đáp lại sức mạnh của Cid và Aurora, cánh cổng dẫn đến Thánh vực liền bật mở.

Sự thật ẩn giấu sau căn bệnh Quỷ ám, mục tiêu của Giáo phái Diablos, cùng quá khứ về anh hùng Olivier sắp được phơi bày ra ánh sáng…

Đằng sau vòng xoáy của những mưu mô thủ đoạn ấy, cậu chàng Cid vô tư vẫn chẳng hay biết gì, đêm nay lại tiếp tục bừng bừng khí thế tiến lên trên con đường trở thành Chúa tể Bóng tối của mình!!!

* CHÚA TỂ BÓNG TỐI là series light-novel ăn khách tại Nhật Bản, đã được chuyển thể thành manga, anime, manga ngoại truyện và cả game mobile với hơn 4 triệu bản sách đã bán ra! ',
'43', '422', '3', '40', '98', '2023-12-15 00:00:00', '1', '1', b'1'), 

(14, '3', 'WKIK890KYK15', 'Chúa Tể Bóng Tối - Tập 3', 'Daisuke Aizawa, Touzai', 'Chúa Tể Bóng Tối - Tập 3

Bị chị gái Claire kéo theo, Cid đã tới thăm Vô Luật Thành.

Ngay lúc cậu quyết định tham gia tiêu diệt Huyết Nữ Vương – Ma cà rồng Thuỷ tổ đang yên giấc tại nơi này, một cô gái xinh đẹp đầy bí ẩn tự xưng là “thợ săn ma cà rồng” Mary xuất hiện trước mặt cậu. “Mau trốn đi. Cơn bạo loạn sắp bắt đầu rồi…”

Hai kẻ đứng đầu còn lại của Vô Luật Thành là “Yêu Hồ” Yukime và “Bạo Chúa” Juggernaut cũng lần lượt ra mặt. Kể cả Shadow Garden đang âm thầm tìm kiếm thông tin về căn bệnh Quỷ ám cũng bị kéo vào cuộc.

Giữa chiến trường rối ren, thời khắc thức tỉnh của Ma cà rồng Thuỷ tổ sắp tới gần…!

Chưa kể sau đó là âm mưu phát hành tiền giả và nhân vật John Smith đầy bí ẩn nữa chứ!

* CHÚA TỂ BÓNG TỐI là series light-novel ăn khách tại Nhật Bản, đã được chuyển thể thành manga, anime, manga ngoại truyện và cả game mobile với hơn 4 triệu bản sách đã bán ra!',
'43', '466', '3', '40', '90', '2023-12-30 00:00:00', '1', '1', b'1');




INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '12', 'ChuaTeBongToiTap1_1.jpg', b'1'), (NULL, '12', 'ChuaTeBongToiTap1_2.jpg',b'1'), (NULL, '12', 'ChuaTeBongToiTap1_3.jpg',b'1'), (NULL, '12', 'ChuaTeBongToiTap1_4.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '13', 'ChuaTeBongToiTap2_1.jpg', b'1'), (NULL, '13', 'ChuaTeBongToiTap2_2.jpg',b'1'), (NULL, '13', 'ChuaTeBongToiTap2_3.jpg',b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '14', 'ChuaTeBongToiTap3_1.jpg', b'1'), (NULL, '14', 'ChuaTeBongToiTap3_2.jpg',b'1'), (NULL, '14', 'ChuaTeBongToiTap3_3.jpg',b'1'), (NULL, '14', 'ChuaTeBongToiTap3_4.jpg', b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (15, '4', 'WKHT12Z9KY65', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 1', 'B R O Group', 'LỚP HỌC MẬT NGỮ

PHIÊN BẢN NHỎ MÀ CÓ VÕ!

Chào năm mới, Lớp Học Mật Ngữ sẽ trình làng một phiên bản siêu xịn sò: Nhẹ ví hơn, phát hành đều đặn hơn và gay cấn hơn, cùng khám phá nhé!

Thì ra mùa Xuân hoa nở là vì Lớp Học Mật Ngữ MỚI

Nếu trước đây cứ phải “cồn cào” đợi Lớp Học Mật Ngữ phát hành 2-3 tháng một lần, thì từ sau Tết Quý Mão, bạn sẽ được gặp bộ truyện tranh best seller này HẰNG THÁNG.

Phải rồi, bạn không đọc nhầm đâu! Cứ mỗi giữa tháng chúng ta sẽ có cuộc hẹn với các cung hoàng đạo nhé! Số này là ngày 15/2, thì đến 15/3 chúng ta lại tay bắt mặt mừng nè.

Phiên bản này cũng rất đáng yêu vì giá bìa nhẹ xiều chỉ 25 “con cá”, quá đã!

Ú òa! Trở thành chiến thần “tay hòm chìa khóa”

Mời bạn đến với truyện tranh mới Hiệp hội viêm màng túi.

Đang buồn vì bị bố mẹ cắt giảm tiền tiêu vặt, ấy vậy mà Song Tử nam còn vào lớp thông báo rằng “Ngân Hà luxury rồi”, giờ cái gì cũng lên giá, cũng đắt hết trơ Biết bao giờ mới đủ tiền mua truyện, đồ chơi đây? Trong khi cả lớp “lan toả năng lượng” u ám thì Kim Ngưu nam vẫn bình thản ăn đùi gà chiên nước mắm. Các bạn đánh giá món này bây giờ rất đắt! Sao Kim Ngưu có tiền mua ăn sáng? Thế là mọi người nhờ vả Kim Ngưu chia sẻ bí quyết giàu sang, giúp các bạn vượt qua cuộc “khủng hoảng kinh tế” nà',
'60', '100', '4', '40', '22', '2023-12-12 00:00:00.0000000', '7', '1', b'1'), 

(16, '4', 'WKHKYR408165', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 2', 'B R O Group', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 2

HHT - Khi cạ cứng tự nhiên quay ra giận đùng đùng. Là có thân dữ chưa? Nếu bạn đã hoặc đang rơi vào tình huống bực bội với bạn mình, Lớp Học Mật Ngữ phiên bản mới Tập 2 chính là cẩm nang để xóa tan hiểu lầm và nạp thêm năng lượng cho chuyến xe tình bạn lại lao đi vun vút.

Hẹn gặp nhau ở “Bùng binh giận dỗi”

Ngân Hà đang xôn xao bộ phim hoạt hình Bác sĩ lạ lắm, ban ngày chữa bệnh cứu người, ban đêm tiêu diệt tội phạm. Nội dung gay cấn, hấp dẫn, chữa lành tâm hồn. Bạch Dương coi phim xong thích quá, đập heo đất mua đồ để cosplay Bác sĩ lạ. Còn Kim Ngưu thì lại muốn cả hai cosplay chị em Nữ hoàng băng giá.

Đứng ở “Bùng binh giận dỗi”, giữa hai cô bạn Bạch Dương và Kim Ngưu với hai sở thích khách nhau, các bạn lớp Hoàng Cung đã lao vào giải quyết, nhưng càng giải quyết càng… banh. Cuối cùng mọi chuyện sẽ đi tới đâu, làm cách nào để Kim Ngưu và Bạch Dương bắt tay nhau trở lại? Cùng đón xem nha!

Chú ý tránh “Ổ gà tình bạn”

Ở ngoại truyện này, chuyến xe tình bạn sẽ băng qua những “ổ gà, ổ voi”, chính là những ưu điểm vốn có, nhưng nếu thiếu kiểm soát thì sẽ từ từ chuyển biến thành những tính cách “ố dề” của 12 cung hoàng đạo. Hãy nhìn kỹ “ổ gà, ổ voi” để tình bạn không bị tai nạn nhé!',
'60', '100', '4', '40', '22', '2023-12-12 00:00:00.0000000', '7', '1', b'1'), 


(17, '4', 'W13KN9K18165', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 3', 'B R O Group', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 3

ĐỘC LẠ KẸO NÓI DỐI PINOCCHIO

Tháng Tư là lời nói dối của… lớp Hoàng đạo. Bạn sẽ được một phen cười bò càng với những biến hóa khôn lường từ viên kẹo nhỏ xíu trong tập truyện này.

Mời bạn ăn thử “Kẹo Pinocchio”

Bà tạp hóa nhiệm màu lại xuất hiện, chào hàng mới, thậm chí còn tặng miễn phí cho khách “V.I.P” là các bạn trong lớp Hoàng đạo dùng thử. Đây là kẹo mang tên Pinocchio, ăn vào mà nói dối thì mũi sẽ mọc dài ra.

Anh em Song Tử vội vàng “cháp” liền tay. Lớp vỏ bên ngoài là đường trái cây, bên trong nhân mềm dai, chua chua, ngọt ngọt… Nhóp nhép! Nhóp nhép! Nói có một câu mà mũi Song Tử em đã dài ra như một bó đũa. Còn Bạch Dương thì mũi mọc ra bàn tay tự tát vào mặt. Ú òa! Sư Tử mũi mọc bàn tay ra dấu like. Mũi Kim Ngưu thì mọc thành cái khiên chiến binh. Còn mũi Nhân Mã mọc thành cái đu Mỗi hình tượng lại mang một ý nghĩa riêng của cung hoàng đạo đó.

Đang vui như bắp nổ vì phát hiện các kiểu mũi lạ lùng, đùng một cái, chuyện ăn kẹo nói dối này lại khiến tình bạn giữa Ma Kết và Bảo Bình có nguy cơ rạn nứt. Chuyện gì đã xảy ra? Đón xem nha!',
'60', '100', '4', '40', '22', '2023-12-12 00:00:00.0000000', '7', '1', b'1'), 

(18, '4', 'W13900KNQ165', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 4', 'B R O Group', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 4

Cùng trở lại trường học đầy háo hức với Lớp Học Mật Ngữ phiên bản mới - Tập 4 thôi các bạn ơiiiiii!!!

Học tạo cảm hứng với “Bỗng dưng hết hứng”

Các cung hoàng đạo nhà Lớp Học Mật Ngữ đã sẵn sàng trở lại trường lớp cùng tween m.ình rồi đây. Nếu đang cạn ý tưởng hoặc muốn học cách để lấy cảm hứng thì chắc chắn tập truyện “Bỗng dưng hết hứng” này sẽ cực kỳ “bánh cuốn” đó nha!

Trong tập này, Ma Kết nam và Song Ngư nữ là hai nhân vật chính. Một người lãng mạng, “sống trên mây” Song Ngư với một người được cho là “công thức”, không biết bộc lộ cảm xúc Ma Kết. Hai nhân vật tưởng chừng như trái dấu lại là cặp đôi thân thiết trong lớp Hoàng Cung. Vì muốn giúp Song Ngư tìm lại cảm hứng sáng tạo, Ma Kết đã thử đủ thứ cách. Nhưng cuối cùng, cách nào mới là hay nhất để khơi nguồn sáng tạo đây?',
'60', '100', '4', '40', '22', '2023-12-12 00:00:00.0000000', '7', '1', b'1'), 

(19, '4', 'W13LJH890U15', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 5', 'B R O Group', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 5

Mới ngày nào khai giảng, tháng 10 đã đến với lịch kiểm tra giữa học kỳ, rồi thi học kỳ I cũng sẽ ìn ìn nối đuôi theo. Đừng vội bị xịt keo cảm hứng, Lớp Học Mật Ngữ phiên bản mới Tập 5 sẽ tặng bạn bí kíp để hệ vi xử lý não bộ chạy siêu mượt.

Lười học có phải là căn bệnh lây lan?

Bạn có bao giờ bị buộc phải nghỉ chơi với một người vì sợ bạn ấ lây bệnh lười học cho m.ình không? “Kiếp nạn” này đã xảy ra với Nhân Mã: Bị cấm đi chơi với Thiên Bình.

Mẹ của Thiên Bình ra tối hậu thư: Không cho Thiên Bình chơi với Nhân Mã nam nữa, vì sẽ lây bệnh lười học và ham chơi của Nhân Mã. Nhân Mã đau buồn lăn lộn, rồi quyết tâm học hành tiến bộ để được đi chơi với Thiên Bình. Nhưng đâu có dễ.

Thế là cả lớp Hoàng Đạo cùng vắt óc nghĩ cách giúp Nhân Mã. Thiên Bình chỉ ra, vấn đề của Nhân Mã là “học xong quên liền” chứ không phải do cậu ấy lười học. Song Tử thì nhanh nhảu giới thiệu về… một điều kỳ diệu mang tên “hồi hải mã”. Và “trùm cuối” về trí nhớ của lớp là Ma Kết đã ra tay giúp Nhân Mã hiểu cách hoạt động của hồi hải mã, từ đó có phương pháp học hành lưu sâu, nhớ đậm vào đầu.

Đi tìm vùng hồi hải mã

Không quá khó kiếm như “vùng biển All Blue” trong truyền thuyết của bộ phim One Piece, vùng hồi hải mã nằm ngay trong não bộ của chúng ta, có tác dụng cải thiện khả năng ghi nhớ. Đó là nơi trí nhớ ngắn hạn được hô biến thành trí nhớ dài hạn. Để biết cách hồi hải mã phân loại và ghi nhớ như thế nào để lên trình cho trí nhớ, hãy đón xem tập này ngay thôi nào!',
'60', '100', '4', '40', '22', '2023-12-12 00:00:00.0000000', '7', '1', b'1'), 

(20, '4', 'W13DFV678AB2', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 6', 'B R O Group', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 6

Mùa lễ hội đã tưng bừng khắp nơi. Màu lấp lánh của Noel, của năm mới, đã tới sát sàn sạt rồi. Nhưng càng cuối năm nước rút, càng dễ bị pressing (áp lực) bởi vô vàn thử thách xung quanh. Nào, nhảy vào gỡ nút thắt cùng các bạn trường Ngân Hà nha!

Cănggggggg cực căng cực - Giận quá hóa khờ

Ở tập này, độc giả sẽ được ngồi hàng ghế đầu theo dõi trận đấu bóng vòng loại khu vực Thiên Thạch Vù Vù. Trường Ngân Hà có trận bóng với trường Quả Táo. Bạch Dương những tưởng sẽ lại là ngôi sao như mọi lần, thì lại trở thành “báo thủ” khi bị mắc bẫy đội bạn, bị chọc cho giận tím gan dẫn đến phạm lỗi, bị phạt thẻ đỏ treo giò luôn trận sau.

Bạch Dương - Sư Tử, cặp đôi này không đùa được đâu, vì đùa là bùng nổ thiệt đó. Bạch Dương phừng phừng lửa giận, thêm Sư Tử nhảy vào trách móc, độ sôi tại trường Ngân Hà lúc đó chắc cũng cỡ Hỏa Diệm Sơn.

Đến với giải đấu trong tư cách đương kim vô địch, nhưng bây giờ trường Ngân Hà đang gặp khó khăn bởi bất cứ đội bóng nào khi thiếu vắng ngôi sao trên hàng công là Bạch Dương.

Các cung hoàng đạo đã phải xử lý chuyện này ra sao cho ngon nghẻ đây?',
'60', '100', '4', '40', '22', '2023-12-12 00:00:00.0000000', '7', '1', b'1'), 

(21, '4', 'W13LKNGT561A', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 7', 'B R O Group', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 7

Happy new year, new you and new dream! Bạn đã sẵn sàng cho một năm mới 2024 với ngập tràn những điều mới mẻ thú vị chưa?

Như câu danh ngôn nổi tiếng của họa sĩ Van Gogh “Tôi mơ m.ình vẽ và rồi tôi vẽ giấc mơ” (I dream of painting and then I paint my dream). Hãy mơ lớn và cùng thực hiện giấc mơ của m.ình trong năm mới này nhé! Trước đó, cùng đọc tập 7 (tháng 1/2024) để xem những người bạn ở trường học Ngân Hà đang “mơ” gì nhé!

Mơ ngay lúc này một trái tim “full giáp” để không còn muộn phiền

Top 5 đặc điểm mà Thiên Bình luôn được bầu chọn là ông hoàng giao tiếp, chúa tể thả tim, bậc thầy tương tác mạng xã hội, chuyên gia chế meme… của Lớp Học Mật Ngữ:

1. Luôn là người đứng ra tổ chức tiệc tùng cho lớp, từ sinh nhật bạn bè cho tới giẻ lau bảng mới cũng đều có tiệc mừng, lễ kỷ niệm.

2. Luôn ga lăng, nghĩa hiệp, sẵn sàng ra tay giúp đỡ bạn bè lúc khó khăn.

3. Coi trọng lễ nghĩa, đến nhà ai chơi cũng có quà, dù có thân hay không.

4. Chu đáo, tin cậy.

5. Bla bla…

6. Và bla bla bla…

Vậy mà đùng một cái, Thiên Bình đột nhiên thờ ơ với sự kiện 1 năm sinh nhật cái chổi của lớp, không tương tác gì với page đội bóng của trường vừa chiến thắng, ngưng tài trợ màu vẽ, và hững hờ không giúp đỡ mọi người',
'60', '100', '4', '40', '22', '2023-12-12 00:00:00.0000000', '7', '1', b'1'), 

(22, '4', 'W1ALKY789A12', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 8', 'B R O Group', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 8

“NGOAN XINH IU” CỦA LỚP HỌC MẬT NGỮ ĐÂU? VÀO CHƠI “BO XÌ” NÀO!

Có bao giờ bạn hát “Vậy thôi bo xì bo bo xì bo thôi/ Nghỉ chơi bo xì luôn nghỉ chơi” ngoài đời thật chưa? Các cung hoàng đạo của Lớp Học Mật Ngữ cũng có một ngày “ca” bài Bo xì bo nè!

“Tren đì” bo bo xì

Đầu năm đầu tháng, trong lúc Ma Kết dò bài tập về nhà của các bạn trong lớp thì phát hiện Cự Giải đã mất ngủ cả tối. Cự Giải thổ lộ “Tớ phải suy nghĩ một chuyện cho thật kĩ càng, điều này ảnh hưởng đến niềm vui hạnh phúc của tớ về sau này”.

Trong lúc Ma Kết vẫn lạnh lùng ghi vào sổ “Cự Giải: Không làm bài tập về nhà!” thì những cung hoàng đạo khác vây quanh hỏi han khiến Cự Giải vô cùng cảm động. Nhờ sự quan tâm của bạn bè, Cự Giải thấy tâm trạng tốt hơn lên.

Biết Cự Giải đang “cai nghiện” Sư Tử, một số cung hoàng đạo quyết định trở thành “đồng minh bo bo xì” của Cự Giải. Cả hội muốn đồng lòng bắt tay nhau đoàn kết một lòng: Việc gì khó, phải có đồng đội!

Thử thách lần này khá khó nhằn như: Kim Ngưu sẽ không ăn đùi gà, Bạch Dương nghỉ chơi với Sư Tử, Nhân Mã cạch mặt Thiên Bình, Song Ngư tuyệt giao với Thiên Yết, Bảo Bình không học nhóm với Ma Kết…

Không để vụ này chìm xuồng được!

Dù đã cùng hô hào “Có phúc cùng hưởng, có họa cùng chịu” nhưng có vẻ thử thách này cũng gọi là “căng cực căng cực”. Cả hội rụng dần và không thể hoàn thành sứ mệnh giúp Cự Giải cai nghiện Sư Tử. Thế là lại quay về tìm nguyên nhân rõ ràng của vụ này: Vì sao Cự Giải muốn “đóng băng” mối quan hệ với Sư Tử?

Một “tam giác tình bạn” đã đột ngột xuất hiện. Chuyện gì chuyện gì? Cùng “bóc” những bí mật động trời của hội Mật Ngữ Biz trên tập này nhé!',
'60', '100', '4', '40', '22', '2023-12-12 00:00:00.0000000', '7', '1', b'1'), 


(23, '4', 'WKHIUV789AC2', 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 9', 'B R O Group',' Lớp Học Mật Ngữ Phiên Bản Mới - Tập 9

Lớp Học Mật Ngữ phiên bản mới Tập 9 này chính là tập “over hợp” cho tween đọc cùng cạ cứng. Nhất là những ai đã từng trải qua cảm giác bị người kia “bo bo xì”, “quăng cục lơ” cho m.ình lâu thiệt lâu.

Không phải “trôn, trôn Vi Na” mà vẫn “bơ đẹp” nhau là sao ta?

Một ngày bình thường như mọi ngày, Mặt Trời mọc đằng Đông, chó mèo thay lông chào đón mùa Hè. Chỉ có lớp hoàng đạo là hôm nay có vô số điểm kỳ lạ

Chấn động 1: Song Ngư không ngủ gật và đã làm xong bài tập!

Chấn động 2: Bạch Dương đi học thơm lừng tỏa nắng!

Chấn động 3: Bảo Bình nhận bài kiểm tra 9.75 điểm, thua Ma Kết hẳn 0.25.

Vì cả ba đều thua trong thử thách “bo bo xì” để làm gương cho Cự Giải - lúc này đang “cai ghiền” Sư Tử - nên ai cũng phải chịu phạt và làm những điều chưa từng có.

Khi tất cả đã bỏ cuộc thì nhân vật VUA-TRÒ-CHƠI xuất hiện: Nhân Mã, với thử thách “cai nghiện Thiên Bình, đã vượt qua 5 ngày “bo bo xì” cạ cứng của m.ình. Nhưng luật là phải chơi đến 21 ngày mới biết thắng thua!

Nhân Mã hừng hực giương cao quyết tâm chiến thắng.

Nâng chén tiêu sầu càng rầu thêm

Nhân Mã lì lợm chịu chơi, Thiên Bình thì cố chấp, kiêu kỳ. Dù ai nấy cũng thấy rõ là Thiên Bình buồn ra mặt rồi nhưng nhất quyết vẫn không thèm nói chuyện.

Thế là cả lớp rần rần tìm mọi cách từ giảm uy tín, tung tin đồn nhảm, lôi kéo đồng minh dồn ép… đều không xi nhê, Nhân Mã vẫn “qua bài” dễ ợt!

Liệu có làm cách nào giúp cả hai quay lại trò chuyện thân thiết như trước không? Bị cạ cứng “bo bo xì” thì phải làm gì? Đón xem nhé!',
'60', '100', '4', '40', '22', '2023-12-12 00:00:00.0000000', '7', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '15', 'LopHocMatNguTap1_1.jpg', b'1'), (NULL, '15', 'LopHocMatNguTap1_2.jpg', b'1'), (NULL, '15', 'LopHocMatNguTap1_3.jpg',b'1'), (NULL, '15', 'LopHocMatNguTap1_4.jpg', b'1'),(NULL, '15', 'LopHocMatNguTap1_5.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '16', 'LopHocMatNguTap2_1.jpg', b'1'), (NULL, '16', 'LopHocMatNguTap2_2.jpg', b'1'), (NULL, '16', 'LopHocMatNguTap2_3.jpg',b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '17', 'LopHocMatNguTap3_1.jpg', b'1'), (NULL, '17', 'LopHocMatNguTap3_2.jpg', b'1'), (NULL, '17', 'LopHocMatNguTap3_3.jpg',b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '18', 'LopHocMatNguTap4_1.jpg', b'1'), (NULL, '18', 'LopHocMatNguTap4_2.jpg', b'1'), (NULL, '18', 'LopHocMatNguTap4_3.jpg',b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '19', 'LopHocMatNguTap5_1.jpg', b'1'), (NULL, '19', 'LopHocMatNguTap5_2.jpg', b'1'), (NULL, '19', 'LopHocMatNguTap5_3.jpg',b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '20', 'LopHocMatNguTap6_1.jpg', b'1'), (NULL, '20', 'LopHocMatNguTap6_2.jpg', b'1'), (NULL, '20', 'LopHocMatNguTap6_3.jpg',b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '21', 'LopHocMatNguTap7_1.jpg', b'1'), (NULL, '21', 'LopHocMatNguTap7_2.jpg', b'1'), (NULL, '21', 'LopHocMatNguTap7_3.jpg',b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '22', 'LopHocMatNguTap8_1.jpg', b'1'), (NULL, '22', 'LopHocMatNguTap8_2.jpg', b'1'), (NULL, '22', 'LopHocMatNguTap8_3.jpg',b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '23', 'LopHocMatNguTap9_1.jpg', b'1'), (NULL, '23', 'LopHocMatNguTap9_2.jpg', b'1'), (NULL, '23', 'LopHocMatNguTap9_3.jpg',b'1');



INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (24, '5', 'WK89K1GT1265', 'Sói Già Phố Wall - Phần 2', 'Jordan Belfort', 'SÓI GIÀ Phố Wall - Phần 2

Cuốn hồi ký không nên đọc ngắt quãng được viết bởi “Chủ nhân trẻ của vũ trụ phố Wall”

Sói già Phố Wall là cuốn tự truyện của Jordan Belfort - một huyền thoại trong ngành môi giới chứng khoán trên sàn phố Wall. Tác phẩm kể về quá trình phất lên của Jordan nói riêng, cũng như nội tình cuộc đại khủng hoảng tín dụng thứ cấp ở Mỹ nói chung.

Được mọi người gọi với nhiều biệt danh, trong đó, cái tên Sói Già Phố Wall là hợp với Jordan hơn cả - một con sói tối thượng đội lốt cừu non. Ngoại hình và cách hành xử của anh ta trông giống như một đứa trẻ nhưng thực chất, anh ta đâu có trẻ con. Anh ta là một thằng đàn ông ba mươi mốt tuổi nhưng già đời như một lão sáu mươi, "sống theo thang tuổi của loài chó" - một năm bằng bảy năm tuổi người.Vừa tốt nghiệp đại học, bước vào khởi nghiệp, Jordan Belford đã gặp ngay thất bại đầu đời trên phố Wall, bởi anh ta mới chỉ là “cừu non” giữa bao “sói già” khác vây quanh. Chàng trai có cặp mắt xanh, cái miệng dẻo quẹo, cao chỉ tầm một thước bảy chẳng còn cách nào khác, phải chuyển hướng để kiếm việc. Anh ta tìm đến một công ty bé xíu để thử vận may.

Chính nơi làm việc vô danh tiểu tốt này đã nhanh chóng trở thành “vườn ươm” cho tài năng bán hàng và môi giới của anh chàng Jordan Belford hiếu thắng, nhanh nhẹn, nhiều mưu lược. Cũng từ đây, gã trùm tài chính tương lai dần thọc tay vào nhiều ngõ ngách của thế giới phù hoa, hào nhoáng, gia nhập đội ngũ “buôn tiền” khét tiếng, từng bước khuynh đảo thị tường chứng khoán phố Wall.Sớm trở nên giàu có sau những vụ IPO nổi đình đám, nâng giá cổ phiếu từ “rác” trở thành “vàng”, đại gia Jordan Belford đã vượt mặt những tay trùm từng một thời vênh váo, biết chống chịu với những cơn stress trong cái nghề đầy áp lực. Với rất nhiều mánh lới trong kinh doanh, Sói Già đã trở thành triệu phú thị trường chứng khoán ở tuổi hai mươi sáu, bị kết án ở cấp liên bang năm ba mươi sáu tuổi. Anh ta tiệc tùng như một ngôi sao nhạc rock, sống như một ông hoàng và bước qua mọi thăng trầm của đời mình như một biểu tượng của các doanh nhân nước Mỹ. Từ một cậu bé bán kem dạo trong những kỳ nghỉ hè ở Italia, Jordan trở thành người có thể kiếm hàng triệu đô trong phút chốc bằng những mánh lới xoay đủ chiều, có khi còn lợi dụng cả những người thân bên mình. Anh ta cũng sớm học được cách nốc rượu thay nước lọc, chơi cocain, bao gái, và tiệc tùng lõa thể thâu đêm suốt sáng. Là con “sói già” vô cùng tỉnh táo trên thương trường, nhưng trong đời riêng, không ít lần hắn rơi vào cảm giác vô thức. Trong cuộc đời Jordan Belford, dẫu từng có bao gái đẹp vây quanh, nhưng kết cục vẫn là “từng người tình đã bỏ ta đi”.

Sói Già cũng có gia đình. Ly hôn với người vợ đầu - người đã gắn bó khăng khít với anh ta khi còn hàn vi, Jordan cưới ngay một cô gái làm người mẫu quảng cáo cho một hãng bia bởi vẻ đẹp hớp hồn của cô ta. Họ cùng hai đứa con xinh xắn chung sống trong một ngôi nhà đồ sộ, đội ngũ người hầu hai hai người làm việc toàn thời gian, hai vệ sĩ tận tụy cũng những chiếc camera lắp đặt ở mọi nơi, tất cả những đồ vật trong nhà, cho dù những thứ nhỏ nhặt, đều được mua với giá ít nhất là vài nghìn đô la.

Những phi vụ tài chính của Sói Già trót lọt trong cả chục năm trời. Cuối cùng, sau hơn năm năm kể từ lúc bị Ủy ban Chứng khoán và Hối đoái truy tố, Jordan mới thật sự phải vào tù - chịu án hai mươi hai tháng tại một trại giam cấp liên bang. Gia đình anh ta cũng đổ vỡ khi người vợ xinh đẹp quyết định ly hôn.

Sói già phố Wall không đơn thuần là một cuốn hồi ký. Nó giống như một lời cảnh báo của Jordan Belfort về ngành tài chính, chứng khoán phố Wall, sự tham lam của các nhà đầu cơ, những nguy hiểm tiềm tang trên con đường danh vọng. Trong cuốn sách này, ông cũng đã trực tiếp nhìn nhận những sai lầm trong quá khứ của chính mình, từ đó thẳng thắn lên án và vạch trần lối sống xa hoa vô độ, dâm dục của một bộ phận lớn tư bản Mỹ.

THÔNG TIN TÁC GIẢ

Jordan Belfort là chuyên gia tư vấn cho hơn 50 công ty và viết bài cho nhiều báo, tạp chí uy tín trên thế giới, trong đó có The New York Times, The Wall Street Journal, The Los Angeles Times, The London Times, The Herald Tribune, Le Monde, Corriere della Serra, Forbes, Business Week, Paris Match, Rolling Stone.

Cuốn tự truyện của ông đã được xuất bản tại hơn 40 quốc gia và dịch ra 18 ngôn ngữ khác nhau. Ông là khách mời thường xuyên trên các đài CNN, CNBC, BBC,…. Câu chuyện cuộc đời ông đã được đạo diễn Scorsese chuyển thể thành phim và công chiếu rất rộng rãi từ cuối 2013. Bộ phim có sự tham gia của tài từ Leonardo Di Caprio trong vai Jordan Belfort.',
'5', '632', '5', '40', '22', '2023-12-12 00:00:00.0000000', '8', '2', b'1'), 

(25, '5', 'WKRTAV20Y265', 'Sói Già Phố Wall - Phần 3', 'Jordan Belfort', 'Sói Già Phố Wall - Phần 3

Jordan Belfort với vẻ ngoài lịch lãm, cuốn hút cùng tài ăn nói khéo léo. Từ một kẻ vô danh tiểu tốt trở thành một ông trùm chứng khoán đứng trên đỉnh của phố Wall. Nhưng phía sau những hào nhoáng đó hẳn phải chứa đựng những bí mật "động trời" với những mánh khóe chỉ trong vài phút hàng triệu đô-la đã bỏ túi của gã vô danh khéo ăn khéo nói đó.

Cuốn tự truyện "Sói già phố Wall" của Jordan Belfort ra mắt vào tháng 9 năm 2007, đã trở thành hiện tượng xuất bản toàn cầu với nhiều bản sách đã được bán ra. Cuốn tự truyện không đơn giản chỉ là kể về cuộc đời của một gã "lọc lừa" với nhiều những mánh khóe tinh vi, mà sâu xa hơn nữa là toàn cảnh bức tranh về phố Wall và thị trường chứng khoán. Chân thực và lôi cuốn là hai từ có thể nói về cuốn hồi ký này.

"Sói già phố Wall" đã được đạo diện gạo cội Martin Scorsese chuyển thể thành phim vào năm 2013 với sự tham gia của các diễn viên nổi tiếng Hollywood như Leonardo DiCaprio, Jonah Hill, Margot Robbie và Matthew McConaughey. Bộ phim đem tới cho người xem một trải nghiệm mới mẻ, góp phần "tái hiện" lại một cách chân thực về chân dung của "Ông trùm phố Wall - Jordan Belfort".

Tập cuối "Sói già phố Wall 3 - Con đường của sói” sẽ cho ta thấy hồi kết cho bộ hồi ký nối tiếng và hấp dẫn này.',
'5', '396', '5', '40', '22', '2023-12-12 00:00:00.0000000', '8', '2', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '24', 'SoiGiaPhoWallPhan2_1.jpg', b'1'), (NULL, '24', 'SoiGiaPhoWallPhan2_2.jpg',b'1'), (NULL, '24', 'SoiGiaPhoWallPhan2_3.jpg', b'1'), (NULL, '24', 'SoiGiaPhoWallPhan2_4.jpg', b'1'), (NULL, '24', 'SoiGiaPhoWallPhan2_5.jpg', b'1'), (NULL, '24', 'SoiGiaPhoWallPhan2_6.jpg', b'1'), (NULL, '24', 'SoiGiaPhoWallPhan2_7.jpg', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '25', 'SoiGiaPhoWallPhan3_1.jpg', b'1'), (NULL, '25', 'SoiGiaPhoWallPhan3_2.jpg',b'1'), (NULL, '25', 'SoiGiaPhoWallPhan3_3.jpg', b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (26, NULL, 'WK08XE90K6A5', 'Facebook - Bí Mật Về Quốc Gia Lớn Nhất Thế Giới', 'Steven Levy', 'Cuốn sách nói về sự hình thành và phát triển của Facebook cùng những khó khăn, thách thức mà công ty này từng phải trải qua. Trong năm thứ hai đại học, Mark Zuckerberg đã tạo ra một trang web đơn giản hoạt động như một mạng xã hội trong khuôn viên trường. Trang này được đón nhận vô cùng mạnh mẽ và rất nhanh sau đó sinh viên trên toàn quốc đã đăng ký sử dụng Facebook. Từ một trang web đơn giản ban đầu, Mark Zuckerberg cùng đội ngũ đã nghiên cứu và phát triển thêm nhiều tính năng và ứng dụng cho Facebook, có những tính năng được đón nhận nhưng cũng có những tính năng thất bại và nhanh chóng biến mất sau đó. Và khi Facebook phát triển cũng là lúc các đối thủ cạnh tranh bắt đầu xuất hiện như Instagram, Snapchat… Cuốn sách cũng đưa ra thông tin về những cuộc đàm phán mua lại các công ty này của Zuckerberg. Càng phát triển mạnh mẽ, Facebook càng phải đối mặt với nhiều thách thức, khó khăn khi gặp phải những cáo buộc liên quan đến việc Facebook là nhân tố góp phần tác động vào kết quả của cuộc tranh cử tổng thống Mỹ năm 2016 giữa Donald Trump và Hillary Clinton khi công ty này không xử lý được việc những tin giả lan truyền trên Facebook và những hacker sử dụng nó để đánh cắp thông tin, cùng vụ bê bối dữ liệu Cambridge Analytica. Tác giả cũng đưa ra những thông tin về cách xử lý của Facebook cũng như Mark Zuckerberg đối với tin giả mạo, việc xử lý dữ liệu thông tin của người dùng cũng như kiểm duyệt nội dung.  

Đánh giá của chuyên gia, tổ chức uy tín về cuốn sách cùng các giải thưởng  

Một trong những cuốn sách về công nghệ hay nhất năm 2020 – Financial Times

“Câu chuyện lịch sử toàn diện và hấp dẫn.” – The Wall Street Journal

“Một câu chuyện mới mẻ, đầy tính cập nhật và nội bộ.” – The Economist

Levy miêu tả một công ty công nghệ nơi không có ai chịu trách nhiệm về những gì nó đã phát hành… Cuốn sách khép lại với sự công nhận rằng Facebook đang đi trước với những sáng tạo mới – từ việc Facebook kết hợp với dự án tiền tệ kỹ thuật số Libra –  trong khi Zuckerberg tiếp tục bác bỏ bất kỳ câu hỏi đạo đức nào về hành vi trong quá khứ của mình. ” – Financial Times

Giá trị của cuốn sách này nằm ở chỗ nó tập hợp tất cả các vấn đề về quyền riêng tư, thuật toán của Facebook và vụ Cambridge Analytica. ” – Library Journal.',
'5', '740', '5', '40', '359', '2023-12-12 00:00:00.0000000', '9', '2', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '26', 'Facebook_Bimatquocgialonnhatthegioi_1.jpg', b'1'), (NULL, '26', 'Facebook_Bimatquocgialonnhatthegioi_2.jpg', b'1'), (NULL, '26', 'Facebook_Bimatquocgialonnhatthegioi_3.jpg', b'1'), (NULL, '26', 'Facebook_Bimatquocgialonnhatthegioi_4.jpg',b'1'), (NULL, '26', 'Facebook_Bimatquocgialonnhatthegioi_5.jpg', b'1'), (NULL, '26', 'Facebook_Bimatquocgialonnhatthegioi_6.jpg', b'1'), (NULL, '26', 'Facebook_Bimatquocgialonnhatthegioi_7.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (27, NULL, '13LO02N2K6A5', 'Trước Bình Minh Luôn Là Đêm Tối', 'Tạ Minh Tuấn', 'Tác phẩm:

Trước bình minh luôn là đêm tối là hành trình của một chàng trai sắp 30 tuổi, với những thành tích đáng nể và tinh thần không ngừng nỗ lực khẳng định vị thế, tầm vóc của khởi nghiệp Việt trên toàn thế giới.

Qua câu chuyện thành công của chính mình, tác giả chia sẻ nhiều điều về khởi nghiệp. Cụ thể: đừng để khởi nghiệp Việt Nam dừng lại ở mức “phong trào khởi nghiệp”, mà phải phát triển nó đến mức “văn hóa khởi nghiệp” thì sẽ bền vững hơn. Muốn như vậy, chúng ta cần tạo ra một thế hệ doanh nhân khởi nghiệp có trách nhiệm. Vậy, thế nào là khởi nghiệp có trách nhiệm? Khởi nghiệp có trách nhiệm không phải là hôm nay hứng… khởi nghiệp, liền nộp đơn xin nghỉ việc, không quan tâm công việc ở công ty đã được bàn giao đầy đủ hay chưa, sếp hỏi lý do tại sao thì trả lời “Tại em thích”, mặc dù sếp và công ty đối đãi mình không tệ. Vào làm có văn hóa thì nghỉ việc cũng phải có văn hóa! Khởi nghiệp có trách nhiệm không phải là bán kem trắng da, trắng liền trong 3 ngày, bất chấp hậu quả sức khỏe của khách hàng, để bán được hàng, còn khuyên là kem này mẹ bầu dùng vẫn được. Cái đó là tạo nghiệp chứ không phải khởi nghiệp!...

Cuốn sách còn chứa chan tình yêu thương gia đình – nơi để trở về mỗi lần mệt mỏi với dông bão ngoài kia với lòng biết ơn sâu sắc. “Những người sẵn lòng đặt con tim của họ vào “cái hòm kín” của bạn, sẵn sàng lấp đầy con tim của bạn, sẵn sàng ở bên cạnh bạn dù lúc thành công hay khi thất bại, không ai khác, chính là Gia đình của bạn!”

Ngoài ra còn nhiều chia sẻ bổ ích, thú vị, sâu sắc về thành công, nỗi buồn, hạnh phúc khác từ chính cuộc đời tác giả, chắc chắn sẽ khiến độc giả vỡ ra nhiều điều trong cuộc sống.',
'5', '368', '5', '40', '179', '2023-12-12 00:00:00.0000000', '9', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '27', 'TruocBinhMinhLuonLaBongToi_1.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_2.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_3.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_4.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_5.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_6.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_7.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_8.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_9.jpg',b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_10.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_11.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_12.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_13.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_14.jpg', b'1'), (NULL, '27', 'TruocBinhMinhLuonLaBongToi_15.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (28, NULL, '1KOI87BA12N5', 'Elon Musk - Đặt Cả Thế Giới Lên Bốn Bánh Xe Điện', 'Hamish McKenzie', 'Cuốn sách “Elon Musk - Đặt cả thế giới lên bốn bánh xe điện” mang đến cho độc giả hành trình chinh phục giấc mơ hoang dã của một công ty khởi nghiệp tại Thung lũng Silicon. Giấc mơ đó có đủ đầy sóng gió, khó khăn và sự thông tuệ của người đứng đầu - Elon Musk.

Tesla, hãng ô tô điện được Elon Musk thành lập, đã đứng lên chống lại sức mạnh không chỉ của các nhà sản xuất xe hơi Detroit được chính phủ hậu thuẫn mà còn cả sức mạnh khổng lồ của Big Oil và những nhà tài phiệt đứng sau nó - anh em nhà Koch khét tiếng. Tesla đã mang đến cho thế giới những nhận thức mới và những thành công đáng ngưỡng mộ bên cạnh tranh cãi về ô tô điện và ô tô truyền thống.

Năm 2018, Tesla Model 3, chiếc xe điện cao cấp dành cho thị trường đại chúng được bán ra, đã định hình lại nhận thức phổ biến về Tesla và thay đổi mối quan hệ của công chúng với các phương tiện cơ giới - giống như Model T của Ford đã làm gần một thế kỷ trước. Vì thế, nếu như Henry Ford là người “đặt cả thế giới lên bốn bánh xe” thì không ai khác ngoài Elon Musk sẽ là người “đặt cả thế giới lên bốn bánh xe điện”.

Cuốn sách sẽ mang đến một góc nhìn toàn cảnh, chân thực về quá trình phát triển của một biểu tượng công nghệ của thế kỷ mới, hoạt động không khác gì chế độ “Insane Mode” trên Tesla Model S. Nó là bản mô tả hoàn hảo về chu kỳ hoạt động của một công ty đã thề rằng sẽ không ngừng nghỉ cho đến khi mọi chiếc xe ô tô điện hoạt động bình thường.

Đây là câu chuyện về sự khéo léo tuyệt vời nhất của người Mỹ và tiềm năng làm nên lịch sử của nó. Thắt dây an toàn!',
'5', '480', '6', '40', '179', '2023-12-12 00:00:00.0000000', '10', '1', b'1'); 



INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '28', 'ElonMusk_DatCaTheGioiLenBonBanhXeDien_1.jpg', b'1'), (NULL, '28', 'ElonMusk_DatCaTheGioiLenBonBanhXeDien_2.jpg', b'1'), (NULL, '28', 'ElonMusk_DatCaTheGioiLenBonBanhXeDien_3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (29, NULL, '1K09KHB19YN5', 'Con Rồng Trong Bể Kính - Câu Chuyện Thật Về Quyền Lực, Nỗi Ám Ảnh Và Loài Cá Đáng Thèm Muốn Nhất', 'Emily Voig', 'Một chàng trai trẻ bị đâm đến chết vì những con cá quý giá của mình. Một ông trùm châu Á mua con cá rồng độc nhất vô nhị với giá 150.000 đô la. Một thám tử đuổi theo những kẻ buôn lậu thú cưng qua đường phố New York... Cuốn sách Con rồng sau bể kính kể chuyện lại những câu chuyện phi thường về nỗi ám ảnh, sự hoang tưởng và những tên tội phạm liên quan đến một loài cá không giống bất kì loài vật nào khác: một động vật ăn thịt hung dữ xuất hiện từ thời kỳ khủng long còn tồn tại trên trái đất. 
"Một cuốn sách có tính khai mở lạ kì." - The New York Times 
"Mang màu sắc căng thẳng của một tiểu thuyết trinh thám, Voigt đã vẽ nên một thế giới sống động của những vụ giết người, buôn bán chợ đen và việc hủy hoại môi trường sinh tồn của một loài cá mà trớ trêu thay, nó lại được coi là biểu tượng của may mắn và sức cuốn hút." - Discover
"Một câu chuyện vô cùng ấn tượng, đầy bất ngờ và hồi hộp... Mọi thứ bỗng trở nên kì dị." - The Wall Street Journal

(Con rồng sau bể kính kể về hành trình nữ nhà báo Emily Voigt đi tìm cá rồng hoang dã - loài cá cảnh đắt nhất thế giới. Hành trình này đã đưa cô đi khắp toàn cầu, theo chân những người nuôi cá cảnh kì lạ đến các khu rừng xa xôi nhất hành tinh để lần theo dấu vết của cá rồng tự nhiên.)  ',
'5', '344', '5', '40', '117', '2023-12-12 00:00:00.0000000', '6', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '29', 'ConRongTrongBeKinh_1.jpg', b'1'), (NULL, '29', 'ConRongTrongBeKinh_2.jpg', b'1'), (NULL, '29', 'ConRongTrongBeKinh_3.jpg', b'1'), (NULL, '29', 'ConRongTrongBeKinh_4.jpg', b'1'), (NULL, '29', 'ConRongTrongBeKinh_5.jpg', b'1'), (NULL, '29', 'ConRongTrongBeKinh_6.jpg', b'1'), (NULL, '29', 'ConRongTrongBeKinh_7.jpg', b'1'), (NULL, '29', 'ConRongTrongBeKinh_8.jpg',b'1'), (NULL, '29', 'ConRongTrongBeKinh_9.jpg',b'1'), (NULL, '29', 'ConRongTrongBeKinh_10.jpg', b'1'), (NULL, '29', 'ConRongTrongBeKinh_11.jpg', b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (30, NULL, '9786044777481', '38 Bức Thư Rockefeller Gửi Cho Con Trai', 'Thanh Hương', 'NGƯỜI SỐNG TRÊN ĐỜI, NHƯ THẾ NÀO LÀ THIỆN, LẠI NHƯ THẾ NÀO LÀ ÁC? THẾ NÀO LÀ SỰ THIÊN LỆCH, MÀ THẾ NÀO MỚI LÀ CHÍNH ĐÍNH?

Có người khởi tâm ác mà thực ra lại là làm việc thiện. Nhưng nhà kia giàu có lắm, gặp năm mất mùa, dân cùng cực phải cướp thóc lúa ở chợ ngay giữa ban ngày. Người kia báo với tri huyện, nhưng tri huyện không xử lý việc ấy.

Những người dân nghèo thấy thế càng phóng túng bừa bãi, nên nhà ấy tự ý bắt giam những người cướp bóc, làm cho chúng phải hổ thẹn, dân chúng vì thế mới được yên ổn. Nếu nhà kia không làm như vậy thì ắt nơi ấy sẽ loạn cả.

Người làm việc thiện là chính đính, người làm việc ác thì là thiên lệch, điều ấy người ta đều biết. Nhưng khởi phát tâm làm việc thiện mà làm việc ác, ấy là trong chính đính lại có thiên lệch vậy. Khởi tâm làm việc ác mà lại thành ra làm việc thiện, ấy là trong thiên lệch có chính đính. Điều ấy ta chẳng thể không biết vậy.  ',
'27', '268', '7', '40', '69', '2023-12-12 00:00:00.0000000', '11', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '30', '38_BucThuCuaRokefeller.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (31, NULL, '9786044009674', 'Con Đường Chẳng Mấy Ai Đi', 'M. Scott Peck', 'Có lẽ không quyển sách nào trong thế kỷ này có tác động sâu sắc đến đời sống trí tuệ và tinh thần của chúng ta hơn Con Đường Chẳng Mấy Ai Đi. Với doanh số trên 10 triệu bản in trên toàn thế giới và được dịch sang hơn 25 ngôn ngữ, đây là một hiện tượng trong ngành xuất bản, với hơn mười năm nằm trong danh sách Best-sellers của New York Times.

Với cách hành văn kinh điển và thông điệp đầy thấu hiểu, quyển sách Con Đường Chẳng Mấy Ai Đi giúp chúng ta khám phá bản chất của các mối quan hệ và của một tinh thần trưởng thành. Quyển sách giúp chúng ta học cách phân biệt sự lệ thuộc với tình yêu; làm thế nào để trở thành những bậc phụ huynh tinh tế và nhạy cảm; và cuối cùng là làm thế nào để sống chân thật với chính mình.

Với dòng mở đầu bất hủ của quyển sách, "Cuộc đời này rất khó sống", thể hiện quan điểm hành trình phát triển tinh thần là một chặng đường dài và gian nan, Tiến sĩ Peck thể hiện sự đồng cảm, nhẹ nhàng dẫn dắt độc giả vượt qua quá trình khó khăn đó, để thay đổi hướng tới tầm mức thấu hiểu bản thân sâu sắc hơn.  ',
'27', '344', '8', '40', '107', '2023-12-12 00:00:00.0000000', '6', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '31', 'ConDuongChangMayAiDi.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (32, NULL, '9786044742250', 'Tư Duy Mở', 'Nguyễn Anh Dũng', 'Con người đang sống trong thời đại công nghệ, khi mọi thứ thay đổi chóng mặt, điều đó đòi hỏi chúng ta phải linh hoạt trong cách tư duy để bắt kịp xu hướng toàn cầu. Hay nói cách khác, chúng ta cần có một tư duy mở để đón nhận và khai phá kiến thức mới, bởi nếu chúng ta cứ khăng khăng giữ định kiến của mình thì sự phát triển sẽ đi vào ngõ cụt.

Cụ thể hơn, người có tư duy mở tin rằng chỉ cần họ nỗ lực, thay đổi là có thể tiến bộ hơn. Họ sẽ vui vẻ chấp nhận thử thách, xem thử thách như cơ hội để học hỏi được những điều hay cái mới. Khi đối mặt với khó khăn hay không thành công, người có tư duy mở thường có thái độ: “Cách này không hiệu quả, vậy mình thử cách khác”. Đối với họ, thất bại chỉ là bài học giúp họ hoàn hảo hơn trên con đường khẳng định bản thân và phát triển sự nghiệp.

Vậy làm thế nào để biết được chúng ta đang có loại tư duy nào, đóng hay mở? Và làm thế nào chúng ta nhận ra chúng?

Nhưng làm thế nào để có được tư duy mở?

Và tư duy mở góp phần vào cuộc sống của chúng ta thế nào?

Khi bạn đặt ra những câu hỏi đó thì cuốn sách này sinh ra để dành cho bạn. Cuốn sách được biên soạn dựa trên sự học tập và nghiên cứu tài liệu trong và ngoài nước cũng như từ những trải nghiệm của bản thân tác giả sẽ mang lại cho bạn những giá trị hữu ích của tư duy mở, giúp bạn tự tin chinh phục ước mơ, sẵn sàng đón nhận mọi chướng ngại và luôn nở nụ cười hạnh phúc.  ',
'27', '208', '7', '40', '69', '2023-12-12 00:00:00.0000000', '6', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '32', 'TuDuyMo.jpg', b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (33, NULL, '9786043440287', 'Tư Duy Ngược', 'Nguyễn Anh Dũng', 'Chúng ta thực sự có hạnh phúc không? Chúng ta có đang sống cuộc đời mình không? Chúng ta có dám dũng cảm chiến thắng mọi khuôn mẫu, định kiến, đi ngược đám đông để khẳng định bản sắc riêng của mình không?. Có bao giờ bạn tự hỏi như thế, rồi có câu trả lời cho chính mình?

Tôi biết biết, không phải ai cũng đang sống cuộc đời của mình, không phải ai cũng dám vượt qua mọi lối mòn để sáng tạo và thành công… Dựa trên việc nghiên cứu, tìm hiểu, chắt lọc, tìm kiếm, ghi chép từ các câu chuyện trong đời sống, cũng như trải nghiệm của bản thân, tôi viết cuốn sách này.

Cuốn sách sẽ giải mã bạn là ai, bạn cần Tư duy ngược để thành công và hạnh phúc như thế nào và các phương pháp giúp bạn dũng cảm sống cuộc đời mà bạn muốn.  ',
'27', '242', '7', '40', '69', '2023-12-12 00:00:00.0000000', '6', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) VALUES (NULL, '33', 'TuDuyNguoc.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (34, NULL, '8935325007972', 'Càng Bình Tĩnh Càng Hạnh Phúc', 'Vãn Tình', 'Tiếp nối thành công rực rỡ của Bạn đắt giá bao nhiêu?, Khí chất bao nhiêu hạnh phúc bấy nhiêu, Không sợ chậm chỉ sợ dừng,… Vãn Tình đã quay trở lại cùng cuốn sách Càng bình tĩnh Càng hạnh phúc. Đây là cuốn sách thứ bảy của cô được xuất bản tại Việt Nam bởi thương hiệu sách Bloom Books, đánh dấu cho hành trình trưởng thành đầy rực rỡ của Vãn Tình – từ một cô gái trẻ trung, mạnh mẽ trở nên chín chắn, điềm tĩnh và bao dung hơn với cuộc đời.

Gần bảy mươi câu chuyện trong sách xoay quanh các chủ đề tình yêu, hôn nhân, gia đình, sự nghiệp… đến từ chính cuộc sống của tác giả và những người xung quanh, vừa thực tế lại vừa gợi mở, dễ dàng giúp chúng ta liên hệ với tình huống của chính mình. Với những câu chuyện đó, Vãn Tình hy vọng có thể giúp các cô gái trưởng thành, độc lập và tự tin hơn, tìm lại bản ngã và sống cuộc đời theo cách mà mình mong muốn.

Thông điệp xuyên suốt trong “Càng bình tĩnh Càng hạnh phúc” mà Vãn Tình muốn gửi gắm tới độc giả là:

“Bảy năm trước tôi sẽ cãi vã với người ta khi phật ý, bảy năm sau tôi tuân thủ câu nói ‘Bận rộn là liều thuốc trị mọi chứng bệnh tâm lý.’

Bảy năm trước tôi luôn chuẩn bị cẩn thận cho mọi ngày lễ, bảy năm sau tôi bận tới mức quên cả bản thân mình chứ đừng nói tới ngày lễ gì.

Bảy năm trước, chú cún nhà tôi qua đời, bảy năm sau, tôi không còn nuôi cún nữa.

Bảy năm đủ để một phụ nữ ngây ngô trở nên chín chắn, ngây thơ trở nên lý trí, và xốc nổi trở nên bình tĩnh ung dung, dần dần tìm thấy ý nghĩa của cuộc đời mình.

Không biết bảy năm sau tôi sẽ như thế nào.”  ',
'27', '352', '8', '40', '111', '2023-12-12 00:00:00.0000000', '9', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '34', 'CangBinhTinh_1.jpg', b'1'),(NULL, '34', 'CangBinhTinh_2.jpg', b'1'),(NULL, '34', 'CangBinhTinh_3.jpg', b'1'),(NULL, '34', 'CangBinhTinh_4.jpg', b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (35, NULL, '9786043949247', 'Đắc Nhân Tâm', 'Dale Carnegie', 'Đắc nhân tâm của Dale Carnegie là quyển sách của mọi thời đại và một hiện tượng đáng kinh ngạc trong ngành xuất bản Hoa Kỳ. Trong suốt nhiều thập kỷ tiếp theo và cho đến tận bây giờ, tác phẩm này vẫn chiếm vị trí số một trong danh mục sách bán chạy nhất và trở thành một sự kiện có một không hai trong lịch sử ngành xuất bản thế giới và được đánh giá là một quyển sách có tầm ảnh hưởng nhất mọi thời đại.

Đây là cuốn sách độc nhất về thể loại self-help sở hữu một lượng lớn người hâm mộ. Ngoài ra cuốn sách có doanh số bán ra cao nhất được tờ báo The New York Times bình chọn trong nhiều năm. Cuốn sách này không còn là một tác phẩm về nghệ thuật đơn thuần nữa mà là một bước thay đổi lớn trong cuộc sống của mỗi người.

Nhờ có tầm hiểu biết rộng rãi và khả năng ‘ứng xử một cách nghệ thuật trong giao tiếp’ – Dale Carnegie đã viết ra một quyển sách với góc nhìn độc đáo và mới mẻ trong giao tiếp hàng ngày một cách vô cùng thú vị – Thông qua những mẫu truyện rời rạc nhưng lại đầy lý lẽ thuyết phục. Từ đó tìm ra những kinh nghiệm để đúc kết ra những nguyên tắc vô cùng ‘ngược ngạo’, nhưng cũng rất logic dưới cái nhìn vừa sâu sắc, vừa thực tế. ',
'31', '368', '9', '40', '77', '2023-12-12 00:00:00.0000000', '11', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '35', 'DacNhanTam.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (36, NULL, '9786045850794', 'Tự Tin - Nghệ Thuật Giúp Bạn Đạt Được Mọi Mong Muốn', 'Dale Carnegie', 'Tự Tin - Nghệ Thuật Giúp Bạn Đạt Được Mọi Mong Muốn

Sự tự tin sẽ giúp bạn thay đổi cuộc sống cùa mình. Bạn có thể đạt được mọi thứ nếu có lòng tự tin: công việc ưa thích, những cuộc hẹn hò, mức lương hấp dẫn...

Tất cả chúng ta đề có khả năng trở thành người tự tin. Lòng tự tin có thể được nuôi dưỡng và phát triển ở bất kỳ độ tuổi nào, vấn đề là bạn phải có phương pháp đúng.

Cuốn sách này kết hợp những phương pháp hiệu quả nhất trong các lĩnh vực liệu pháp nhận thức hành vi, tâm lý học thể thao, lập trình ngôn ngữ-thần kinh học, tâm lý học tích cực và nhiều lĩnh vực khác. Là một chuyên gia tâm lý và tư vấn trị liệu, tiến sĩ Rob Yeung sẽ hướng dẫn bạn cách chế ngự nỗi sợ hãi, xây dựng lòng tự tin và đạt được những mục tiêu của bản thân trong cuộc sống.

Dù bao nhiêu tuổi, làm nghề gì hay đang trong hoàn cảnh nào, bạn hãy sẵn sàng xây dựng cho mình lòng tự tin sâu sắc và bền vững để đối mặt với bất cứ điều gì trong cuộc sống. Hãy sẵn sàng để vươn tới thành công!

“Là cuốn sách có tầm quan trọng, có giá trị thực tiễn và có cơ sở khoa học, Tự tin sẽ rất hữu ích cho nhiều người.” - Adrian Furnham, giáo sư Khoa Tâm lý, Đại học London

“Người tự tin là người gặt hại nhiều thành công hơn. Cuốn sách này hướng dẫn bạn cách trở thành người như vậy.” - Peter Reynolds, Tổng giám đốc Công ty Tư vấn tuyển dụng toàn cầu BBT ',
'31', '273', '10', '40', '144', '2023-12-12 00:00:00.0000000', '12', '1', b'1'); 



INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '36', 'TuTin_1.jpg', b'1'),(NULL, '36', 'TuTin_2.jpg', b'1'),(NULL, '36', 'TuTin_3.jpg', b'1'),(NULL, '36', 'TuTin_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (37, NULL, '8935325015922', 'Nhân - Nghệ Thuật Đối Đãi Vị Nhân Sinh', 'Yen Ooi', 'Từ “Nhân” có nghĩa là nhân từ, tốt bụng, đạo đức nhưng Hán tự của nó lại hàm chứa ý niệm sâu sắc về mối liên hệ giữa con người và cuộc sống. Chữ Hán “Nhân” 仁 được cấu thành từ hai phần, bộ “Nhân” 亻liên quan đến con người và chữ “Nhị” 二 là số hai, ám chỉ hai người hoặc sự kết nối giữa người với người. Ký tự nhị 二 cũng có thể được hiểu một cách trực quan là đang ám chỉ trời (dòng trên) và đất (dòng dưới), có thể coi như bao hàm cả thế giới. Kết hợp cả hai cách hiểu, Nhân 仁 đại diện cho sự chung sống hòa hợp của con người với nhau và với thế giới.

Với Nhân – Nghệ thuật đối đãi vị nhân sinh, chúng ta có cơ hội tìm về cội nguồn của phẩm chất Nhân – yếu tố tiên quyết tạo nên điểm hòa hợp cân bằng giữa con người với thế giới nội tại và thế giới xung quanh, qua những câu chuyện kể của Yen Ooi và các bức tranh màu kỳ thú.

Soi chiếu dưới góc nhìn nhân sinh của Khổng Tử, cuốn sáchdạy ta cách khám phá sợi dây kết nối tốt hơn với gia đình, xã hội; cách lên tiếng và giảng hòa với mọi cảm xúc tiêu cực; cách lắng nghe cả cơ thể lẫn tâm trí và cho phép chúng ta tử tế với chính mình. Những minh triết xa xưa của bậc cổ nhân lại là kim chỉ nam cho lối sống hiện đại để ta biết kiên nhẫn với bản thân và ân cần hơn với thế giới.

Hy vọng, sau khi đã thuần thục Nhân, chúng ta có thể mỉm cười thật nhiều với những khoảnh khắc an yên, đủ đầy và hạnh phúc. ',
'31', '230', '11', '40', '144', '2023-12-12 00:00:00.0000000', '9', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '37', 'Nhan_1.jpg', b'1'),(NULL, '37', 'Nhan_2.jpg', b'1'),(NULL, '37', 'Nhan_3.jpg', b'1'),(NULL, '37', 'Nhan_4.jpg', b'1'),(NULL, '37', 'Nhan_5.jpg',b'1'),(NULL, '37', 'Nhan_6.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (38, NULL, '8935246919248', 'Gương Kiên Nhẫn', 'Nguyễn Hiến Lê', 'Kiên nhẫn là cảnh giới kỹ năng cao nhất của con người, bạn sẽ làm được tất cả mọi việc nếu luyện được đức kiên nhẫn. Không phải ai sinh ra cũng có đức tính này mà nó là cả một quá trình học tập, rèn luyện và tu dưỡng suốt cả đời. 

Tại sao nhiều người luôn bình tĩnh và kiên trì với mọi việc còn bạn thì không? Cuộc sống luôn có những khó khăn, thử thách bắt buộc bạn phải đối đầu, không có tính kiên nhẫn bạn khó có thể vượt qua. Muốn thành công, bạn không thể không rèn luyện tính kiên nhẫn. 

Có rất nhiều cách để bạn rèn luyện tính kiên nhẫn, một trong số đó là hãy soi vào tấm gương của những người đi trước và rút ra những bài học kinh nghiệm cho bản thân để dần xây dựng đức tính kiên nhẫn. Nhưng ai là tấm gương tốt đáng để bạn noi theo? Bạn sẽ tìm hiểu được những câu chuyện của họ bằng cách nào? 

Để có thể tự mình rèn luyện và tu dưỡng tính kiên nhẫn thông qua các câu chuyện của những con người thành công, xin giới thiệu tới bạn đọc về một trong những cuốn sách kỹ năng sống hay Gương Kiên Nhẫn – Những Bài Học Thành Công . Hy vọng rằng cuốn sách này sẽ là chất xúc tác giúp các bạn nhanh chóng hoàn thiện bản thân. ',
'31', '304', '12', '40', '102', '2023-12-12 00:00:00.0000000', '13', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '38', 'KienNhan_1.jpg', b'1'),(NULL, '38', 'KienNhan_2.jpg', b'1'),(NULL, '38', 'KienNhan_3.jpg', b'1'),(NULL, '38', 'KienNhan_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (39, NULL, '8935325009006', 'Thuật Thao Túng - Góc Tối Ẩn Sau Mỗi Câu Nói', 'Wladislaw Jachtchenko', 'Bạn có muốn giành phần thắng cuối cùng trong các cuộc tranh luận?

Bạn có muốn dẹp đi bộ mặt kiêu ngạo của các đồng nghiệp xung quanh mình?

Bạn có muốn chứng minh rằng bạn đã đúng về mọi thứ?

Đây là quyển sách chứa đựng đáp án mà bạn mong muốn. Thuật thao túng sẽ giúp bạn thuần thục các kỹ năng thuộc bộ môn “nghệ thuật” làm chủ cảm xúc, làm chủ vận mệnh, điều chỉnh tâm lý và đạt được thứ bạn muốn một cách tinh vi: thao túng tâm lý người đối diện, khiến họ hành động theo hướng ta mong đợi. Không những vậy, quyển sách còn giúp bạn nhìn nhận lại về định nghĩa thao túng, những tốt-xấu ẩn giấu đằng sau và giải đáp vấn đề đạo đức con người mà bạn luôn trăn trở khi thực hiện những hành vi này. Bật mí, con người khi vừa sinh ra đã làm một thao tác thao túng tâm lý người khác rồi đấy!

Có thể bạn chưa biết, bạn đã và đang thao túng người khác hoặc bị người khác thao túng thông qua cử chỉ ngôn hành mỗi ngày, như-một-trò-đùa.

Có thể bạn chưa biết, nạn nhân bị thao túng chưa chắc đã rơi vào tình thế bất lợi, nhưng rơi vào tình thế bất lợi chắc chắn đã bị thao túng.

Có thể bạn chưa biết, người có đạo đức chắc chắn không thao túng người khác, nhưng kẻ thao túng người khác chưa chắc đã vô đạo đức.

Với 10 kỹ năng và 37 thủ thuật, Thuật thao túng sẽ giúp bạn nhận ra và thoát khỏi những suy nghĩ xấu xa nơi tiềm thức của chính mình, đồng thời vạch trần góc tối ẩn giấu sau mỗi câu nói của đối phương, đưa những chiêu trò thao túng ấy ra ánh sáng để mọi người không lần nữa rơi vào cạm bẫy. Hơn cả, quyển sách này sẽ dẫn lối bạn trở thành một “nghệ nhân” thao túng có đạo đức. ',
'28', '344', '6', '40', '90', '2023-12-12 00:00:00.0000000', '9', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '39', 'thuatthaotung1.jpg', b'1'),(NULL, '39', 'thuatthaotung2.jpg', b'1'),(NULL, '39', 'thuatthaotung3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (40, NULL, '8936186546815', 'Thiên Tài Bên Trái, Kẻ Điên Bên Phải', 'Cao Minh', 'NẾU MỘT NGÀY ANH THẤY TÔI ĐIÊN, THỰC RA CHÍNH LÀ ANH ĐIÊN ĐẤY!

Hỡi những con người đang oằn mình trong cuộc sống, bạn biết gì về thế giới của mình? Là vô vàn thứ lý thuyết được các bậc vĩ nhân kiểm chứng, là luật lệ, là cả nghìn thứ sự thật bọc trong cái lốt hiển nhiên, hay những triết lý cứng nhắc của cuộc đời?

Lại đây, vượt qua thứ nhận thức tẻ nhạt bị đóng kín bằng con mắt trần gian, khai mở toàn bộ suy nghĩ, để dòng máu trong bạn sục sôi trước những điều kỳ vĩ, phá vỡ mọi quy tắc. Thế giới sẽ gọi bạn là kẻ điên, nhưng vậy thì có sao? Ranh giới duy nhất giữa kẻ điên và thiên tài chẳng qua là một sợi chỉ mỏng manh: Thiên tài chứng minh được thế giới của mình, còn kẻ điên chưa kịp làm điều đó. Chọn trở thành một kẻ điên để vẫy vùng giữa nhân gian loạn thế hay khóa hết chúng lại, sống mãi một cuộc đời bình thường khiến bạn cảm thấy hạnh phúc hơn?

Thiên tài bên trái, kẻ điên bên phải là cuốn sách dành cho những người điên rồ, những kẻ gây rối, những người chống đối, những mảnh ghép hình tròn trong những ô vuông không vừa vặn… những người nhìn mọi thứ khác biệt, không quan tâm đến quy tắc. Bạn có thể đồng ý, có thể phản đối, có thể vinh danh hay lăng mạ họ, nhưng điều duy nhất bạn không thể làm là phủ nhận sự tồn tại của họ. Đó là những người luôn tạo ra sự thay đổi trong khi hầu hết con người chỉ sống rập khuôn như một cái máy. Đa số đều nghĩ họ thật điên rồ nhưng nếu nhìn ở góc khác, ta lại thấy họ thiên tài. Bởi chỉ những người đủ điên nghĩ rằng họ có thể thay đổi thế giới mới là những người làm được điều đó. 

Chào mừng đến với thế giới của những kẻ điên. ',
'28', '424', '13', '40', '116', '2023-12-12 00:00:00.0000000', '9', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '40', 'Thientaibentrai_1.jpg', b'1'),(NULL, '40', 'Thientaibentrai_2.jpg', b'1'),(NULL, '40', 'Thientaibentrai_3.jpg', b'1'),(NULL, '40', 'Thientaibentrai_4.jpg', b'1'),(NULL, '40', 'Thientaibentrai_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (41, NULL, '8935325011818', 'Đứa Trẻ Hiểu Chuyện Thường Không Có Kẹo Ăn', 'Nguyên Anh', '“Đứa trẻ hiểu chuyện thường không có kẹo ăn” – Cuốn sách dành cho những thời thơ ấu đầy vết thương.

Trên đời này có một điều rất kỳ diệu, đó là bậc phụ huynh nào cũng mong muốn con mình trở nên hoàn hảo theo một hình mẫu giống hệt nhau.

Lanh lẹ, khôn khéo, dễ thương, luôn nhìn cha mẹ với gương mặt tươi cười trong sáng.

Khi người lớn yêu cầu chúng làm gì đó, chúng sẽ vui vẻ làm theo. Không phàn nàn, không oán trách, không cáu gắt, lại càng không phản kháng cãi cự.

Những khi cha mẹ mệt mỏi hay chán chường, chúng sẽ rúc vào lòng cha mẹ như một chú chim nhỏ, giúp họ giải tỏa ưu tư phiền muộn.

Thậm chí ngay cả khi cha mẹ cáu giận, đối xử bất công với chúng, chúng cũng phải nhanh chóng tha thứ, dịu dàng an ủi ngược lại cha mẹ.

Chúng chẳng khác nào một con búp bê phó mặc hoàn toàn cho người khác sắp xếp. Thà bản thân chịu thiệt cũng không để cha mẹ buồn lòng.

Nhưng bạn biết không, đằng sau những đứa trẻ hiểu chuyện ngoan ngoãn trong mơ ấy, hóa ra lại toàn là sự tổn thương. Chúng không muốn tổn thương người khác, vì vậy chúng lựa chọn tổn thương chính mình.

Mà chúng làm tất cả những điều đó chỉ đơn giản là vì yêu thương cha mẹ mình mà thôi.

Nếu bạn cũng từng là một đứa trẻ như thế, từng phải hạ thấp bản thân, từng buộc phải nhường nhịn người khác, từng phải học cách nhận biết sắc mặt từ khi còn quá nhỏ… thì nhất định đừng bỏ qua cuốn sách “Đứa trẻ hiểu chuyện thường không có kẹo ăn” của tác giả Nguyên Anh.

Với tư cách cố vấn cấp hai quốc gia, Nguyên Anh đã từng là người tìm cách chữa lành vết thương cho hàng nghìn tâm hồn mang theo tổn thương thời thơ ấu. Từng câu, từng chữ bà viết nên đều xuất phát từ những câu chuyện hoàn toàn có thật.

Có thể sau khi đọc xong, những vết thương của bạn vẫn sẽ chẳng thể lành lại vĩnh viễn, nhưng chỉ cần bạn cảm thấy ổn hơn một chút, như vậy là đủ rồi.',
'28', '368', '11', '40', '96', '2023-12-12 00:00:00.0000000', '11', '1', b'1'); 



INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '41', 'DuaTreHieuChuyen_1.jpg', b'1'),(NULL, '41', 'DuaTreHieuChuyen_2.jpg', b'1'),(NULL, '41', 'DuaTreHieuChuyen_3.jpg', b'1'),(NULL, '41', 'DuaTreHieuChuyen_4.jpg', b'1'),(NULL, '41', 'DuaTreHieuChuyen_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (42, NULL, '8936066689953', 'Tâm Lý Học Về Tiền', 'Morgan Housel', 'Tiền bạc có ở khắp mọi nơi, nó ảnh hưởng đến tất cả chúng ta, và khiến phần lớn chúng ta bối rối. Mọi người nghĩ về nó theo những cách hơi khác nhau một chút. Nó mang lại những bài học có thể được áp dụng tới rất nhiều lĩnh vực trong cuộc sống, như rủi ro, sự tự tin, và hạnh phúc. Rất ít chủ đề cung cấp một lăng kính phóng to đầy quyền lực giúp giải thích vì sao mọi người lại hành xử theo cách họ làm hơn là về tiền bạc. Đó mới là một trong những chương trình hoành tráng nhất trên thế giới.

Chúng ta hiếm khi lâm vào hoàn cảnh nợ ngập đầu ư? Biết tiết kiệm để dành cho lúc khốn khó hơn ư? Chuẩn bị sẵn sàng cho việc nghỉ hưu? Có những cái nhìn thiết thực về mối quan hệ giữa tiền và hạnh phúc của chúng ta hơn phải không?

Chúng ta đều làm những điều điên rồ với tiền bạc, bởi vì chúng ta đều còn khá mới mẻ với trò chơi này và điều có vẻ điên rồ với bạn lại có khi hợp lý với tôi. Nhưng không ai là điên rồ cả – chúng ta đều đưa ra các quyết định dựa trên những trải nghiệm độc đáo riêng có mang vẻ hợp lý với mình ở bất cứ thời điểm nào.

Mục đích của cuốn sách này là sử dụng những câu chuyện ngắn để thuyết phục bạn rằng những kỹ năng mềm còn quan trọng hơn khía cạnh lý thuyết của đồng tiền. Thông qua một tập hợp những thử nghiệm và sai lầm của nhiều năm chúng ta đã học được cách trở thành những nông dân giỏi giang hơn, những thợ sửa ống nước nhiều kỹ năng hơn, và những nhà hóa học tiên tiến hơn. Nhưng liệu việc thử nghiệm và sai lầm có dạy chúng ta trở nên giỏi hơn trong cách quản lý tài chính cá nhân của chính mình không?

Nhiều tiền không liên quan nhiều đến việc bạn thông minh như thế nào mà lại liên quan lớn đến cách bạn hành xử. Và cách hành xử thì rất khó để uốn nắn, ngay cả đối với những người thực sự thông minh.

Một thiên tài không kiểm soát được cảm xúc của anh ta có thể dẫn tới một thảm họa tài chính. Điều ngược lại cũng đúng. Những người bình thường không có kiến thức về tài chính có thể trở nên giàu có nếu họ nắm trong tay những kỹ năng hành xử không liên quan đến những thước đo chính thống về trí thông minh.

Sự thành công trong tài chính không phải là một lĩnh vực khoa học khó nhằn. Nó là một kỹ năng mềm, nơi mà cách bạn hành xử quan trọng hơn điều mà bạn biết. Trong “Tâm lý học về tiền”, tác giả từng đoạt giải thưởng Morgan Housel chia sẻ 19 câu chuyện ngắn khám phá những cách kỳ lạ mà mọi người nghĩ về tiền bạc và dạy bạn cách hiểu rõ hơn về một trong những chủ đề quan trọng nhất của cuộc sống.',
'28', '382', '14', '40', '122', '2023-12-12 00:00:00.0000000', '6', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '42', 'TamLyHocVeTien_1.jpg', b'1'),(NULL, '42', 'TamLyHocVeTien_2.jpg',b'1'),(NULL, '42', 'TamLyHocVeTien_3.jpg', b'1'),(NULL, '42', 'TamLyHocVeTien_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (43, NULL, '8936067608663', 'Cẩm Nang Tuổi Dậy Thì Dành Cho Bạn Gái', 'Hà Minh', 'Bước vào lứa tuổi dậy thì, các bạn gái sẽ dần cảm nhận được những biến đổi cả về tâm lí và sinh lí. Những biến đổi đó không chỉ khiến bạn gái cảm thấy bất ngờ thú vị mà còn làm các bạn thấy tò mò, xấu hổ, cùng với một chút bỡ ngỡ, lo lắng; biết bao nhiêu điều các bạn muốn biết, cần biết nhưng lại ngại ngùng không dám hỏi bố mẹ, thầy cô. Những câu hỏi đó dần trở thành một dấu hỏi lớn mà mỗi bạn giấu kín trong lòng, chỉ dám nhỏ to tâm sự cùng bạn bè thân thiết nhất mà thôi.

Hãy để cuốn sách này bầu bạn và giúp bé có một tuổi dậy thì không khó khăn!',
'29', '288', '7', '40', '80', '2023-12-12 00:00:00.0000000', '1', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '43', 'CamNangDayThi_1.jpg',b'1'),(NULL, '43', 'CamNangDayThi_2.jpg', b'1'),(NULL, '43', 'CamNangDayThi_3.jpg', b'1'),(NULL, '43', 'CamNangDayThi_4.jpg', b'1'),(NULL, '43', 'CamNangDayThi_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (44, NULL, '8935244863413','Kĩ Năng Xã Hội Cho Học Sinh Tiểu Học - Tư Duy Tích Cực', 'Trung tâm Nghiên cứu Tâm lí Tiểu Hòa','Bước vào giai đoạn tiểu học, trẻ phải đối mặt với tập thể lớp và cách thức học tập hoàn toàn mới. Điều đó khiến trẻ sinh ra tâm lí đề phòng và e dè, thể hiện ở thái độ không tích cực giao lưu với bạn bè, không thích đến trường, làm bài tập, thậm chí trường hợp nghiêm trọng còn chán ghét việc học.

Nhiều bậc cha mẹ lo lắng, chỉ mong có thể ngay lập tức can thiệp. Tuy nhiên, nếu can thiệp quá nóng vội hoặc quá sâu, thì ngược lại có thể ảnh hưởng không tốt, thậm chí còn gây ra hậu quả nghiêm trọng cho tâm lí của trẻ.

Làm thế nào để giúp trẻ chuyển từ kiểu người bị động sang chủ động? Suy cho cùng, mọi việc đều phải xuất phát từ bản thân trẻ. Tư Duy Tích Cực cung cấp 40 bài tập thực hành, tập trung vào những tình huống thường gặp trong cuộc sống, giúp trẻ tự nhận thức, rèn luyện tư duy tích cực, nâng cao tính ham học hỏi và chủ động trong cuộc sống.

Cuốn sách gồm 5 chương, bao gồm nhiều bài tập nhỏ, thể hiện một lát cắt trong chuỗi vấn đề về tính cực. Thông qua đó, trẻ có thể biết cách nhìn nhận những vấn đề có khả năng ảnh hưởng đến tư duy tích cực, can đảm đối diện với trở ngại, học cách chủ động giải quyết vấn đề, nuôi dưỡng tâm trạng tích cực,...

Cùng tìm đọc bộ sách Kĩ Năng Xã Hội Cho Học Sinh Tiểu Học:

Giao Tiếp Hiệu Quả

Học Cách Tự Tin

Kiểm Soát Cảm Xúc

Tư Duy Tích Cực

Tự Giác Và Tự Lập',
'29', '273', '15', '40', '68', '2023-12-12 00:00:00.0000000', '1', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '44', 'KyNangXHHoc_1.jpg', b'1'),(NULL, '44', 'KyNangXHHoc_2.jpg', b'1'),(NULL, '44', 'KyNangXHHoc_3.jpg', b'1'),(NULL, '44', 'KyNangXHHoc_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (45, NULL, '8935244887211', '39 Câu Hỏi Cho Người Trẻ','Phan Đăng','Là một người trẻ, với biết bao băn khoăn về cuộc đời và nhân sinh đang mở ra trước mắt, đã bao giờ bạn tự hỏi: Tại sao phải hoài nghi? Tại sao phải tưởng tượng? Tại sao ta lập luận sai? Tại sao không nên vội tin vào một đấng tối cao?... Khi bạn đặt ra những câu hỏi ấy, chính là lúc bạn trả lời, nhưng câu trả lời không phải lúc nào cũng đơn giản và thấu đáo.

39 Câu Hỏi Cho Người Trẻ của Nhà báo Phan Đăng là những gợi mở ban đầu trên con đường tìm kiếm câu trả lời của bạn. Bạn có thể đồng tình hoặc phản đối tác giả, nhưng chắc chắn một điều, cuốn sách sẽ giúp bạn suy tư nhiều hơn, độc lập hơn trong suy nghĩ và hành xử với thế giới, với mọi người xung quanh và với bản thân mình.',
'29', '304', '7', '40', '80', '2023-12-12 00:00:00.0000000', '1', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '45', '39CauHoiChoNguoiTre_1.jpg', b'1'),(NULL, '45', '39CauHoiChoNguoiTre_2.jpg', b'1'),(NULL, '45', '39CauHoiChoNguoiTre_3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (46, NULL, '8935086856529', 'Chicken Soup To Inspire The Body And Soul - Dành Cho Những Con Người Vượt Lên Số Phận','Nhiều Tác Giả','Chúng ta có thể khác nhau về sắc tộc, văn hóa, tôn giáo, lòng tin và hệ giá trị của bản thân, song hoàn toàn có thể cùng nhau chia sẻ những trải nghiệm quý giá của chính mình. Cho dù cấu trúc cơ thể có khác nhau thì thể chất của con người vẫn có cùng một phản ứng trước các tác động thông thường.

Dù là phụ nữ hay nam giới, là thổ dân hay chính khách, ngưỡng mộ Thiên Chúa hay Đức Phật thì cơ thể bạn vẫn chảy máu mỗi khi bị đứt tay, bạn sẽ cười sảng khoái khi hạnh phúc, bạn biết đói, lạnh, vui buồn, đau khổ, và trên hết là bạn biết yêu thương. Nhờ vào những tính chất ấy, chúng ta biết chắc rằng mình là những cá thể đại diện cho loài người. Xét cho cùng, cơ thể vẫn là thứ tài sản thật sự và duy nhất mà ta muốn trân trọng giữ gìn, và tâm hồn là một người bạn đồng hành khiến cuộc sống này thêm phần thi vị.

Ta sống, học hỏi, cười đùa, yêu thương, dạy dỗ, thất bại, thành công và hoàn thành vận mệnh của mình đều thông qua thể chất bằng xương bằng thịt. Cơ thể hoàn toàn xứng đáng được ta trân trọng, đơn giản vì nếu không có thân thể này, linh hồn ta sẽ trú ngụ nơi đâu? Chúng ta không tự tạo nên thân thể của mình mà chính các bà mẹ vĩ đại đã làm nên điều kỳ diệu đó. Từ một phôi thai, chúng ta được mẹ sinh ra với hình hài là một đứa bé đỏ hỏn, rồi ta lớn dần lên, chập chững tập đi, rồi chạy, và sau cùng là một con người hoàn toàn trưởng thành…

Cơ thể ta thay đổi dần theo năm, mỗi sự tiến bộ hay thành quả của con người đều bắt nguồn từ những hành động, tức là chúng ta phải vận động mắt, tai, tay, chân, miệng và đương nhiên là cả trí óc của mình. Thể chất báo cho ta biết rằng bản thân ta được cấu thành từ ánh sáng, năng lượng và tinh thần. Nếu không có cơ thể, làm sao ta có thể cảm nhận được linh hồn mình? Khi ta được nâng cao bay bổng, được truyền cảm hứng sáng tạo, được hồi phục hay được cứu rỗi, khi ta có một đức tin, khi ta có khả năng nhận thức…tất cả đều là những khám phá bí ẩn của thể chất.',
'30', '192', '14', '40', '60', '2023-12-12 00:00:00.0000000', '12', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '46', 'VuotLenSoPhan_1.jpg', b'1'),(NULL, '46', 'VuotLenSoPhan_2.jpg',b'1'),(NULL, '46', 'VuotLenSoPhan_3.jpg',b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (47, NULL, '8935086857694', 'Chicken Soup For The College Soul - Dành Cho Học Sinh Sinh Viên','Jack Canfield, Mark Victor Hansen','Bạn có thể thất vọng nếu thất bại, nhưng sẽ sụp đổ đến tận cùng nếu từ bỏ mọi ước mơ.” - Miguel de Unamuno.

Bất cứ ai trong chúng ta cũng luôn nuôi dưỡng trong mình một ước mơ về ngày mai tươi đẹp; một hoài bão chinh phục, khám phá cuộc sống với bao điều mới lạ; một niềm tin vào bản thân để vươn lên tự khẳng định mình. Thế nhưng không phải cuộc sống lúc nào cũng là những con đường bằng phẳng, êm đẹp. Bao khó khăn, trở ngại và cả bất hạnh có thể xảy ra bất ngờ khiến chúng ta tổn thương, mất mát, mất niềm tin và có lúc tưởng như không còn nghị lực để vượt qua. Trước những khó khăn thử thách ấy, mỗi người tự chọn cho mình cách đón nhận, đối đầu để có một hướng đi riêng. Có người phó thác cho số phận, có người trốn chạy đi tìm nơi trú ẩn, có người chìm vào cảnh tự thương thân, trách phận để rồi ngã gục trong cơn giông tố cuộc đời... nhưng cũng có người tự thay đổi để thích nghi với hoàn cảnh mới, vươn lên khẳng định mình và đạt được ước mơ, hoài bão.

Tiếp theo những tập sách Hạt Giống Tâm Hồn được sự đón nhận và chia sẻ của đông đảo bạn đọc, First News tiếp tục phát hành tập sách tiếp theo Hạt Giống Tâm Hồn Dành cho Sinh viên Học sinh. Hạt Giống Tâm Hồn Dành cho Sinh viên Học sinh là tập sách đặc biệt dành cho các bạn trẻ đang bước vào cuộc sống. Đó là lứa tuổi với nhiều hoài bão thật đẹp, đầy nhiệt huyết tuổi trẻ trước những điều mới mẻ của cuộc sống. Và đây cũng là giai đoạn rộng mở với rất nhiều ngả rẽ và khó khăn cần vượt qua để có thể thực hiện được những ước mơ của mình.

Qua những trang viết ngắn ngủi nhưng ẩn chứa biết bao bài học giá trị về nhân cách sống và cách nhìn cuộc đời, Hạt Giống Tâm Hồn Dành cho Sinh viên Học sinh như một lời chia sẻ tinh thần mỗi khi chúng ta lâm vào hoàn cảnh khó khăn, bất hạnh. Cuốn sách tập hợp những câu chuyện ý nghĩa về nghị lực vượt lên thử thách, về niềm tin của con người đối với bản thân và những điều tốt đẹp của cuộc sống.

Mong rằng những câu chuyện bình dị trong tập sách này sẽ là nguồn động viên tinh thần giúp các bạn trẻ, các bạn học sinh – sinh viên vươn lên trong cuộc sống. Hy vọng nó sẽ mang đến cho các bạn nghị lực, niềm tin và cảm hứng mới trong học tập, công việc, cuộc sống và giúp các bạn sức mạnh để thành công.',
'30', '192', '14', '40', '60', '2023-12-12 00:00:00.0000000', '12', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '47', 'DanhChoHSSV_1.jpg',b'1'),(NULL, '47', 'DanhChoHSSV_2.jpg', b'1'),(NULL, '47', 'DanhChoHSSV_3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (48, NULL, '8935086857793', 'Chicken Soup For The Soul - Gieo Hạt Mầm Tử Tế','Amy Newmark','Trong thế giới hiện đại, khi cuộc sống mỗi ngày luôn dồn dập những sự kiện, chủ nghĩa cá nhân lên ngôi và mỗi người đều có trong tay một chiếc điện thoại thông minh, dường như chúng ta đang dân trở nên bàng quan, xa cách và vô cảm với nhau hơn. Khi những tin tức tiêu cực về chiến tranh, tội phạm bao lực và sự thiếu vắng tình người tràn ngập trên mặt báo, thật khó để tin rằng thế giới này vẫn còn tồn tại tình yêu thương, sự tử tế hay những hành động giúp đỡ vô điều kiện giữa người với người. Nhưng sự thật có đúng là như thể không? Tử tế là một trong những điều tốt đẹp nhất mà chúng ta có thể trao cho nhau. Những hành động tử tế mang lại niềm vui, cảm giác bình yên và biết ơn, ở cả người trao lẫn người nhận. Nhận ra có người đang cần được giúp đỡ và đưa cho họ một cánh tay...',
'30', '168', '14', '40', '62', '2023-12-12 00:00:00.0000000', '12', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '48', 'gieohatmamtute_1.jpg', b'1'),(NULL, '48', 'gieohatmamtute_2.jpg', b'1'),(NULL, '48', 'gieohatmamtute_3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (49, NULL, '8794069305344', '“Chém" Tiếng Anh Không Cần Động Não - Tặng Kèm Bộ Video Luyện Nghe-Nói + Sổ Học Từ Vựng','Bino Chém Tiếng Anh','“Chém"" Tiếng Anh Không Cần Động Não

“Phần lớn người Việt đều biết tiếng Anh NHIỀU HƠN HỌ NGHĨ, chỉ là họ chưa biết làm thế nào để đưa ý tưởng thành lời nói mà thôi!” - Bino chém tiếng Anh

Biết nhiều tiếng Anh nhưng không… nói được - điều này có đúng với bạn không? Sao 12 năm học tiếng Anh không giúp chúng ta xử lý được những cuộc trò chuyện thông thường?

Sao điểm tiếng Anh trên lớp toàn 9, 10 nhưng gặp Tây lại ấp a ấp úng? Sao sở hữu điểm IELTS 7.0+ nhưng vẫn “sốc ngôn ngữ” khi ra nước ngoài?

Nguyên nhân có lẽ nằm nhiều ở cách giáo dục truyền thống tại Việt Nam - vốn nặng tính học thuật, thiếu “hơi thở đời thường”, ít luyện tập và ít nhấn mạnh vào thứ ngôn ngữ tự nhiên mà người bản xứ thường nói với nhau.

“Chém tiếng Anh không cần động não” của tác giả Bino - chủ kênh TikTok @binochemtienganh với hơn 750 nghìn người theo dõi - được thiết kế để giải quyết điểm khó cố hữu trên. Với cách tiếp cận nặng tính thực tiễn, thực chiến và luyện tập - đây chính là cuốn sách luyện nói tiếng Anh dành cho những ai đang muốn thực sự nói được tiếng Anh trong đời sống.',
'13', '200', '11', '40', '126', '2023-12-12 00:00:00.0000000', '9', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '49', 'ChemTA_1.jpg', b'1'),(NULL, '49', 'ChemTA_2.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (50, NULL, '8935309503834', 'Nuance - 50 Sắc Thái Của Từ','Kenvin Kang, Hanna Byun','Nuance - 50 sắc thái của từ là cuốn sách có thể giúp bạn nhận biết những khác biệt tinh tế về nghĩa của các từ tưởng chừng giống nhau, từ đó nâng trình tiếng Anh của bạn lên một “tầm cao” mới - tự nhiên hơn, linh hoạt hơn và chính xác hơn.

Không hề quá lời khi nói rằng hiểu và sử dụng đúng sắc thái của từ chính là một thước đo năng lực của người học tiếng Anh trình độ trung-cao cấp. Đó là vì những khác biệt vô cùng nhỏ đó lại có thể tác động vô cùng lớn tới cách người khác hiểu một văn bản hay lời nói. Bạn không muốn lời khen của mình bị đối phương hiểu thành một lời chê bay hay châm chọc? Bạn không muốn mình thành kẻ “lạc loài” chỉ vì không thể hiểu một câu đùa trong nhóm bạn? Vậy hãy dành thời gian học về sắc thái của từ, để “lên màu” cho thứ tiếng Anh trước giờ vốn khá khô cứng và sách vở khi bạn chỉ tập trung học để phục vụ cho thi cử.

Với Nuance – 50 sắc thái của từ, người học sẽ được:

- Học 164 nhóm từ phổ biến nhất trong hội thoại và văn bản tiếng Anh để hiểu cặn kẽ về ý nghĩa cùng sắc thái của từng từ

- Được luyện tập cách sử dụng từ đúng và hiệu quả thông qua các tình huống hội thoại gần gũi, sinh động

- Luyện kỹ năng nghe-nói thông qua file MP3 với giọng đọc của người bản ngữ',
'13', '264', '16', '40', '103', '2023-12-12 00:00:00.0000000', '9', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '50', '50SacThaiCuaTu_1.jpg', b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (51, NULL, '8794069303524', 'Giải Thích Ngữ Pháp Tiếng Anh','Mai Lan Hương, Hà Thanh Uyên','Ngữ pháp Tiếng Anh tổng hợp các chủ điểm ngữ pháp trọng yếu mà học sinh cần nắm vững. Các chủ điểm ngữ pháp được trình bày rõ ràng, chi tiết. Sau mỗi chủ điểm ngữ pháp là phần bài tập & đáp án nhằm giúp các em củng cố kiến thức đã học, đồng thời tự kiểm tra kết quả.

Sách Giải Thích Ngữ Pháp Tiếng Anh, tác Mai Lan Hương – Hà Thanh Uyên, là cuốn sách ngữ pháp đã được phát hành và tái bản rất nhiều lần trong những năm qua.

Giải Thích Ngữ Pháp Tiếng Anh được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao, phù hợp với mọi trình độ. Các chủ điểm ngữ pháp trong từng chương được biên soạn chi tiết, giải thích cặn kẽ các cách dùng và quy luật mà người học cần nắm vững. Sau mỗi chủ điểm ngữ pháp là phần bài tập đa dạng nhằm giúp người học củng cố lý thuyết.

Hy vọng Giải Thích Ngữ Pháp Tiếng Anh sẽ là một quyển sách thiết thực, đáp ứng yêu cầu học, ôn tập và nâng cao trình độ ngữ pháp cho người học và là quyển sách tham khảo bổ ích dành cho giáo viên.',
'13', '560', '17', '40', '103', '2023-12-12 00:00:00.0000000', '14', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '51', 'NguPhapTA_1.jpg', b'1'),(NULL, '51', 'NguPhapTA_2.jpg', b'1'),(NULL, '51', 'NguPhapTA_3.jpg', b'1'),(NULL, '51', 'NguPhapTA_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (52, NULL, '9786043987102', 'Tiếng Anh Cho Người Bắt Đầu ','Trang Anh, Minh Anh','Trong xu thế hội nhập và toàn cầu hoá như hiện nay, việc thông thạo tiếng Anh sẽ là một lợi thế, giúp chúng ta mở mang tầm mắt, nâng cao tri thức và có nhiều cơ hội việc làm cũng như sự thăng tiến. Có lẽ vì thế mà ngày càng có nhiều người quyết tâm theo học ngôn ngữ này. Tuy nhiên, với đại đa số người bắt đầu học tiếng Anh đều gặp khó khăn trong việc xác định nội dung và phương pháp học tập hiệu quả. Có rất nhiều người không biết nên bắt đầu học từ đâu, nên học những nội dung gì, nên học phần gì trước phần gì sau. Đó là còn chưa kể đến chương trình học trong nhà trường phổ thông vẫn nặng về lí thuyết và thi cử nên có rất nhiều bạn học sinh không thể tự tin sử dụng tiếng Anh trong giao tiếp hàng ngày.

Xuất phát từ thực tế đó, nhóm tác giả đã dành nhiều thời gian và tâm huyết để biên soạn cuốn TIẾNG ANH CHO NGƯỜI BẮT ĐẦU. Cuốn sách gồm có 30 bài, trong đó mỗi bài lại được chia thành các phần: nghe- nói- đọc- viết và ngữ pháp. Điểm đặc biệt của cuốn sách này là nó khai thác ý nghĩa và cách dùng của ngữ pháp tiếng Anh, rồi từ chính việc nắm được ngữ pháp tiếng Anh sẽ giúp người học vận dụng nó để nói đúng trong giao tiếp. Các tình huống giao tiếp được xây dựng dựa trên các cách dùng của các hiện tượng ngữ pháp và từ các

chủ đề giao tiếp sẽ phát triển vốn từ vựng theo chủ đề. Khi đã có vốn từ vựng và ngữ pháp thì người học sẽ được đi vào rèn luyện các kĩ năng nghe- nói- đọc- viết. Tất cả những điều đó được tích hợp trong từng đơn vị bài học của cuốn sách. Bên cạnh một hệ thống bài học được xây dựng logic, khoa học và dễ hiểu, thì cuốn sách còn có lời giải chi tiết cho từng câu bài tập và có file nghe được thu âm bởi chính giáo viên bản xứ. Cuốn sách nhằm giúp khắc phục nhược điểm trong thói quen học ngoại ngữ của người học; đó là sợ nói sai, dùng sai ngữ pháp và cũng chính vì nỗi sợ đó mà cản trở sự tự tin trong việc sử dụng ngôn ngữ. Cuốn sách bắt đầu đi từ ngữ pháp, nhưng từ ngữ pháp hướng tới việc phát triển đầy đủ các kĩ năng ngôn ngữ cho người học và giúp người học tự tin sử dụng tiếng Anh trong công việc cũng như trong cuộc sống hàng ngày.',
'13', '467', '17', '40', '149', '2023-12-12 00:00:00.0000000', '13', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '52', 'TAChoNguoiBatDau_1.jpg', b'1'),(NULL, '52', 'TAChoNguoiBatDau_2.jpg', b'1'),(NULL, '52', 'TAChoNguoiBatDau_3.jpg', b'1'),(NULL, '52', 'TAChoNguoiBatDau_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (53, NULL, '9786043775662', 'Giáo Trình Chuẩn HSK 1','Khương Lệ Bình, Vương Phương, Vương Phong, Lưu Lệ Bình','Giáo Trình Chuẩn HSK 1

Được chia thành 6 cấp độ với tổng cộng 18 cuốn, Giáo trình chuẩn HSK có những đặc điểm nổi bật sau:

• Kết hợp thi cử và giảng dạy: Được biên soạn phù hợp với nội dung, hình thức cũng như các cấp độ của đề thi HSK thật, bộ sách này có thể được sử dụng đồng thời cho cả hai mục đích là giảng dạy tiếng Trung Quốc và luyện thi HSK. • Bố cục chặt chẽ và khoa học: Các điểm ngữ pháp được giải thích cặn kẽ, phần ngữ âm và chữ Hán được trình bày từ đơn giản đến phức tạp theo từng cấp độ.

• Đề tài quen thuộc, nhiều tình huống thực tế: Bài học được thiết kế không quá dài và đề cập đến nhiều tình huống (có file MP3 kèm theo), giúp bạn rèn luyện các kỹ năng ngôn ngữ và tránh cảm giác căng thẳng trong lúc học. • Cách viết thú vị: Bằng cách viết sinh động kèm nhiều hình ảnh minh họa, tác giả bộ sách chỉ cho bạn thấy học tiếng Trung Quốc không hề khô khan, nhàm chán.

Với nhiều ưu điểm nổi bật như vừa nêu, Giáo trình chuẩn HSK không chỉ là tài liệu giảng dạy hữu ích ở các trung tâm dạy tiếng Trung Quốc mà còn rất thích hợp với những người muốn tự học ngôn ngữ này.',
'14', '141', '17', '40', '150', '2023-12-12 00:00:00.0000000', '12', '1', b'1'); 



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '53', 'GiaoTrinhHSK_1.jpg', b'1'),(NULL, '53', 'GiaoTrinhHSK_2.jpg', b'1'),(NULL, '53', 'GiaoTrinhHSK_3.jpg', b'1'),(NULL, '53', 'GiaoTrinhHSK_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (54, NULL, '9786043775679', 'Giáo Trình Chuẩn HSK 2 - Bài Học','Khương Lệ Bình','Được chia thành 6 cấp độ với tổng cộng 18 cuốn, Giáo trình chuẩn HSK có những đặc điểm nổi bật sau:

Kết hợp thi cử và giảng dạy: Được biên soạn phù hợp với nội dung, hình thức cũng như các cấp độ của đề thi HSK thật, bộ sách này có thể được sử dụng đồng thời cho cả hai mục đích là giảng dạy tiếng Trung Quốc và luyện thi HSK.

Bố cục chặt chẽ và khoa học: Các điểm ngữ pháp được giải thích cặn kẽ, phần ngữ âm và chữ Hán được trình bày từ đơn giản đến phức tạp theo từng cấp độ.

Đề tài quen thuộc, nhiều tình huống thực tế: Bài học được thiết kế không quá dài và đề cập đến nhiều tình huống (có đĩa MP3 kèm theo), giúp bạn rèn luyện các kỹ năng ngôn ngữ và tránh cảm giác căng thẳng trong lúc học.

Cách viết thú vị: Bằng cách viết sinh động kèm nhiều hình ảnh minh họa, tác giả bộ sách chỉ cho bạn thấy học tiếng Trung Quốc không hề khô khan, nhàm chán.

Với nhiều ưu điểm nổi bật như vừa nêu, Giáo trình chuẩn HSK không chỉ là tài liệu giảng dạy hữu ích ở các trung tâm dạy tiếng Trung Quốc mà còn rất thích hợp với những người muốn tự học ngôn ngữ này.',
'14', '142', '18', '40', '150', '2023-12-12 00:00:00.0000000', '12', '1', b'1'); 



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '54', 'GiaoTrinhHSK2_1.jpg', b'1'),(NULL, '54', 'GiaoTrinhHSK2_2.jpg',b'1'),(NULL, '54', 'GiaoTrinhHSK2_3.jpg', b'1'),(NULL, '54', 'GiaoTrinhHSK2_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (55, NULL, '9786043643886', '301 Câu Đàm Thoại Tiếng Hoa ','Trương Văn Giới, Lê Khắc Kiều Lục','Giáo trình "301 câu đàm thoại tiếng Hoa" được biên dịch và bổ sung dựa trên cơ sở cuốn sách giáo khoa "Hán ngữ hội thoại 301" do các chuyên gia Hán ngữ của học viện ngôn ngữ Bắc kinh biên soạn.

Giáo trình gồm 48 bài trong đó có 8 bài ôn tập, bao quát trên 800 từ thường dùng. Nội dung các bài tập gồm các phần "Mẫu câu", "Đàm thoại", "Từ mới", "Chú ý từ ngữ", "Ngữ pháp", "bài tập".

Giáo trình biên soạn theo hướng "mẫu câu" để đi vào thực hành giao tiếp, nhưng cũng giới thiệu khái quát cấu trúc ngữ pháp của tiếng Hán hiện đại.',
'14', '400', '9', '40', '54', '2023-12-12 00:00:00.0000000', '15', '1', b'1'); 



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '55', '301DamThoaiTiengHoa_1.jpg', b'1'),(NULL, '55', '301DamThoaiTiengHoa_2.jpg', b'1'),(NULL, '55', '301DamThoaiTiengHoa_3.jpg', b'1'),(NULL, '55', '301DamThoaiTiengHoa_4.jpg',b'1'),(NULL, '55', '301DamThoaiTiengHoa_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (56, NULL, '8935246927717', '10 Phút Tự Học Tiếng Trung Mỗi Ngày','The Zhishi','10 Phút Tự Học Tiếng Trung Mỗi Ngày

Chỉ cần bỏ ra 10 phút không lướt facebook, hay 10 phút tạm dừng mắt khỏi chiếc tivi… mỗi ngày là bạn có thể luyện tập để thành thạo tiếng Trung cơ bản, tự tin đi du lịch với chi phí cực thấp.

10 phút tự học tiếng Trung mỗi ngày – Giỏi tiếng Trung mở ra những cơ hội mới, chân trời mới!

Nếu bạn đang:

Là người đi làm, công việc quá bận rộn khiến thời gian tự học tiếng Trung bị thu hẹp
Bạn đang là học sinh, sinh viên và muốn thành thạo thêm một thứ ngôn ngữ mới là tiếng Trung
Bạn muốn học tiếng Trung nhưng rất bận rộn
Bạn muốn đi du lịch để khám phá văn hóa, con người Trung Hoa với chi phí cực thấp

Vậy hãy bắt đầu khơi dậy niềm yêu thích tiếng Trung bằng cuốn sách “10 phút tự học tiếng Trung mỗi ngày”. Cuốn sách được biên soạn nhằm giúp bạn làm quen với ngôn ngữ tượng hình và phục vụ cho nhu cầu của bạn khi đi du lịch hoặc giao tiếp trong cuộc sống hàng ngày.
Bạn có tin nếu mỗi ngày bạn dành ra 10 phút, tương ứng với 0.7% quỹ thời gian một ngày, một tháng bạn có 5 giờ để học, 3 tháng học 15 giờ là bạn đã có thể sử dụng thành thạo tiếng Trung cơ bản.',
'14', '199', '6', '40', '55', '2023-12-12 00:00:00.0000000', '13', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '56', '10PTuHocTiengTrung_1.jpg', b'1'),(NULL, '56', '10PTuHocTiengTrung_2.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (57, NULL, '9786047749614', 'Hành Trình Phiên Dịch Sống Động - Luyện Tập Phiên Dịch Tiếng Nhật Trong Thực Tế','Thanh Thanh Huyền (Huyền Lục Thư)','[HỢP TÁC XUẤT BẢN] HÓA THÂN VÀO VAI PHIÊN DỊCH VIÊN CHUYÊN NGHIỆP TRONG “HÀNH TRÌNH PHIÊN DỊCH SỐNG ĐỘNG”

Cuốn sách “Hành trình phiên dịch sống động - Luyện tập phiên dịch tiếng Nhật trong thực tế” dày 608 trang với 68 chủ đề biên - phiên dịch đa dạng, kèm FILE ÂM THANH, cung cấp những bối cảnh sát thực tế phiên dịch Nhật - Việt, Việt - Nhật như: phiên dịch cuộc họp nội bộ trong công ty, đàm phán thương mại, sáp nhập doanh nghiệp, tư vấn đầu tư, tư vấn kế toán, phiên dịch hội thảo, phiên dịch IT, du học, xuất khẩu lao động, cuộc họp cao cấp của quan chức hai nước, …

Các chủ đề đều có đi kèm file ghi âm sống động giúp độc giả thể luyện nghe và đắm chìm trong bầu không khí phiên dịch chuyên nghiệp.

Sách phù hợp cho tất cả những ai (từ trình độ JLPT N3 trở lên) muốn nâng cao năng lực hội thoại trong cuộc sống, năng lực nghe hiểu, đọc hiểu và năng lực biên dịch, phiên dịch tiếng Nhật.',
'15', '607', '17', '40', '344', '2023-12-12 00:00:00.0000000', '9', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '57', 'HanhTrinhPhienDich.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (58, NULL, '8935092556598', 'Tự Học Tiếng Nhật Thương Mại Trong 30 Giờ','Miyazaki Michiko, Goshi Sachiko','Cuốn sách dành cho những bạn muốn sử dụng tiếng Nhật để giao tiếp phục vụ cho công việc, kinh doanh và những người muốn làm việc tại đất nước Nhật trong tương lai

Đặc điểm của cuốn sách:

1. Thời gian học: 30 giờ Với cuốn sách này, bạn sẽ được trang bị những kiến thức cơ bản cần thiết nhất trong một khoảng thời gian ngắn về văn hóa giao tiếp trong kinh doanh tại Nhật Bản

2. Phân chia nội dung theo từng chủ đề Sách được phân chia thành các bài học theo từng chủ đề khác nhau nhằm hướng tới việc giúp cho học viên có thể sử dụng tiếng Nhật một cách hiệu quả.

3. Minh họa sinh động Các tình huống đươc minh họa bằng hình ảnh sinh động giúp học viên dễ dàng nắm bắt, hiểu được cách sử dụng từ ngữ thích hợp trong từng hoàn cảnh',
'15', '184', '19', '40', '120', '2023-12-12 00:00:00.0000000', '2', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '58', 'TuHocTiengNhat30h_1.jpg', b'1'),(NULL, '58', 'TuHocTiengNhat30h_2.jpg', b'1'),(NULL, '58', 'TuHocTiengNhat30h_3.jpg', b'1'),(NULL, '58', 'TuHocTiengNhat30h_4.jpg', b'1'),(NULL, '58', 'TuHocTiengNhat30h_5.jpg', b'1'),(NULL, '58', 'TuHocTiengNhat30h_6.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (59, NULL, '8935236414524', 'Mẫu Câu Thông Dụng Trong Tiếng Nhật','Minh Tân','Mẫu câu thông dụng trong tiếng Nhật 
Mỗi mẫu câu được phân tích rõ ràng về cách thức sử dụng: trong ngữ cảnh thế nào, tại sao lại sử dụng mẫu câu này mà không phải mẫu khác, đối chiếu những điểm giống và khác nhau giữa chúng. Sau đó là những ví dụ minh họa dễ hiểu bằng cả tiếng Nhật và tiếng Việt.
Nhằm đáp ứng nhu cầu của bạn học, chúng tôi biên soạn cuốn: Mẫu câu thông dụng trong tiếng Nhật để giúp bạn đọc tháo gỡ khó khăn này.
Ưu điểm của cuốn sách là:
- Đưa ra các mẫu câu kèm với ví dụ sao cho người sử dụng có thể nắm được cách sử dụng.
- Đưa ra các ví dụ sai trong phần giải thích khi cần thiết, giúp người đọc sử dụng lưu ý tới các nội dung dễ nhầm.',
'15', '235', '19', '40', '68', '2023-12-12 00:00:00.0000000', '6', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`, `Status`) 
VALUES (NULL, '59', 'MauCauThongDungTN_1.jpg', b'1'),(NULL, '59', 'MauCauThongDungTN_2.jpg', b'1'),(NULL, '59', 'MauCauThongDungTN_3.jpg',b'1'),(NULL, '59', 'MauCauThongDungTN_4.jpg', b'1'),(NULL, '59', 'MauCauThongDungTN_5.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (60, NULL, '8935072953188', 'Các Mẫu Câu Tiếng Nhật Căn Bản','Nguyễn Vân Anh, Thuỳ Anh','Quyển “Các mẫu câu tiếng Nhật căn bản” được biên soạn dành cho các bạn học sinh, sinh viên và những người đã đi làm có sự quan tâm đến tiếng Nhật. 

Sách bao gồm nhiều mẫu câu căn bản mà những người yêu thích tiếng Nhật và cần sử dụng tiếng Nhật để giao tiếp có thể tham khảo và học tập. Bên cạnh đó, sách còn đưa vào rất nhiều bài đàm thoại thực tiễn nhằm giúp người học ứng dụng những mẫu câu căn bản vào thực tế giao tiếp với người Nhật. 

Sách có bố cục rõ ràng, các bài đàm thoại được trình bày theo chủ đề từ thăm hỏi, giới thiệu bản thân cho đến cách thức giao tiếp tại trường học, nơi làm việc, bưu điện, ngân hàng, và nhiều nơi công cộng khác. Đặc biệt, sách có giải thích rõ ràng các từ ngữ và cách dùng câu trong tiếng Nhật, góc kiến thức để bạn đọc tìm hiểu thêm, và phần luyện dịch từ tiếng Nhật sang tiếng Việt.

Hy vọng với nội dung và bố cục trên, sách sẽ là một tài liệu quí báu cho những ai quan tâm đến việc học tập và trau dồi các kĩ năng tiếng Nhật.',
'15', '326', '5', '40', '100','2023-12-12 00:00:00.0000000', '5', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '60', 'CacMauCauTiengNhat_1.jpg',b'1'),(NULL, '60', 'CacMauCauTiengNhat_2.jpg',b'1'),(NULL, '60', 'CacMauCauTiengNhat_3.jpg', b'1'),(NULL, '60', 'CacMauCauTiengNhat_4.jpg',b'1'),(NULL, '60', 'CacMauCauTiengNhat_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (61, NULL, '9786045896051', 'Giáo Trình Luyện Dịch Trung Cao Cấp Tiếng Hàn Quốc','Trường Hàn Ngữ Việt Hàn Kanata','Cuốn sách tập hợp các bài phát biểu, kịch bản, các loại hợp đồng, mẫu công văn, thư hồi đáp, bản tin tiếng Hàn, điều lệ công ty Hàn quốc, nội qui công ty từ nhiều nguồn khác nhau v.v...

Sách được trình bày từ phiên dịch (dịch nói) đến biên dịch (dịch viết), từ những bài đơn giản đến những bài phức tạp đại đa số là tiếng Hàn cùng với các từ chuyên môn, nhưng cũng có cả những bài mẫu tiếng Việt để luyện dịch sang tiếng Hàn để giúp các bạn làm công tác biên phiên dịch có thể dịch một cách nhuần nguyễn và giống người bản xứ hơn.',
'16', '213', '6', '40', '67','2023-12-12 00:00:00.0000000', '12', '1', b'1'); 

INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '61', 'LuyenDichTrungCaoHQ_1.jpg', b'1'),(NULL, '61', 'LuyenDichTrungCaoHQ_2.jpg', b'1'),(NULL, '61', 'LuyenDichTrungCaoHQ_3.jpg', b'1'),(NULL, '61', 'LuyenDichTrungCaoHQ_4.jpg', b'1'),(NULL, '61', 'LuyenDichTrungCaoHQ_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (62, NULL, '9786045856994', '1200 Câu Luyện Dịch Tiếng Hàn Quốc','Lê Huy Khoa','Cuốn sách 1200 CÂU LUYỆN DỊCH TIẾNG HÀN QUỐC cùa ThS Lê Huy Khoa xuất bản nhằm đáp ứng nhu cầu luyện dịch của những bạn đọc sử dụng tiếng Hàn.',
'16', '236', '1', '40', '58','2023-12-12 00:00:00.0000000', '12', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '62', '1200LuyenDichHQ_1.jpg', b'1'),(NULL, '62', '1200LuyenDichHQ_2.jpg', b'1'),(NULL, '62', '1200LuyenDichHQ_3.jpg', b'1'),(NULL, '62', '1200LuyenDichHQ_4.jpg', b'1'),(NULL, '62', '1200LuyenDichHQ_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (63, NULL, '9786043120035', 'Quick Korean - Nói Tiếng Hàn Cấp Tốc','Khrongkhwan Chimrarong','Quick Korean - Nói Tiếng Hàn Cấp Tốc

Quick Korean - Nói Tiếng Hàn Cấp Tốc là một công cụ hữu hiệu dành cho những bạn muốn tiếp xúc, học tập ngôn ngữ Hàn trên phương diện giao tiếp. Đặc biệt, cuốn sách mang đến những phương pháp, bài học hữu hiệu để bạn có thể nói, giao tiếp một cách nhanh và hiệu quả nhất đúng theo tên gọi - Quick Korean.',
'16', '492', '2', '40', '146','2023-12-12 00:00:00.0000000', '12', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '63', 'QuickKorea_1.jpg', b'1'),(NULL, '63', 'QuickKorea_2.jpg', b'1'),(NULL, '63', 'QuickKorea_3.jpg', b'1'),(NULL, '63', 'QuickKorea_4.jpg', b'1'),(NULL, '63', 'QuickKorea_5.jpg', b'1'),(NULL, '63', 'QuickKorea_6.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (64, NULL, '8935086845868', 'Ngữ Pháp Cơ Bản Tiếng Hàn','ThS Lê Huy Khoa','Mối giao bang giữa Việt Nam và Hàn Quốc đã không ngừng phát triển trên nhiều lĩnh vực kể từ khi hai nước thiết lập quan hệ ngoại giao chính thức… Ngày càng có nhiều công ty Hàn Quốc đầu tư vào Việt Nam và số lượng tu nghiệp sinh học tập, lao động tại Hàn Quốc cũng ngày một tăng nhanh. Nhu cầu học tiếng Hàn để tìm hiểu về đất nước, con người và nền văn hóa Hàn Quốc đồng thời để phục vụ cho công việc của mình là một nhu cầu chính đáng của nhiều người Việt Nam hiện nay.

Quyển Ngữ Pháp Cơ Bản Tiếng Hàn là một giáo trình thật sự cần thiết và hữu ích cho bạn đọc với nhiều ưu điểm nổi bật. Đây là quyển sách đầu tiên hệ thống một cách đầy đủ, chính xác và khoa học nhất các kiến thức cơ bản về ngữ pháp tiếng Hàn như danh từ, động từ, tính từ… Sách được phân chia theo chủ đề: mỗi chương đề cập đến một hình thức ngữ pháp cơ bản với các đề mục cụ thể như trợ từ, đại danh từ, động từ và tính từ bất quy tắc, thể chủ động… Mỗi chủ đề ngữ pháp ngoài những trình bày về cấu trúc kèm ví dụ minh họa còn có những lưu ý về cách sử dụng và những bài thực hành luyện tập nhằm nâng cao kiến thức của người học.

Ngoài ra phần phiên âm trong quyển sách này được sử dụng phiên âm tiếng Việt thay cho phiên âm La tinh để bạn đọc dễ sử dụng hơn. Thêm một ưu điểm nữa của cuốn sách là sự trình bày rõ ràng, dễ học, dễ tra cứu, các câu và từ tiếng Hàn được dịch và chuyển âm sang tiếng Việt dễ hiểu và dễ ứng dụng. Hy vọng cuốn sách này sẽ giúp ích cho tất cả các bạn đang học, nghiên cứu và cần sử dụng ngôn ngữ tiếng Hàn, giúp cho hai dân tộc Việt – Hàn ngày càng gắn bó và hiểu nhau hơn nữa.',
'16', '286', '11', '40', '102','2023-12-12 00:00:00.0000000', '16', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '64', 'NguPhapHQCoBan_1.jpg', b'1'),(NULL, '64', 'NguPhapHQCoBan_2.jpg', b'1'),(NULL, '64', 'NguPhapHQCoBan_3.jpg', b'1'),(NULL, '64', 'NguPhapHQCoBan_4.jpg', b'1'),(NULL, '64', 'NguPhapHQCoBan_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (65, NULL, '8935072950361', 'Tiếng Việt Cho Người Nước Ngoài','Dana Healy','Sách "Tiếng Việt Cho Người Nước Ngoài" ra đời nhằm đáp ứng nhu cầu học tiếng Việt và tìm hiểu văn hóa Việt Nam của người nước ngoài cùng với người Việt định cư ở nước ngoài ngày càng nhiều như hiện nay.

Trong cuốn sách này, người học sẽ được hướng dẫn chi tiết từ cách phát âm, cách viết mẫu tự tiếng Việt, các điểm chính yếu của văn phạm tiếng Việt, đàm thoại, từ ngữ và thành ngữ, văn phạm, thực hành, luyện đọc hiểu. Phần hội thoại là các tình huống thật, giúp người học làm quen với lối giao tiếp cùa người Việt Nam. Cũng giống như tất cả những ngôn ngữ khác, văn viết và văn nói tiếng Việt có một số khác biệt như khi sử dụng tiếng lóng, thêm lối nói trang trọng những tình huống đặc biệt.',
'18', '272', '5', '40', '55','2023-12-12 00:00:00.0000000', '13', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '65', 'TiengVietChoNguoiNuocNgoai.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (66, NULL, '8935072950361', 'Tiếng Việt Dành Cho Người Nước Ngoài - Level A','Hữu Đạt, Lê Thị Nhường','Trong vài thập niên gần đây, do quá trình hội nhập nhanh của Việt Nam với quốc tế, nhiều quốc gia đang có xu hướng mở rộng hợp tác và đầu tư mạnh mẽ vào Việt Nam. Chính vì vậy, số lượng người học tiếng Việt mỗi ngày một nhiều.

Để đáp ứng kịp thời việc dạy tiếng Việt cho người nước ngoài, Viện Ngôn ngữ và Văn hóa Phương Đông kết hợp với Hanoibooks cho xuất bản cuốn Tiếng Việt dành cho người nước ngoài A1 + A2 . Đây là cuốn sách dạy tiếng Việt được biên soạn theo phương pháp mới nhờ áp dụng các lý thuyết hiện đại về ngôn ngữ học và văn hóa học. Sách tổ chức các bài giảng theo hướng giao tiếp kết hợp với các bài giảng về cách thực hành tiếng Việt mang tính thực tiễn cao. Học xong giáo trình này, người học về có thể giao tiếp tiếng Việt tương đối thành thạo trong sinh hoạt hàng ngày và trong công việc hành chính ở cơ quan, doanh nghiệp; bước đầu nắm được được các kỹ năng: nghe, nói, đọc, viết ở mức thông dụng.',
'18', '308', '13', '40', '252','2023-12-12 00:00:00.0000000', '11', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '66', 'TiengVietChoNguoiNuocNgoaiLevelA.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (67, NULL, '8935246928165', 'Tiếng Việt Dành Cho Người Hàn - Sơ Cấp','	Park Ji Hoon, Chu Thị Phong Lan, Trần Thị Hường','Tiếng Việt luôn được đánh giá là ngôn ngữ khó bởi hệ thống ngữ pháp đa dạng (phong ba bão táp không bằng ngữ pháp Việt Nam) cùng hệ thống thanh điệu phức tạp. Để đơn giản hóa việc học ngôn ngữ, ban biên tập mang đến cuốn sách Tiếng Việt dành cho người Hàn sơ cấp dành cho những người Hàn muốn bắt đầu học và làm quen với tiếng Việt.

Cấu trúc cuốn sách bao gồm các phần:

Giới thiệu ngữ âm tiếng Việt: Gồm hệ thống nguyên âm, phụ âm, thanh điệu được giải thích một cách chi tiết, cụ thể giúp người học có thể phát âm một cách chính xác

20 bài học với những chủ đề thông dụng, quen thuộc nhất như: giới thiệu bản thân, nghề nghiệp, gia đình, sở thích, thói quen, du lịch,… Mỗi bài học bao gồm các phần:

Hội thoại: với ngôn ngữ và các tình huống thường gặp nhất trong thực tế cuộc sống
Từ vựng: hệ thống từ mới có trong bài hội thoại
Ngữ pháp: giới thiệu những điểm ngữ pháp quan trọng kèm ví dụ chi tiết, dễ hiểu
Luyện tập: các bài tập lồng ghép từ mới và điểm ngữ pháp vừa học  
Bài đọc: các chủ đề quen thuộc, nâng cao khả năng đọc hiểu và cung cấp kiến thức về văn hóa – xã hội – con người Việt Nam
Phần nghe: giúp trau dồi khả năng nghe ',
'18', '340', '15', '40', '144','2023-12-12 00:00:00.0000000', '13', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '67', 'TiengVietChoNguoiHan_1.jpg', b'1'),(NULL, '67', 'TiengVietChoNguoiHan_2.jpg', b'1'),(NULL, '67', 'TiengVietChoNguoiHan_3.jpg', b'1'),(NULL, '67', 'TiengVietChoNguoiHan_4.jpg', b'1'),(NULL, '67', 'TiengVietChoNguoiHan_5.jpg', b'1'),(NULL, '67', 'TiengVietChoNguoiHan_6.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (68, NULL, '8935072956561', 'Ngữ Pháp Tiếng Pháp Căn Bản','Nguyễn Thức Thành Tín, Viên Thế Khánh Toàn, Vũ Triết Minh, Phạm Song Hoàng Phúc','Sách gồm 24 chương, từng bước dẫn dắt người học làm quen với những hiện tương ngôn ngữ, thông qua những bài học ngữ pháp mà chúng tôi từng được học hoặc những bài giảng mà chúng tôi thực hiện trên lớp.',
'17', '183', '18', '40', '120','2023-12-12 00:00:00.0000000', '17', '1', b'1'); 


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '68', 'TiengPhapCanBan_1.jpg', b'1'),(NULL, '68', 'TiengPhapCanBan_2.jpg', b'1'),(NULL, '68', 'TiengPhapCanBan_3.jpg', b'1'),(NULL, '68', 'TiengPhapCanBan_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (69, NULL, '8935072957773','Từ Ngữ Tiếng Pháp Thông Dụng Theo Chủ Đề','Lê Minh Cẩn', 'Từ Ngữ Tiếng Pháp Thông Dụng Theo Chủ Đề được biên soạn với mục đích giúp học sinh và học viên có được tài liệu tham khảo theo chủ đề - dễ nhớ và tra cứu nhanh trong mọi tình huống giao tiếp.

Quyển sách này giúp người học phát huy kiến thức về từ ngữ và có thể ứng dụng theo ngữ cảnh thích hợp và sử dụng chúng nhạy bén trong môi trường Pháp ngữ.

- Chủ đề bao quát trong nhiều lĩnh vực

- Tra cứu nhanh theo chủ đề được phân mục

- Giải thích cụ thể, rõ ràng và dễ hiểu

- Chú thích cách dùng từ thích hợp qua các ví dụ minh họa

Với các chủ điểm trên, chúng tôi tin tưởng tài liệu này sẽ mang lại cho các học viên khả năng làm giàu từ ngữ tiếng Pháp của mình và mau chóng sử dụng chúng thành thạo.',
'17', '162', '18', '40', '71','2023-12-12 00:00:00.0000000', '11', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '69', 'TiengPhapThongDung.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (70, NULL, '8935072957773','Tiếng Pháp Toàn Tập - Ôn Tập Và Thực Hành','David M Stillman, Ronni L Gordon', '"Tiếng Pháp Toàn Tập" là một tập sách dành cho các học viên tiếng Pháp ở trình độ trung cấp và cao cấp như một công cụ hữu dụng trong việc ôn tập và phát triển ngôn ngữ.

Sách gồm:

- Giải thích văn phạm

- Các câu mẫu

- Bài tập thực hành

- Bảng động từ và tự vựng

- Đáp án.',
'17', '424', '18', '40', '103','2023-12-12 00:00:00.0000000', '17', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '70', 'TiengPhapToanTap.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (71, NULL, '8935072957773','Tự Học 5000 Câu Giao Tiếp Tiếng Pháp','Thiên Ân','Sách gồm có hai phần chính:

- Phần 1: 112 tình huống giao tiếp

Dùng cho các mục đích đàm thoại, phần này có nhiều mẫu câu chuyên dùng, được sắp xếp theo tần suất xuất hiện trong giao tiếp hằng ngày.

- Phần 2: 57 bài hội thoại

Đây là những ngữ cảnh sống động, qua đó các mẫu câu đã được giới thiệu trong phần 1 sẽ xuất hiện trở lại, giúp người học củng cố, ghi nhớ, đồng thời vận dụng các kiến thức từ vựng và mẫu câu vào những tình huống giao tiếp thực tiễn.',
'17', '250', '16', '40', '96','2023-12-12 00:00:00.0000000', '5', '1', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '71', '5000CauTiengPhap.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (72, NULL, '8935072957773','Tự Học 3000 Câu Giao Tiếp Tiếng Thái','Tuấn Kiệt','Sách chia thành ba phần với 105 bài học:

Phần 1: Giao tiếp - tổng hợp các câu giao tiếp thông dụng trong cuộc sống hàng ngày. Bạn sẽ học các mẫu câu giao tiếp cách chào hỏi, giới thiệu bản thân, nói về sở thích, nghề nghiệp, mua sắm, và giao tiếp tại nhà hàng, rạp chiếu phim, bệnh viện và nhiều tình huống khác. Những mẫu câu này sẽ giúp bạn tự tin và linh hoạt khi giao tiếp với người dân địa phương.

Phần 2: Công sở - tập trung vào các mẫu câu phổ biến trong tình huống công việc. Bạn sẽ học các mẫu câu giao tiếp thường gặp trong môi trường công sở như khi đi phỏng vấn xin việc, nói về kinh nghiệm làm việc, bằng cấp và kỹ năng, làm quen với đồng nghiệp mới, các quy định công ty, thăng chức và tiền thưởng, và nhiều nội dung khác liên quan đến môi trường làm việc.

Phần 3: Du lịch - trình bày các mẫu câu thông dụng trong các tình huống du lịch. Bạn sẽ học các câu giao tiếp nói về các điểm du lịch, đặt phòng khách sạn, chuẩn bị giấy tờ, và đối mặt với các tình huống khi đi máy bay. Những câu này sẽ giúp bạn tự tin giao tiếp trong hành trình du lịch của mình.

Tất cả các mẫu câu trong quyển sách đều được trình bày ở dạng song ngữ Thái - Việt, kèm theo phiên âm rõ ràng và dễ hiểu. Điều này giúp bạn tiếp cận tiếng Thái một cách dễ dàng và tự tin hơn trong quá trình học.',
'19', '356', '13', '40', '126','2023-12-12 00:00:00.0000000', '5', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '72', '3000CauTiengThai_1.jpg', b'1'),(NULL, '72', '3000CauTiengThai_2.jpg', b'1'),(NULL, '72', '3000CauTiengThai_3.jpg', b'1'),(NULL, '72', '3000CauTiengThai_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (73, NULL, '8935280910188','Ngữ Pháp Pali','Charles Duroselle','Văn học Phật giáo truyền thống sử dụng được bốn loại ngôn ngữ cổ như Pāli, Sanskrit, Trung, Tây Tạng. Ngoài bốn loại ngôn ngữ trên, ngôn ngữ Magadhῑ được biết như là một loại ngôn ngữ của Phật dạy (Dhammanirutti) trong truyền thống Phật giáo Theravada, nó được ngài Buddhaghosa ca ngợi như là ngôn ngữ gốc (mūlabhāsa), những lời dạy của chính Đức Thế Tôn (sakānirutti).

Theo các nhà ngữ pháp Pāli cho rằng, kiến thức về ngôn ngữ Pāli vô cùng cần thiết đối với việc hiểu những lời dạy của Đức Phật, nó chứa đựng con đường giải thoát mà được dạy bởi bậc Điều Ngự Trượng Phu (Jina) (Tham khảo Kinh giáng phúc trong Kaccāyanavyākaraṇa). Truyền thống Theravada nhấn mạnh đến triết lý Phật giáo để hiểu được nghĩa chính xác, tường tận của lời Phật dạy. Do đó, để hiểu sâu về triết lý đó thì cần phải nắm đến bốn loại paṭisaṃbhidās, đó là dhamma, attha, nirutti and patibhāna.

Ngữ pháp là phương tiện hữu hiệu nhất để hiểu về bất kỳ ngôn ngữ nào và Pāli không ngoại trừ nguyên tắc ấy. Trong truyền thống Phật giáo Theravada, chúng ta cần biết ít nhất năm loại ngữ pháp Pāli. Chúng bao gồm Bodhisattavyākaraṇa, Sabbaguṇākaravyākaraṇa, Kaccāyanavyākaraṇa, Saddanīti and Moggallānavyākaraṇa. Trong đó, hai loại đầu không còn sử dụng được nữa và chúng được tìm thấy trong các công trình trích dẫn, nghiên cứu ngữ pháp sau này. Từ khi văn phạm Pāli truyền thống được viết dưới dạng ngôn ngữ Pāli, chúng không dễ dàng sử dụng đối với sinh viên mới học Pāli.',
'19', '468', '16', '40', '129','2023-12-12 00:00:00.0000000', '9', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '73', 'NguPhapPali_1.jpg',b'1'),(NULL, '73', 'NguPhapPali_2.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (74, NULL, '9786043268515','Nâng Cao Từ Vựng Tiếng Tây Ban Nha Theo Chủ Đề Bằng Hình Ảnh','Phương Dung, Tuấn Kiệt','Quyển sách “Nâng cao vốn từ vựng tiếng Tây Ban Nha theo chủ đề bằng hình” được bố cục sách gồm 18 chủ đề, bắt đầu với những chủ đề thông dụng rồi dần dần mở rộng ra các chủ đề rộng lớn bao quát thế giới xung quanh. Các bài học đầu tiên về gia đình, nhà và các hoạt động cộng đồng, trường học, nơi làm việc, mua sắm, giải trí và các chủ đề khác.

Tài liệu này cũng có thể được dùng làm giáo trình giao tiếp toàn diện kết hợp với việc học từ vựng, các kỹ năng nghe và nói, và các chủ đề để viết và thảo luận.

Bảng mục lục cho phép người học nhanh chóng và dễ dàng xác định vị trí của tất cả các từ và chủ đề trong quyển sách này.',
'19', '180', '15', '40', '162','2023-12-12 00:00:00.0000000', '5', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '74', 'TuVungTayBanNha_1.jpg', b'1'),(NULL, '74', 'TuVungTayBanNha_2.jpg', b'1'),(NULL, '74', 'TuVungTayBanNha_3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (75, NULL, '8935095623204','Từ Điển Việt - Nga','Bùi Hiền','Cuốn từ điển Nga- Việt này dành cho đối tượng là người Việt học và tra cứu tiếng Nga: học sinh, sinh viên, người tự học tiếng Nga hoặc học có hướng dẫn. Với quan điểm đó, mục từ của Từ điển được lựa chọn từ những từ có tần suất xuất hiện cao trong tiếng Nga hiện đại, là từ thông dụng trong hoạt động giao tiếp và trong các văn bản. Các ví dụ trong phần nghĩa của từ giải thích ngữ nghĩa và cách sử dụng từ giúp người đọc biết cách dùng, nhớ từ và hình thành thói quen sử dụng từ.',
'19', '1455', '1', '40', '302','2023-12-12 00:00:00.0000000', '9', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '75', 'TuDienNgaViet_1.jpg', b'1'),(NULL, '75', 'TuDienNgaViet_2.jpg', b'1'),(NULL, '75', 'TuDienNgaViet_3.jpg', b'1'),(NULL, '75', 'TuDienNgaViet_4.jpg', b'1'),(NULL, '75', 'TuDienNgaViet_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (76, NULL, '9786044100586','Từ Điển Đức-Việt','Vĩnh Quyên, Như Quỳnh','Mục từ trong từ điển được sắp xếp theo thứ tự cái ABC.

Những chữ cái có dấu đổi âm được coi như những chữ cái bình thường.

Từ điển được biên soạn dành cho người mới bắt đầu học tiếng Đức.

Dễ tra từ, dễ sử dụng.',
'20', '1460', '20', '40', '152','2023-12-12 00:00:00.0000000', '5', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '76', 'TuDienDucViet.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (77, NULL, '8935072956547','Tự Học Tiếng Đức Cho Người Mới Bắt Đầu','	Nguyễn Hoàng Vĩnh Lộc, Nguyễn Lưu Bảo Đoan','Đây là giáo trình tự học tiếng Đức hoàn chỉnh nhất và được biên soạn công phu nhàm giúp người học phát triển cả 4 kỹ năng: Nghe, Nói, Đọc, Viết. Ngoài ra phần chú thích giải ngữ pháp và bài tập áp dung giúp cho các học viên tự phát triển, xây dựng các mẫu câu căn bản và từ đó nâng dàn thành các mẫu câu phức tạp hơn đủ để diễn giải các tình huống thường gặp. Paul Coggle & Heiner Schenke, tác giả của giáo trình tự học này đồng thời cũng là giảng viên tiếng Đức tại viện đại học Luân Đôn Anh Quốc, đã đúc kết nhiều năm kinh nghiệm dạy tiếng Đức cho người nước ngoài.

Cấu trúc của giáo rình rất rõ ràng:

- Bài học với các bài hội thoại sinh động, chú giải ngữ pháp, bài tập ứng dụng. Ngoài ra còn có phần thông tin về đất nước và con người Đức qua các lễ hội truyền thống và lối sống đặc thù của họ.

- Hướng dẫn cách phát âm.

- Cách chia động từ.

Kết thúc quá trình tự học này, người học có thể giao tiếp bằng tiếng Đức tương đối lưu loát và tự tin. Đây cũng là nền tảng nếu bạn muốn đi sâu và tì hiểu ngôn ngữ Đức.',
'20', '318', '12', '40', '100','2023-12-12 00:00:00.0000000', '13', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '77', 'TuHocTiengDuc_1.jpg', b'1'),(NULL, '77', 'TuHocTiengDuc_2.jpg', b'1'),(NULL, '77', 'TuHocTiengDuc_3.jpg', b'1'),(NULL, '77', 'TuHocTiengDuc_4.jpg', b'1'),(NULL, '77', 'TuHocTiengDuc_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (78, NULL, '8935072956547','Cẩm Nang Hướng Dẫn Tự Học Tiếng Đức Trình Độ Sơ Cấp - Trung Cấp','Tuấn Kiệt','Sách gồm có bốn mươi bài học, tám phần ôn tập, và bốn phần đọc. Các phần ôn tập xuất hiện sau mỗi năm bài một lần, và các phần đọc xuất hiện sau mỗi mười bài một lần. Hãy bắt đầu mỗi bài học bằng cách đọc và học trong sách trước khi nghe các phần ghi âm.

DIA LOG (HỘI THOẠI): Mỗi bài học bắt đầu với một bài hội thoại trình bày một tình huống thực tế ở một nơi nói tiếng Đức. Bài hội thoại được theo sau bởi bài dịch. Lưu ý rằng mặc dù có nhiều phương ngữ khu vực và giọng nói, chúng ta sẽ sử dụng ngữ và tiếng Đức chuẩn và từ vựng trong suốt khóa học.

AUSSPRACHE (CÁCH PHÁT ÂM) Trong bài 1 đến bài 10, bạn sẽ học cách phát âm đúng của các nguyên âm và nhị trùng âm, cũng như các phụ âm và các kết hợp phụ âm.

GRAMMATIK UND GEBRAUCH (NGỮ PHÁP VÀ CÁCH DÙNG): Phần này giải thích các điểm ngữ pháp chính được bao gồm trong bài này. Tiêu đề của mỗi chủ đề tương ứng với danh sách của nó trong bảng mục lục.

VOKABELN (TỪ VỰNG): Trong phần này, bạn có thể xem lại các từ và thành ngữ từ bài hội thoại và học từ vựng bổ sung.

BUNGEN (BÀI TẬP): Các bài tập này kiểm tra sự thành thạo của bạn về từ vựng và các cấu trúc thiết yếu. Bạn có thể kiểm tra câu trả lời của mình trong phần LƯSUNGEN (ĐÁP ÁN).

KULTURNOTIZ (GHI CHÚ VỀ VĂN HÓA): Các ghi chú ngắn gọn này về phong tục tập quán của Đức, Áo và Thụy Sĩ đặt ngôn ngữ vào bối cảnh văn hóa của nó. Nhận thức về văn hóa sẽ làm phong phú sự hiểu biết của bạn về tiếng Đức và khả năng giao tiếp hiệu quả của bạn.

WIEDERHOLUNGSAUFGABE (CÂU HỎI ÔN TẬP): Các câu hỏi ôn tập xuất hiện sau mỗi năm bài học. Các câu hỏi này tương tự với các bài tập về dạng thức, nhưng chúng tổng hợp từ tất cả các bài học mà bạn đã học đến thời điểm đó.

LESESTUCK (ĐOẠN VĂN ĐỌC): Bốn đoạn văn đọc không được dịch. Tuy nhiên, tài liệu được bao gồm trong các bài học trước, cùng với các ghi chú từ vựng kèm theo bài đọc, sẽ cho phép bạn suy luận ý nghĩa, giống như bạn sẽ suy luận khi đọc báo ở nước ngoài.

APPENDIXES (PHỤ LỤC): Có ba phụ lục: một bảng chú giải thuật ngữ về các lục địa, quốc gia và ngôn ngữ; các bài ngữ pháp và động từ tiếng Đức; và phần còn lại nói về viết thư',
'20', '292', '12', '40', '108','2023-12-12 00:00:00.0000000', '13', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '78', 'CamNangTiengDuc_1.jpg', b'1'),(NULL, '78', 'CamNangTiengDuc_2.jpg',b'1'),(NULL, '78', 'CamNangTiengDuc_3.jpg', b'1'),(NULL, '78', 'CamNangTiengDuc_4.jpg', b'1'),(NULL, '78', 'CamNangTiengDuc_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (79, NULL, '8935280908437','Cách Khen Cách Mắng Cách Phạt Con','Masami Sasaki, Wakamatsu Aki','Muốn con ngủ sớm thì nó lại chẳng chịu đi ngủ, muốn nó dừng bú mà nó cũng không chịu, lớn lên một chút thì nói cũng không nghe, vì nhút nhát mà bị thiệt thòi…Có rất nhiều vấn như vậy khiến chúng ta nhức đầu trong quá trình nuôi dạy con. Bất cứ người phụ nữ nào đã từng nuôi con đều hiểu rằng trên thế gian này rất nhiều việc không như mình muốn. Trong quyển sách này, tôi muốn giới thiệu một số quan điểm cơ bản và phương pháp nuôi dạy con dựa trên “cách khen”, “cách mắng”, “cách dạy dỗ” trẻ.

Ngay từ đầu, chúng ta phải làm sao để hiểu được con mình là đứa trẻ như thế nào? Phải nuôi dạy bằng cách nào? Việc hiểu được bản chất của sự phát triển của trẻ rất cần thiết đối với những bà mẹ đang gặp khó khăn trong quá trình nuôi dạy con.Chúng tôi đã nhận được nhiều bài viết chia sẻ về quan điểm nuôi dạy con cái dựa trên sự trưởng thành của trẻ từ Masami Sasaki, bác sĩ chuyên khoa tâm lý trẻ em, người đã tiếp xúc với rất nhiều với các bậc cha mẹ và con cái. Đối với con cái, điều quan trọng nhất là việc truyền đạt một cách dễ hiểu. Do đó, việc hiểu được “bản chất” của con cái là quan trọng. Với tư cách là một người mẹ, tôi nghĩ là có thể sử dụng “bí quyết” đó trong việc nuôi dạy con hằng ngày.

Lúc đó, tôi đã tới Salon Hidamari ở thành phố Akita của cô Wakamatsu Aki – nguyên là cựu giáo viên mẫu giáo. Salon Hidamari là nơi tổ chức các khóa huấn luyện dành cho các bà mẹ đang nuôi dạy con.Tại đây, thông qua truyện tranh và khoá học dành cho những người chăm sóc trẻ, tôi đã học được những bí quyết thành công của cô ấy để áp dụng vào việc nuôi dạy con.

Trong cuốn sách này, ngoài những cuộc trò chuyện trao đổi kinh nghiệm về cách nuôi dạy từ bác sĩ Masami Sasaki và cô Wakamatsu Aki, chúng tôi cũng thêm vào một vài đoạn giới thiệu khi còn nhỏ họ đã được cha mẹ giáo dục con như thế nào.

Chúng tôi cảm thấy rất vui nếu quý vị độc giả tìm thấy được trong quyển sách này những lời khuyên hữu ích và có thể áp dụng thành công trong quá trình nuôi dạy trẻ.',
'21', '180', '3', '40', '49','2023-12-12 00:00:00.0000000', '8', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '79', 'CachKhenPhatCon_1.jpg', b'1'),(NULL, '79', 'CachKhenPhatCon_2.jpg', b'1'),(NULL, '79', 'CachKhenPhatCon_3.jpg',b'1'),(NULL, '79', 'CachKhenPhatCon_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (80, NULL, '8935278608127','Làm Gì Khi Con Nổi Loạn? - Family Values','Dr. Charles Sophy','Chuyển hóa chính mình để giáo dục trẻ thơ

Nếu lâu nay chúng ta vẫn xem việc nuôi dạy con cái chỉ là một nghề “cha truyền con nối” với phương cách “xưa làm sao nay làm vậy” thì trong cuốn sách này, tiến sỹ Charles Sophy lại đặt vấn đề rằng việc cha mẹ chuyển hóa chính mình để giáo dục trẻ thơ. Việc đầu tiên trên hành trình chuyển hóa là việc tự phản tỉnh.

Tác giả đã lấy ví dụ về chính mình, ông phát hiện ra phản ứng thái quá của bản thân với con trẻ xuất phát từ cách ông được mẹ mình nuôi dạy. Mỗi người làm cha mẹ nên nhìn lại tuổi thơ để xác định những điểm mạnh và hạn chế trong cách nuôi dạy con của cha mẹ mình với sự thông hiểu và đồng cảm nếu có thể.

Việc phản tỉnh và tự phán không có nghĩa là chúng ta sẽ “nhượng quyền” làm cha mẹ cho con cái. Tác giả đã nêu ra nguyên nhân của một gia đình thiếu lành mạnh là khi con trẻ chiếm quá nhiều quyền lực từ cha mẹ, thông qua các ví dụ về Sasha, một cô bé 12 tuổi đe dọa làm nổ tung trường học rồi tự sát, và Sam, một cậu bé 15 tuổi nghiện và tàng trữ ma túy. Khi cha mẹ không thiết lập được ranh giới, nhượng bộ quá mức, sợ hãi phản ứng của con hoặc không nhất quán trong việc thực thi các quy tắc, họ sẽ dần đánh mất quyền lực.

Tiến sỹ Charles Sophy để dành nguyên một chương để trả lời các câu hỏi thường gặp của phụ huynh về nuôi dạy con cái. Từ các vấn đề như cách xử lý khi con nói dối, hiệu quả của việc trừng phạt, đến có nên cho phép con uống rượu bia ở nhà, phát hiện chất kích thích trong đồ đạc của con, sai lầm của các gia đình khi đối mặt với khủng hoảng và tầm quan trọng của việc làm gương cho con cái. Tác giả luôn nhấn mạnh tầm quan trọng của giao tiếp hiệu quả, kỷ luật tích cực, xây dựng mối quan hệ dựa trên sự tin tưởng và tôn trọng lẫn nhau giữa phụ huynh và con cái.',
'21', '312', '7', '40', '144','2023-12-12 00:00:00.0000000', '9', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '80', 'LamGiKhiConNoiLoan.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (81, NULL, '9786044774619','Dạy Con Tự Chủ - Đừng Bắt Con Phải Ngoan','TS Vũ Bích Ngọc','ĐỪNG BẮT CON PHẢI LÀ TRẺ NGOAN, HÃY LÀM THẦY, LÀM BẠN ĐỂ HƯỚNG DẪN CON “NGOAN” MỘT CÁCH TỰ GIÁC, TỰ CHỦ VÀ ĐÚNG ĐẮN.

Chẳng có những bậc cha mẹ trời sinh, chúng ta vốn hoàn toàn không biết gì về thế giới của con trẻ. Cho đến khi chúng đến, chúng ta cùng với con bắt đầu khám phá một thế giới mới tinh, cùng con dần dần khôn lớn. Dạy dỗ một đứa trẻ cũng có nghĩa là chúng ta bắt đầu học làm cha mẹ. Chính vì thế, hành trình dạy dỗ con cái để con trưởng thành và nên người, cũng là hành trình mà mỗi một bậc phụ huynh bắt đầu khám phá thế giới nội tâm của trẻ - khám phá chính mình của nhiều năm về trước - hóa thân thành một người bạn thấu hiểu cho mọi cảm xúc, hành vi phát tác ở trẻ.

Một đứa trẻ đã tạo dựng được cảm giác an toàn kiểu gắn bó là đứa trẻ ít bị lo lắng, rụt rè, dễ thích nghi khi bước vào môi trường học đường, năng lực giao tiếp xã hội và năng lực điều chỉnh cái “tôi” ở tuổi trưởng thành cũng cao hơn, hành vi phạm tội cũng sẽ giảm thiểu. Tuy nhiên, đối với loại gắn bó tiêu cực, thiếu cảm giác an toàn, đứa trẻ sẽ rụt rè, khép mình cả về cảm xúc lẫn những phương diện xã hội, không muốn giao lưu với bạn bè, ít sự tò mò khám phá, không hứng thú học tập, không có động lực để theo đuổi đam mê và sở thích.

Xung đột và phản kháng là một biểu hiện của loại gắn bó không an toàn, hậu quả trực tiếp nhất là tạo thành hành vi chống đối ở trẻ. Đặc điểm của hành vi chống đối ở những đứa trẻ thiếu cảm giác an toàn chính là, chúng không thể đồng cảm với nỗi đau của người khác. Khi gặp phải những tình huống xung đột, chúng dễ dàng nảy sinh hành vi nổi loạn mang tính chống đối mạnh mẽ. Ngoài việc chống đối người khác, loại hành vi có vấn đề do cảm giác bất an mang đến còn có hành vi liên tục nói dối mà không day dứt, hành vi giấu đồ ăn hoặc cuồng ăn, ăn cắp những thứ mà mình hoàn toàn không cần...',
'21', '184', '3', '40', '43','2023-12-12 00:00:00.0000000', '11', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '81', 'DayConTuChu.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (82, NULL, '8935280907119','Tìm Hiểu Thế Giới Cảm Xúc Của Bé Trai','Tiến sĩ Dan Kindlon, Tiến sĩ Michael Thompson','Với 11 chương, hai tác giả giúp người đọc hiểu đúng về bé trai và thế giới cảm xúc của bé trai là gì. Bé trai khác bé gái. Đừng lấy cách hành xử và thái độ của bé gái để “chụp mũ” cho cách hành xử và thái độ của bé trai. Từ đó, các bậc làm cha làm mẹ khác sẽ biết cách làm thế nào để nuôi dạy con trai thật tốt. Quả thực, bạn sẽ không thể nuôi dạy tốt một đứa trẻ nếu bạn không hiểu đứa trẻ ấy.

“Con đường chưa ai đi”, “Hoa hồng có gai”, “Trả giá đắt cho kỳ luật hà khắc”, “Văn hoá tội ác”, “Mẹ và con trai”, “Bên trong pháo đài của sự cô độc”, “Con trai đấu tranh với bệnh trầm cảm và nạn tự tử”, “Rượu và ma tuý”, “Đến sỏi đá cũng biết rung động”, “Giận dữ và bạo lực”, “Điều các cậu bé cần” đã tạo nên một bức tranh đẩy đủ, rõ ràng về thế giới cảm xúc bé trai với điểm nhấn là những công cụ hữu ích giúp bậc làm cha mẹ nuôi dạy tốt các bé.

Mỗi chương, hai tác giả cung cấp những nghiên cứu tâm lý khoa học về bé trai sáng rõ, rồi đính kèm các ví dụ thực tiễn. Đa phần đều là những ca trị liệu của chính hai tác giả. Rất thực và thật. Họ chủ yếu tập trung vào đời sống nội tâm của các bé, vạch trần định kiến về giới, giải thích tầm quan trọng của việc nuôi dưỡng các kỹ năng giao tiếp và đồng cảm ở các bé trai cũng như các bé gái, đồng thời hướng các bé trai tới hành trình trưởng thành là một người đàn ông tình cảm, không “khắc kỷ” và cô độc. Họ cũng đưa ra những thách thức mà trường học truyền thống mang lại cho các bé trai. Ở đó, những hành động của các bé trai từ đơn giản tới phức tạp như: tăng động, dễ gây hấn, tức giận, khó chịu, tới uống rượu, chơi ma tuý, yêu đương, đối xử tàn ác với bạn bè và những người xung quanh, hay bất cứ những gì các cậu nói, hành xử đều gặp những phản ứng “vô cùng nhạy cảm”. Đặc biệt chương “Mẹ và con trai” và “Bên trong pháo đài của sự cô độc” chỉ ra mối quan hệ giữa mẹ và con trai, hay cha và con trai sẽ giúp các bậc phụ huynh định hình lại mối quan hệ của chính mình với con, đồng thời lý giải được những mâu thuẫn hay xảy ra trước đó với con trai mình cùng các cách khắc phục sau đó. Ngoài ra, cuốn sách cũng liệt kê đầy đủ những hậu quả nuôi dạy con trai sai lầm khi không hiểu con và thế giới cảm xúc. Từ đó, con đường trưởng thành của con gập ghềnh và ảnh hưởng nhiều đến tâm lý con mãi về sau.

Cuốn sách sâu sắc này là dành cho những bậc làm cha làm mẹ, giáo viên hay bất cứ ai quan tâm tới nuôi dạy các bé trai thành những thanh niên, người đàn ông trưởng thành, khoẻ mạnh cả về thể chất lẫn tình thần, và tuyệt nhiên tràn đầy cảm xúc.',
'21', '304', '16', '40', '68','2023-12-12 00:00:00.0000000', '8', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '82', 'CamXucBetTrai_1.jpg', b'1'),(NULL, '82', 'CamXucBetTrai_2.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (83, NULL, '8936218410008','Những Trò Chơi Giúp Trẻ 0-2 Tuổi Phát Triển Toàn Diện Thể Chất Và Tâm Hồn','Nana Hatano','Con đang ở trong tâm trạng không tốt và quấy khóc từ sáng. Bạn đã bao giờ muốn bật khóc vì không biết phải làm thế nào cho con cười chưa? Cuốn sách này là một bài hát cổ vũ những người lần đầu làm cha mẹ. Không có những trò ảo thuật. Cũng không có những trò chơi hiếm đến mức không ai biết. Trong cuốn sách này có những trò chơi chứa đầy khám phá khiến bạn tự hỏi “Cái này, có thể trở thành trò chơi được hay sao?”. Cảm giác nặng nề “phải chơi với con” cũng trở nên nhẹ nhàng hơn. Tôi chủ đích viết một cuốn sách như thế. Những điều tôi gợi ý trong cuốn sách này là “thay đổi quan điểm của bạn”. Nếu bạn có thể tìm thấy “niềm vui” trong những việc hết sức bình thường hàng ngày, chăm sóc con hay đi dạo cùng con mà không phải bận lòng, thì đó chính là những trò chơi tuyệt vời nhất. Bạn không cần phải thúc ép bản thân hay làm điều gì thật đặc biệt.',
'22', '174', '21', '40', '88','2023-12-12 00:00:00.0000000', '18', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '83', 'TroChoiGiupTre2TuoiPT_1.jpg', b'1'),(NULL, '83', 'TroChoiGiupTre2TuoiPT_2.jpg', b'1'),(NULL, '83', 'TroChoiGiupTre2TuoiPT_3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (84, NULL, '8935280916685','Bí Mật Não Bộ Trẻ','Álvaro Bilbao','Sự thật là chúng ta biết rất nhiều điều về bộ não và những điều đó có thể giúp ích cho cha mẹ, nhưng đáng tiếc là họ lại không hề hay biết. Tác giả muốn giúp bạn hiểu cách thức bạn có thể tác động tích cực đến sự phát triển bộ não của con. Hàng trăm nghiên cứu chỉ ra rằng bộ não có khả năng linh hoạt rất lớn và những bậc cha mẹ áp dụng các chiến lược đúng đắn có thể giúp con mình phát triển não bộ một cách cân bằng. Đây là lý do tại sao tôi tập hợp các nguyên lý cơ bản, công cụ và kỹ thuật giúp bạn trở thành người có ảnh hưởng nhất tới sự phát triển trí tuệ và cảm xúc của con. Với những nguyên lý, công cụ và kỹ thuật này, bạn sẽ không chỉ giúp trẻ phát triển tốt các kỹ năng trí tuệ và cảm xúc mà còn góp phần ngăn ngừa những khó khăn trong quá trình phát triển của trẻ, chẳng hạn như thiếu tập trung, trầm cảm hoặc các vấn đề về hành vi. Khẳng định rằng kiến thức cơ bản về cách bộ não của trẻ phát triển và tự vận hành sẽ giúp ích rất nhiều cho những bậc cha mẹ muốn tận dụng chúng. Tin rằng những kiến thức, chiến lược và kinh nghiệm mà bạn tìm thấy dưới đây sẽ góp phần biến công việc làm cha mẹ của bạn thành một trải nghiệm vô cùng thỏa mãn.

Bí mật bộ não trẻ giúp đơn giản hóa khoa học thần kinh đằng sau những gì đang diễn ra trong não trẻ trong 6 năm đầu đời, giúp cha mẹ phát triển toàn bộ tiềm năng trí tuệ và cảm xúc của con mình. Cuốn sách bắt đầu với lời giải thích dễ hiểu về những nguyên lý cơ bản để hiểu được bộ não của trẻ. Sau đó, cung cấp các công cụ giúp cha mẹ giao tiếp hiệu quả hơn, nuôi dưỡng sự đồng cảm và thực thi các quy tắc cũng như hành vi tích cực cho con cái. Dựa trên cách phát triển trí tuệ cảm xúc cũng như trí tuệ của trẻ, các chương trong cuốn sách đưa ra các chiến lược đúng đắn có thể giúp trẻ phát triển não bộ một cách cân bằng.

Cuốn sách dành cho những nhà giáo dục, các thầy cô giáo, nhà tâm lý học gia đình và người quan tâm và nghiên cứu về giáo dục trẻ em và dành cho các bậc cha mẹ quan tâm tới hành vi, tâm lý và sự phát triển lành mạnh của con cái

Cuốn sách này còn cung cấp cho cha mẹ và các nhà giáo dục những giải pháp thiết thực cho những vấn đề nuôi dạy trẻ và lời khuyên thực tế để đảm bảo sự phát triển lành mạnh về mặt cảm xúc và trí tuệ cho trẻ.',
'22', '284', '16', '40', '88','2023-12-12 00:00:00.0000000', '8', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '84', 'BiMatNaoBoTre_1.jpg', b'1'),(NULL, '84', 'BiMatNaoBoTre_2.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (85, NULL, '8936173840940','Dạy Con Học Nói Sớm','Trung tâm Bethel Hearing, Speaking Training','Giai đoạn trẻ tập nói có lẽ là một bước phát triển mà cha mẹ đặt rất nhiều sự quan tâm. Tuy nhiên, nhiều phụ huynh còn thờ ơ không để ý thấy sự tương tác có tác dụng vô cùng quan trọng trong việc phát triển ngôn ngữ của con trẻ.

“DẠY CON HỌC NÓI SỚM” là cuốn sách hướng dẫn dành cho phụ huynh đầu tiên do các chuyên gia ngôn ngữ – lời nói giàu kinh nghiệm lâm sàng của Trung tâm Bethel Hearing và Speaking Training (Mỹ) chắp bút.

Với những tuyệt chiêu dạy bé tập nói cực đơn giản, dễ áp dụng cuốn sách “DẠY CON HỌC NÓI SỚM” sẽ giúp phụ huynh hiểu rõ và hiểu sâu hơn về các kiến thức và phương pháp dựa trên y học thực chứng, từ đó giúp cha mẹ có thể cùng đồng hành, hỗ trợ con phát triển ngôn ngữ một cách có hiệu quả.

Cuốn sách được viết rất dễ hiểu, dễ sử dụng, mục đích là để các bậc phụ huynh học được cách nâng cao kỹ năng ngôn ngữ của con mình trong cuộc sống hằng ngày, trong lúc cha mẹ và con cái cùng chơi các trò chơi, cùng đọc sách và nghe nhạc…

“DẠY CON HỌC NÓI SỚM” không chỉ cung cấp cho phụ huynh cơ sở lý thuyết mà còn có một lượng lớn các ví dụ được lấy từ thực tế.

Sách dành cho các bậc phụ huynh có con trong độ tuổi từ 0-5, độ tuổi tiền tiểu học và gặp vấn đề trở ngại về ngôn ngữ.',
'22', '200', '12', '40', '98','2023-12-12 00:00:00.0000000', '18', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '85', 'DayConHocNoiSom_1.jpg', b'1'),(NULL, '85', 'DayConHocNoiSom_2.jpg', b'1'),(NULL, '85', 'DayConHocNoiSom_3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (86, NULL, '8936067605211','Phương Pháp Giáo Dục Con Của Người Do Thái - Giúp Trẻ Tự Tin Bước Vào Cuộc Sống','Hà Minh','Xem trọng giáo dục của cha mẹ với con cái là truyền thống tốt đẹp nổi bật nhất của dân tộc Do Thái. Mặc dù phải trải qua rất nhiều khó khăn và luôn phải phiêu bạt khắp nơi nhưng người Do Thái vẫn không quên dành cho con nền giáo dục tốt nhất. Và, họ còn tìm ra những phương pháp giáo dục con đặc biệt.

Trí tuệ là tài sản lớn nhất của con

Người Do Thái sùng bái trí tuệ, trân trọng kiến thức, họ không chỉ có ý thức bồi dưỡng cho con cái khả năng tự học mà còn thường xuyên cổ vũ trẻ thu nhận kiến thức qua nhiều con đường khác nhau. Khi trẻ còn nhỏ, đại đa số bố mẹ Do Thái dùng những vật dụng hằng ngày để giúp trẻ học ngoại ngữ. Ví dụ, họ thường sử dụng cốc, chậu rửa mặt, khăn mặt,… để đặt câu hỏi, giúp trẻ học những từ mới đơn giản. Ngoài ra, lúc dẫn con cái đi mua đồ, cha mẹ Do Thái thường chú ý đến ánh mắt của trẻ, chọn những đồ mà trẻ thích, nhân cơ hội đó dạy trẻ ngoại ngữ.

Có thể thấy, cha mẹ Do Thái giống như người làm vườn chăm chỉ chăm chồi cây non, họ sẽ phân loại tri thức theo hứng thú và sở thích của con ở từng giai đoạn rồi mới truyền thụ cho trẻ, giúp trẻ tiếp thu nhẹ nhàng và hiệu quả.

Tự lập tự cường là kĩ năng sinh tồn của con

Cha mẹ Do Thái thường không nuông chiều con cái. Tình yêu của họ dành cho con đều có nguyên tắc, có mức độ. Nếu hành vi của trẻ vi phạm nguyên tắc, vượt quá giới hạn, cha mẹ sẽ không nương tay mà nghiêm khắc phê bình khuyên bảo. Những việc làm này khiến trẻ sống trẻ sống độc lập và có nguyên tắc, để khi trưởng thành là một người độc lập.

Kỹ năng sống độc lập có vai trò rất quan trọng đối với sự trưởng thành và phát triển của trẻ. Từ nhỏ, cha mẹ Do Thái đã hướng dẫn con làm các công việc trong gia đình như đổ rác, gấp quần áo, lau nhà,… để rèn luyện khả năng sống độc lập cho trẻ. Dù đôi lúc việc dạy những kĩ năng này mất nhiều thời gian hơn so với việc bố mẹ tự làm nhưng họ vẫn kiên trì chỉ bảo cho trẻ đến cùng. Vì họ hiểu rằng: Chỉ khi để trẻ học kĩ năng sống, trẻ mới có thể thực sự tách khỏi bố mẹ, thích nghi với cuộc sống, với xã hội. Cho nên trong quá trình dạy con, các bậc cha mẹ cần học theo phương pháp này, hết sức kiên nhẫn để chỉ bảo cho trẻ.',
'23', '244', '7', '40', '55','2023-12-12 00:00:00.0000000', '18', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '86', 'PPGiaoDucConCuaDoThai_1.jpg', b'1'),(NULL, '86', 'PPGiaoDucConCuaDoThai_2.jpg', b'1'),(NULL, '86', 'PPGiaoDucConCuaDoThai_3.jpg',b'1'),(NULL, '86', 'PPGiaoDucConCuaDoThai_4.jpg',b'1'),(NULL, '86', 'PPGiaoDucConCuaDoThai_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (87, NULL, '9786044832968','Dạy Con Trong "Hoang Mang" - Tập 1','Lê Nguyên Phương','Chuyển hóa chính mình để chuyển hóa con.

Anbooks trân trọng giới thiệu đến quý anh chị, quý độc giả một tác phẩm mới: Dạy con trong “hoang mang” của tác giả TS. Lê Nguyên Phương, một chuyên gia tâm lý học đường người Việt với 20 năm kinh nghiệm lâm sàng từ khối mầm non đến đại học tại Mỹ. Sách do Anbooks phối hợp với NXB Tổng Hợp TPHCM xuất bản và phát hành.

* Cuốn sách là tập hợp 30 bài viết giải đáp những vấn đề về giá trị và phương pháp giáo dục con trẻ của các bố mẹ và thầy cô Việt Nam được lý giải trên nền tảng kiến thức khoa học qua các nghiên cứu của các ngành tâm lý học giáo dục, tham vấn, và thần kinh.',
'23', '254', '14', '40', '150','2023-12-12 00:00:00.0000000', '12', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '87', 'DayConTrongHoangMang1_1.jpg', b'1'),(NULL, '87', 'DayConTrongHoangMang1_2.jpg', b'1'),(NULL, '87', 'DayConTrongHoangMang1_3.jpg', b'1'),(NULL, '87', 'DayConTrongHoangMang1_4.jpg',b'1'),(NULL, '87', 'DayConTrongHoangMang1_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (88, NULL, '8935074130952','24 Gương Hiếu Thảo - Nhị Thập Tứ Hiếu Toàn Tập','Huy Tiến','24 gương hiếu thảo đều toát lên tấm lòng tận hiếu của bậc làm con nhưng cách thể hiện lòng hiếu thảo thì mỗi người mỗi vẻ. Có một số câu chuyện có phần cực đoan, không thuyết phục, nhất là đối với xã hội hiện nay. Tuy nhiên, tác phẩm vẫn là những bài học đạo đức đáng quý về lòng hiếu thảo.

Chúng ta phải nhìn nhận một cách đúng đắn rằng, tác phẩm bó hẹp trong tư tưởng Nho giáo – một tư tưởng đề cao đạo hiếu, trong bối cảnh xã hội phong kiến thời xưa, như vậy mới đúng mục đích mà cuốn sách hướng đến.

Ở đây, ta nên học tấm lòng hiếu thảo của người xưa và chọn cách thể hiện lòng hiếu thảo sao cho phù hợp với hoàn cảnh, thời đại.',
'23', '200', '8', '40', '70','2023-12-12 00:00:00.0000000', '19', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '88', '24GuongHieuThao_1.jpg', b'1'),(NULL, '88', '24GuongHieuThao_2.jpg', b'1'),(NULL, '88', '24GuongHieuThao_3.jpg',b'1'),(NULL, '88', '24GuongHieuThao_4.jpg',b'1'),(NULL, '88', '24GuongHieuThao_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (89, NULL, '8935069921589','Montessori Baby - Em Bé Sơ Sinh Montessori','Simone Davies, Junnifa Uzodike','Mỗi em bé được sinh ra đều là một món quà của tạo hóa dành tới mỗi gia đình. Trân trọng món quà của thượng đế, chúng tôi luôn mong muốn các bạn tới gần bé hơn, yêu thương các em hơn nhưng cũng dành cho các em nhiều không gian tự do phát triển hơn. Đó chính là điều mà Montessori Baby - Em Bé Sơ Sinh Montessori hướng tới.

Nuôi dạy trẻ theo phương pháp Montessori không còn lạ lẫm với các bậc cha mẹ trong thời điểm hiện nay. Em bé sơ sinh Montessori giúp các bậc cha mẹ tiến từng bước theo giai đoạn phát triển của bé: phát triển xúc giác, thị giác khi trẻ mới chào đời; từ cái chạm tay thật khẽ hay cái nắm tay đầy bản năng của trẻ cũng được kích thích giúp bé hoàn thiện tốt hơn. Kĩ năng vận động thô và kĩ năng vận động tinh là những bước tiếp theo khi trẻ lớn hơn, bé học cách nắm/ bắt đồ chơi, với đồ vật quanh mình. Cuốn sách hướng dẫn các bậc phụ huynh tận dụng đồ vật quanh mình tạo không gian theo phong cách Montessori để trẻ phát triển kĩ năng bò, xác định vị trí đồ vật đúng chỗ, hay đơn giản là cho em cảm giác an toàn khi chơi ở không gian mà mình tin tưởng. Các bậc cha mẹ còn có thể giúp con mình phát triển kĩ năng và trí tuệ bằng những đồ vật quanh mình, từ chiếc gối thân thiết của bé, chiếc giường sàn giúp các bé có thể tự rời giường an toàn mỗi khi thức giấc, khúc nhạc quen thuộc báo hiệu chuyển sang hoạt động tiếp theo...

Với ngôi nhà Montessori, trẻ có niềm tin vào sự an toàn của bản thân. Trẻ tự tin để bày tỏ chính kiến của mình. Từ cách phụ huynh tôn trọng trẻ khi hỏi ý kiến trong bất kì việc gì (thay tã, thay quần áo hay muốn ôm trẻ) cũng khiến trẻ học được cách tôn trọng người khác. Từ cách giao tiếp với trẻ, các bậc phụ huynh cũng học được cần bình tĩnh, tôn trọng đối phương, cần suy nghĩ thấu đáo trước khi làm bất kì điều gì.

Việc nuôi con chưa bao giờ là dễ dàng. Simone Davies và Junnifa Uzodike đúc rút từ kinh nghiệm trong quá trình nuôi con của mình để đưa ra những bài học đáng quý. Cách xử lý tình huống khi con khóc dạ đề, vì sao con không bú, con ăn, con ngủ..., cắn/ ném đồ vật... Ở mỗi trang sách, các bậc cha mẹ sẽ thấy bóng dáng mình đâu đó, các tình huống mình từng hoặc đang gặp song vẫn bí cách giải quyết. Hi vọng với cuốn sách Montessori Baby - Em Bé Sơ Sinh Montessori, quý độc giả sẽ tìm thấy niềm vui trong hành trình lớn lên cùng con yêu.',
'23', '326', '6', '40', '195','2023-12-12 00:00:00.0000000', '18', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '89', 'Montessori.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (90, NULL, '8935235235168','Để Con Được Ốm','Nguyễn Trí Đoàn, Uyên Bùi','“Để con được ốm cần có sự kiên nhẫn giải thích hay thuyết phục của bác sĩ cùng sự thông hiểu và hợp tác từ phía gia đình bé. Đôi khi, sự hợp tác và hiểu biết của phụ huynh còn quan trọng hơn nỗ lực (hay thời gian) của bác sĩ giải thích nữa. Quyết định không dùng kháng sinh hay ‘quay đầu lại’ hay không là tuỳ thuộc ở phụ huynh của các bé, tuỳ thuộc vào sự hiểu biết, kiên nhẫn và quan trọng nhất là sự hợp tác chặt chẽ với bác sĩ của con mình. Đã có nhiều trường hợp ‘quay đầu lại’ thành công, nhiều trường hợp không cần thuốc đắng vẫn dã tật thành công trong suốt 12 năm chúng tôi cùng nhau thực hành y khoa theo đúng chuẩn quốc tế: thực hành dựa trên chứng cứ y khoa tốt nhất cho bệnh nhi, dành thời gian để giải thích, tư vấn và theo dõi sát sao diễn tiến bệnh của bệnh nhi. Việc lo lắng là không thể tránh khỏi, tuy nhiên, sự lo lắng không giúp ích được gì cho bệnh của trẻ, chỉ có kiến thức chăm sóc bệnh đúng mới giúp ích cho trẻ. Và hẳn là các bé sẽ hạnh phúc biết bao khi được tôn trọng ‘quyền được bệnh’.   

- BS. Trí Đoàn',
'24', '316', '8', '40', '96','2023-12-12 00:00:00.0000000', '9', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '90', 'DeConDuocOm_1.jpg',b'1'),(NULL, '90', 'DeConDuocOm_2.jpg', b'1'),(NULL, '90', 'DeConDuocOm_3.jpg', b'1'),(NULL, '90', 'DeConDuocOm_4.jpg', b'1'),(NULL, '90', 'DeConDuocOm_5.jpg', b'1');


INSERT INTO `book` 
(`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES 
(91, NULL, '8935235240933', 'Sổ Tay Ăn Dặm Của Mẹ', 
'Lê Thị Hải', 
'“Trong quá trình khám chữa bệnh, tôi gặp nhiều trường hợp các em bé bị suy dinh dưỡng, còi xương không phải vì gia đình không có điều kiện mà do… quá có điều kiện. Tôi gặp những em bé khá bụ bẫm nhưng bố mẹ vẫn đưa đi khám vì thấy con không tăng cân và cho là con biếng ăn. Trong khi đó cũng có những trường hợp bố mẹ nói rằng con ăn rất được nhưng thực ra khẩu phần dinh dưỡng lại không đủ hoặc không cân đối. Nhưng biếng ăn là câu chuyện tôi gặp nhiều nhất. Chưa bao giờ câu chuyện cho bé ăn gì và ăn như thế nào lại khiến các bố mẹ lo lắng nhiều như vậy.
Chính vì thế tôi viết cuốn sách Sổ tay ăn dặm của mẹ này với hi vọng có thể giải đáp được phần lớn thắc mắc của các bà mẹ khi cho con ăn dặm. Sách được trình bày dưới dạng hỏi đáp ngắn gọn, cô đọng để mẹ nắm được những kiến thức cơ bản về dinh dưỡng cho bé trong độ tuổi ăn dặm, giải đáp thắc mắc về thói quen ăn uống và tiêu hóa của bé, hay là cách chăm sóc bữa ăn cho bé khi bé bị bệnh, cách chế biến và bảo quản thực phẩm khoa học.”', 
24, 268, 7, 40, 94, '2023-12-12 00:00:00', 9, 1, 1);



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '91', 'SoTayAnDam_1.jpg', b'1'),(NULL, '91', 'SoTayAnDam_2.jpg',b'1'),(NULL, '91', 'SoTayAnDam_3.jpg', b'1'),(NULL, '91', 'SoTayAnDam_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (92, NULL, '8935280909434','Ăn Dặm Kiểu Nhật','Tsutsumi Chiharu','“Bạn đã làm cha mẹ. Và bạn có lúng túng với bước đầu cho bé yêu ăn dặm?

Giai đoạn ăn dặm có vai trò là giai đoạn chuẩn bị để trẻ chuyển từ bú mẹ, uống sữa ngoài sang “nhai nát và nuốt”. Điều quan trọng của giai đoạn này không chỉ là cho trẻ ăn và theo dõi đảm bảo sự phát triển của trẻ mà còn phải theo dõi chức năng ăn và lôi kéo hợp lý sự ham thích ăn của trẻ, làm cho trẻ tự lập. Để làm được những việc đó, thống nhất quan điểm là rất quan trọng, phải thống nhất về việc lựa chọn thực phẩm, lượng ăn, cách ăn, những người lớn xung quanh giúp đỡ như thế nào. Tuy nhiên việc ăn dặm là việc hàng ngày. Bạn có đang băn khoăn trăn trở nên cho trẻ ăn gì, ăn bao nhiêu, ăn như thế nào không. Trong giai đoạn lần đầu tiên bé tiếp xúc với thức ăn, nếu mọi người xung quanh bé quá nhạy cảm, lo lắng về bữa ăn dặm của trẻ, lo lắng đó sẽ truyền sang bé và thường làm mất đi không khí của bữa ăn vốn dĩ là vui vẻ. 

Chính vì thế, đúng như tiêu đề của cuốn sách, tôi giới thiệu những công thức nấu ăn đơn giản mà ai cũng có thể làm được trong thời gian ngắn bởi nó “đơn giản”, “dễ làm” và những công thức nấu ăn phong phú sáng tạo ví dụ như chia từ thức ăn của người lớn, thực đơn sử dụng baby food … Ngoài ra còn nói rất cẩn thận về những thực phẩm cần phải cân nhắc khi trẻ bị ốm, dị ứng thực phẩm. Hơn nữa, cuốn sách cũng có cả những công thức nấu ăn khi bị dị ứng để bữa ăn dặm không trở nên nhàm chán.

Ngoài ra, chắc hẳn theo từng lứa tuổi, các bạn cũng nhiều điều nghi hoặc như “con tôi tỏ ra thích không thích nhiều thứ, liệu có vấn đề gì không”, “nên cân bằng sữa mẹ và ăn dặm như thế nào”??? Cuốn sách này cũng đã chuẩn bị những câu trả lời dễ hiểu cho những câu hỏi như vậy ở phần Q&A. Nếu đọc phần đó bạn sẽ dễ dàng hiểu được từ bây giờ nên làm cái gì, như thế nào và bạn có thể đối diện với trẻ bằng sự rộng lượng bao dung của mình.

Hãy tiếp xúc với trẻ bằng tấm lòng bao dung, rộng mở và chia sẻ cùng trẻ bữa ăn dặm vui vẻ. Mong rằng cuốn sách này sẽ trở thành cẩm nang giúp bạn chia sẻ thời gian ăn dặm vui vẻ cùng với trẻ.',
'24', '176', '22', '40', '136','2023-12-12 00:00:00.0000000', '8', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '92', 'AnDamKieuNhat_1.jpg',b'1'),(NULL, '92', 'AnDamKieuNhat_2.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (93, NULL, '8934974168751','Ăn Uống Là Hạnh Phúc','BS Trần Thị Huyên Thảo','Sau Chào con! Ba mẹ đã sẵn sàng & Bước đệm vững chắc vào đời, cuốn sách thứ ba trong bộ BÁC SĨ RIÊNG CỦA BÉ YÊU được bác sĩ Huyên Thảo chọn đề tài “ăn uống”, vì theo bác sĩ, “thật sự mình thấy đây là một đề tài rất cơ bản, quá cơ bản, nhưng lại gây ra quá nhiều đau thương, căng thẳng và cay đắng, cho con trẻ, cho ba mẹ ông bà chúng.” Vốn là bác sĩ nhi tốt nghiệp ở Đại học y khoa Úc, nổi tiếng mát tay khi chữa trị và tư vấn nhi khoa cho nhóm bệnh nhân nhỏ tuổi, bác sĩ gặp nhiều “nạn nhân” trong chính sự lo lắng thương yêu không đúng cách.',
'24', '179', '16', '40', '84','2023-12-12 00:00:00.0000000', '5', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '93', 'AnUongLaHanhPhuc_1.jpg', b'1'),(NULL, '93', 'AnUongLaHanhPhuc_2.jpg', b'1'),(NULL, '93', 'AnUongLaHanhPhuc_3.jpg', b'1'),(NULL, '93', 'AnUongLaHanhPhuc_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (94, NULL, '9786044778426','Giáo Dục Giới Tính - Con Trai Tuổi Dậy Thì','Mỹ Thuận','Giáo Dục Giới Tính - Con Trai Tuổi Dậy Thì

Sự trưởng thành của mỗi người đều phải trải qua một giai đoạn đặc biệt đó là tuổi dậy thì. Giai đoạn trung gian trước khi trở thành người lớn này đối với mỗi đứa trẻ đều đẹp theo cách rất riêng. Những thay đổi đáng kể về ngoại hình, những biến đổi về tâm sinh lý dĩ nhiên đặt ra rất nhiều dấu hỏi cho các bạn học sinh.

Giáo dục giới tính - con trai tuổi dậy thì là bộ bách khoa toàn thư dành riêng cho những chàng trai tuổi dậy thì, bao gồm những thay đổi về thể chất đến tâm lý, từ chuyện học tập đến sự hoàn thiện bản thân, từ hình ảnh, tính cách đến những phép tắc xã giao. Đây là người thấy thân thiết, người bạn đồng hành, là cuốn sách gối đầu giường, cũng là món quà dành riêng cho các chàng trai tuổi mới lớn! Khi đọc kỹ cuốn sách này, bạn sẽ tìm được câu trả lời cho những bối rối mà bạn gặp phải ở tuổi dậy thì.',
'25', '166', '21', '40', '53','2023-12-12 00:00:00.0000000', '11', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '94', 'ConTraiTuoiDayThi_1.jpg', b'1'),(NULL, '94', 'ConTraiTuoiDayThi_2.jpg', b'1'),(NULL, '94', 'ConTraiTuoiDayThi_3.jpg',b'1'),(NULL, '94', 'ConTraiTuoiDayThi_4.jpg', b'1'),(NULL, '94', 'ConTraiTuoiDayThi_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (95, NULL, '8935236423564','Kỷ Luật Tích Cực Cho Trẻ Ở Lứa Tuổi Thiếu Niên','Jane Nelsen, Lynn Lott','Tuổi mới lớn là khoảng thời gian căng thẳng và bất ổn – không chỉ đối với trẻ em mà còn đối với cha mẹ . Khám phá các cảm xúc mới , xác định lại mối quan hệ với cha mẹ là những điều ở độ tuổi thanh thiếu niên thường phải trải qua , và trong quá trình trưởng thành đó của trẻ , đôi khi cha mẹ sẽ cảm tháy bất lực , bị xa lánh hoặc bị “loại” khỏi cuộc sống của con cái . Những cảm xúc tiêu cực này có thể bị phóng đại hơn nữa trong thời đại của mạng xã hội , điện thoại di động và các thiết bị kỹ thuật số , và hệ quả của nó là khoảng cách giữa cha mẹ và con cái ngày xa hơn .',
'25', '347', '13', '40', '96','2023-12-12 00:00:00.0000000', '18', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '95', 'KyLuatTichCuc_1.jpg',b'1'),(NULL, '95', 'KyLuatTichCuc_2.jpg', b'1'),(NULL, '95', 'KyLuatTichCuc_3.jpg', b'1'),(NULL, '95', 'KyLuatTichCuc_4.jpg', b'1'),(NULL, '95', 'KyLuatTichCuc_5.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (96, NULL, '8935077038354','Bí Quyết Kì Diệu Thấu Hiểu Con Tuổi Teen','Sarah Jordan, Janice Hillman, M D','Cùng con vượt qua khủng hoảng tuổi dậy thì.',
'25', '227', '2', '40', '98','2023-12-12 00:00:00.0000000', '18', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '96', 'BiQuyetDieuKyTuoiTeen.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (97, NULL, '3300000026770','Nói Chuyện Giới Tính Không Khó','Võ Thị Minh Huệ','Nói Chuyện Giới Tính Không Khó

Bạn đang khó khăn khi phải trả lời con những câu hỏi liên quan đến giới tính và tình dục?

Bạn bối rối với những thắc mắc của con?

Bạn lo sợ vì luôn cảm thấy con mình không thực sự an toàn?

Bạn luống cuống khi phát hiện ra con mình có những suy nghĩ và hành vi tình dục lệch lạc?

Hiện nay chúng ta đang phải đối mặt với nạn quấy rối, xâm hại thân thể, lạm dụng tình dục… trẻ em ngày một gia tăng và ở mức cực kỳ báo động. Một trong những nguyên nhân của vấn đề này là do các con chưa được trang bị đầy đủ kiến thức và cách xử lý tình huống khi gặp các hiện tượng trên, các bậc phụ huynh chưa biết làm bạn với con, chưa biết chia sẻ và lắng nghe con đúng cách, đặc biệt là chưa biết nên thực hiện việc giáo dục giới tính cho con từ đâu, ở độ tuổi nào bằng phương pháp nào...

Tác giả Võ Thị Minh Huệ viết cuốn sách này với mong muốn giúp các teen hiểu hơn về mình, để rồi biết yêu quý và tôn trọng mình hơn. Và cũng hy vọng rằng, với những kiến thức này, bố mẹ con cái sẽ dễ dàng kết nối với nhau hơn.',
'25', '292', '11', '40', '80','2023-12-12 00:00:00.0000000', '18', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '97', 'ChuyenGioiTinhKhongKho_1.jpg', b'1'),(NULL, '97', 'ChuyenGioiTinhKhongKho_2.jpg', b'1'),(NULL, '97', 'ChuyenGioiTinhKhongKho_3.jpg',b'1'),(NULL, '97', 'ChuyenGioiTinhKhongKho_4.jpg',b'1'),(NULL, '97', 'ChuyenGioiTinhKhongKho_5.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (98, NULL, '8935280908031','Lần Đầu Làm Mẹ','Masato Takeuchi','Những người phụ nữ lần đầu mang thai và sắp sửa được làm mẹ, bạn có cảm thấy hoang mang với thời đại này vì quá nhiều thông tin kiến thức liên quan đến thai nhi và kiến thức sinh nở. Cách tốt nhất tôi muốn khuyên bạn rằng: “Hãy thu thập thông tin từ nguồn chính thống và lắng nghe tiếng nói của bản thân mình.”

“Lần đầu làm mẹ” của bác sĩ sản phụ khoa Masato Takeuchi sẽ giúp bạn thực sự yên tâm hơn với những mối lo lắng của bạn. Tập hợp một cách tỉ mỉ, chi tiết tất cả các vấn đề mà bắt buộc bạn phải biết và trải qua khi lần đầu làm mẹ. Cuốn sách này sẽ giải đáp cho bạn giải quyết được:

Những điều lo lắng của những người làm mẹ.

Những điều cần biết, nên làm và không nên làm dành cho những người lần đầu làm mẹ.

Những dấu hiệu mà người mang thai sẽ phải trải qua

Có một điều mà các bà mẹ lưu ý đó là vấn đề về quy luật sinh nở tự nhiên. Cách sống và môi trường sống hiện tại là điều làm bạn không thể so sánh với những ông bà ta khi xưa, thế nên bạn phải hiểu đúng về luật sinh nở tự nhiên để mọi thứ sẽ được diễn ra tốt đẹp nhất.

Cuốn sách mặc dù dài 344 trang, bao gồm 8 phần tuy nhiên kiến thức sẽ được tổng hợp thành từng mục và sẽ chia thành 3 phần chính:

Giới thiệu cụ thể về sự thay đổi của cơ thể khi mang thai và sự phát triển của thai nhi. Trong phần này sẽ có:

Lời dặn dò từ tổng biên tập, bác sĩ Masato Takeuchi: sẽ giúp các mẹ bầu cảm thấy ấm áp, có thêm dũng khí và sức mạnh.

Giải thích về những thay đổi cơ thể của  thai phụ trong suốt 10 tháng thai kỳ: bằng hình ảnh minh họa và câu chữ súc tích, ngắn gọn. Cũng có những lưu ý về các vấn đề mà thai phụ thường gặp nữa.',
'26', '340', '17', '40', '187','2023-12-12 00:00:00.0000000', '8', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '98', 'LanDauLamMe_1.jpg', b'1'),(NULL, '98', 'LanDauLamMe_2.jpg', b'1'),(NULL, '98', 'LanDauLamMe_3.jpg', b'1'),(NULL, '98', 'LanDauLamMe_4.jpg', b'1'),(NULL, '98', 'LanDauLamMe_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (99, NULL, '9786044012742','Thai Giáo Diệu Kỳ','Makoto Shichida, Ko Shichida','Thai giáo diệu kỳ theo phương pháp Shichida là phương pháp giáo dục sớm, truyền đạt bằng tình yêu và tâm hồn, nhằm kích hoạt sức mạnh tiềm tàng của não phải của thai nhi, hướng tới bốn mục tiêu của giáo dục não phải: Nuôi dưỡng nhân cách; Nuôi dưỡng tính sáng tạo; Nuôi dưỡng năng lực học hỏi; Nuôi dưỡng cơ thể khỏe mạnh.

Nội dung cuốn sách nhấn mạnh vai trò của sự tương tác mà ba mẹ cùng dành cho con trong suốt quá trình bé lớn lên trong bụng mẹ. Sự tương tác thể hiện tình yêu bao la của ba mẹ sẽ thúc đẩy sự ra đời an toàn của bé con và bé con sẽ lớn lên khỏe mạnh. Tuy nhiên, có lẽ đôi khi bạn bị ảnh hưởng bởi những cảm xúc tiêu cực khi em bé còn trong bụng mẹ và trở nên lo lắng. Những lúc như thế, tôi muốn bạn nhớ những điều này, rằng việc bạn được ban cho một đứa trẻ, điều đó thật kỳ diệu biết bao, rằng không có gì quý giá hơn và có thể thay thế một sinh mệnh được sinh ra trong sự kỳ diệu như vậy. Suy ngẫm lại về điều ấy, bạn có thể đối diện với con bằng trái tim đầy ắp yêu thương.

Mặc dù những trải nghiệm đó mẹ chỉ có thể gặp trong khi mang thai, cơ thể mẹ có những bất ổn trong thời gian mang thai, nhưng hãy coi đây là cơ hội tốt để tự nhìn lại bản thân mình, thay đổi thói quen ăn uống và sinh hoạt hằng ngày một cách điều độ và khỏe mạnh hơn. Sau đó, trong suốt quá trình nuôi dạy con, hãy coi đây là cơ hội để ba mẹ học hỏi để làm một người ba, một người mẹ gương mẫu.

Và hãy nhớ rằng, cơ thể mẹ và bé trong bụng có mối dây liên kết mật thiết. Do đó, những suy nghĩ, cảm xúc của mẹ dù tích cực hay tiêu cực đều được truyền đến con. Ba mẹ hãy nắm rõ những năng lực mà bé sở hữu đã được giới thiệu trong cuốn sách này và tạo ra thật nhiều kích thích cho trẻ từ khi trẻ còn trong bụng mẹ. Những kích thích, tác động từ gia đình và đặc biệt là từ người mẹ sẽ nuôi dưỡng tâm hồn trẻ, phát triển trí não thông minh.',
'26', '224', '11', '40', '144','2023-12-12 00:00:00.0000000', '6', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '99', 'ThaiGiaoDieuKy_1.jpg', b'1'),(NULL, '99', 'ThaiGiaoDieuKy_2.jpg', b'1'),(NULL, '99', 'ThaiGiaoDieuKy_3.jpg',b'1'),(NULL, '99', 'ThaiGiaoDieuKy_4.jpg', b'1'),(NULL, '99', 'ThaiGiaoDieuKy_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (100, NULL, '9786043933727','Yoga Dành Cho Phụ Nữ Mang Thai','Samkalpa Hoang','Phụ nữ mang thai không biết điều gì đang chờ đợi họ, họ không "kiểm soát" bản thân, dẫn tới sự lo âu phiền muộn, thậm chí lo sợ. Những thay đổi bất thường về sinh lý, tình cảm và tâm hồn, gây áp lực lớn cho họ. Trong rất nhiều lĩnh vực, yoga có thể giúp phụ nữ mang thai cải thiện tình trạng này. Xét từ khía cạnh sinh lý, luyện tập yoga có thể giúp phụ nữ mang thai thích ứng với sự phát triển và sinh trưởng mới, xoá bỏ những cảm giác khó chịu, tránh gây tổn thương lâu dài cho cơ thể.',
'26', '137', '16', '40', '382','2023-12-12 00:00:00.0000000', '12', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '100', 'YoGaChoPNMT_1.jpg', b'1'),(NULL, '100', 'YoGaChoPNMT_2.jpg', b'1'),(NULL, '100', 'YoGaChoPNMT_3.jpg', b'1'),(NULL, '100', 'YoGaChoPNMT_4.jpg', b'1'),(NULL, '100', 'YoGaChoPNMT_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (101, NULL, '8936066691437','Dinh Dưỡng Thai Kỳ','Lily Nichols','“Dinh dưỡng thai kỳ” giống như một cuốn bách khoa toàn thư về chế độ dinh dưỡng cho phụ nữ trong thời kỳ mang thai, với lượng kiến thức toàn diện về những vấn đề mà bất cứ một người phụ nữ trong thai kỳ nào cũng quan tâm, như Xét nghiệm, Độc tố thường gặp, Thực phẩm bổ sung và Thời kỳ sau sinh. Không giống như những cuốn thai giáo khác, “Dinh dưỡng thai kỳ” sẽ giải thích cặn kẽ những vấn đề đang gây tranh cãi trong nền khoa học dinh dưỡng hiện đại và biến những giáo điều thông thường thành những điều mới mẻ. Cuốn sách chính là bước ngoặt trong khoa học dinh dưỡng và chăm sóc y tế.

4 nội dung chính được đề cập trong cuốn sách:

- Chế độ dinh dưỡng thực phẩm tươi trong thai kỳ: Hãy sử dụng nguồn thực phẩm tươi, được nuôi trồng trong môi trường tự nhiên thay vì thực phẩm chế biến sẵn, đông lạnh.

- Cân bằng hàm lượng dinh dưỡng trong chế độ ăn trong thai kỳ: Phản chứng về những lầm tưởng thông thường trong chế độ dinh dưỡng, chẳng hạn như: ăn nhiều trứng và tinh bột là không tốt. Đồng thời, cuốn sách cũng đề xuất những thực phẩm bổ dưỡng và những phương pháp dinh dưỡng hợp lý để bổ sung dưỡng chất và vitamin cần thiết cho cơ thể.

- Một số loại thực phẩm nên tránh trong thời kỳ mang thai: Nhằm phòng tránh nguy cơ mắc một số bệnh như tiểu đường, tim mạch, huyết áp, gây ảnh hưởng đến cả mẹ và thai nhi trong bụng.

- Thực phẩm bổ sung trong thời kỳ mang thai: Ngoài dinh dưỡng từ thức ăn, phụ nữ trong thời kỳ mang thái cần chú ý bổ sung một số loại thực phẩm khác như vitamin, chất béo Omega-3, men vi sinh và các vi chất như canxi, megie, sắt, i-ốt… để cơ thể được cung cấp toàn diện dưỡng chất, giúp em bé phát triển khỏe mạnh.

- Bên cạnh đó, cuốn sách cũng đề cập đến một số vấn đề khác cần lưu ý trong thai kỳ: việc tập thể dục hợp lý, , một số xét nghiệm cơ bản, những độc tố thường gặp, sự thay đổi của sức khỏe và tâm lý, vấn đề sau sinh…

Với lượng kiến thức khoa học toàn diện, “Dinh dưỡng thai kỳ” sẽ giúp những người phụ nữ chuẩn bị làm mẹ, đang mang thai hay sau khi sinh đều tìm thấy những thông tin bổ ích, khoa học và đáng tin cậy, giúp cho thời kỳ mang thai trở nên dễ chịu và thoải mái nhất.',
'26', '434', '5', '40', '151','2023-12-12 00:00:00.0000000', '5', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '101', 'DinhDuongThaiKy_1.jpg', b'1'),(NULL, '101', 'DinhDuongThaiKy_2.jpg', b'1'),(NULL, '101', 'DinhDuongThaiKy_3.jpg', b'1'),(NULL, '101', 'DinhDuongThaiKy_4.jpg', b'1'),(NULL, '101', 'DinhDuongThaiKy_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (102, NULL, '9786044008240','50 Đề Minh Họa 2024 - Môn Toán Học','Nhiều Tác Giả','Sách luyện đề toán THPT Quốc gia 2024, sách ôn thi 50 đề minh họa THPT Quốc gia môn toán:

- Bản luyện đề trắc nghiệm 2024 mới nhất.

- Thầy Lê Văn Tuấn và thầy Nguyễn Thế Duy Livestream chữa toàn bộ đề minh họa.

- 100% đề thi được giải chi tiết và có video chữa cụ thể.

- Gồm 50 đề minh họa luyện tập, bám sát với đề thi THPT quốc gia chính thức của Bộ Giáo dục và đào tạo.

1. Nội dung sách: 50 đề minh hoạ môn toán học luyện thi THPT Quốc gia 2024:

- Về nội dung: mỗi đề đều gồm 50 câu hỏi được phân bố theo các mức độ từ nhận biết, thông hiểu đến vận dụng, vận dụng cao.

- Với các câu ở mức độ thông hiểu: tác giả cài cắm nhiều câu bẫy, dễ mắc sai lầm, đòi hỏi các em không chỉ nắm chắc lí thuyết mà còn phải hết sức cẩn thận, tỉnh táo, không chủ quan mới có thể chọn đúng.

- Với các câu ở mức độ vận dụng và đặc biệt là vận dụng cao: tác giả đã cố gắng sáng tạo thêm để các em chủ động xử lí bài tập HAY - LẠ - KHÓ từ nhiều hướng khác nhau.

- Phân tích đề và hướng ra đề của bộ giáo dục.

- Định hướng làm bài tập và làm đề hiệu quả.

2. Đối tượng sử dụng:

- Học sinh lớp 12 chuẩn bị ôn thi cho kì thi tốt nghiệp thpt 2024, ôn thi đánh giá năng lực.

- Học sinh lớp 11 muốn luyện đề thi thpt quốc gia sớm.

- Là nguồn tư liệu cung cấp bộ đề thi thử chất lượng, đầy đủ cho quý thầy giáo, cô giáo ôn luyện thi tham khảo.',
'1', '402', '18', '40', '148','2023-12-12 00:00:00.0000000', '6', '1', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '102', '50DeLuyenToan_1.jpg', b'1'),(NULL, '102', '50DeLuyenToan_2.jpg', b'1'),(NULL, '102', '50DeLuyenToan_3.jpg', b'1'),(NULL, '102', '50DeLuyenToan_4.jpg', b'1'),(NULL, '102', '50DeLuyenToan_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (103, NULL, '9786044008561','60 Đề Minh Họa 2024 - Môn Tiếng Anh','Trang Anh','Sách 60 đề minh hoạ môn Tiếng Anh cô Trang Anh, sách ôn luyện thi thpt quốc gia:

- Bản luyện đề trắc nghiệm 2024 mới nhất.

- 100% đề thi được giải thích chi tiết, rõ ràng, dễ hiểu bằng tiếng việt.

- Định hướng ôn tập ngữ pháp và từ vựng trọng tâm nhất trước khi thi.

1. Nội dung sách Sách bộ đề minh họa 2024:

- Số lượng lên tới 60 đề minh họa luyện tập, bám sát với đề thi chính thức của Bộ giáo dục và đào tạo.

- Đề thi có sự phân hoá rõ rệt theo 4 mức: nhận biết, thông hiểu, vận dụng và vận dụng cao.

- Phân tích cấu trúc đề thi THPT quốc gia và định hướng ôn tập, làm đề hiệu quả.

- Tổng hợp các kiến thức trọng tâm chắc chắn có trong đề thi THPT quốc gia.

2. Đối tượng sử dụng:

- Học sinh lớp 12 chuẩn bị ôn thi cho kì thi tốt nghiệp thpt 2024, ôn thi đánh giá năng lực.

- Học sinh lớp 11 muốn luyện đề thi thpt quốc gia sớm.

- Là nguồn tư liệu cung cấp bộ đề thi thử chất lượng, đầy đủ cho quý thầy giáo, cô giáo ôn luyện thi tham khảo.',
'1', '465', '18', '40', '158','2023-12-12 00:00:00.0000000', '6', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '103', '60DeLuyenAnh_1.jpg', b'1'),(NULL, '103', '60DeLuyenAnh_2.jpg', b'1'),
(NULL, '103', '60DeLuyenAnh_3.jpg',b'1'),
(NULL, '103', '60DeLuyenAnh_4.jpg', b'1'),
(NULL, '103', '60DeLuyenAnh_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (104, NULL, '9786044008264','50 Đề Minh Họa 2024 - Môn Sinh Học','TS Phan Khắc Nghệ, ThS Nguyễn Văn Hòa','Sách 50 đề minh hoạ môn Sinh học luyện thi thpt quốc gia 2024:

- Gồm 45 đề thi minh hoạ do thầy Phan Khắc Nghệ biên soạn và 5 đề thi chính thức của bộ GDĐT các năm trước đây.

- Chuẩn cấu trúc đề tham khảo và chính thức của Bộ ban hành.

- 100% có lời giải chi tiết.

- Tặng phiếu tô đáp án đề thi tốt nghiệp thpt quốc gia.

1. Nội dung sách: 50 đề minh hoạ môn Sinh học luyện thi thpt quốc gia 2024:

- Về nội dung: mỗi đề đều gồm 40 câu hỏi được phân bố theo các mức độ từ nhận biết, thông hiểu đến vận dụng, vận dụng cao.

- Với các câu ở mức độ thông hiểu: tác giả cài cắm nhiều câu bẫy, dễ mắc sai lầm, đòi hỏi các em không chỉ nắm chắc lí thuyết mà còn phải hết sức cẩn thận, tỉnh táo, không chủ quan mới có thể chọn đúng.

- Với các câu ở mức độ vận dụng và đặc biệt là vận dụng cao: tác giả đã cố gắng sáng tạo thêm để các em chủ động xử lí bài tập HAY - LẠ - KHÓ từ nhiều hướng khác nhau.

- Phân tích đề và hướng ra đề của bộ giáo dục.

- Định hướng làm bài tập và làm đề hiệu quả.

- Sách gồm 50 đề trắc nghiệm ôn thi THPTQG môn sinh do nhóm tác giả biên soạn.

2. Đối tượng sử dụng sách: 50 đề minh hoạ môn Sinh học luyện thi thpt quốc gia 2024:

- Học sinh lớp 12 chuẩn bị ôn thi cho kì thi tốt nghiệp thpt 2024.

- Học sinh lớp 11 muốn luyện đề thi thpt quốc gia sớm.

- Là nguồn tư liệu cung cấp bộ đề thi thử chất lượng, đầy đủ cho quý thầy giáo, cô giáo ôn luyện thi tham khảo.',
'1', '398', '18', '40', '148','2023-12-12 00:00:00.0000000', '6', '1', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '104', '50DeSinhHoc_1.jpg', b'1'),(NULL, '104', '50DeSinhHoc_2.jpg',b'1'),(NULL, '104', '50DeSinhHoc_3.jpg',b'1'),(NULL, '104', '50DeSinhHoc_4.jpg', b'1'),(NULL, '104', '50DeSinhHoc_5.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (105, NULL, '9786044008271','50 Đề Minh Họa 2024 - Môn Hóa Học','ThS Lê Quỳnh Trang, Trần Công Minh, Phạm Hùng Vương','Sách 50 đề minh hoạ môn Hoá học luyện thi THPT Quốc gia 2024:

- Gồm 45 đề thi minh hoạ do thầy Phạm Hùng Vương biên soạn và 5 đề thi chính thức của bộ GDĐT các năm trước đây.

- Chuẩn cấu trúc đề tham khảo và chính thức của Bộ ban hành giúp 2k5 ôn luyện kiến thức vững vàng và chinh phục kỳ thi THPT quốc gia sắp tới.

1. Nội dung sách: 50 đề minh hoạ môn Hoá học luyện thi THPT Quốc gia 2024:

- Về nội dung: mỗi đề đều gồm 40 câu hỏi được phân bố theo các mức độ từ nhận biết, thông hiểu đến vận dụng, vận dụng cao. Với các câu ở mức độ thông hiểu: tác giả cài cắm nhiều câu bẫy, dễ mắc sai lầm, đòi hỏi các em không chỉ nắm chắc lí thuyết mà còn phải hết sức cẩn thận, tỉnh táo, không chủ quan mới có thể chọn đúng. Với các câu ở mức độ vận dụng và đặc biệt là vận dụng cao: tác giả đã cố gắng sáng tạo thêm để các em chủ động xử lí bài tập HAY - LẠ - KHÓ.

- Về hình thức: sau mỗi đề, tác giả thiết kế phiếu tô trắc nghiệm để các em ghi lại đáp án cũng như để rèn cách tô sao cho nhanh và đúng. Ngay dưới phiếu tô là bảng đáp án để các em tự đối chiếu, chấm điểm cho mình. Và đừng quên giữa phiếu tô trắc nghiệm và bảng đáp án, cuốn sách dành một khoảng trống nhỏ: hãy ghi lại các lưu ý trong lúc làm bài - sẽ cực kì cần thiết và hữu ích khi các em muốn tổng ôn lại cuốn sách trước kỳ thi chính thức.

2. Đối tượng sử dụng:

- Học sinh lớp 12 chuẩn bị ôn thi cho kì thi tốt nghiệp thpt 2024.

- Học sinh lớp 11 muốn luyện đề thi thpt quốc gia sớm.

- Là nguồn tư liệu cung cấp bộ đề thi thử chất lượng, đầy đủ cho quý thầy giáo, cô giáo ôn luyện thi tham khảo.',
'1', '292', '18', '40', '148','2023-12-12 00:00:00.0000000', '6', '1', b'1');

INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '105', '50DeHoaHoc_1.jpg', b'1'),(NULL, '105', '50DeHoaHoc_2.jpg', b'1'),(NULL, '105', '50DeHoaHoc_3.jpg', b'1'),(NULL, '105', '50DeHoaHoc_4.jpg', b'1'),(NULL, '105', '50DeHoaHoc_5.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (106, NULL, '8931805616368','Bé Chuẩn Bị Vào Lớp 1 - Vở Tập Viết Chữ Cái Viết Thường','Chính An, Nhóm Giáo Viên ĐH Sư Phạm','Bộ Sách Bé Chuẩn Bị Vào Lớp 1 - Tập hợp những quyển sách theo từng chủ đề: nét cơ bản, chữ số, chữ viết hoa, viết thường.

Giúp các bé làm quen với kiến thức cơ bản khi bắt đầu vào lớp 1.

Một tài liệu cần thiết cho phụ huynh để có thể rèn luyện con em mình theo một kế hoạch có khoa học.',
'9', '31', '17', '40', '10','2023-12-12 00:00:00.0000000', '19', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '106', 'BeVao_1.jpg',b'1'),(NULL, '106', 'BeVao_2.jpg', b'1'),(NULL, '106', 'BeVao_3.jpg', b'1'),(NULL, '106', 'BeVao_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (107, NULL, '8931805616917','Tập Tô Chữ - Các Nét Cơ Bản - Dành Cho Bé Chuẩn Bị Vào Lớp 1','Chính An','Việc hình thành và rèn những kĩ năng cơ bản: Nghe - Đọc - Nói - Viết, tính toán, kĩ năng sống vô cùng quan trọng. Trong đó kĩ năng viết đòi hỏi mất nhiều thời gian, công sức mà hiệu quả chưa chắc được như mong muốn. Để giúp cha mẹ, thầy cô giải tỏa nỗi lo lắng đó, xin mời quý vị hãy đến với cuốn Tập Tô Chữ - Các Nét Cơ Bản. Đây là cuốn cẩm nang giúp bé tự tin - vững bước vào lớp 1.',
'9', '24', '13', '40', '10','2023-12-12 00:00:00.0000000', '19', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '107', 'TapToChu_1.jpg', b'1'),(NULL, '107', 'TapToChu_2.jpg',b'1'),(NULL, '107', 'TapToChu_3.jpg', b'1'),(NULL, '107', 'TapToChu_4.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (108, NULL, '9786045538807','Hành Trang Vào Lớp 1 - Luyện Viết Trọn Bộ','Hương Giang, Trung Anh','Từ mẫu giáo lên tiểu học là bước tiến quan trọng để bé bước chân vào thế giới tri thức, cũng là một bước ngoặt lớn trong cuộc đời các bé.

Chính vì vậy, bố mẹ cần quan tâm và đầu tư nhiều hơn trong việc chuẩn bị hành trang để con vào lớp 1.

Nhà sách Hoa Anh Thảo - Nơi ba mẹ sẽ tìm thấy những đầu sách tập tô, tập viết,… bổ ích dành cho bé chuẩn bị đến trường.

Hãy để Nhà sách Hoa Anh Thảo đồng hành cùng cha mẹ trong việc chuẩn bị hành trang giúp bé tự tin hơn khi đến lớp.',
'9', '88', '19', '40', '54','2023-12-12 00:00:00.0000000', '5', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '108', 'HanhTrangVao1_1.jpg', b'1'),(NULL, '108', 'HanhTrangVao1_2.jpg', b'1'),(NULL, '108', 'HanhTrangVao1_3.jpg', b'1'),(NULL, '108', 'HanhTrangVao1_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (109, NULL, '9786044007526','Bí Quyết Giúp Việc Dạy Học Trở Nên Tuyệt Vời - Chiến Lược Hiệu Quả Mỗi Ngày','Todd Whitaker, Annette Breaux','Sách - Bí quyết giúp việc dạy học trở nên tuyệt vời - Chiến lược hiệu quả mỗi ngày dạy học tích cực đang trở thành một trong những xu hướng giảng dạy được đánh giá cao nhất hiện nay. Với những ưu điểm vượt trội hơn hẳn so với phương pháp dạy học truyền thống, dạy học tích cực đang được nhân rộng tại nhiều trường học của Việt Nam. Để giúp giáo viên hiểu rõ, nắm bắt chính xác tinh thần của phương pháp này.',
'11', '288', '16', '40', '84','2023-12-12 00:00:00.0000000', '6', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '109', 'BiQuyetDayHoc.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (110, NULL, '9786043345230','Công Cụ Hỗ Trợ Dạy Học Online - Kiểm Tra, Đánh Giá Với Quizmaker - Dạy Học Và Hội Thảo Từ Xa Với Zoom Và Google Classroom','Phạm Quang Huy, Nguyễn Văn Thao','Những thách thức do đại dịch toàn cầu gây ra nhiều thay đổi trong cách sống và làm việc tại các cơ quan, xí nghiệp cũng như tới từng người dân trong cộng đồng, Điều này giải thích sự gia tăng gần đây việc sử dụng ứng dụng các công cụ giảng dạy trực tuyến (online) của các giáo viên trên khắp thế giới làm việc tại nhà để giảm sự lây lan của vi rút. Có nhiều công cụ để thực hiện như Google Classrom, Zoom, Google M Nhìn chung, các chương trình này đều có tính năng chung của các công cụ giảng dạy trực tuyến cho phép các cá nhân gặp gỡ và làm việc cùng nhau một cách hiệu quả khi không thể gặp mặt trực tiếp. Mỗi chương trình đều có những ưu và nhược điểm không thể trình bày hết trong một quyển sách, Sách  chủ yếu giới thiệu tới bạn đọc cách khai thác và sử dụng Zoom và Google Classrom trong dạy học online và hội thảo từ xa có hiệu quả. Trong  Tập 2 tiếp theo sẽ giới thiệu tới bạn đọc Google Classrom và Google Meet ở mức độ sâu hơn.',
'11', '367', '16', '40', '138','2023-12-12 00:00:00.0000000', '5', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '110', 'CongCuHoTroDay_1.jpg', b'1'),(NULL, '110', 'CongCuHoTroDay_2.jpg', b'1'),(NULL, '110', 'CongCuHoTroDay_3.jpg',b'1'),(NULL, '110', 'CongCuHoTroDay_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (111, NULL, '9786049873058','Khám Phá Giáo Dục Steam - 10 Chủ Đề Dạy Học Ở Tiểu Học','Nhiều Tác Giả','Nội dung sách bao gồm các chủ đề dạy học được xây dựng theo chương trình giáo dục liên môn STEAM bao gồm Khoa học, Công nghệ, Kỹ thuật, Nghệ Thuật và Toán học.

Có sự gắn kết giữa bài học sách giáo khoa với các chủ đề thú vị, gần gũi, mang lại tính thực tiễn cao làm cho bài giảng thêm sinh động. Tạo hứng thú cho Học sinh trong quá trình tiến hành hoạt động.

Bộ dụng cụ STEAMKIT đi kèm hỗ trợ cho quá trnihf dạy hojhc và học các chủ đề STEAM đạt kết quả tốt nhất.',
'11', '188', '19', '40', '144','2023-12-12 00:00:00.0000000', '17', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '111', 'KhamPhaGiaoDuc.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (112, NULL, '8935279132492','Nâng Cao Chất Lượng Dạy Học Tác Phẩm Hồ Chí Minh','Nguyễn Thị Thanh Tùng, Hoàng Thị Thuận','Nhằm nâng cao chất lượng dạy học tác phẩm Hồ Chí Minh theo định hướng phát triển năng lực và phẩm chất của người học, Nhà xuất bản Chính trị quốc gia Sự thật xuất bản cuốn sách Nâng cao chất lượng dạy học tác phẩm Hồ Chí Minh.

Nội dung cuốn sách gồm hai phần: Phần thứ nhất nêu một số vấn đề lý luận chung về dạy học tác phẩm Hồ Chí Minh; Phần thứ hai giới thiệu một số tác phẩm tiêu biểu của Hồ Chí Minh (như: Bản án chế độ thực dân Pháp, Đường kách mệnh, Cương lĩnh chính trị đầu tiên, Tuyên ngôn độc lập…). Trong mỗi tác phẩm, các tác giả xác định mục tiêu dạy học tác phẩm (năng lực, phẩm chất), hoàn cảnh ra đời và bố cục của tác phẩm, nội dung cơ bản của tác phẩm, giá trị của tác phẩm và một số câu hỏi ôn tập, củng cố…',
'11', '400', '9', '40', '144','2023-12-12 00:00:00.0000000', '17', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '112', 'NangCaoChatLuongDay_1.jpg',b'1'),(NULL, '112', 'NangCaoChatLuongDay_2.jpg', b'1'),(NULL, '112', 'NangCaoChatLuongDay_3.jpg', b'1'),(NULL, '112', 'NangCaoChatLuongDay_4.jpg',b'1'),(NULL, '112', 'NangCaoChatLuongDay_5.jpg',b'1'),(NULL, '112', 'NangCaoChatLuongDay_6.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (113, NULL, '9786045833681','Giáo Trình Xã Hội Học Đại Cương','TS Trương Thị Hiền','Trong chương trình đào tạo các ngành có trình độ đại học, học phần Xã hội học đại cương là học phần của khối kiến thức khoa học xã hội thuộc nội dung kiến thức giáo dục đại cương. Học phần này cung cấp cho người học những kiến thức cơ bản và có hệ thống về tri thức xã hội học, bao gồm: khái quát về khoa học xã hội học; phương pháp nghiên cứu xã hội học; một số chủ đề nghiên cứu của xã hội học như là: cơ cấu xã hội; hành động xã hội và tương tác xã hội; cá nhân và xã hội; bất bình đẳng và phân tầng xã hội; sự điều tiết của xã hội; chuyển biến xã hội,… 

Việc tiếp cận xã hội học có thể hướng dẫn người học cách tổ chức suy nghĩ để đặt câu hỏi tốt hơn và hình thành câu trả lời tốt hơn khi quan tâm tới các hiện tượng xã hội. Đồng thời, việc học xã hội học cũng có thể giúp người học nhận thức rõ hơn rằng, sự sẵn lòng và khả năng nhìn thế giới từ quan điểm của người khác là điều quan trọng cho việc chung sống trong một thế giới ngày càng đa dạng và hội nhập.

Cuốn giáo trình Xã hội học đại cương này được biên soạn trước hết dành cho sinh viên đang theo học tại Trường Đại học Tây Nguyên nhưng chúng tôi hi vọng nó có thể là tài liệu tham khảo hữu ích cho các bạn sinh viên đang học tập, nghiên cứu xã hội học và những ai quan tâm tới bộ môn xã hội học.',
'12', '272', '9', '40', '81','2023-12-12 00:00:00.0000000', '12', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '113', 'GTXaHoiHoc_1.jpg', b'1'),(NULL, '113', 'GTXaHoiHoc_2.jpg', b'1'),(NULL, '113', 'GTXaHoiHoc_3.jpg', b'1'),(NULL, '113', 'GTXaHoiHoc_4.jpg', b'1'),(NULL, '113', 'GTXaHoiHoc_5.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (114, NULL, '9786049849183','Giáo Trình Đo Lường Cảm Biến (Lý Thuyết - Thực Hành)','TS Nguyễn Duy Đạt','Đo lường, cảm biến là những thành phần phải kể đến đầu tiên và không thể thiếu trong các quá trình điều khiển tự động có nhiệm vụ thu thập dữ liệu, cảm nhận, đo đạc và phát hiện các kích thích rồi truyền tín hiệu về bộ điều khiển. Có thể nói, các bộ cảm biến trong hệ thống điều khiển tự động đóng vai trò quan trọng giống như các giác quan của con người. Tất nhiên đi kèm với hệ thống điều khiển cần có các thiết bị đo tương ứng. Sách trình bày về lĩnh vực đo lường các đại lượng vật lý thường gặp trong công nghiệp chủ yếu là giới thiệu về cấu tạo, nguyên lý hoạt động của các thiết bị đo và các bộ cảm biến thông dụng cùng với một số ứng dụng cơ bản của chúng.

Nội dung sách gồm 2 phần trình bày qua 4 chương. Hai chương đầu trình bày Lý thuyết.',
'12', '440', '5', '40', '148','2023-12-12 00:00:00.0000000', '5', '1', b'1');


INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '114', 'GTDoLuongCamBien_1.jpg', b'1'),(NULL, '114', 'GTDoLuongCamBien_2.jpg',b'1'),(NULL, '114', 'GTDoLuongCamBien_3.jpg',b'1'),(NULL, '114', 'GTDoLuongCamBien_4.jpg',b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (115, NULL, '9786047933839','Kinh Tế Các Quốc Gia Khu Vực Asean','TS Nguyễn Duy Đạt','Đáp ứng yêu cầu đào tạo trong điều kiện hội nhập kinh tế quốc tế đang diễn ra mạnh mẽ, Bộ môn Kinh tế quốc tế, Khoa Kinh tế & Kinh Doanh quốc tế, Trường Đại học Thương mại biên soạn Sách tham khảo “Kinh tế các quốc gia khu vực ASEAN”. Cuốn sách này sử dụng làm tài liệu học tập và tham khảo cho sinh viên Trường Đại học Thương mại các chuyên ngành kinh tế, đặc biệt đối với chuyên ngành thương mại quốc tế, chuyên ngành kinh tế quốc tế.

Khi biên soạn cuốn sách này, chúng tôi đã tham khảo các tài liệu trong và ngoài nước, kế thừa có chọn lọc các ấn phẩm được phát hành chính thức bởi Ban thư ký ASEAN, đồng thời bám sát xu hướng hội nhập kinh tế quốc tế và đặc điểm, điều kiện của Việt Nam để lựa chọn các nội dung cô đọng và thiết thực nhất.

Sách tham khảo “Kinh tế các quốc gia khu vực ASEAN” gồm 3 chương, được biên soạn bởi tập thể giảng viên công tác tại bộ môn Kinh tế quốc tế, Khoa Kinh tế & Kinh doanh quốc tế, Trường Đại học Thương mại.

- TS. Nguyễn Duy Đạt, Chủ biên, đọc và rà soát, chỉnh sửa bổ sung, trực tiếp viết một phần mục 1.1, một phần mục 1.2 của Chương 1 Chương 2 và Chương 3:

- ThS. Nguyễn Thùy Dương, Viết 1.3 của Chương 1; - ThS. Lê Quốc Cường, Viết 1.4 của Chương 1:

- ThS. Nguyễn Ngọc Diệp tham gia viết một phần 1.1; và 1.2 của Chương 1.',
'12', '239', '13', '40', '107','2023-12-12 00:00:00.0000000', '10', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '115', 'KinhTeCacQuocGia_1.jpg', b'1'),(NULL, '115', 'KinhTeCacQuocGia_2.jpg', b'1'),(NULL, '115', 'KinhTeCacQuocGia_3.jpg', b'1'),(NULL, '115', 'KinhTeCacQuocGia_4.jpg', b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (116, NULL, '89352469384','Nhà Quản Lý Cấp Trung: Mắt Xích Sống Còn Của Doanh Nghiệp','Đường Văn Quân','Nhà Quản Lý Cấp Trung: Mắt Xích Sống Còn Của Doanh Nghiệp

Đối với những nhà quản lý này, kiến thức và kỹ năng quản lý vững vàng là điều cần thiết, bao gồm các kỹ năng điều hành giao tiếp hiệu quả, tinh thần trách nhiệm và làm việc chuyên nghiệp, công bằng và hiệu quả, cùng với tính thực tế và khả năng ứng dụng cao.

Để đạt được điều này, các nhà quản lý cấp trung cần tham gia vào quá trình chuyển đổi kế hoạch thành hành động và biến hành động thành kết quả. Cuốn sách đưa ra tất cả mọi thứ mà các nhà quản lý cấp trung cần nắm rõ khi đứng ở vị trí trung gian, cung cấp tất cả những phương pháp, công cụ và tiêu chuẩn toàn diện để hướng dẫn đội ngũ quản lý.

Cuốn sách “Nhà quản lý cấp trung” dành cho ai?
Quản lý cấp trung là các nhà quản trị thuộc cấp quản lý trung gian trong bộ máy cơ cấu của tổ chức. Bộ phận này hoạt động dưới sự điều hành của các nhà lãnh đạo cấp cao, đồng thời dẫn dắt, quản lý các nhân viên cấp dưới.

Các nhà quản lý cấp trung thường phụ trách một phòng ban, chi nhánh hoặc một bộ phận cụ thể. Vì thế cuốn sách này đặc biệt phù hợp cho những người đang nắm giữ các vị trí như:

- Giám đốc chi nhánh

- Giám đốc khu vực

- Cửa hàng trưởng

- Quản lý bộ phận

- Trưởng phòng

- Tổ trưởng

- Giám đốc phân xưởng',
'32', '396', '11', '40', '132.660','2023-07-12 12:42:27', '13', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '116', 'NhaQuanLyCapTrung_1.jpg', b'1'),(NULL, '116', 'NhaQuanLyCapTrung_2.jpg', b'1'),(NULL, '116', 'NhaQuanLyCapTrung_3.jpg', b'1'),(NULL, '116', 'NhaQuanLyCapTrung_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (117, NULL, '893528090977','FPT Bí Lục - Khám Phá Văn Hoá Doanh Nghiệp Tại FPT','Nguyễn Thành Nam, Phan Phương Đạt, Lê Đình Lộc, Nông Thị Bích Vân, Nguyễn Thu Huệ','FPT Bí Lục - Khám Phá Văn Hoá Doanh Nghiệp Tại FPT

Khi bắt đầu viết những dòng đầu tiên của cuốn sách, nhóm tác giả đã chủ đích sử dụng lý thuyết của Edgar Henry Schein – một giáo sư nổi tiếng của Mỹ chuyên nghiên cứu về văn hóa doanh nghiệp – để khám phá và phân tích về văn hóa doanh nghiệp tại Việt Nam. Nếu Schein nghiên cứu văn hóa của Digital Equipment Corporation (DEC), một công ty về công nghệ thông tin đã từng rất nổi tiếng tại Mỹ để minh họa cho các khái niệm của ông thì nhóm tác giả lại hứng thú khám phá văn hóa FPT – một tập đoàn công nghệ thông tin hàng đầu tại Việt Nam – để củng cố các luận điểm của mình về văn hóa doanh nghiệp.

Để thực hiện cuốn sách, nhóm tác giả đã tham khảo, nghiên cứu hàng ngàn trang viết về thực tiễn cuộc sống, văn hóa của FPT thông qua các cuốn sử ký, lược sử, nội san… do chính người FPT ghi chép lại trong hơn 30 năm qua. Đặc biệt, họ đã tiến hành nhiều cuộc gặp gỡ, phỏng vấn, trò chuyện với các nhân chứng sống, là các sáng lập viên, lãnh đạo các cấp, những người có ảnh hưởng quan trọng trong quá trình hình thành văn hóa FPT.

Và khá bất ngờ, trong quá trình nghiên cứu, họ khám phá được nhiều sự kiện, câu chuyện, bối cảnh lịch sử chưa từng được “phát lộ” trong FPT, thậm chí được giữ kín suốt 1/3 thế kỷ. Khá nhiều khía cạnh văn hóa FPT đã được tường minh thông qua các “thâm cung bí sử” này. Từ đó, nhóm tác giả có mong muốn sản phẩm của mình sẽ là một cuốn sách chuẩn mực, có giá trị đối với những ai quan tâm đến văn hóa doanh nghiệp tại Việt Nam. Và như một ngầm định nào đó, họ quyết định đặt tên cho cuốn sách này là “FPT bí lục”.',
'32', '480', '13', '40', '155.220','2023-07-12 12:42:27', '2', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '117', 'FPTBiLuc_1.jpg', b'1'),(NULL, '117', 'FPTBiLuc_2.jpg', b'1'),(NULL, '117', 'FPTBiLuc_3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (118, NULL, '893507411028','Ngôn Ngữ Của Nhà Lãnh Đạo','Kevin Murray','Ngôn Ngữ Của Nhà Lãnh Đạo

Sự khác biệt giữa giao tiếp ra lệnh và giao tiếp truyền cảm hứng có thể là sự khác biệt giữa sự thể hiện nghèo nàn và kết quả phong phú. Hình mẫu làm nên nhà lãnh đạo giỏi luôn biến đổi và các CEO cũng như các chuyên gia nhân sự ngày nay tin rằng khả năng thấu hiều, thúc đẩy và truyền cảm hứng cho người khác là đặc tính quan trọng nhất khi tuyển dụng các nhà lãnh đạo có thâm niên.

Dựa vào những buổi phỏng vấn với hơn 60 nhà lãnh đạo hàng đầu trong lĩnh vực kinh doanh rộng rãi, sách Ngôn ngữ của nhà lãnh đạo cung cấp kiến thức độc đáo trong việc đáp ứng các yêu cầu của thế giới hiện nay, các bản báo cáo về những gì họ đã học tập tích luỹ và tạo ra kho tàng ngôn ngữ giao tiếp thành công.

Thông điệp của họ nghe thật rõ ràng – giao tiếp là một trong ba kỹ năng quan trọng nhất của công tác lãnh đạo. Chỉ cần nắm vững kỹ năng này các nhà lãnh đạo có thể gắn kết mọi người cả bên trong lẫn bên ngoài tổ chức một cách hiệu quả, đồng thời xây dựng sự tín nhiệm – nhân tố tiền đề của thành công.

Chứa đựng những bài học thực tiễn cùng những hiểu biết sâu sắcc từ các CEO có danh tiếng trong các tổ chức toàn cầu, Ngôn ngữ của nhà lãnh đạo là cuốn sách mà bất cứ ai đang ở vị trí lãnh đạo hoặc khao khát lãnh đạo đều nên đọc và giữ trên bàn làm việc.',
'32', '238', '3', '40', '69.420','2023-12-12 00:00:00.0000000', '13', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '118', 'ngonngucuanhalanhdao_1.jpg', b'1'),(NULL, '118', 'ngonngucuanhalanhdao_2.jpg', b'1'),(NULL, '118', 'ngonngucuanhalanhdao_3.jpg', b'1');


INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (119, NULL, '978604385787','Tư Duy Chiến Lược - Lý Thuyết Trò Chơi Thực Hành','Avinash K. Dixit, Barry J. Nalebuff','Tư Duy Chiến Lược - Lý Thuyết Trò Chơi Thực Hành

Tư duy chiến lược là nghệ thuật vượt qua đối thủ cạnh tranh, với nhận thức rằng họ cũng đang cố gắng vượt qua mình. Mỗi chúng ta đều phải áp dụng tư duy chiến lược, theo cách này hay cách khác, tại nơi làm việc và ngay cả ở nhà. Thương gia và các doanh nghiệp sử dụng các chiến lược cạnh tranh phù hợp để tồn tại. Những huấn luyện viên bóng đá vạch ra các kế hoạch chiến lược để các cầu thủ tiến hành trên sân bóng. Các bậc cha mẹ muốn giáo dục con cái cũng phải trở thành những nhà chiến lược nghiệp dư.

Tư duy chiến lược đúng đắn trong nhiều hoàn cảnh khác nhau vẫn luôn là một nghệ thuật. Nhưng nền tảng của nó được xây dựng trên một số nguyên tắc cơ bản – một khoa học về chiến lược. Sau khi đọc cuốn sách này, người đọc từ các lĩnh vực nghề nghiệp khác nhau có thể trở thành những nhà chiến lược giỏi hơn nếu họ biết được những nguyên tắc này.

Tư duy chiến lược đã mang đến cho nhiều người một cách nhìn mới về mọi sự kiện, hiện tượng trong xã hội, kể từ văn học, phim ảnh và thể thao cho đến các sự kiện chính trị, lịch sử.

Trong Tư duy chiến lược – Lý thuyết trò chơi thực hành của Avinash K. Dixit và Barry J. Nalebuff, các tác giả trình bày cho nhiều ví dụ minh họa từ những lĩnh vực khác nhau cho mỗi nguyên tắc cơ bản. Người đọc từ nhiều lĩnh vực khác nhau sẽ tìm thấy sự chia sẻ ở đây. Bạn cũng sẽ thấy cách thức mà những nguyên lý cơ bản giống nhau tạo ra chiến lược trong những hoàn cảnh khác nhau; hy vọng mang lại những góc nhìn mới về nhiều sự kiện đã và đang xảy ra.

Không hề khô khan như nhiều cuốn sách mang nặng tính học thuyết khác, Tư duy chiến lược diễn biến theo kiểu kể chuyện. Nguồn gốc xưa của nó là một khóa học về "trò chơi chiến lược” mà Avinash Dixit triển khai và dạy tại Trường Woodrow Wilson về Các vấn đề cộng đồng và quốc tế thuộc Đại học Princeton. Barry J.Nalebuff sau đó dạy khóa học này, và dạy một khóa học tương tự ở khoa Khoa học ch.ính trị của Đại học Yale và sau đó là tại Trường Tổ chức và Quản trị (SOM) thuộc Đại học Yale.

Đến nay, Tư duy chiến lược - Lý thuyết trò chơi thực hành đã trở thành cẩm nang quen thuộc của nhiều người, nhờ vào tính đúng đắn và khả năng ứng dụng cao trong thực tiễn đời sống của nó. “Tư duy chiến lược, đừng cạnh tranh khi không có nó”
','33', '544', '9', '40', '133.920','2023-12-12 00:00:00.0000000', '6', '1', b'1');



INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '119', 'TuDuyChienLuoc_1.jpg', b'1'),(NULL, '119', 'TuDuyChienLuoc_2.jpg', b'1'),(NULL, '119', 'TuDuyChienLuoc_3.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (120, NULL, '978604777496','Lean - Vận Hành Doanh Nghiệp Xuất Sắc','	Nguyễn Viết Đăng Khoa','Lean - Vận Hành Doanh Nghiệp Xuất Sắc

Cuốn sách này nói về điều gì?

Lean - Vận Hành Doanh Nghiệp Xuất Sắc không chỉ là một tác phẩm lý thuyết về Lean và xoay quanh những công cụ của nó, mà còn phản ánh sự thấu hiểu sâu rộng và kinh nghiệm thực tế của tác giả trong việc áp dụng phương thức Lean tại Việt Nam. Nội dung của cuốn sách này xoay quanh một số điểm chính quan trọng như sau:

- Lean du nhập vào Việt Nam và hành trình gian nan của những người tiên phong.

- Định nghĩa Lean theo khung 5W1H.

- Bằng cách nào để có được một sự chuyển đổi Lean hiệu quả? Đâu là cạm bẫy cần phải tránh?

- Bài học “Thay đổi hay là chết” và nhu cầu đổi mới sống còn của các doanh nghiệp trong kỷ nguyên VUCA thời kỳ hậu COVID-19.

- Các công cụ của Lean và Mô hình Ngôi Nhà Lean.

- Vai trò của lãnh đạo, khía cạnh nhân sự cũng như văn hóa Lean trong quá trình tiến tới tối ưu hóa vận hành doanh nghiệp xuất sắc.

Về tác giả

Nguyễn Viết Đăng Khoa

- Ông Nguyễn Viết Đăng Khoa là người sáng lập của Cộng Đồng Lean Việt Nam, hiện nay đang giữ vai trò là Giám đốc của Công ty tư vấn Kim Đăng.

- Khi gia nhập Nike vào năm 1996, ông là thành viên của nhóm tiên phong nghiên cứu và phát triển thành công Mô hình sản xuất Lean đầu tiên trên thế giới trong lĩnh vực da giày, thí điểm và triển khai hàng loạt tại các doanh nghiệp mà hiện nay đã trở thành các công ty giày lớn nhất Việt Nam, như Taekwang, Chang Shin, Ching Luh, Freetrend, Pou Chen, Pou Sung, Dona Pacific, Dona Victor, Dona Orient, Dona Standard. Trong thời gian này, ông được trực tiếp học hỏi từ các nhà lãnh đạo tư tưởng Lean hàng đầu thế giới, như John Shook, David Meier, và tu học trực tiếp về Toyota Production System (TPS) tại Toyota, Nagoya (Nhật Bản).

- Giữ vai trò là Lean Manager của Nike cho đến năm 2010, ông đã hướng dẫn, đánh giá và chứng nhận Mô hình Lean (NOS), Lean Assessment Tools (LAT) cho hàng chục nhà máy lớn nhất của Nike Việt Nam và Nike Trung Quốc.

- Sau đó, ông được chiêu mộ để giữ vai trò là Lean Practices Manager đầu tiên của Intel Products Vietnam, dẫn dắt quá trình chuyển hóa sang mô hình quản trị Lean và triển khai chiến lược Hoshin Kanri.

- Đến năm 2013, ông thử sức ở lĩnh vực Logistics tại chi nhánh Damco - Tập đoàn A.P Moller Maersk, với vị trí là Giám Đốc Cải Tiến Quy Trình khu vực Châu Á - Thái Bình Dương (quản lý 9 quốc gia), sau đó tiếp tục thăng tiến để trở thành Chuyên Gia Tối Ưu Hoá Quy Trình thuộc đội ngũ toàn cầu, làm việc tại The Hague (Hà Lan) và nhiều quốc gia Châu Âu, Châu Á và Châu Phi khác.

- Kể từ năm 2015 đến nay, ông dành toàn bộ thời gian để dẫn dắt công ty tư vấn Kim Đăng - một doanh nghiệp nhỏ tại TP. HCM, nhưng có khách hàng là những tổ chức hàng đầu trong và ngoài nước, như Nike, Adidas, Nestlé, Swarovski, Coca-cola, Simpson Strong-Tie, CAMSO (Michelin), Taekwang, Bitis, Tổ Chức Lao Động Thế Giới (ILO), Tập Đoàn Tài Chính Quốc Tế (IFC), Better Work Vietnam, Liên Đoàn Thương Mại & Công Nghiệp Việt Nam (VCCI), TBS Group, Vinasoy, ... Năm 2019, ông thành lập Cộng Đồng Lean Việt Nam, đến nay đã có hơn 3000 thành viên.
','33', '396', '7', '40', '233.220','2023-12-12 00:00:00.0000000', '9', '1', b'1');




INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '120', 'leanvhdnxs_1.jpg', b'1'),(NULL, '120', 'leanvhdnxs_2.jpg', b'1'),(NULL, '120', 'leanvhdnxs_3.jpg', b'1'),(NULL, '120', 'leanvhdnxs_4.jpg', b'1');

INSERT INTO `book` (`Id`, `ComboBookId`, `SKU`, `Name`, `Author`, `Description`, `TypeId`, `NumberPage`, `SizeId`, `Stock`, `Price`, `Date`, `PublisherId`, `CoverTypeId`, `Status`)
VALUES (121, NULL, '893528091312','AI Chuyện Chưa Kể','Tomoe Ishizumi','“Tôi không thể tưởng tượng AI có thể được sử dụng như thế nào trong công việc kinh doanh của chúng tôi”, một người quản lý cho hay.

“Tôi muốn biết công việc và sự nghiệp của mình sẽ thay đổi như thế nào nếu ứng dụng AI”, một doanh nhân bày tỏ.

Cuốn sách AI Chuyện chưa kể của tác giả Tomoe Ishizumi sẽ giải thích hoạt động kinh doanh AI theo cách diễn đạt dễ hiểu nhất có thể và cố gắng không sử dụng các thuật ngữ chuyên ngành, đây là cuốn sách dành cho những người không phải là chuyên gia về công nghệ AI đang có băn khoăn, lo lắng, nghi ngờ về lĩnh vực này.

Nó cũng sẽ giúp ích cho sinh viên, doanh nhân, nhà quản lý, những người muốn biết công việc của họ sẽ liên quan như thế nào đến AI trong tương lai. Đối với các chuyên gia và kỹ sư chuyên môn, tôi hy vọng thông qua cuốn sách này, các bạn có thể biết được rằng khách hàng của các bạn, những doanh nghiệp không chuyên về AI khó có thể lý giải được vấn đề gì hay có thể dễ dàng nắm bắt được vấn đề dưới góc độ như thế nào.
','33', '268', '14', '40', '85.020','2023-12-12 00:00:00.0000000', '20', '1', b'1');




INSERT INTO `image` (`Id`, `BookId`, `Path`,  `Status`) 
VALUES (NULL, '121', 'AIChuyenChuaKe_1.jpg', b'1'),(NULL, '121', 'AIChuyenChuaKe_2.jpg', b'1'),(NULL, '121', 'AIChuyenChuaKe_3.jpg', b'1');