# Установка проекта Laravel с Inertia.js и Vue 3

## Шаги установки

```bash
# Создать проект Laravel
composer create-project laravel/laravel .

# Установить PHP-зависимости
composer install

# Установить JS-зависимости
npm install

# Установить Inertia.js для Laravel
composer require inertiajs/inertia-laravel

# Установить Inertia.js и Vue 3 через npm
npm install @inertiajs/inertia @inertiajs/inertia-vue3 vue@^3

# Установить Vite плагин для Vue
npm install -D @vitejs/plugin-vue
