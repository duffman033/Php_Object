<?php
declare(strict_types=1);

namespace App\Models;


class PlayersCard
{

    private string $nickname;
    private string $age;
    private array $consoles = [];
    private array $games = [];

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     * @return PlayersCard
     */
    public function setNickname(string $nickname): PlayersCard
    {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @param string $age
     * @return PlayersCard
     */
    public function setAge(string $age): PlayersCard
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return array
     */
    public function getConsoles(): array
    {
        return $this->consoles;
    }

    /**
     * @param array $consoles
     * @return PlayersCard
     */
    public function setConsoles(array $consoles): PlayersCard
    {
        $this->consoles = $consoles;
        return $this;
    }

    /**
     * @return array
     */
    public function getGames(): array
    {
        return $this->games;
    }

    /**
     * @param array $games
     * @return PlayersCard
     */
    public function setGames(array $games): PlayersCard
    {
        $this->games = $games;
        return $this;
    }



    public function indentifyPlayer($nickname, $age){
        $this->age = $age;
        $this->nickname = $nickname;
    }

//    public function fillGames($gameTitles, array $gamesList){
//        foreach ($gameTitles as $gameTitle){
//            foreach ($gamesList as $index => $value){
//                $response = array_search($gameTitle, $value);
//                if($response){
//                    $game = new VideoGame();
//                    $game->hydrateObject($gamesList[$index]);
//                    $this->addGame($game);
//                }
//            }
//        }
//    }
    public function addGame(VideoGame $game): PlayersCard
    {
        array_push($this->games, $game);
        return $this;
    }

    public function fillGames($gameTitles, $gamesList){
        foreach ($gamesList as $index){
            if($gameTitles === $index['id']){
                $game = new VideoGame();
                $game->hydrateObject($index);
                $this->addGame($game);
            }
        }
    }

    /**
     * @param Console $console
     * @return $this
     */
    public function addConsole(Console $console): PlayersCard
    {
        array_push($this->consoles, $console);
        return $this;
    }

    public function locateConsole($consoleModel, $consoleList){
        foreach ($consoleList as $i){
            if ($consoleModel == $i['id']){
                $consol = new Console();
                $consol->hydrateConsole($i);
                $this->addConsole($consol);
            }
        }
    }

//    public function locateConsole($consoleModel, array $consoleList){
//        foreach ($consoleModel as $console){
//            foreach ($consoleList as $i => $v){
//                $result = array_search($console,$v);
//                if ($result){
//                    $consol = new Console();
//                    $consol->hydrateConsole($consoleList[$i]);
//                    $this->addConsole($consol);
//                }
//            }
//        }
//    }


}