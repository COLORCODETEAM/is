INSERT INTO `room` (`id`, `room_no`, `name`, `description`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`) VALUES 
(1,'Lab-1','Lab-1','Lab-1',1,'2015-04-27 02:50:39',1,'2015-04-27 02:51:52',1),
(2,'Lab-2','Lab-2','Lab-2',1,'2015-04-27 02:51:10',1,'2015-04-27 02:52:07',1);

INSERT INTO `stock` (`id`, `stock_no`, `name`, `description`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`) VALUES 
(1,'High school','High school','High school',1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1),
(2,'Elementary school','Elementary school','Elementary school',1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1);

INSERT INTO `material_type` (`id`, `type_no`, `name`, `description`, `flag`) VALUES 
(1,'กระดาษ A4 (ลีม)','กระดาษ A4 (ลีม)','กระดาษ A4 (ลีม)',1),
(2,'เทปใส','เทปใส','เทปใส',1),
(3,'ลูกแม็ค','ลูกแม็ค','ลูกแม็ค',1),
(4,'สายแลน','สายแลน','สายแลน',1),
(5,'ม้วนสายแลน','ม้วนสายแลน','ม้วนสายแลน',1),
(6,'หัวRJ','หัวRJ','หัวRJ',1),
(7,'น๊อต','น๊อต','น๊อต',1),
(8,'สาย VGA','สาย VGA','สาย VGA',1),
(9,'สาย Power','สาย Power','สาย Power',1),
(10,'สาย pair','สาย pair','สาย pair',1),
(11,'ตลับสายไฟ','ตลับสายไฟ','ตลับสายไฟ',1),
(12,'ลางสายแลน','ลางสายแลน','ลางสายแลน',1),
(13,'หัวต่อ HDMI','หัวต่อ HDMI','หัวต่อ HDMI',1),
(14,'หัวต่อ Video line','หัวต่อ Video line','หัวต่อ Video line',1),
(15,'Tonner','Tonner','Tonner',1),
(16,'ตลับหมึกสี Drum','ตลับหมึกสี Drum','ตลับหมึกสี Drum',1),
(17,'Harddisk','Harddisk','Harddisk',1),
(18,'Ram','Ram','Ram',1),
(19,'Power Supply','Power Supply','Power Supply',1),
(20,'CD/DVD','CD/DVD','CD/DVD',1),
(21,'แผ่นรองเม้า','แผ่นรองเม้า','แผ่นรองเม้า',1),
(22,'ตัวหุ้มสายไฟ','ตัวหุ้มสายไฟ','ตัวหุ้มสายไฟ',1),
(23,'ใส้ไก่','ใส้ไก่','ใส้ไก่',1);
INSERT INTO `material` (`id`, `material_no`, `brand`, `model`, `description`, `serial_no`, `amount`, `unit_price`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`, `stock_id`, `material_type_id`) VALUES 
(1,'กระดาษ A4-1-NO','กระดาษ A4-1-Brand','กระดาษ A4-1-Model','กระดาษ A4-1-Description','กระดาษ A4-1-SN',10,NULL,4,'2015-05-14 06:43:00',4,'2015-05-14 06:50:00',1,2,1),
(2,'เทปใส-1-NO','เทปใส-1-Brand','เทปใส-1-Model','เทปใส-1-Description','เทปใส-1-SN',10,NULL,4,'2015-05-14 06:44:00',4,'2015-05-14 06:44:00',1,2,2),
(3,'ลูกแม็ค-1-NO','ลูกแม็ค-1-Brand','ลูกแม็ค-1-Model','ลูกแม็ค-1-Description','ลูกแม็ค-1-SN',10,NULL,4,'2015-05-14 06:45:00',4,'2015-05-14 06:45:00',1,2,3),
(4,'สายแลน-1-NO','สายแลน-1-Brand','สายแลน-1-Model','สายแลน-1-Description','สายแลน-1-SN',10,NULL,4,'2015-05-14 06:46:00',4,'2015-05-14 06:46:00',1,2,4),
(5,'กระดาษ A4-2-NO','กระดาษ A4-2-Brand','กระดาษ A4-2-Model','กระดาษ A4-2-Description','กระดาษ A4-2-Sn',10,NULL,3,'2015-05-14 07:04:00',3,'2015-05-14 07:04:00',1,1,1),
(6,'เทปใส-2-NO','เทปใส-2-Brand','เทปใส-2-Model','เทปใส-2-Description','เทปใส-2-Sn',10,NULL,3,'2015-05-14 07:05:00',3,'2015-05-14 07:05:00',1,1,2),
(7,'ม้วนสายแลน-2-NO','ม้วนสายแลน-2-Brand','ม้วนสายแลน-2-Model','ม้วนสายแลน-2-Description','ม้วนสายแลน-2-SN',10,NULL,3,'2015-05-14 07:06:00',3,'2015-05-14 07:06:00',1,1,5),
(8,'หัวRJ-2-NO','หัวRJ-2-Brand','หัวRJ-2-Model','หัวRJ-2-Description','หัวRJ-2-SN',10,NULL,3,'2015-05-14 07:07:00',3,'2015-05-14 07:07:00',1,1,6);

INSERT INTO `device_type` (`id`, `type_no`, `name`, `description`, `flag`) VALUES 
(1,'Monitor','Monitor','Monitor',1),
(2,'Printer','Printer','Printer',1),
(3,'Scanner','Scanner','Scanner',1),
(4,'Projecter','Projecter','Projecter',1),
(5,'Speaker','Speaker','Speaker',1),
(6,'Splitter','Splitter','Splitter',1),
(7,'External HDD','External HDD','External HDD',1),
(8,'External LAN Card','External LAN Card','External LAN Card',1),
(9,'External DVD','External DVD','External DVD',1),
(10,'Camera','Camera','Camera',1),
(11,'Video Camera','Video Camera','Video Camera',1),
(12,'ขาตั้งกล้อง','ขาตั้งกล้อง','ขาตั้งกล้อง',1),
(13,'ฉากตั้ง LCD','ฉากตั้ง LCD','ฉากตั้ง LCD',1),
(14,'Headphone','Headphone','Headphone',1),
(15,'Webcam','Webcam','Webcam',1),
(16,'Mouse','Mouse','Mouse',1),
(17,'Keyboard','Keyboard','Keyboard',1),
(18,'Notebook','Notebook','Notebook',1),
(19,'เครื่องทำ label','เครื่องทำ label','เครื่องทำ label',1),
(20,'กรรไกร','กรรไกร','กรรไกร',1),
(21,'คีม','คีม','คีม',1),
(22,'ไขควง','ไขควง','ไขควง',1),
(23,'คีมหนีบหัว lan','คีมหนีบหัว lan','คีมหนีบหัว lan',1),
(24,'คัตเตอร์','คัตเตอร์','คัตเตอร์',1),
(25,'ที่ตัดกระดาษ','ที่ตัดกระดาษ','ที่ตัดกระดาษ',1),
(26,'ไม้บรรทัดเหล็ก','ไม้บรรทัดเหล็ก','ไม้บรรทัดเหล็ก',1),
(27,'Notebook','Notebook','Notebook',1),
(28,'แม็ก','แม็ก','แม็ก',1);
INSERT INTO `device` (`id`, `device_no`, `brand`, `model`, `ip_address`, `description`, `serial_no`, `warranty`, `amount`, `unit_price`, `remark`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`, `stock_id`, `device_type_id`) VALUES 
(1,'Monitor-1-NO','Monitor-1-Brand','Monitor-1-Model','Monitor-1-IP','Monitor-1-Description','Monitor-1-SN','Monitor-1-Warranty',10,NULL,NULL,4,'2015-05-14 04:56:00',4,'2015-05-14 04:56:00',1,2,1),
(2,'Printer-1-NO','Printer-1-Brand','Printer-1-Model','Printer-1-IP','Printer-1-Description','Printer-1-SN','Printer-1-Warranty',10,NULL,NULL,4,'2015-05-14 04:57:00',4,'2015-05-14 05:01:00',1,2,2),
(3,'Scanner-1-NO','Scanner-1-Brand','Scanner-1-Model','Scanner-1-IP','Scanner-1-Description','Scanner-1-SN','Scanner-1-Warranty',10,NULL,NULL,4,'2015-05-14 04:58:00',4,'2015-05-14 05:02:00',1,2,3),
(4,'Projector-1-NO','Projector-1-Brand','Projector-1-Model','Projector-1-IP','Projector-1-Description','Projector-1-SN','Projector-1-Warranty',10,NULL,NULL,4,'2015-05-14 04:59:00',4,'2015-05-14 05:04:00',1,2,4),
(5,'Monitor-2-NO','Monitor-2-Brand','Monitor-2-Model','Monitor-2-IP','Monitor-2-Description','Monitor-2-SN','Monitor-2-Warranty',10,NULL,NULL,3,'2015-05-14 07:08:00',3,'2015-05-14 07:08:00',1,1,1),
(6,'Printer-2-NO','Printer-2-Brand','Printer-2-Model','Printer-2-IP','Printer-2-Description','Printer-2-SN','Printer-2-Warranty',10,NULL,NULL,3,'2015-05-14 07:08:00',3,'2015-05-14 07:08:00',1,1,2),
(7,'Speaker-2-NO','Speaker-2-Brand','Speaker-2-Model','Speaker-2-IP','Speaker-2-Description','Speaker-2-SN','Speaker-2-Warranty',10,NULL,NULL,3,'2015-05-14 07:09:00',3,'2015-05-14 07:09:00',1,1,5),
(8,'Splitter-2-NO','Splitter-2-Brand','Splitter-2-Model','Splitter-2-IP','Splitter-2-Description','Splitter-2-SN','Splitter-2-Warranty',10,NULL,NULL,3,'2015-05-14 07:10:00',3,'2015-05-14 07:10:00',1,1,6);

