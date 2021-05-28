<?php declare(strict_types=1);

namespace Stefna\RemoteAuthContract;

use Ramsey\Uuid\UuidInterface;
use Stefna\RemoteAuthContract\Entities\AuthenticateResponse;
use Stefna\RemoteAuthContract\Entities\LoginPayload;

interface AuthService
{
	/**
	 * @param array<string, mixed> $data
	 */
	public function createLoginPayload(array $data): LoginPayload;

	public function getAuthenticationStatus(UuidInterface $uuid): AuthenticateResponse;

	public function initAuthentication(LoginPayload $payload): AuthenticateResponse;
}
