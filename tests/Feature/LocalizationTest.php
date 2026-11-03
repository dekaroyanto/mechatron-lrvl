<?php

namespace Tests\Feature;

use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Tests\TestCase;

class LocalizationTest extends TestCase
{
    public function test_default_locale_is_indonesian(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $this->assertSame('id', app()->getLocale());
        $response->assertSee('Tentang Kami');
        $response->assertSee('Hubungi Kami');
    }

    public function test_user_can_switch_locale_to_english_and_back_to_indonesian(): void
    {
        $switchResponse = $this->from('/')->get(route('locale.switch', 'en'));

        $switchResponse->assertRedirect('/');
        $switchResponse->assertSessionHas('locale', 'en');

        $homeEn = $this->withSession(['locale' => 'en'])->get('/');
        $homeEn->assertStatus(200);
        $this->assertSame('en', app()->getLocale());
        $homeEn->assertSee('About Us');
        $homeEn->assertSee('Contact Us');

        $switchBackResponse = $this->withSession(['locale' => 'en'])
            ->from('/about')
            ->get(route('locale.switch', 'id'));

        $switchBackResponse->assertRedirect('/about');
        $switchBackResponse->assertSessionHas('locale', 'id');
    }

    public function test_all_main_pages_render_translated_content_in_english(): void
    {
        $session = ['locale' => 'en'];

        $this->withSession($session)->get('/products')
            ->assertStatus(200)
            ->assertSee('Agricultural Drones')
            ->assertSee('Surveillance Drones');

        $this->withSession($session)->get('/products/agri-h30')
            ->assertStatus(200)
            ->assertSee('Technical Specifications');

        $this->withSession($session)->get('/services')
            ->assertStatus(200)
            ->assertSee('Drone Pilot Training');

        $this->withSession($session)->get('/services/pelatihanpilot')
            ->assertStatus(200)
            ->assertSee('Drone Pilot Training');

        $this->withSession($session)->get('/blog')
            ->assertStatus(200)
            ->assertSee('Mechatron');

        $this->withSession($session)->get('/about')
            ->assertStatus(200)
            ->assertSee('Vision & Mission');

        $this->withSession($session)->get('/contact')
            ->assertStatus(200)
            ->assertSee('Official Email');
    }

    public function test_query_parameter_lang_switches_locale(): void
    {
        $response = $this->get('/about?lang=en');

        $response->assertStatus(200);
        $this->assertSame('en', app()->getLocale());
        $response->assertSessionHas('locale', 'en');
        $response->assertSee('Vision & Mission');
    }

    public function test_has_translations_trait_resolves_json_and_suffixed_columns_with_fallback(): void
    {
        $model = new class extends Model
        {
            use HasTranslations;

            protected $guarded = [];
        };

        $model->setRawAttributes([
            'title' => json_encode([
                'id' => 'Judul Indonesia',
                'en' => 'English Title',
            ]),
            'summary' => json_encode([
                'id' => 'Ringkasan Indonesia Saja',
                'en' => '',
            ]),
            'label_id' => 'Label ID',
            'label_en' => 'Label EN',
        ]);

        app()->setLocale('id');
        $this->assertSame('Judul Indonesia', $model->t('title'));
        $this->assertSame('Label ID', $model->t('label'));

        app()->setLocale('en');
        $this->assertSame('English Title', $model->t('title'));
        $this->assertSame('Ringkasan Indonesia Saja', $model->t('summary'));
        $this->assertSame('Label EN', $model->t('label'));
        $this->assertSame('Judul Indonesia', $model->getTranslationForLocale('title', 'id'));
        $this->assertSame('English Title', $model->getTranslationForLocale('title', 'en'));
    }
}
