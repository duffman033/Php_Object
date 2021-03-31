<?php
declare(strict_types=1);

namespace App\Models;


class VideoGame
{
    private string $title;
    private string $type;
    private string $developer;
    private string $description;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return VideoGame
     */
    public function setTitle(string $title): VideoGame
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return VideoGame
     */
    public function setType(string $type): VideoGame
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeveloper(): string
    {
        return $this->developer;
    }

    /**
     * @param string $developer
     * @return VideoGame
     */
    public function setDeveloper(string $developer): VideoGame
    {
        $this->developer = $developer;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return VideoGame
     */
    public function setDescription(string $description): VideoGame
    {
        $this->description = $description;
        return $this;
    }

    public function hydrateObject(array $data){
        $this->title=$data['title'];
        $this->type=$data['type'];
        $this->developer=$data['developer'];
        $this->description=$data['description'];
    }

}