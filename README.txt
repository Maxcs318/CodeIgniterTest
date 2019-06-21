READ ME ( อ่านด้วย )

ถ้า Coppy ไปแล้ว ทำ visual host ด้วย 

-->   เอาไฟล์ที่ลง ไว้ใน xampp\htdocs   <--

ขั้นตอนการทำ 

ไปที่

C:\xampp\apache\conf\extra    ( อาจจะไม่ใช่ ไดร์ C:\\ ถ้าลง xampp ไว้ที่อื่น ก็ไปหาตาม ไดร์ที่ลง )

หาไฟล์ httpd-vhosts.conf  เปิด โดยใช้ Node Pad

เพิ่ม ตัวล่างนี้ลงไป

<VirtualHost *:80>

    ServerAdmin project.shop.com

    DocumentRoot "C:/xampp/htdocs/project_shop/public/"

    ServerName  project.shop.com   

    ##ErrorLog "logs/dummy-host2.example.com-error.log"

    ##CustomLog "logs/dummy-host2.example.com-access.log" common

</VirtualHost>

แล้ว Save

หลังจากนั้น ไป

C:\Windows\System32\drivers\etc

หาไฟล์  hosts เปิด โดยใช้ Node Pad  ( ถ้าไม่มีไฟล์นี้ ไปหาโหลดเอาตามเว็ปได้ครับ )

เพิ่ม ตัวล่างนี้ลงไป

127.0.0.1	project.shop.com

แล้ว Save ทับ อันเดิม

Database ที่ใช้เป็น Localhost

ให้ Import ไฟล์ sql ที่อยู่ใน Folder  _Data_

ลงใน LocalhostphpMyadmin ด้วย

( ใช้ชื่อตอน import อันนี้  project_shop หรือถ้าตั้งเองใหม่ ก็ไปเปลี่ยนในโปรแกรมด้วย  )

ส่วน username , password สำหรับเข้า phpmyadmin อันนี้ที่เซทไว้เป็น (username --> 'root', password --> '')

ไปเปลี่ยนเอาเองได้ถ้ามันไม่ตรงกัน เปลี่ยนที่ไฟล์ ( มีให้เปลี่ยนหมด ทั้งชื่อ database name,username ,password , ฯ )

C:\xampp\htdocs\CodeIgniterTest\work\config\database.php

จบครับ รอเหี้ยไรล่ะ
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
.
ยังจะตามมาอ่านอีกนะไอ่สัส กูบอกว่าจบแล้วไง
