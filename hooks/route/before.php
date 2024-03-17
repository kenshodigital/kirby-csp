<?php declare(strict_types=1);

return function (): void
{
    $this->response()->header(
        'Content-Security-Policy',
        "script-src 'nonce-{$this->nonce()}' 'strict-dynamic' 'unsafe-inline' https:; object-src 'none'; base-uri 'none';"
    );
};
