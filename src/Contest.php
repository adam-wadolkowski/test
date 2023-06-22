<?php

namespace App;

/*
 * Problem:
 * który z użytkowników otrzymal najwiecej punktow w okreslonym miesiacu
 * oraz ile sumarycznie zdobyl punktow w tym miesiacu, przykladowa odpowiedz dla stycznia 2023:
 *
 * ```php
 * [['user_1' => 11]]
 * ```
 * Dlaczego tablica tablic?
 * Więcej niż jeden użytkonik w danym miesiącu może zdobyć maksymalną ilość punktów
 *
 * Format danych $contest_data:
 * nazwa uzytkownika, data kiedy otrzymal punkty, ilosc otrzymanych punktow
 *
 */


class Contest
{
    private array $contests;

    public function __construct()
    {
        $this->contests = ([
            ['user_1', new \DateTime('2023-01-01'), 5],
            ['user_2', new \DateTime('2023-01-02'), 1],
            ['user_1', new \DateTime('2023-01-03'), 6],
            ['user_3', new \DateTime('2023-01-04'), 6],
            ['user_1', new \DateTime('2023-02-05'), 7],
            ['user_3', new \DateTime('2023-02-06'), 8],
            ['user_1', new \DateTime('2023-02-07'), 8]]);
    }

    public function usersByDate(\DateTime $month, string $userId): array
    {
        return [[]];
    }
}