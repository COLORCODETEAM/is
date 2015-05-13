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
INSERT INTO `device` (`id`, `device_no`, `brand`, `model`, `ip_address`, `description`, `serial_no`, `warranty`, `amount`, `unit_price`, `remark`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`, `stock_id`, `device_type_id`) VALUES (1,'Monitor-1','Monitor-1','Monitor-1','192.168.1.1','Monitor-1','Monitor-1','Monitor-1',10,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',0,1,1),(2,'Printer-1','Printer-1','Printer-1','192.168.1.2','Printer-1','Printer-1','Printer-1',20,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',0,1,2),(3,'Scanner-1','Scanner-1','Scanner-1','192.168.1.3','Scanner-1','Scanner-1','Scanner-1',30,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',0,1,3),(4,'Monitor-2','Monitor-2','Monitor-2','192.168.2.1','Monitor-2','Monitor-2','Monitor-2',10,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1,2,1),(5,'Printer-2','Printer-2','Printer-2','192.168.2.2','Printer-2','Printer-2','Printer-2',20,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1,2,2),(6,'Scanner-2','Scanner-2','Scanner-2','192.168.2.3','Scanner-2','Scanner-2','Scanner-2',30,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1,2,3),(7,'Booking-1','Booking-1','Booking-1','192.168.1.1','Booking-1','Booking-1','Booking-1',1,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1,1,1),(8,'Booking-11','Booking-11','Booking-11','192.168.1.11','Booking-11','Booking-11','Booking-11',11,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1,1,1),(9,'Lend-1','Lend-1','Lend-1','192.168.1.1','Lend-1','Lend-1','Lend-1',1,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1,1,1),(10,'Lend-11','Lend-11','Lend-11','192.168.1.11','Lend-11','Lend-11','Lend-11',11,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1,1,1),(11,'Repair-1','Repair-1','Repair-1','192.168.1.1','Repair-1','Repair-1','Repair-1',1,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1,1,1),(12,'Repair-11','Repair-11','Repair-11','192.168.1.11','Repair-11','Repair-11','Repair-11',11,NULL,NULL,1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1,1,1);


INSERT INTO `user_role` (`id`, `role_no`, `name`, `description`) VALUES 
(1,'admin','admin','admin'),
(2,'manager','manager','manager'),
(3,'support','support','support'),
(4,'user','user','user');
INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `remember_token`, `phone`, `create_user`, `created_at`, `update_user`, `updated_at`, `flag`, `user_role_id`) VALUES 
(1,'manager','manager','manager@mail.com','$2y$10$7np7eqXwr5psfvp/ezH7DeXWzwkcTo.u3p9HoFtkck5bBHj1j6AhG','IqgxhGdHwpZFHZqOxRI1izm5JMQ5l0yu8oaQG75Pt2zipyi4gkx4zpUL5PkI',811111111,0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,1),
(2,'support','support','support@mail.com','$2y$10$xdhKqEX45bayqVAMOB/moOdC6zk4p6MyQHMpp0/zRRAAZnYr6vDqq','QfRpYFSSFBeJKk0GQ0I5hJpqqfw8pp8osIBQvnFsG7CtJaomgPbihYTJFasC',811111111,0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,2),
(3,'user','user','user@mail.com','$2y$10$P6Qt1vcqqtTCODdYpkShqezF19HHllykc/2oIJr/I8XvBds7UOq6G','feUYTCftKdZhbLJB9tH7gyvkIVRgfKcmWLG57BvyLg5D5LO2T6VRoWBX3GT3',811111111,0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,3);
