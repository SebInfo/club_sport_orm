<?php

namespace TDORM;

class User
{
    private int $id;
    private string $name;
    private string $email;
    private int $roleId;

    public function hydrate(array $data): void
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getRoleid(): int
    {
        return $this->roleId;
    }
    public function setRoleid(int $role_id): void
    {
        $this->roleId = $role_id;
    }
}
