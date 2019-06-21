READ ME ( อ่านด้วย )

ถ้า Coppy ไปแล้ว ทำ visual host ด้วย

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

หาไฟล์  hosts เปิด โดยใช้ Node Pad 

เพิ่ม ตัวล่างนี้ลงไป

127.0.0.1	project.shop.com

แล้ว Save ทับ อันเดิม

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
