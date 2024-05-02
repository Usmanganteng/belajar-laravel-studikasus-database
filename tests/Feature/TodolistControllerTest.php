<?php

namespace Tests\Feature;

use Database\Seeders\TodoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class TodolistControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        DB::delete("delete from todos");
    }

    public function testTodolist()
    {
      $this->seed(TodoSeeder::class);

      $this->withSession([
        "user" => "aldizar"
      ])->get('todolist')
      ->assertSeeText("1")
      ->assertSeeText("Aldizar")
      ->assertSeeText("2")
      ->assertSeeText("Lulu");
    }

    public function testAddTodoFailed()
    {
        $this->withSession([
            "user" => "aldizar"
        ])->post("/todolist", [])
            ->assertSeeText("Todo is required");
    }

    public function testAddTodoSuccess()
    {
        $this->withSession([
            "user" => "aldizar"
        ])->post("/todolist", [
            "todo" => "ilham"
        ])->assertRedirect("/todolist");
    }

    public function testRemoveTodolist()
    {
        $this->withSession([
            "user" => "aldizar",
            "todolist" => [
                [
                    "id" => "1",
                    "todo" => "ilham"
                ],
                [
                    "id" => "2",
                    "todo" => "Lulu"
                ]
            ]
        ])->post("/todolist/1/delete")
            ->assertRedirect("/todolist");
    }


}