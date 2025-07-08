<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Projeto Laravel + Filament

## Como rodar localmente

(Suas instruções locais aqui...)

---

## Deploy no Railway (Laravel/Filament)

### 1. Suba seu código para o GitHub

```bash
git init
git add .
git commit -m "Projeto Laravel Filament"
git branch -M main
git remote add origin https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git
git push -u origin main
```

---

### 2. Crie uma conta no [Railway](https://railway.app/)
- Faça login com GitHub.

---

### 3. Crie um novo projeto
- Clique em **New Project** > **Deploy from GitHub repo**
- Escolha seu repositório Laravel

---

### 4. Configure o ambiente
- Railway detecta projetos PHP automaticamente.
- No painel do Railway, vá em **Variables** e adicione as variáveis do seu `.env` (APP_KEY, DB, etc).
- Use o banco de dados integrado do Railway (PostgreSQL, MySQL, etc.) e copie as credenciais para o `.env`.

---

### 5. Configure os comandos de build e start

- **Build:**
  ```bash
  composer install --no-dev --optimize-autoloader && php artisan migrate --force && npm install && npm run build
  ```
- **Start:**
  ```bash
  php artisan serve --host=0.0.0.0 --port $PORT
  ```

---

### 6. Gere a chave do app
No painel do Railway, abra o terminal e rode:
```bash
php artisan key:generate
```

---

### 7. Acesse sua aplicação
- Railway fornece uma URL pública (ex: `https://seu-projeto.up.railway.app`)
- O painel Filament estará em `/admin`

---

### Dicas importantes
- Nunca suba seu `.env` para o GitHub.
- Configure as variáveis de ambiente no painel do Railway.
- Para emails, use um serviço SMTP (Mailtrap, Gmail, etc.) e configure no `.env`.

---

### Deploy no Render (alternativa)
- O processo é quase igual ao Railway.
- Crie um novo Web Service, conecte ao GitHub, escolha PHP.
- Configure build/start, variáveis de ambiente, banco de dados.
- Render também oferece domínio gratuito.
