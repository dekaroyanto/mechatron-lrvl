<?php

namespace App\Concerns;

trait HasTranslations
{
    /**
     * Ambil nilai terjemahan dari kolom JSON (misal: `{"id": "...", "en": "..."}`)
     * atau kolom terpisah (`{field}_id` & `{field}_en`) sesuai bahasa aktif.
     */
    public function t(string $field, ?string $locale = null, mixed $default = ''): mixed
    {
        $locale = $locale ?: app()->getLocale();
        $fallback = config('app.fallback_locale', 'id');

        // 1. Cek jika menggunakan kolom terpisah (misal: title_id, title_en)
        $localizedColumn = "{$field}_{$locale}";

        if (array_key_exists($localizedColumn, $this->attributes ?? [])) {
            $value = $this->getAttribute($localizedColumn);
            if (! empty($value)) {
                return $value;
            }

            foreach (array_unique(['id', $fallback, 'en']) as $candidateLocale) {
                $candidateValue = $this->getAttribute("{$field}_{$candidateLocale}");
                if (! empty($candidateValue)) {
                    return $candidateValue;
                }
            }

            return $default;
        }

        // 2. Cek jika menggunakan kolom JSON / array (misal: {"id": "...", "en": "..."})
        $raw = $this->getAttribute($field);

        if (is_string($raw)) {
            $decoded = json_decode($raw, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $raw = $decoded;
            }
        }

        if (is_array($raw)) {
            if (! empty($raw[$locale])) {
                return $raw[$locale];
            }

            foreach (array_unique(['id', $fallback, 'en']) as $candidateLocale) {
                if (! empty($raw[$candidateLocale])) {
                    return $raw[$candidateLocale];
                }
            }

            foreach ($raw as $item) {
                if (! empty($item)) {
                    return $item;
                }
            }

            return $default;
        }

        return $raw ?? $default;
    }

    /**
     * Ambil nilai mentah untuk bahasa spesifik (berguna untuk mengisi nilai form input di Admin Dashboard).
     */
    public function getTranslationForLocale(string $field, string $locale): mixed
    {
        $localizedColumn = "{$field}_{$locale}";

        if (array_key_exists($localizedColumn, $this->attributes ?? [])) {
            return $this->getAttribute($localizedColumn);
        }

        $raw = $this->getAttribute($field);

        if (is_string($raw)) {
            $decoded = json_decode($raw, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $raw = $decoded;
            }
        }

        if (is_array($raw)) {
            return $raw[$locale] ?? null;
        }

        return null;
    }
}
