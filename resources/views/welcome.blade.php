<x-header-component></x-header-component>
<x-nav-bar-component></x-nav-bar-component>
<main>
    <pre class="text-black">
        {{Auth::check() ? 'true' : 'false';}}
    </pre>

    <x-category-components></x-category-components>
</main>
<x-footer></x-footer>