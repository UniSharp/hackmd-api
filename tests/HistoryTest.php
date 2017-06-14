<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class HistoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testICanListMyHistories()
    {
        $this->get('/history');
        $this->assertTrue(false);
    }

    public function testICanListSomeOneHistories()
    {
        $user = factory(User::class)->create();
        $this->get("/history/user/{$user->id}");
        $this->assertTrue(false);
    }

    public function testICanListEveryBodyHistories()
    {
        $this->get("/history/everybody");
        $this->assertTrue(false);
    }

    public function testICanAddHistory()
    {
        $this->post("/history");
        $this->assertTrue(false);
    }

    public function testICanAddHistoryByNoteId()
    {
        $nodeId = 0;
        $this->post("/history/{$nodeId}");
        $this->assertTrue(false);
    }

    public function testICanDeleteAllMyHistories()
    {
        $this->delete("/history");
        $this->assertTrue(false);
    }

    public function testICanDeleteHistoryByNoteId()
    {
        $nodeId = 0;
        $this->delete("/history/{$nodeId}");
        $this->assertTrue(false);
    }
}
