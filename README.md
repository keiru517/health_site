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

## Instructions
You will have 2-4 hours to complete tickets from a ticket pool.  Which tickets you choose to complete are up to you.

You are NOT allowed to install any additional composer/npm packages, and must work within the confines of the given tech stack. For CSS, we prefer you use Tailwind/Daisy where possible, but falling back to vanilla CSS is okay.

You can use as much documentation and resources from the internet as you want, as long as you aren't receiving "live" help from any other person(s).

Each ticket should be submitted seperately via it's own PR/branch.

PR's sent in after the 4 hour mark will not be accepted.  However, partial completion of tickets will still be considered.

## Ready to begin?
Once you have the application running, let me knnow to schedule a time to being the assessment. You will be sent a link to a website containing the tickets.

## Completion

Let me know once you finished the tickets.  You will be contacted after our team has reviewed your work.
