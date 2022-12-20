<x-app-layout :title="$post->seo_title ?? $post->title">

  @push('meta')
      <meta name="keywords" content="{{ $post->meta_keywords }}">
      <meta name="description" content="{{ $post->meta_description }}">
  @endpush

  <div class="max-w-4xl px-4 mx-auto sm:px-6  lg:px-8 py-12">
    <h1 class="text-2xl font-semibold mb-4">
      {{ $post->title }}
    </h1>
    <p>
      {{$post->excerpt}}
    </p>
    <figure>
      <img src="{{ Voyager::image($post->image) }}" alt="" class="aspect-[3/1] object-cover">
    </figure>

    <div class="mt-10">
      {!! $post->body !!}
    </div>

  </div>
</x-app-layout>