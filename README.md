# Malevolent Plutonium

Malevolent Plutonium is a custom server and tools project themed around a zombies experience for Call of Duty: Black Ops II. It provides a game server backend and a companion website with leaderboards, news, guides, and utility features.


## Prerequisites

    - PHP 8.2+ 
    - MYSQL 8.x+
    - Composer Version 2

## Development Setup Tutorial

    1. git clone https://github.com/DDDDec/MalevolentPlutonium.git
    2. cd malevolentwebsite
    3. copy .env.example .env
    4. composer install
    5. php artisan migrate
    6. php artisan key:generate
    7. php artisan serve

## Contributing

    1. Fork the repository
    2. Create a contribute branch: `git checkout -b contribute/my-contribution`
    3. Commit your changes: `git commit -m "Add my contribution"`
    4. Push to the branch: `git push origin contribute/my-contribution`
    5. Open a pull request

## License

Malevolent is provided under the license specified in the repository’s `LICENSE` file.


