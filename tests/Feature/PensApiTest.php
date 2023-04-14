<?php

namespace Tests\Feature;

use App\Models\Pen;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PensApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_all_pens()
    {
        $pens = Pen::factory(4)->create();

        $response = $this->getJson(route('pens.index'));

        foreach ($pens as $pen) {
            $response->assertJsonFragment([
                'title' => $pen->title
            ]);
        }
    }

    public function test_can_get_one_pen()
    {
        $pen = Pen::factory()->create();

        $response = $this->getJson(route('pens.show', ['pen' => $pen]));

        $response->assertJsonFragment([
            'title' => $pen->title
        ]);
    }

    public function test_can_store_pen()
    {
        $title1 = ['title' => 'My new Pen'];
        $title2 = ['title' => 'My'];

        $this->postJson(route('pens.store', $title1))
            ->assertJsonFragment($title1);

        $this->postJson(route('pens.store', $title2))
            ->assertJsonValidationErrorFor('title');

        $this->assertDatabaseHas('pens', $title1);
    }

    public function test_can_update_pen()
    {
        $pen = Pen::factory()->create();
        $title1 = ['title' => 'My new Pen'];
        $title2 = ['title' => 'My'];

        $this->patchJson(route('pens.update', $pen), $title1)
            ->assertJsonFragment($title1);

        $this->patchJson(route('pens.update', $pen), $title2)
            ->assertJsonValidationErrorFor('title');

        $this->assertDatabaseHas('pens', $title1);
    }

    public function test_can_delete_pen()
    {
        $pen = Pen::factory()->create();
        $title = ['title' => $pen->title];

        $this->assertDatabaseHas('pens', $title);

        $this->deleteJson(route('pens.destroy', $pen))
            ->assertNoContent();

        $this->assertDatabaseMissing('pens', $title);
        $this->assertDatabaseCount('pens', 0);
    }
}
