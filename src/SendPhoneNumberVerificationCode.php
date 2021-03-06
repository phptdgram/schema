<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Sends a code to verify a phone number to be added to a user's Telegram Passport.
 */
class SendPhoneNumberVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'sendPhoneNumberVerificationCode';

    /**
     * The phone number of the user, in international format.
     */
    protected string $phoneNumber;

    /**
     * Settings for the authentication of the user's phone number.
     */
    protected PhoneNumberAuthenticationSettings $settings;

    public function __construct(string $phoneNumber, PhoneNumberAuthenticationSettings $settings)
    {
        $this->phoneNumber = $phoneNumber;
        $this->settings    = $settings;
    }

    public static function fromArray(array $array): SendPhoneNumberVerificationCode
    {
        return new static(
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'settings'     => $this->settings->typeSerialize(),
        ];
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getSettings(): PhoneNumberAuthenticationSettings
    {
        return $this->settings;
    }
}
