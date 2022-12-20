<x-app-layout>
  <div class="max-w-4xl px-4 mx-auto sm:px-6  lg:px-8 py-12">
    <h1 class="text-2xl text-center font-semibold mt-5">
      {{ $page->title }}
    </h1>
    <div class="mt-5">
      {!! $page->body !!}
    </div>

    @if ($page->image)
      <figure class="mt-6">
        <img src="{{ Voyager::image($page->image) }}" alt="" class="aspect-[4/3] object-cover">
      </figure>
    @endif
  </div>
</x-app-layout>