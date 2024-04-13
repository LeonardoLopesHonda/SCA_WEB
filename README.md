## Project Requirements
- PHP 8.2.12
- Composer 2.7.1
- Xampp 3.3.0

## Cloning Project
Run the following command:
```git
git clone https://github.com/LeonardoLopesHonda/SCA_WEB.git
```

Then go to the project's folder:
```cmd
cd SCA_WEB
```

## Installing packages
Once inside the project folder, run the following command:
```cmd
composer install && npm install
```

When the packages are installed, run the CSS and JS build:
```cmd
npm run dev
```

On other terminal run the development server:
```cmd
php artisan serve
```

## Filling database with test data

On a new terminal run:
```cmd
php artisan migrate:refresh --seed
```

This will run the factories wich will provide some fake data to test the basic functionalities.