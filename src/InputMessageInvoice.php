<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A message with an invoice; can be used only by bots and only in private chats.
 */
class InputMessageInvoice extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageInvoice';

    /**
     * Invoice.
     */
    protected Invoice $invoice;

    /**
     * Product title; 1-32 characters.
     */
    protected string $title;

    /**
     * Product description; 0-255 characters.
     */
    protected string $description;

    /**
     * Product photo URL; optional.
     */
    protected string $photoUrl;

    /**
     * Product photo size.
     */
    protected int $photoSize;

    /**
     * Product photo width.
     */
    protected int $photoWidth;

    /**
     * Product photo height.
     */
    protected int $photoHeight;

    /**
     * The invoice payload.
     */
    protected string $payload;

    /**
     * Payment provider token.
     */
    protected string $providerToken;

    /**
     * JSON-encoded data about the invoice, which will be shared with the payment provider.
     */
    protected string $providerData;

    /**
     * Unique invoice bot start_parameter for the generation of this invoice.
     */
    protected string $startParameter;

    public function __construct(
        Invoice $invoice,
        string $title,
        string $description,
        string $photoUrl,
        int $photoSize,
        int $photoWidth,
        int $photoHeight,
        string $payload,
        string $providerToken,
        string $providerData,
        string $startParameter
    ) {
        parent::__construct();

        $this->invoice        = $invoice;
        $this->title          = $title;
        $this->description    = $description;
        $this->photoUrl       = $photoUrl;
        $this->photoSize      = $photoSize;
        $this->photoWidth     = $photoWidth;
        $this->photoHeight    = $photoHeight;
        $this->payload        = $payload;
        $this->providerToken  = $providerToken;
        $this->providerData   = $providerData;
        $this->startParameter = $startParameter;
    }

    public static function fromArray(array $array): InputMessageInvoice
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invoice']),
            $array['title'],
            $array['description'],
            $array['photo_url'],
            $array['photo_size'],
            $array['photo_width'],
            $array['photo_height'],
            $array['payload'],
            $array['provider_token'],
            $array['provider_data'],
            $array['start_parameter'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'invoice'         => $this->invoice->typeSerialize(),
            'title'           => $this->title,
            'description'     => $this->description,
            'photo_url'       => $this->photoUrl,
            'photo_size'      => $this->photoSize,
            'photo_width'     => $this->photoWidth,
            'photo_height'    => $this->photoHeight,
            'payload'         => $this->payload,
            'provider_token'  => $this->providerToken,
            'provider_data'   => $this->providerData,
            'start_parameter' => $this->startParameter,
        ];
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhotoUrl(): string
    {
        return $this->photoUrl;
    }

    public function getPhotoSize(): int
    {
        return $this->photoSize;
    }

    public function getPhotoWidth(): int
    {
        return $this->photoWidth;
    }

    public function getPhotoHeight(): int
    {
        return $this->photoHeight;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function getProviderToken(): string
    {
        return $this->providerToken;
    }

    public function getProviderData(): string
    {
        return $this->providerData;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }
}
