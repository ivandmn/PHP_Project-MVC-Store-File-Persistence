<?php
/**
 * ADT of Product
 *
 * @author ivandmn
 */
class Product {
    private ?int $id; //PK id
    private ?string $description; //Description
    private ?float $price; //Price
    private ?int $stock; //Stock

    public function __construct(int $id = null , string $description = null, float $price = null, int $stock = null) {
        $this->id = $id;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function getPrice(): ?float {
        return $this->price;
    }

    public function getStock(): ?int {
        return $this->stock;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function setStock(int $stock): void {
        $this->stock = $stock;
    }

    public function __toString(): string {
        $result = "User{";
        $result .= sprintf("[id=%s]", $this->id);
        $result .= sprintf("[description=%s]", $this->description);
        $result .= sprintf("[price=%s]", $this->price);
        $result .= sprintf("[stock=%s]", $this->stock);
        $result .= "}";
        return $result;
    }
}
