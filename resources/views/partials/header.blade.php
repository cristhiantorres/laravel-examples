<header role="banner" class="pf-c-page__header">
    <div class="pf-c-page__header-brand">
        <div class="pf-c-page__header-brand-toggle">
            @if (!request()->is('login') && !request()->is('register'))
                <button class="pf-c-button pf-m-plain" type="button" id="sidebar-nav-toggle" aria-label="Global navigation" aria-expanded="true" aria-controls="sidebar-nav">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </button>
            @endif
        </div>
        <a class="pf-c-page__header-brand-link" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
    <div class="pf-c-page__header-tools">
        @if (!request()->is('login') && !request()->is('register'))
            @include('partials.header-tools')
        @endif
    </div>
</header>
