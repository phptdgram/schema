<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Portion of the price of a product (e.g., "delivery cost", "tax amount").
 */
class LabeledPricePart extends TdObject
{
    public const TYPE_NAME = 'labeledPricePart';

    /**
     * Label for this portion of the product price.
     */
    protected string $label;

    /**
     * Currency amount in minimal quantity of the currency.
     */
    protected int $amount;

    public function __construct(string $label, int $amount)
    {
        $this->label  = $label;
        $this->amount = $amount;
    }

    public static function fromArray(array $array): LabeledPricePart
    {
        return new static(
            $array['label'],
            $array['amount'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'label'  => $this->label,
            'amount' => $this->amount,
        ];
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}
