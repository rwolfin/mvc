# 🌐 Сайт-визитка на MVC-архитектуре

[![PHP Version](https://img.shields.io/badge/PHP-8.1%2B-777BB4?logo=php)](https://php.net/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![MVC](https://img.shields.io/badge/Architecture-MVC-blueviolet)](https://ru.wikipedia.org/wiki/Model-View-Controller)

Шаблон "сайта-визитки" с чистой MVC-архитектурой.


### Структура

```

mvc/
├── app/
│   ├── controllers/    # Контроллеры
│   ├── core/           # Ядро системы
│   ├── models/         # Модели данных
│   └── views/          # Шаблоны представлений
├── public/             # Публичная директория
│   ├── index.php       # Точка входа
│   └── .htaccess       # Конфигурация Apache
└── README.md           # Документация
```

## Быстрый старт



### Требования
- PHP 8.1+
- Apache/Nginx с mod_rewrite

### Установка
```bash
# Клонирование репозитория
git clone https://github.com/your-username/mvc-site.git
cd mvc-site

# Установка зависимостей
composer install

# Настройка прав
chmod -R 755 public/
```

