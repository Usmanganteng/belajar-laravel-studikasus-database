<b>requirement/persyaratan</b>
---
> - Php versi 8
>> - Cara menginstal php dalam bahasa indonesia : https://youtu.be/Uw3ZGIMvIdA?si=mBVZ-lBnoCilASzo
>>- Cara menginstal php dalam bahasa inggris : https://youtu.be/MPRLUd8Pmyo?si=FqN54nVr4duH4Keg
---
>>- database
>>- membutuh kan laragon atau xampp 
---
> - Laravel versi 10.0.0
> - cara membuat laravel yang versi yang sama 
```
   Composer Create-project laravel\laravel=10.0.0 nama-projectnya
```
---
<b>Cara menjalankannya</b>
---
> - langkah pertaman : lakukan git clone seperti di bawah ini :
```
 git clone https://github.com/Usmanganteng/belajar-laravel-database.git
```
> - langkah kedua : copy file .env.example dan ganti namanya menjadi .env seperti perintah di bawah ini ketika sudah kalian lakukan, kalian bisa tulis perintah setelah nya yaitu composer install 
```
 cp .env.example .env
 composer install
```
> - langkah ketiga : lakukan perintah seperti di bawah ini :
```
php artisan key:generate
```
> - langkah keempat : kalian bisa buat database dengan nama belajar_laravel_database lalu ganti nama database yang ada di .env dengan nama database yang sudah kalian buat lalu lakukan perintah :
```
php artisan migrate
```
> - langkah terakhir : kailan bisa langsung jalankan atau run dengan menulilskan perintah :
```
php artisan serve
```
---
<b>POINT UTAMA</b>
---
> #### UNTUK APA
> - website ini di buat untuk melakukan login dan todolist
---
> #### Login
> - di halaman ini kalian di suruh untuk login 
> - berikut adalah gambar nya :
> - ![image](https://github.com/Usmanganteng/Belajar-php-studi-kasus-login-ragister/assets/145539295/95bf8bb0-0721-4131-a068-86e1c34a9fd5)
---
> #### Todolist
> - di halam ini kailan bisa mengisi kolom kosong ddan akan muncul di list todo
> - dan di dalam table kalian bisa manghapus sesuai kolom karena di setiap kolom ada tombol remove
> - Berikut adalah gambar nya :
> - ![image](https://github.com/Usmanganteng/Belajar-php-studi-kasus-login-ragister/assets/145539295/aed9b805-a210-4346-85b1-b822074c512c)
---
---
> #### ALUR WEBSITE
> - pertama kalian bisa login dan setelah login kalian bisa memakai kolom untuk mengisi apapun 
<p>
  <b>KESIMPULAN</b>
</p>

> - Laravel membuat kita lebih tahu tentang alur kerja sebuat website

---
