### 1. install composer
```sh
composer install
```

### 2. Ganti .env.example jadi .env
```sh
cp .env.example .env
```

### 3. install npm
```sh
npm i
```

### 4. migrate database
```sh
php artisan migrate
```

### 5. Membuat Akun Admin
```sh
php artisan db:seed --class="CreateUsersSeeder"
```

### 6. menyambungkan image
```sh
php artisan storage:link
```

### 7. generate key
```sh
php artisan key:generate
```

### 8. run npm
```sh
npm run dev
```

## 9. jalankan laravel
```sh
php artisan serve
```
