# My Interview Socia Media Project
## Installation Steps

1. Install dependencies with composer and npm

```bash
  composer install && npm install
```

2. Copy .env.example,generate key and setup database

```bash
  cp .env.example .env
```

```bash
  php artisan key:generate
```

```bash
  php artisan migrate:fresh --seed
```

3. Run Development Hot Reload Server

```bash
  npm run dev
```

```bash
  php artisan serve
```

https://github.com/RarJar/Interview-Social-Media-Project/blob/main/public/JuniorLaravelCodeTest.pdf
