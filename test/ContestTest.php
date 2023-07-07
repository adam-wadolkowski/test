<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Contest;

class ContestTest extends TestCase
{
    private Contest $contest;
    private array $contests;

    public function setUp(): void
    {
        $this->contest = new Contest();

        $this->contests = ([
            'maxPointUserInJanuary' => ['user_1', new \DateTime('2023-01'), 11],
            'twoUsersHaveSameMaxPointsInJanuary' => [
                [
                    'user_1',
                    new \DateTime('2023-01'),
                    11
                ],
                [
                    'user_2',
                    new \DateTime('2023-01'),
                    11
                ],
            ],
            'userMaxPointsInFebruary' => [
                'user_1',
                new \DateTime('2023-02'),
                15
            ],
        ]);
    }

    public function testGetUserMaxPointByUserIdAndMonth(): void
    {
        $contests = $this->contest->getUserMaxPointByUserIdAndMonth(new \DateTime('2023-01'), 'user_1');
        $this->assertEquals($this->contests['maxPointUserInJanuary'], $contests);
    }

    public function testGetTwoUsersHaveSameMaxPointsByMonth(): void
    {
        $contests = $this->contest->getUsersMaxPointsByMonth(new \DateTime('2023-01'));
        $this->assertEquals($this->contests['twoUsersHaveSameMaxPointsInJanuary'], $contests);
    }

    public function testGetUsersMaxPointsInFebruary(): void
    {
        $contests = $this->contest->getUsersMaxPointsByMonth(new \DateTime('2023-01'));
        $this->assertEquals($this->contests['twoUsersHaveSameMaxPointsInJanuary'], $contests);
    }
}
