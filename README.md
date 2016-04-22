# Bullshit Bingo-API

## Deployment
git clone https://github.com/DerOli82/bullshitbingo-api temp

Goto temp

rsync -a --exclude-from=".gitignore" --exclude=".git" * <destination>

Goto <destination>

php composer.phar install --no-dev --prefer-dist --optimize-autoloader
