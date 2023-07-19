<?php

namespace OnlineshopOop\Entities;

class Cart extends A_Entities
{
   public int $id;
   public int $userId;
   public int $productId;
   public int $qnt;
   public bool $isPayed;

    public function findById(int $id): I_Entities
    {
        // TODO: Implement findById() method.
    }

    public function findAllById(int $id): array
    {
        // TODO: Implement findAllById() method.
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId(int $productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return int
     */
    public function getQnt(): int
    {
        return $this->qnt;
    }

    /**
     * @param int $qnt
     */
    public function setQnt(int $qnt)
    {
        $this->qnt = $qnt;
    }

    /**
     * @return bool
     */
    public function isPayed(): bool
    {
        return $this->isPayed;
    }

    /**
     * @param bool $isPayed
     */
    public function setIsPayed(bool $isPayed)
    {
        $this->isPayed = $isPayed;
    }
}