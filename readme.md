# Kirby Revisions 2

*Version 2.4 beta* - ***For version 1, see [version-1](https://github.com/jenstornell/kirby-revisions/tree/version-1) branch.***

***I do not guarantee that this is a safe way to backup and restore backups.***

## Screenshots 

**Page with revisions**

![](docs/screenshot1.png)

**Revisions archive**

![](docs/screenshot3.png)

**A revision**

![](docs/screenshot2.png)

## 1. Install

### Kirby CLI

Run this command:

```
kirby plugin:install jenstornell/kirby-revisions
```

### Manually

Add the folder `kirby-revisions` into `/site/plugins/`.

## 2. Setup

To show the revisions on the page you need to add a field for it.

### Blueprint

```
fields:
  revisions:
    label: Revisions
    type: revisions
```

## 3. Remove `revisions` in the queries

Every page that has revisions will have a folder called `revisions`. In your templates and snippets you need to remove it from your query.

**To do that you can use a collection filter:**

https://getkirby.com/docs/developer-guide/objects/collections
*An example might be added in a later point of time.*

## Changelog

**2.4**

- **Bugfix:** Fixed issue with rollback in multi language

**2.3**

- **Bugfix:** Fixed an issue so it also work without multi language

**2.2**

- **Bugfix:** Corrected an error in `package.json`
- **Bugfix:** Added fix for pages that don't have revisions yet
- **Feature:** Added filesize to revisions fields

**2.1**

- **Bugfix:** Renamed revisions.php to kirby-revisions.php to match the folder name.
- Renamed `type` to `action`. 

**2.0**

- Completely rewritten
- Kirby uses pages as revisions

## Misc

**Requirements:** Kirby 2.3.2
**License:** MIT