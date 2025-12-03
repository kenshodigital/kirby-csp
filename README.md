# Kirby CSP

Adds a [strict CSP][gUGXLs] header to [Kirby][D6X5Da] projects.

[gUGXLs]: https://cheatsheetseries.owasp.org/cheatsheets/Content_Security_Policy_Cheat_Sheet.html#strict-policy
[D6X5Da]: https://getkirby.com

## General

Uses Kirby’s native nonce feature (used for the panel) to add a strict [nonce-based][nfJGWt] content security policy header to all Kirby responses.

[nfJGWt]: https://cheatsheetseries.owasp.org/cheatsheets/Content_Security_Policy_Cheat_Sheet.html#nonce-based-strict-policy

### Further reading

- [`$kirby->nonce()`][WbrxWU]

[WbrxWU]: https://getkirby.com/docs/reference/objects/cms/app/nonce

## Usage

### Installation

```shell
composer require kenshodigital/kirby-csp ^1.1
```

### Setup

The plugin is not configurable and just follows the latest [best practices][A9zdUN].

```
script-src 'nonce-[…]' 'strict-dynamic' 'unsafe-inline' https:; object-src 'none'; base-uri 'none';
```

[A9zdUN]: https://web.dev/articles/strict-csp

### Development

However, scripts in your frontend are expected to include a nonce, like this.

```html
<script nonce="<?= $kirby->nonce() ?>">
  …
</script>
```
