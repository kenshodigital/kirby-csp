<?php declare(strict_types=1);

use Kirby\Cms\App;

App::plugin(name: 'kensho/csp', extends: [
	'hooks' => [
		'route:before' => function (): void {
			/**
			 * @var App $this
			 */
			$this->response()->header(
				key: 'Content-Security-Policy',
				value: "script-src 'nonce-{$this->nonce()}' 'strict-dynamic' 'unsafe-inline' https:; object-src 'none'; base-uri 'none';",
			);
		},
	],
]);
