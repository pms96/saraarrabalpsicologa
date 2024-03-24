<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Backups;
use App\Filament\Pages\HealthCheckResults;
use App\Filament\Pages\Settings\Settings;
use App\Models\User;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Brickx\MaintenanceSwitch\MaintenanceSwitchPlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Hasnayeen\Themes\Http\Middleware\SetTheme;
use Hasnayeen\Themes\ThemesPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Jeffgreco13\FilamentBreezy\BreezyCore;
use Outerweb\FilamentSettings\Filament\Plugins\FilamentSettingsPlugin;
use pxlrbt\FilamentEnvironmentIndicator\EnvironmentIndicatorPlugin;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
use ShuvroRoy\FilamentSpatieLaravelBackup\FilamentSpatieLaravelBackupPlugin;
use ShuvroRoy\FilamentSpatieLaravelHealth\FilamentSpatieLaravelHealthPlugin;
use Tapp\FilamentAuthenticationLog\FilamentAuthenticationLogPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->sidebarCollapsibleOnDesktop()
            ->breadcrumbs(false)
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->navigationGroups([
                'Consulta',
                'Booking',
                'Blog',
                'Custom Web',
                'Administración',
                'Herramientas',
            ])
            ->navigationItems([
                NavigationItem::make()
                    ->icon('heroicon-o-presentation-chart-line')
                    ->label(fn (): string => __('Páginas'))
                    ->group('Custom Web')
                    ->url(fn (): string => Dashboard::getUrl().'/pages')
                    ->sort(1),
                NavigationItem::make()
                    ->icon('heroicon-o-presentation-chart-line')
                    ->label(fn (): string => __('Opciones'))
                    ->group('Custom Web')
                    ->url(fn (): string => Dashboard::getUrl().'/option-builder')
                    ->sort(2),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                SetTheme::class,
            ])
            ->tenantMiddleware([
                SetTheme::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                FilamentFullCalendarPlugin::make()                
                ->selectable()
                ->editable()
                ->config([
                    'headerToolbar' => [
                        'left' => 'prev,next today',
                        'center' => 'title',
                        'right' => 'dayGridMonth,timeGridWeek,timeGridDay list',
                    ],
                    'initialView' => 'timeGridWeek',
                    'nowIndicator' => true,
                    'allDaySlot' => false,
                    'updatesize' => true,
                ]),
                FilamentShieldPlugin::make()
                    ->gridColumns([
                        'default' => 1,
                        'sm' => 1,
                        'lg' => 2
                    ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 1,
                        'sm' => 1,
                        'lg' => 2,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 1,
                ]), 
                ThemesPlugin::make(),
                MaintenanceSwitchPlugin::make(),
                BreezyCore::make()
                    ->myProfile(
                        shouldRegisterUserMenu: true,
                        shouldRegisterNavigation: false,
                        navigationGroup: 'Settings',
                        hasAvatars: false,
                        slug: 'my-profile'
                ),
                FilamentAuthenticationLogPlugin::make(),
                FilamentSpatieLaravelBackupPlugin::make()
                    ->usingPage(Backups::class)
                    ->usingQueue('webSaraArrabal'),
                EnvironmentIndicatorPlugin::make()
                    ->showBadge(true)
                    ->showBorder(true)
                    ->color(fn () => match (app()->environment()) {
                        'production' => Color::Blue,
                        default => Color::Pink,
                    }),
                FilamentSettingsPlugin::make()
                    ->pages([
                        Settings::class,
                    ]),
                FilamentSpatieLaravelHealthPlugin::make()
                    ->usingPage(HealthCheckResults::class),
            ]);
    }
}
