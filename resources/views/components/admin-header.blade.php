@foreach ($colours as $c )
@if($c->Status == 'true')
<div class="pb-10 " style="background: {{ $c->Heading_background }}">
    <div class="ml-7 pt-3">
        <button id="showslide" class="max-[1160px]:hidden">
            <i class="fa-solid fa-bars text-2xl"></i>
        </button>

        <button id="responsive-showslide" class="relative min-[1160px]:hidden">
            <i class="responsive-icon fa-solid fa-bars text-2xl"></i>
        </button>
    </div>
    <div class="flex pt-8 items-center justify-between max-[1340px]:flex-col max-[1340px]:items-center">
        {{ $slot }}
    </div>
</div>
@endif
@endforeach