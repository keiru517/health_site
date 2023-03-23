# Developer Assesment

## Tech Stack

This assessment repo is built on top of one of our go-to stacks:
- [Laravel](https://laravel.com/docs)
- [InertiaJS](https://inertiajs.com/how-it-works)
- [Vue3](https://vuejs.org/guide/introduction.html)
- [TailwindCSS](https://tailwindcss.com/docs)
- [DaisyUI](https://daisyui.com/components/)

## Setup
You will need:
- PHP 8.1+
- Composer
- MySQL (LTS or latest)
- Node 16

Once you have pulled down the code:

### Environment:
Copy .env.example to .env

### Database
Create a mysql database "candidate_assessment"

### Dependencies

```bash
# install php dependencies
composer install

# install node dependencies
npm install

#create and seed the db
php artisan migrate:fresh --seed
```

## Development Server

```bash
# starts the node development server, and recompiles the JS when you save
npm run hot

#if for some reason you just want to do a single development build, and not watch for changes:
npm run develop

#start the application
php artisan serve
```

At this point, you should be able to navigate to localhost:8000, and see the website.

