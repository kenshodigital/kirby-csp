# CSP for Kirby

Adds a [strict policy CSP][1] header to [Kirby][2] projects.

## General

Uses Kirby’s [native nonce feature][3] (used for the panel) to add a strict [nonce-based][4] content security policy header to all Kirby responses.

## Installation

```shell
composer require kenshodigital/kirby-csp ^1.0
```

## Usage

The plugin is not configurable and just follows the latest [best practices][5].

However, scripts in your frontend are expected to include a nonce and [the Kirby docs][6] already provide a good example for this.

```html
<script nonce="<?= $kirby->nonce() ?>">…</script>
```

[1]: https://cheatsheetseries.owasp.org/cheatsheets/Content_Security_Policy_Cheat_Sheet.html#strict-policy
[2]: https://getkirby.com
[3]: https://getkirby.com/docs/reference/objects/cms/app/nonce
[4]: https://cheatsheetseries.owasp.org/cheatsheets/Content_Security_Policy_Cheat_Sheet.html#nonce-based-strict-policy
[5]: https://web.dev/articles/strict-csp
[6]: https://getkirby.com/docs/reference/objects/cms/app/nonce#example
