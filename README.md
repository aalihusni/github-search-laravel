# app

## Setup

```bash
# install dependencies
$ composer install
```

### Database

Create database in MySQL:

```
CREATE DATABASE github;
```

### `.env` file

Duplicate `.env.example` to `.env`

```
# Duplicate `.env.example` to `.env`
$ cp .env.example .env

# setup database
$ php artisan migrate:fresh
```

## Usage

It's required to have the [GitHub Personal Access Token](https://docs.github.com/en/github/authenticating-to-github/creating-a-personal-access-token) in order to use this application.

The scope should be enough with `repo` only.

Once the token generated, copy it and save it in `.env`:

```
GITHUB_TOKEN="7a1c069ab801d8239211eaf2e6fbe40ddd88390c"
```

Then run:

```bash
$ php artisan serve
```

Go to your browser, type: `http://localhost:8000`. 

Demo usage as per this YouTube [link](https://youtu.be/3_mpgbwAJWM)
