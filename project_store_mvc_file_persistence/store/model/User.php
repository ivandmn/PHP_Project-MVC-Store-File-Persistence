<?php

/**
 * ADT for user.
 *
 * @author ivandmn
 */
class User {

    private ?int $id; //PK id
    private ?string $username; //UNIQUE username
    private ?string $password; //Password
    private ?string $role; //Role
    private ?string $name; //Name
    private ?string $surname; //Surname

    public function __construct(int $id = null, string $username = null, string $password = null, string $role = null, string $name = null, string $surname = null) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getUsername(): ?string {
        return $this->username;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function getRole(): ?string {
        return $this->role;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getSurname(): ?string {
        return $this->surname;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setSurname(string $surname): void {
        $this->surname = $surname;
    }

    public function __toString(): string {
        $result = "User{";
        $result .= sprintf("[id=%s]", $this->id);
        $result .= sprintf("[username=%s]", $this->username);
        $result .= sprintf("[password=%s]", $this->password);
        $result .= sprintf("[role=%s]", $this->role);
        $result .= sprintf("[name=%s]", $this->name);
        $result .= sprintf("[surname=%s]", $this->surname);
        $result .= "}";
        return $result;
    }

}