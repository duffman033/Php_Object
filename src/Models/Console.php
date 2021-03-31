<?php
declare(strict_types=1);

namespace App\Models;


class Console
{
    private string $label;
    private string $constructor;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return Console
     */
    public function setLabel(string $label): Console
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getConstructor(): string
    {
        return $this->constructor;
    }

    /**
     * @param string $constructor
     * @return Console
     */
    public function setConstructor(string $constructor): Console
    {
        $this->constructor = $constructor;
        return $this;
    }

    public function hydrateConsole(array $data){
        $this->constructor=$data['constructor'];
        $this->label=$data['label'];
    }
}