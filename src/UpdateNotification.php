<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A notification was changed.
 */
class UpdateNotification extends Update
{
    public const TYPE_NAME = 'updateNotification';

    /**
     * Unique notification group identifier.
     */
    protected int $notificationGroupId;

    /**
     * Changed notification.
     */
    protected Notification $notification;

    public function __construct(int $notificationGroupId, Notification $notification)
    {
        parent::__construct();

        $this->notificationGroupId = $notificationGroupId;
        $this->notification        = $notification;
    }

    public static function fromArray(array $array): UpdateNotification
    {
        return new static(
            $array['notification_group_id'],
            TdSchemaRegistry::fromArray($array['notification']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification_group_id' => $this->notificationGroupId,
            'notification'          => $this->notification->typeSerialize(),
        ];
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function getNotification(): Notification
    {
        return $this->notification;
    }
}
