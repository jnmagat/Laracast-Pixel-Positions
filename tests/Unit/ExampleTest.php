<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Employer;
use App\Models\User;
use App\Models\Job;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    // public function test_that_true_is_true(): void
    // {
    //     $this->assertTrue(true);
    // }

    public function test_employer_belongs_to_user()
    {
        $user = User::factory()->create();
        $employer = Employer::factory()->create(['user_id' => $user->id]);

        $this->assertTrue($employer->user->is($user));
    }

    public function test_job_belongs_to_employer()
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create(['employer_id' => $employer->id]);

        $this->assertTrue($job->employer->is($employer));
    }

    public function test_can_have_tags()
    {
        $job = Job::factory()->create();
        $job->tag('Frontend');

        $this->assertCount(1, $job->tags);
    }
}