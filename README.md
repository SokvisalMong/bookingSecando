## Initialization

To run the Sail application in detached mode:
```
./vendor/bin/sail up -d
```

Create a link between public and storage:
```
./vendor/bin/sail artisan storage:link
```

Install npm dependencies:
```
./vendor/bin/sail npm ci
```

Run for development:
```
./vendor/bin/sail npm run dev
```

Compile for deployment:
```
./vendor/bin/sail npm run build
```
This compiles all the css we need and gets rid of the extra css that we won't use.

## Technology

### Frontend Framework

- Laravel 9
- PHP 8
- Vite

### Frontend Styling Tools

- Bootstrap 5
- Tailwind CSS
- Vite

### Backend Framework

- Laravel 9
- PHP 8
- MySQL Database (soon to be hosted using [railway](https://railway.app))

### Miscellaneous

- Docker
- Docker Composer
- Laravel Sail

## Resources

[Inspiration](https://www.opentable.com/)

[Google Drive](https://drive.google.com/drive/folders/1CbFcbP1Hz0zvRlunYu30wi7OE9awHrBU?usp=sharing)

[Github Repository](https://github.com/SokvisalMong/bookingSecando)

## Roles

### Backend

- Sokvisal

### Frontend