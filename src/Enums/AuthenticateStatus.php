<?php declare(strict_types=1);

namespace Stefna\RemoteAuthContract\Enums;

use Sunkan\Enum\EnumClass;

/**
 * @method static AuthenticateStatus SUCCESS()
 * @method static AuthenticateStatus ERROR()
 * @method static AuthenticateStatus TIMEOUT()
 * @method static AuthenticateStatus ACCOUNT_NOT_FOUND()
 * @method static AuthenticateStatus PENDING()
 * @method static AuthenticateStatus CANCELLED()
 * @method static AuthenticateStatus UNKNOWN()
 */
final class AuthenticateStatus extends EnumClass
{
	public const SUCCESS = 'success';
	public const ERROR = 'error';
	public const TIMEOUT = 'timeout';
	public const ACCOUNT_NOT_FOUND = 'account-not-found';
	public const PENDING = 'pending';
	public const CANCELLED = 'cancelled';
	public const UNKNOWN = 'unknown';
}
