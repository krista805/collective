@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

<div class="row hero">
    <div class="container">
        <div class="row">
            <div class="theFakePseudo"><img class="whateverIcon" src="{{ get_field('bg_image')['sizes']['full'];}}" alt="It's an icon"></div>
            <div class="col">
                <h1>{{ get_field('main_title') }}</h1>

                {{-- Text or Text Area --}}
                {!! get_field('sub_title') !!}

            </div>

        </div>
        
    </div>
    
</div>

<div class="row showcase">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>{{ get_field('main_title') }}</h4>

                {{-- Text or Text Area --}}
                {{ get_field('text') }}

                {{-- Text or Text Area Unescaped --}}
                {!! get_field('textarea') !!}
            </div>

        </div>
        
    </div>
    
</div>

<div class="row about">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ get_field('main_title') }}</h1>

                {{-- Text or Text Area --}}
                {{ get_field('text') }}

                {{-- Text or Text Area Unescaped --}}
                {!! get_field('textarea') !!}
            </div>

        </div>
        
    </div>
    
</div>
<div class="row posts">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>{{ get_field('main_title') }}</h4>

                {{-- Text or Text Area --}}
                {{ get_field('text') }}

                {{-- Text or Text Area Unescaped --}}
                {!! get_field('textarea') !!}
            </div>

        </div>
        
    </div>
    
</div>
<div class="row banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>{{ get_field('main_title') }}</h4>

                {{-- Text or Text Area --}}
                {{ get_field('text') }}

                {{-- Text or Text Area Unescaped --}}
                {!! get_field('textarea') !!}
            </div>

        </div>
        
    </div>
    
</div>


