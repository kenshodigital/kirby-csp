<?php

declare(strict_types=1);

use Kirby\Cms\App;

App::plugin(name: 'kensho/csp', extends: [
	'hooks' => [
		'page.render:before' => function (string $contentType, array $data): array {
			if ($contentType === 'html') {
				/**
				 * @var App $this
				 */
				$this->response()->header(
					key: 'Content-Security-Policy',
					value: "script-src 'nonce-{$this->nonce()}' 'strict-dynamic'; object-src 'none'; base-uri 'none';",
				);
			}
			return $data;
		},
	],
]);
