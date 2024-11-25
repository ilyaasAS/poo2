<?php

namespace App\Entity;

final class User
{
    private string $pseudo;

    /**
     * @return  self
     */
    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * @return string
     */
    public function getPseudo():string
    {
        return $this->pseudo;
    }
}