INSERT INTO `user_role` (`id`, `role_no`, `name`, `description`) VALUES 
(1,'admin','admin','admin'),
(2,'manager','manager','manager'),
(3,'support','support','support'),
(4,'user','user','user');
INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `remember_token`, `phone`, `create_user`, `created_at`, `update_user`, `updated_at`, `flag`, `user_role_id`) VALUES 
(1,'admin','admin','admin@mail.com','$2y$10$xdhKqEX45bayqVAMOB/moOdC6zk4p6MyQHMpp0/zRRAAZnYr6vDqq','QfRpYFSSFBeJKk0GQ0I5hJpqqfw8pp8osIBQvnFsG7CtJaomgPbihYTJFasC',811111111,0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,1),
(2,'manager','manager','manager@mail.com','$2y$10$7np7eqXwr5psfvp/ezH7DeXWzwkcTo.u3p9HoFtkck5bBHj1j6AhG','IqgxhGdHwpZFHZqOxRI1izm5JMQ5l0yu8oaQG75Pt2zipyi4gkx4zpUL5PkI',811111111,0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,2),
(3,'support','primary school','support.primaryschool@mail.com','$2y$10$xdhKqEX45bayqVAMOB/moOdC6zk4p6MyQHMpp0/zRRAAZnYr6vDqq','QfRpYFSSFBeJKk0GQ0I5hJpqqfw8pp8osIBQvnFsG7CtJaomgPbihYTJFasC',811111111,0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,3),
(4,'support','elementary school','support.elementaryschool@mail.com','$2y$10$xdhKqEX45bayqVAMOB/moOdC6zk4p6MyQHMpp0/zRRAAZnYr6vDqq','QfRpYFSSFBeJKk0GQ0I5hJpqqfw8pp8osIBQvnFsG7CtJaomgPbihYTJFasC',811111111,0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,3),
(5,'user','user','user@mail.com','$2y$10$P6Qt1vcqqtTCODdYpkShqezF19HHllykc/2oIJr/I8XvBds7UOq6G','feUYTCftKdZhbLJB9tH7gyvkIVRgfKcmWLG57BvyLg5D5LO2T6VRoWBX3GT3',811111111,0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,4);

INSERT INTO `user_stock` (`id`, `name`, `description`,`flag`, `stock_id`, `users_id`) VALUES 
(1,'Support High school','Support High school',1,1,3),
(2,'Support Elementary school','Support Elementary school',1,2,4),
(3,'Manager High School','Manager High School',1,1,2),
(4,'Manager Elementary School','Manager Elementary School',1,2,2),
(5,'Admin High School','Admin High School',1,1,1),
(6,'Admin Elementary School','Admin Elementary School',1,2,1),
(7,'User High School','User High School',1,1,5),
(8,'User Elementary School','User Elementary School',1,2,5);