<?php declare(strict_types=1);

namespace Stefna\RemoteAuthContract\Entities;

use Ramsey\Uuid\UuidInterface;
use Stefna\PersonContract\Values\Ssn;
use Stefna\RemoteAuthContract\Enums\AuthenticateStatus;

interface AuthenticateResponse
{
	public function getStatus(): AuthenticateStatus;

	public function getMessage(): ?string;

	public function getId(): UuidInterface;

	public function getSsn(): ?Ssn;
}
