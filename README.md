# Eusoff Apps

### Installation:
1. Pull Repo.
2. Install dependencies via "composer install"
3. Set up .env file by duplicating the .env.example file (Especially database settings - for local usage, see "Setting up SQLite").
4. Migrate databases with "php artisan migrate".
5. Serve (For local usage, use "php artisan serve").

### Setting up SQLite
1. In .env file, remove all DB variables except "DB_CONNECTION".
2. Set "DB_CONNECTION=sqlite".
3. Create an empty file in the database folder named "database.sqlite".
4. Migrate databases with "php artisan migrate".

## Jersey Bidding

### Creating test entries
1. Open Tinker/REPL using "php artisan tinker"
2. Create list of numbers using "Number::factory()->count(100)->create()"
3. Create list of users using "User::factory()->count(x)->create()" where x is number of users.
