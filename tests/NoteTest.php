<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class NoteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testICanGetANewNote()
    {
        $this->get('/new');
        $this->assertTrue(false);
    }

    public function testICanGetPublishedNote()
    {
        $shortId = 0;
        $this->get("/s/{$shortId}");
        $this->assertTrue(false);
    }

    public function testICanGetActionsOnNote()
    {
        $shortId = 0;
        $action = 0;
        $this->get("/s/{$shortId}/{$action}");
        $this->assertTrue(false);
    }

    public function testICanGetPublishedSlide()
    {
        $shortId = 0;
        $this->get("/p/{$shortId}/{$action}");
        $this->assertTrue(false);
    }
    
    public function testICanGetActionsOnPublishedNote()
    {
        $shortId = 0;
        $action = 0;
        $this->get("/p/{$shortId}/{$action}");
        $this->assertTrue(false);
    }

    public function testICanGetNoteById()
    {
        $noteId = 0;
        $this->get("/p/{$noteId}");
        $this->assertTrue(false);
    }

    public function testICanGetActions()
    {
        $noteId = 0;
        $action = 0;
        $this->get("/{$noteId}/{$action}");
        $this->assertTrue(false);
    }

    public function testICanGetActionByActionId()
    {
        $noteId = 0;
        $action = 0;
        $actionId = 0;
        $this->get("/{$noteId}/{$action}/{$actionId}");
        $this->assertTrue(false);
    }
}
