# Emergency Rhiaro Hologram

A collection of helpers common to [my ActivityPub posting clients](https://apps.rhiaro.co.uk/).

## Set up for dev

```
docker run --rm --interactive --tty \
  --volume $PWD:/app \
  --volume ${COMPOSER_HOME:-$HOME/.composer}:/tmp \
  composer install
```

## Install & use