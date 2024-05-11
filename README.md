## My Interview Socia Media Project
# Installation Steps

1. Install dependencies with composer and npm

```bash
  composer install && npm install
```

2. Copy .env.example and setup database

```bash
  cp .env.example .env
```

-   Generate key in env file

```bash
  php artisan key:generate
```

3. Run Development Hot Reload Server

```bash
  npm run dev
```

```bash
  php artisan serve
```
