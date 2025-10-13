<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Settings extends Page
{
    protected string $view = 'filament.pages.settings';
    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-cog';
}
