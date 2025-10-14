# Exploring PHP 8 - Paul Tregoing

## Building Images

```
$ cd docker/8.4
$ docker build -t paultregoing/ex-php:8.4-cli .
```

## Command Aliases

To save on typing (and RSI) add the following to your `~/.bashrc` file (or equivalent):

```
alias docker-php8.4='docker run -it --rm -p 8000:8000 -v "$PWD":/usr/src/myapp -w /usr/src/myapp paultregoing/ex-php:8.4-cli php'
alias dphp='docker-php8.4'
```

Make sure the aliases are available, `$ dphp -v` will do the trick, then take the source code for a spin.

```
$ source ~/.bashrc
$ cd ../src/Ch01_Getting_Started
$ dphp 05.01_which_sapi.php
```

## Other useful docker commands for .bashrc

```
alias docker-phpcs='docker run --rm -v $(pwd):/data cytopia/phpcs'
alias docker-composer='docker run --rm --interactive --tty --volume $PWD:/app composer'
alias docker-node='docker run -it --rm --name my-running-script -v "$PWD":/usr/src/app -w /usr/src/app node:19-bullseye node'
```
