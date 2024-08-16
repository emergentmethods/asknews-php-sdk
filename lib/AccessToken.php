<?php

namespace AskNews;

/**
 * AccessToken Class
 */
class AccessToken
{
    public string $tokenType;
    public string $tokenValue;
    public int $expires;
    public array $scopes;

    public function __construct(string $tokenType, string $tokenValue, int $expires, array $scopes)
    {
        $this->tokenType = $tokenType;
        $this->tokenValue = $tokenValue;
        $this->expires = $expires;
        $this->scopes = $scopes;
    }
}
