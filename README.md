<h1 align="center">Bluespace</h1>

## Tentang
<p>Bluespace merupakan sebuah website kecil yang dibuat untuk menyimpan gambar layaknya sebuah gallery.</p>

## Tools yang digunakan

- [VScode](https://code.visualstudio.com/download).
- [XAMPP](https://www.apachefriends.org/download.html).
- [composer](https://getcomposer.org/download/)
- Laravel versi 10.0 dan Bootstrap Framework
- Git
- Github
- PHP versi 8.2

## Menggunakan aplikasi/website Bluespace
Untuk bisa mengakses website ini, anda tinggal membuat akun pada halaman sign up lalu sign in.

## Entity Relationship Diagram, Unified Modeling Language, dan Relasi

<h4 align="center">Entity Relationship Diagram</h4>
![erd](https://github.com/intanrnay/tatagallery/assets/140694462/3f40fd50-9cc4-4bb2-a123-85980c5af55e)

<h4 align="center">Unified Modeling Language</h4>
![uml](https://github.com/intanrnay/tatagallery/assets/140694462/12f50f35-39d0-472f-ae1e-87deb1255aab)

<h4 align="center">Relasi</h4>
![Screenshot (23)](https://github.com/intanrnay/tatagallery/assets/140694462/0ebd92ac-c85d-42a1-b012-092324aa6cac)

## Instalasi
1. Clone Repository
```
https://github.com/Kuro192/UKK_Gallery.git
```

2. Install Composer
```
composer install
```
atau
```
composer update
```

3. Copy .Env
```
copy .env.example .env
```

4. Setting database di .env
```
DB_PORT=3306
DB_DATABASE=galleryphoto
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key
```
php artisan key:generate
```

6. Jalankan migrate dan seeder
```
php artisan migrate

7. Jalankan Serve
```
php artisan serve

## Tampilan Website
<h3 align="center">Homepage</h3>

![Screenshot (13)](https://github.com/intanrnay/tatagallery/assets/140694462/d37e053e-a75c-492e-8005-695bf566e2b1)
<h3 align="center">Studio</h3>

![Screenshot (11)](https://github.com/intanrnay/tatagallery/assets/140694462/657310af-b619-4d64-a545-856e0ea5ce8b)
<h3 align="center">Sign Up</h3>

![Screenshot (8)](https://github.com/intanrnay/tatagallery/assets/140694462/34ec73ab-6c0a-4018-bc3b-e6a9ba40ee63)
<h3 align="center">Sign In</h3>

![Screenshot (7)](https://github.com/intanrnay/tatagallery/assets/140694462/bdde40e3-73f4-47d3-8c81-1914bfbe7896)
<h3 align="center">Post Photo</h3>

![Screenshot (9)](https://github.com/intanrnay/tatagallery/assets/140694462/3dfb2e74-a3b8-42c8-a186-a5e61838c63f)
<h3 align="center">Comment</h3>

![Screenshot (21)](https://github.com/intanrnay/tatagallery/assets/140694462/76f5ddee-01d7-424a-ad22-1d4a124303c8)
<h3 align="center">Like</h3>

![Screenshot (20)](https://github.com/intanrnay/tatagallery/assets/140694462/f1e13ef2-0fec-4475-85e6-0b68b918252c)
<h3 align="center">Post Album</h3>

![Screenshot (15)](https://github.com/intanrnay/tatagallery/assets/140694462/4d3e3546-1a62-4582-85c5-f62133330e42)
<h3 align="center">Album</h3>

![Screenshot (18)](https://github.com/intanrnay/tatagallery/assets/140694462/d1a89add-c664-44ff-973b-ec01a455315d)


## Note
Website masih dalam proses pengembangan sehingga masih ada beberapa fitur yang belum bisa digunakan seperti delete post, delete komentar, dan delete album. untuk itu, disarankan untuk menggunakan fitur yang sudah berjalan seperti posting foto, like, comment atau membuat album. Terima Kasih <3
