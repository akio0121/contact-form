# お問い合わせフォーム

## 環境構築

#### Docker ビルド
1. `$ git clone git@github.com:akio0121/contact-form.git`
2. DockerDesktopアプリを起動する。
3. `$ docker-compose up -d --build`

#### Laravel 環境構築
```bash
$ docker-compose exec php bash
$ composer install
```
`.env.example`ファイルを`.env`ファイルに命名を変更する。
```bash
$ php artisan key:generate
$ php artisan migrate
```

## 使用技術（実行環境）
- PHP 7.4.9
- MySQL 8.0.26
- Laravel 8.83.8

### URL
- 開発環境 http://localhost
- phpMyAdmin http://localhost:8080/