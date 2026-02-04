<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class WeeklyLogTest extends TestCase
{
    public function test_can_view_dashboard()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_can_store_daily_log()
    {
        // Mock the file path to use a temporary test file if possible, 
        // but for now we test the controller logic directly.
        // Note: This will write to the real Daily_Reports.xlsx if not mocked.
        // We will mock the base_path or just accept it for this smoke test.
        
        $response = $this->postJson(route('weekly-log.daily.store'), [
            'week' => 1,
            'date' => '2026-02-04',
            'activity' => 'Test Activity via PHPUnit'
        ]);

        $response->assertStatus(200)
                 ->assertJson(['success' => true]);
    }
}
