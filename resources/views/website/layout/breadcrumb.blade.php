<div class="iq-breadcrumb bg-primary-subtle">
    <div class="container">
        <nav aria-label="breadcrumb" class="text-center">
            <h2 class="title">{{ $title }}</h2>
            <ol class="breadcrumb justify-content-center mt-2 mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('website.index') }}">{{ __('navbar.home') }}</a>
                </li>
                <li class="breadcrumb-item active">
                    {{ $title_desc }}
                </li>
            </ol>
        </nav>
    </div>
</div>
