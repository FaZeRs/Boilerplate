<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#frontend-navbar-collapse">
                <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            {{ link_to_route('frontend.index', app_name(), [], ['class' => 'navbar-brand']) }}
        </div><!--navbar-header-->

        <div class="collapse navbar-collapse" id="frontend-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('language.switch'))
                    @if (config('locale.status') && count($languages) > 1)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ trans('language::menus.language-picker.language') }}
                                <span class="caret"></span>
                            </a>

                            @include('language::includes.partials.lang')
                        </li>
                    @endif
                @endif
                @if (Route::has('frontend.auth.login'))
                    @include('user::frontend.includes.nav')
                @endif
            </ul>
        </div><!--navbar-collapse-->
    </div><!--container-->
</nav>