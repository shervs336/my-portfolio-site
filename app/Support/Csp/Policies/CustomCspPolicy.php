<?php

namespace App\Support\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;

class CustomCspPolicy extends Basic
{
    public function configure()
    {
        // Inherit Spatie's default CSP directives.
        parent::configure();

        // Scripts
        $this->addDirective(Directive::SCRIPT, [
            Keyword::SELF,
            Keyword::STRICT_DYNAMIC,
            Keyword::UNSAFE_EVAL,
            'https:',
            'https://www.googletagmanager.com',
            'https://cdnjs.buymeacoffee.com',
        ]);

        // Stylesheets
        $this->addDirective(Directive::STYLE, [
            Keyword::SELF,
            'https://fonts.googleapis.com',
            'https://unpkg.com',
        ]);

        // External stylesheets and <style> elements.
        $this->addDirective('style-src-elem', [
            Keyword::SELF,
            Keyword::UNSAFE_INLINE,
            'https://fonts.googleapis.com',
            'https://unpkg.com',
            "'sha256-AcmLFkgL9OfyMDw/bEywPdEgPprfzKlNPCLpd+5VdvQ='",
        ]);

        // Inline style="" attributes.
        // Allows inline style attributes, including those created by
        // third-party widgets such as Buy Me a Coffee.
        $this->addDirective('style-src-attr', [
            Keyword::UNSAFE_INLINE,
        ]);

        // Fonts
        $this->addDirective(Directive::FONT, [
            Keyword::SELF,
            'https://gstatic.com',
            'https://fonts.gstatic.com',
            'https://cdnjs.buymeacoffee.com',
        ]);

        // Network requests and analytics
        $this->addDirective(Directive::CONNECT, [
            Keyword::SELF,
            'https://fonts.googleapis.com',
            'https://gstatic.com',
            'https://google-analytics.com',
            'https://*.google-analytics.com',
        ]);

        // Images
        $this->addDirective(Directive::IMG, [
            Keyword::SELF,
            'data:',
            'https://sp.tinymce.com',
            'https://cdnjs.buymeacoffee.com',
            'https://cdn.buymeacoffee.com',
        ]);
    }
}
